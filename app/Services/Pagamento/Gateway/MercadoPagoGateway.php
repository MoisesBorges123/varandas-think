<?php

namespace App\Services\Pagamento\Gateway;

use App\Enums\Pagamento\StatusPagamento;
use Illuminate\Support\Facades\Http;
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

    public function __construct(
        private readonly ?string $accessToken,
        private readonly ?string $notificationUrl,
    ) {
    }

    public function cobrarViaMaquininha(float $valor, string $deviceId, string $referenciaExterna): ResultadoCobranca
    {
        $resposta = $this->http()
            ->post(self::BASE_URL.'/v1/orders', [
                'type' => 'point',
                'external_reference' => $referenciaExterna,
                'transactions' => [
                    'payments' => [
                        ['amount' => number_format($valor, 2, '.', '')],
                    ],
                ],
                'config' => [
                    'point' => [
                        'terminal_id' => $deviceId,
                        'print_on_terminal' => 'no_ticket',
                    ],
                ],
            ])
            ->throw();

        $dados = $resposta->json();

        return new ResultadoCobranca(
            mpId: (string) $dados['id'],
            status: $this->mapearStatusOrder($dados['status'] ?? null),
        );
    }

    public function gerarPixDinamico(float $valor, string $referenciaExterna): ResultadoCobranca
    {
        $resposta = $this->http()
            ->post(self::BASE_URL.'/v1/payments', array_filter([
                'transaction_amount' => $valor,
                'payment_method_id' => 'pix',
                'description' => 'Comanda Varandas Bar e Lanchonete',
                'external_reference' => $referenciaExterna,
                'notification_url' => $this->notificationUrl,
                // Pix exige payer.email mesmo sem cliente identificado —
                // não há placeholder oficial da MP pra isso, usamos um
                // e-mail fixo do estabelecimento (não afeta nada fiscal).
                'payer' => ['email' => 'comanda@varandas.local'],
            ]))
            ->throw();

        $dados = $resposta->json();
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
        $resposta = $this->http()->get(self::BASE_URL."/v1/payments/{$mpPaymentId}")->throw();

        return $this->mapearStatusPagamento($resposta->json('status'));
    }

    public function consultarStatusOrdemPoint(string $mpOrderId): string
    {
        $resposta = $this->http()->get(self::BASE_URL."/v1/orders/{$mpOrderId}")->throw();

        return $this->mapearStatusOrder($resposta->json('status'));
    }

    public function estornarPagamento(string $mpPaymentId): bool
    {
        $resposta = $this->http()
            ->withHeaders(['X-Idempotency-Key' => (string) Str::uuid()])
            ->post(self::BASE_URL."/v1/payments/{$mpPaymentId}/refunds");

        return $resposta->successful();
    }

    private function http()
    {
        return Http::withToken((string) $this->accessToken)->acceptJson();
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
