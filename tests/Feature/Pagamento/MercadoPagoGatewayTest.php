<?php

namespace Tests\Feature\Pagamento;

use App\Enums\Pagamento\StatusPagamento;
use App\Services\Pagamento\Gateway\MercadoPagoGateway;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class MercadoPagoGatewayTest extends TestCase
{
    private const TOKEN_FAKE_NAO_REAL = 'token-fake-para-teste-000';

    private function gateway(): MercadoPagoGateway
    {
        return new MercadoPagoGateway(self::TOKEN_FAKE_NAO_REAL);
    }

    /**
     * Regressão real: Pix criado via `/v1/payments` (Payments API
     * clássica) retorna 401 "Unauthorized use of live credentials" com
     * token de teste (confirmado contra o sandbox e contra a doc oficial
     * checkout-api-orders/integration-test/pix, agosto/2026). Pix precisa
     * passar pela Orders API (`/v1/orders`, `type=online`), igual ao
     * fluxo de maquininha.
     */
    public function test_gerar_pix_dinamico_envia_payload_de_orders_api_e_idempotency_key(): void
    {
        Http::fake([
            'api.mercadopago.com/v1/orders' => Http::response([
                'id' => 'order-pix-999',
                'status' => 'action_required',
                'transactions' => [
                    'payments' => [
                        [
                            'payment_method' => [
                                'id' => 'pix',
                                'type' => 'bank_transfer',
                                'qr_code' => 'copia-cola',
                                'qr_code_base64' => 'imagem-base64',
                            ],
                        ],
                    ],
                ],
            ], 201),
        ]);

        $resultado = $this->gateway()->gerarPixDinamico(19.90, 'ref-abc', 'cliente@exemplo.com');

        $this->assertSame('order-pix-999', $resultado->mpId);
        $this->assertSame(StatusPagamento::PENDENTE->value, $resultado->status);
        $this->assertSame('copia-cola', $resultado->qrCode);
        $this->assertSame('imagem-base64', $resultado->qrCodeBase64);

        Http::assertSent(function ($request) {
            return $request->url() === 'https://api.mercadopago.com/v1/orders'
                && $request['type'] === 'online'
                && $request['processing_mode'] === 'automatic'
                && $request['total_amount'] === '19.90'
                && $request['transactions']['payments'][0]['payment_method'] === ['id' => 'pix', 'type' => 'bank_transfer']
                && $request['payer']['email'] === 'cliente@exemplo.com'
                && $request['external_reference'] === 'ref-abc'
                && $request->hasHeader('X-Idempotency-Key', 'ref-abc')
                && $request->hasHeader('Authorization', 'Bearer '.self::TOKEN_FAKE_NAO_REAL);
        });
    }

    public function test_gerar_pix_dinamico_sem_email_do_cliente_usa_fallback(): void
    {
        Http::fake([
            'api.mercadopago.com/v1/orders' => Http::response(['id' => 'order-1', 'status' => 'action_required'], 201),
        ]);

        $this->gateway()->gerarPixDinamico(10.00, 'ref-sem-email');

        // .local é um TLD reservado (RFC 6762) e a MP rejeita como
        // e-mail inválido — regressão real encontrada em teste manual.
        Http::assertSent(fn ($request) => $request['payer']['email'] === 'comanda@varandasbar.com.br');
    }

    /**
     * Regressão real: em sandbox, a Orders API rejeita qualquer e-mail
     * que não termine em "@testuser.com" com `invalid_email_for_sandbox`
     * (confirmado contra o sandbox, agosto/2026). O fallback padrão do
     * código não serve pra isso, então precisa ser configurável via
     * `MP_EMAIL_PAGADOR_PADRAO`.
     */
    public function test_gerar_pix_dinamico_sem_email_do_cliente_usa_fallback_configurado(): void
    {
        Http::fake([
            'api.mercadopago.com/v1/orders' => Http::response(['id' => 'order-1', 'status' => 'action_required'], 201),
        ]);

        (new MercadoPagoGateway(self::TOKEN_FAKE_NAO_REAL, 'test_user_123@testuser.com'))
            ->gerarPixDinamico(10.00, 'ref-sem-email');

        Http::assertSent(fn ($request) => $request['payer']['email'] === 'test_user_123@testuser.com');
    }

    public function test_cobrar_via_maquininha_envia_payload_de_orders_api(): void
    {
        Http::fake([
            'api.mercadopago.com/v1/orders' => Http::response(['id' => 'order-1', 'status' => 'created'], 201),
        ]);

        $resultado = $this->gateway()->cobrarViaMaquininha(50.00, 'TERMINAL-XYZ', 'ref-point');

        $this->assertSame('order-1', $resultado->mpId);
        $this->assertSame(StatusPagamento::PENDENTE->value, $resultado->status);

        Http::assertSent(function ($request) {
            return $request['type'] === 'point'
                && $request['config']['point']['terminal_id'] === 'TERMINAL-XYZ'
                && $request['transactions']['payments'][0]['amount'] === '50.00'
                && $request->hasHeader('X-Idempotency-Key', 'ref-point');
        });
    }

    public function test_listar_terminais_com_resultados(): void
    {
        // Formato real confirmado contra a API de sandbox (agosto/2026):
        // { "data": { "terminals": [...] }, "paging": {...} }.
        Http::fake([
            'api.mercadopago.com/terminals/v1/list' => Http::response([
                'data' => [
                    'terminals' => [
                        ['id' => 'NEWLAND_N950__N950NCB801293324', 'pos_id' => 123, 'store_id' => 1, 'operating_mode' => 'PDV'],
                    ],
                ],
                'paging' => ['total' => 1, 'limit' => 50, 'offset' => 0],
            ], 200),
        ]);

        $terminais = $this->gateway()->listarTerminais();

        $this->assertCount(1, $terminais);
        $this->assertSame('NEWLAND_N950__N950NCB801293324', $terminais[0]['id']);
        $this->assertSame(123, $terminais[0]['pos_id']);
    }

    public function test_listar_terminais_vazio_nao_da_erro(): void
    {
        Http::fake([
            'api.mercadopago.com/terminals/v1/list' => Http::response(['data' => ['terminals' => []], 'paging' => ['total' => 0]], 200),
        ]);

        $this->assertSame([], $this->gateway()->listarTerminais());
    }

    public function test_consultar_status_pagamento_mapeia_approved_para_confirmado(): void
    {
        Http::fake(['api.mercadopago.com/v1/payments/*' => Http::response(['status' => 'approved'], 200)]);

        $this->assertSame(StatusPagamento::CONFIRMADO->value, $this->gateway()->consultarStatusPagamento('123'));
    }

    public function test_consultar_status_ordem_point_mapeia_processed_para_confirmado(): void
    {
        Http::fake(['api.mercadopago.com/v1/orders/*' => Http::response(['status' => 'processed'], 200)]);

        $this->assertSame(StatusPagamento::CONFIRMADO->value, $this->gateway()->consultarStatusOrdemPoint('order-1'));
    }

    public function test_falha_na_api_loga_erro_e_relanca_excecao(): void
    {
        Log::spy();

        Http::fake([
            'api.mercadopago.com/v1/orders' => Http::response(['message' => 'cause detalhado da mp'], 400),
        ]);

        try {
            $this->gateway()->gerarPixDinamico(10.00, 'ref-falha');
            $this->fail('Deveria ter lançado RequestException.');
        } catch (RequestException) {
            // esperado
        }

        Log::shouldHaveReceived('error')
            ->once()
            ->withArgs(fn ($mensagem, $contexto) => $contexto['status_http'] === 400 && $contexto['operacao'] === 'gerarPixDinamico');
    }

    public function test_estornar_pagamento_usa_idempotency_key_deterministica(): void
    {
        Http::fake(['api.mercadopago.com/v1/payments/*/refunds' => Http::response([], 201)]);

        $sucesso = $this->gateway()->estornarPagamento('pay-42');

        $this->assertTrue($sucesso);

        Http::assertSent(fn ($request) => $request->hasHeader('X-Idempotency-Key', 'estorno-pay-42'));
    }

    public function test_estornar_pagamento_com_falha_loga_mas_nao_lanca_excecao(): void
    {
        Log::spy();

        Http::fake(['api.mercadopago.com/v1/payments/*/refunds' => Http::response(['message' => 'já estornado'], 400)]);

        $sucesso = $this->gateway()->estornarPagamento('pay-99');

        $this->assertFalse($sucesso);
        Log::shouldHaveReceived('error')->once();
    }
}
