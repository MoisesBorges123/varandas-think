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
 * Point (maquininha) E Pix usam ambos a Orders API (`POST /v1/orders`,
 * `type=point` e `type=online` respectivamente) — NÃO a Point Integration
 * API legada nem a Payments API clássica (`POST /v1/payments`). Pix
 * chegou a ser implementado via Payments API, mas isso quebra em
 * ambiente de teste: a MP responde 401 "Unauthorized use of live
 * credentials" (code 7) pra qualquer chamada de `/v1/payments` com Pix
 * usando token de teste (confirmado contra o sandbox e contra a doc
 * oficial, agosto/2026 — checkout-api-orders/integration-test/pix diz
 * explicitamente que o teste de Pix precisa passar pela Orders API).
 * Corrigido migrando Pix pra Orders API também.
 */
class MercadoPagoGateway implements MercadoPagoGatewayInterface
{
    private const BASE_URL = 'https://api.mercadopago.com';

    private const TIMEOUT_SEGUNDOS = 15;

    /**
     * E-mail usado quando o cliente não informou um ao abrir a comanda,
     * se nenhum `MP_EMAIL_PAGADOR_PADRAO` estiver configurado. Precisa de
     * um TLD público de verdade — `.local` é reservado (RFC 6762) e a
     * validação da MP rejeita com "payer.email must be a valid email"
     * (confirmado em teste real, agosto/2026).
     *
     * Em ambiente de sandbox, a Orders API só aceita e-mail terminado em
     * `@testuser.com` (erro `invalid_email_for_sandbox` caso contrário —
     * confirmado em teste real, agosto/2026); em produção essa restrição
     * não existe. Por isso o valor é configurável via `MP_EMAIL_PAGADOR_PADRAO`
     * — em teste, aponte pro e-mail do usuário de teste comprador; em
     * produção, deixe em branco pra usar este fallback.
     */
    private const EMAIL_PAGADOR_PADRAO = 'comanda@varandasbar.com.br';

    public function __construct(
        private readonly ?string $accessToken,
        private readonly ?string $emailPagadorPadrao = null,
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
        $valorFormatado = number_format(round($valor, 2), 2, '.', '');

        $dados = $this->post('/v1/orders', $referenciaExterna, [
            'type' => 'online',
            'total_amount' => $valorFormatado,
            'external_reference' => $referenciaExterna,
            'processing_mode' => 'automatic',
            'transactions' => [
                'payments' => [
                    ['amount' => $valorFormatado, 'payment_method' => ['id' => 'pix', 'type' => 'bank_transfer']],
                ],
            ],
            // Pix exige payer.email mesmo sem cliente identificado — usa
            // o e-mail que o cliente informou ao abrir a comanda quando
            // existir (reduz sinal de fraude vs. um e-mail fixo sempre
            // igual); sem isso, cai no e-mail padrão do estabelecimento
            // (não há placeholder oficial da MP pra "anônimo").
            'payer' => ['email' => $payerEmail ?: ($this->emailPagadorPadrao ?: self::EMAIL_PAGADOR_PADRAO)],
        ], contexto: ['operacao' => 'gerarPixDinamico']);

        $metodo = $dados['transactions']['payments'][0]['payment_method'] ?? [];

        return new ResultadoCobranca(
            mpId: (string) $dados['id'],
            status: $this->mapearStatusOrder($dados['status'] ?? null),
            qrCode: $metodo['qr_code'] ?? null,
            qrCodeBase64: $metodo['qr_code_base64'] ?? null,
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
