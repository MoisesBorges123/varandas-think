<?php

namespace App\Services\Pagamento\Gateway;

use App\Enums\Pagamento\StatusPagamento;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

/**
 * Implementação real via REST (Illuminate\Http, sem SDK de terceiros —
 * decisão deliberada: a API do Mercado Pago é REST/JSON simples, o SDK
 * oficial (mercadopago/sdk-php) já passou por uma reescrita completa
 * (v2→v3) e depender dele é acoplamento sem ganho real; ir direto via
 * Http também deixa os testes simples com Http::fake(), sem precisar de
 * credencial real).
 *
 * Point (maquininha) usa a Orders API (`POST /v1/orders`, type=point) —
 * NÃO a Point Integration API legada (`point/integration-api/.../payment-intents`),
 * que a própria Mercado Pago já sinaliza como em substituição (confirmado
 * em pesquisa de agosto/2026, doc de migração:
 * mercadopago.com.br/developers/pt/docs/mp-point/migrate-payment-intent-to-orders).
 * Pix usa a Payments API clássica (`POST /v1/payments`), mais simples e
 * suficiente pro caso de uso (não precisamos de múltiplos meios de
 * pagamento numa mesma order).
 */
class MercadoPagoGateway implements MercadoPagoGatewayInterface
{
    private const BASE_URL = 'https://api.mercadopago.com';

    private const TIMEOUT_SEGUNDOS = 15;

    /**
     * E-mail usado quando o cliente não informou um ao abrir a comanda.
     * Precisa de um TLD público de verdade — `.local` é reservado
     * (RFC 6762) e a validação da MP rejeita com "payer.email must be a
     * valid email" (confirmado em teste real, agosto/2026).
     */
    private const EMAIL_PAGADOR_PADRAO = 'comanda@varandasbar.com.br';

    public function __construct(
        private readonly ?string $accessToken,
        private readonly ?string $notificationUrl,
    ) {
    }

    public function cobrarViaMaquininha(float $valor, string $deviceId, string $referenciaExterna): ResultadoCobranca
    {
        $dados = $this->post('/v1/orders', $referenciaExterna, [
            'type' => 'point',
            'external_reference' => $referenciaExterna,
            'transactions' => [
                'payments' => [
                    ['amount' => number_format(round($valor, 2), 2, '.', '')],
                ],
            ],
            'config' => [
                'point' => [
                    'terminal_id' => $deviceId,
                    'print_on_terminal' => 'no_ticket',
                ],
            ],
        ], contexto: ['operacao' => 'cobrarViaMaquininha', 'device_id' => $deviceId]);

        return new ResultadoCobranca(
            mpId: (string) $dados['id'],
            status: $this->mapearStatusOrder($dados['status'] ?? null),
        );
    }

    public function gerarPixDinamico(float $valor, string $referenciaExterna, ?string $payerEmail = null): ResultadoCobranca
    {
        $dados = $this->post('/v1/payments', $referenciaExterna, array_filter([
            'transaction_amount' => round($valor, 2),
            'payment_method_id' => 'pix',
            'description' => 'Comanda Varandas Bar e Lanchonete',
            'external_reference' => $referenciaExterna,
            'notification_url' => $this->notificationUrl,
            // Pix exige payer.email mesmo sem cliente identificado — usa
            // o e-mail que o cliente informou ao abrir a comanda quando
            // existir (reduz sinal de fraude vs. um e-mail fixo sempre
            // igual); sem isso, cai no e-mail padrão do estabelecimento
            // (não há placeholder oficial da MP pra "anônimo").
            'payer' => ['email' => $payerEmail ?: self::EMAIL_PAGADOR_PADRAO],
        ]), contexto: ['operacao' => 'gerarPixDinamico']);

        $qr = $dados['point_of_interaction']['transaction_data'] ?? [];

        return new ResultadoCobranca(
            mpId: (string) $dados['id'],
            status: $this->mapearStatusPagamento($dados['status'] ?? null),
            qrCode: $qr['qr_code'] ?? null,
            qrCodeBase64: $qr['qr_code_base64'] ?? null,
        );
    }

    public function consultarStatusPagamento(string $mpPaymentId): string
    {
        $dados = $this->get("/v1/payments/{$mpPaymentId}", contexto: ['operacao' => 'consultarStatusPagamento']);

        return $this->mapearStatusPagamento($dados['status'] ?? null);
    }

    public function consultarStatusOrdemPoint(string $mpOrderId): string
    {
        $dados = $this->get("/v1/orders/{$mpOrderId}", contexto: ['operacao' => 'consultarStatusOrdemPoint']);

        return $this->mapearStatusOrder($dados['status'] ?? null);
    }

    public function estornarPagamento(string $mpPaymentId): bool
    {
        $resposta = $this->http()
            ->withHeaders(['X-Idempotency-Key' => 'estorno-'.$mpPaymentId])
            ->post(self::BASE_URL."/v1/payments/{$mpPaymentId}/refunds");

        if (! $resposta->successful()) {
            Log::error('Mercado Pago: falha ao estornar pagamento.', [
                'mp_payment_id' => $mpPaymentId,
                'status_http' => $resposta->status(),
                'resposta' => $resposta->json(),
            ]);
        }

        return $resposta->successful();
    }

    public function listarTerminais(): array
    {
        $dados = $this->get('/terminals/v1/list', contexto: ['operacao' => 'listarTerminais']);

        return collect($dados['data']['terminals'] ?? [])
            ->map(fn (array $terminal) => [
                'id' => (string) $terminal['id'],
                'pos_id' => $terminal['pos_id'] ?? null,
                'store_id' => $terminal['store_id'] ?? null,
                'operating_mode' => $terminal['operating_mode'] ?? null,
            ])
            ->all();
    }

    /**
     * @return array<string, mixed>
     */
    private function post(string $caminho, string $idempotencyKey, array $payload, array $contexto): array
    {
        try {
            $resposta = $this->http()
                ->withHeaders(['X-Idempotency-Key' => $idempotencyKey])
                ->post(self::BASE_URL.$caminho, $payload)
                ->throw();

            return $resposta->json();
        } catch (RequestException $e) {
            $this->logarFalha($e, $contexto);

            throw $e;
        }
    }

    /**
     * @return array<string, mixed>
     */
    private function get(string $caminho, array $contexto): array
    {
        try {
            return $this->http()->get(self::BASE_URL.$caminho)->throw()->json();
        } catch (RequestException $e) {
            $this->logarFalha($e, $contexto);

            throw $e;
        }
    }

    private function logarFalha(RequestException $e, array $contexto): void
    {
        Log::error('Mercado Pago: chamada à API falhou.', $contexto + [
            'status_http' => $e->response->status(),
            'resposta' => $e->response->json(),
        ]);
    }

    private function http(): PendingRequest
    {
        return Http::withToken((string) $this->accessToken)
            ->acceptJson()
            ->timeout(self::TIMEOUT_SEGUNDOS);
    }

    /**
     * Vocabulário de status da Payments API (pagamento único — Pix).
     */
    private function mapearStatusPagamento(?string $statusMp): string
    {
        return match ($statusMp) {
            'approved' => StatusPagamento::CONFIRMADO->value,
            'refunded', 'charged_back' => StatusPagamento::ESTORNADO->value,
            'rejected', 'cancelled' => StatusPagamento::REJEITADO->value,
            default => StatusPagamento::PENDENTE->value, // pending, in_process, authorized, in_mediation
        };
    }

    /**
     * Vocabulário de status da Orders API (Point) — diferente do de
     * pagamento: created -> at_terminal -> processed/canceled.
     */
    private function mapearStatusOrder(?string $statusMp): string
    {
        return match ($statusMp) {
            'processed' => StatusPagamento::CONFIRMADO->value,
            'canceled' => StatusPagamento::REJEITADO->value,
            default => StatusPagamento::PENDENTE->value, // created, at_terminal
        };
    }
}
