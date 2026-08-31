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
        return new MercadoPagoGateway(self::TOKEN_FAKE_NAO_REAL, 'https://varandas.local/webhooks/mercadopago');
    }

    public function test_gerar_pix_dinamico_envia_payload_correto_e_idempotency_key(): void
    {
        Http::fake([
            'api.mercadopago.com/v1/payments' => Http::response([
                'id' => 999,
                'status' => 'pending',
                'point_of_interaction' => [
                    'transaction_data' => ['qr_code' => 'copia-cola', 'qr_code_base64' => 'imagem-base64'],
                ],
            ], 201),
        ]);

        $resultado = $this->gateway()->gerarPixDinamico(19.90, 'ref-abc', 'cliente@exemplo.com');

        $this->assertSame('999', $resultado->mpId);
        $this->assertSame(StatusPagamento::PENDENTE->value, $resultado->status);
        $this->assertSame('copia-cola', $resultado->qrCode);
        $this->assertSame('imagem-base64', $resultado->qrCodeBase64);

        Http::assertSent(function ($request) {
            return $request->url() === 'https://api.mercadopago.com/v1/payments'
                && $request['payment_method_id'] === 'pix'
                && $request['transaction_amount'] === 19.9
                && $request['payer']['email'] === 'cliente@exemplo.com'
                && $request['external_reference'] === 'ref-abc'
                && $request->hasHeader('X-Idempotency-Key', 'ref-abc')
                && $request->hasHeader('Authorization', 'Bearer '.self::TOKEN_FAKE_NAO_REAL);
        });
    }

    public function test_gerar_pix_dinamico_sem_email_do_cliente_usa_fallback(): void
    {
        Http::fake([
            'api.mercadopago.com/*' => Http::response(['id' => 1, 'status' => 'pending'], 201),
        ]);

        $this->gateway()->gerarPixDinamico(10.00, 'ref-sem-email');

        // .local é um TLD reservado (RFC 6762) e a MP rejeita como
        // e-mail inválido — regressão real encontrada em teste manual.
        Http::assertSent(fn ($request) => $request['payer']['email'] === 'comanda@varandasbar.com.br');
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
            'api.mercadopago.com/v1/payments' => Http::response(['message' => 'cause detalhado da mp'], 400),
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
