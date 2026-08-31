<?php

namespace Tests\Feature\Pagamento;

use App\Enums\Pagamento\FormaPagamento;
use App\Enums\Pagamento\StatusPagamento;
use App\Models\Comanda;
use App\Models\Pagamento;
use App\Services\Pagamento\Gateway\MercadoPagoGatewayInterface;
use App\Services\Pagamento\PagamentoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MercadoPagoWebhookControllerTest extends TestCase
{
    use RefreshDatabase;

    private const SEGREDO = 'segredo-de-teste-webhook';

    private function assinar(string $dataId, string $requestId, string $ts): string
    {
        $manifest = 'id:'.mb_strtolower($dataId).";request-id:{$requestId};ts:{$ts};";

        return hash_hmac('sha256', $manifest, self::SEGREDO);
    }

    private function payload(string $dataId): array
    {
        return ['type' => 'payment', 'action' => 'payment.updated', 'data' => ['id' => $dataId]];
    }

    protected function setUp(): void
    {
        parent::setUp();

        config(['services.mercadopago.webhook_secret' => self::SEGREDO]);
    }

    public function test_assinatura_valida_processa_o_webhook(): void
    {
        $this->mock(MercadoPagoGatewayInterface::class, function ($mock) {
            $mock->shouldReceive('consultarStatusPagamento')
                ->once()
                ->with('mp-abc')
                ->andReturn(StatusPagamento::CONFIRMADO->value);
        });

        $comanda = Comanda::factory()->create();
        $pagamento = Pagamento::factory()->create([
            'comanda_id' => $comanda->id,
            'status' => StatusPagamento::PENDENTE->value,
            'forma_pagamento' => FormaPagamento::PIX_CELULAR->value,
            'mp_payment_id' => 'mp-abc',
        ]);

        $requestId = 'req-1';
        $ts = (string) time();
        $assinatura = $this->assinar('mp-abc', $requestId, $ts);

        $this->withHeaders([
            'x-signature' => "ts={$ts},v1={$assinatura}",
            'x-request-id' => $requestId,
        ])->postJson('/webhooks/mercadopago', $this->payload('mp-abc'))
            ->assertOk();

        $this->assertSame(StatusPagamento::CONFIRMADO, $pagamento->fresh()->status);
    }

    public function test_assinatura_invalida_e_recusada_e_nao_processa(): void
    {
        $this->mock(PagamentoService::class, function ($mock) {
            $mock->shouldNotReceive('processarWebhook');
        });

        $requestId = 'req-2';
        $ts = (string) time();

        $this->withHeaders([
            'x-signature' => "ts={$ts},v1=assinatura-forjada-errada",
            'x-request-id' => $requestId,
        ])->postJson('/webhooks/mercadopago', $this->payload('mp-abc'))
            ->assertStatus(401);
    }

    public function test_sem_header_de_assinatura_e_recusado(): void
    {
        $this->mock(PagamentoService::class, function ($mock) {
            $mock->shouldNotReceive('processarWebhook');
        });

        $this->postJson('/webhooks/mercadopago', $this->payload('mp-abc'))
            ->assertStatus(401);
    }

    public function test_sem_secret_configurado_falha_fechado(): void
    {
        config(['services.mercadopago.webhook_secret' => null]);

        $this->mock(PagamentoService::class, function ($mock) {
            $mock->shouldNotReceive('processarWebhook');
        });

        $requestId = 'req-3';
        $ts = (string) time();
        $assinatura = $this->assinar('mp-abc', $requestId, $ts);

        $this->withHeaders([
            'x-signature' => "ts={$ts},v1={$assinatura}",
            'x-request-id' => $requestId,
        ])->postJson('/webhooks/mercadopago', $this->payload('mp-abc'))
            ->assertStatus(401);
    }
}
