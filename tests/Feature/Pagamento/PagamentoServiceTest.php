<?php

namespace Tests\Feature\Pagamento;

use App\DTO\Comanda\ConfiguracaoDTO;
use App\DTO\Pagamento\RegistrarPagamentoPorItensDTO;
use App\DTO\Pagamento\RegistrarPagamentoValorLivreDTO;
use App\Enums\Pagamento\FormaPagamento;
use App\Enums\Pagamento\StatusPagamento;
use App\Enums\Pedido\StatusItemPedido;
use App\Models\Comanda;
use App\Models\ItemPedido;
use App\Models\Pagamento;
use App\Models\Produto;
use App\Services\ComandaService;
use App\Services\Pagamento\Gateway\MercadoPagoGatewayInterface;
use App\Services\Pagamento\Gateway\ResultadoCobranca;
use App\Services\Pagamento\PagamentoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PagamentoServiceTest extends TestCase
{
    use RefreshDatabase;

    private function itemCobravel(Comanda $comanda, float $preco = 10.00, int $quantidade = 1): ItemPedido
    {
        $produto = Produto::factory()->comPrecoInicial($preco)->create();

        return ItemPedido::factory()->create([
            'comanda_id' => $comanda->id,
            'produto_id' => $produto->id,
            'preco_produto_id' => $produto->precoAtual->id,
            'quantidade' => $quantidade,
            'status' => StatusItemPedido::ENVIADO_COZINHA->value,
        ]);
    }

    public function test_pagar_por_itens_em_dinheiro_confirma_imediatamente_sem_chamar_gateway(): void
    {
        $this->mock(MercadoPagoGatewayInterface::class, function ($mock) {
            $mock->shouldNotReceive('cobrarViaMaquininha');
            $mock->shouldNotReceive('gerarPixDinamico');
        });

        $comanda = Comanda::factory()->create();
        $item = $this->itemCobravel($comanda, 25.00, 2);

        $dto = (new RegistrarPagamentoPorItensDTO())
            ->setComandaId($comanda->id)
            ->setItemPedidoIds([$item->id])
            ->setFormaPagamento(FormaPagamento::DINHEIRO->value);

        $pagamento = app(PagamentoService::class)->registrarPorItens($dto);

        $this->assertSame(StatusPagamento::CONFIRMADO, $pagamento->status);
        $this->assertSame('50.00', $pagamento->valor);
        $this->assertNotNull($pagamento->confirmado_em);
        $this->assertDatabaseHas('pagamentos_itens', ['pagamento_id' => $pagamento->id, 'item_pedido_id' => $item->id]);
    }

    public function test_pagar_valor_livre_via_pix_gera_qr_e_fica_pendente(): void
    {
        $this->mock(MercadoPagoGatewayInterface::class, function ($mock) {
            $mock->shouldReceive('gerarPixDinamico')
                ->once()
                ->andReturn(new ResultadoCobranca(mpId: 'mp-123', status: 'pendente', qrCode: '000201...copia-cola', qrCodeBase64: 'base64imagemfake'));
        });

        $comanda = Comanda::factory()->create();
        $this->itemCobravel($comanda, 30.00);

        $dto = (new RegistrarPagamentoValorLivreDTO())
            ->setComandaId($comanda->id)
            ->setValor(15.00)
            ->setFormaPagamento(FormaPagamento::PIX_CELULAR->value);

        $pagamento = app(PagamentoService::class)->registrarPorValorLivre($dto);

        $this->assertSame(StatusPagamento::PENDENTE, $pagamento->status);
        $this->assertSame('mp-123', $pagamento->mp_payment_id);
        $this->assertSame('000201...copia-cola', $pagamento->pix_qr_code);
        $this->assertSame('base64imagemfake', $pagamento->pix_qr_code_base64);
    }

    public function test_pagar_via_maquininha_manda_ordem_pro_device_id(): void
    {
        $this->mock(MercadoPagoGatewayInterface::class, function ($mock) {
            $mock->shouldReceive('cobrarViaMaquininha')
                ->once()
                ->withArgs(fn ($valor, $deviceId) => $valor === 40.0 && $deviceId === 'TERMINAL-1')
                ->andReturn(new ResultadoCobranca(mpId: 'order-456', status: 'pendente'));
        });

        $comanda = Comanda::factory()->create();
        $item = $this->itemCobravel($comanda, 40.00);

        $dto = (new RegistrarPagamentoPorItensDTO())
            ->setComandaId($comanda->id)
            ->setItemPedidoIds([$item->id])
            ->setFormaPagamento(FormaPagamento::API_POINT->value)
            ->setDeviceId('TERMINAL-1');

        $pagamento = app(PagamentoService::class)->registrarPorItens($dto);

        $this->assertSame('order-456', $pagamento->mp_payment_id);
        $this->assertSame('TERMINAL-1', $pagamento->mp_device_id);
    }

    public function test_maquininha_sem_device_id_configurado_rejeita(): void
    {
        $comanda = Comanda::factory()->create();
        $item = $this->itemCobravel($comanda, 40.00);

        $dto = (new RegistrarPagamentoPorItensDTO())
            ->setComandaId($comanda->id)
            ->setItemPedidoIds([$item->id])
            ->setFormaPagamento(FormaPagamento::CELULAR_APROXIMACAO->value);

        $this->expectExceptionMessage('Nenhuma maquininha configurada para esta forma de pagamento.');

        app(PagamentoService::class)->registrarPorItens($dto);
    }

    public function test_pagar_item_ja_coberto_por_outro_pagamento_rejeita(): void
    {
        $comanda = Comanda::factory()->create();
        $item = $this->itemCobravel($comanda, 10.00);

        $dto = (new RegistrarPagamentoPorItensDTO())
            ->setComandaId($comanda->id)
            ->setItemPedidoIds([$item->id])
            ->setFormaPagamento(FormaPagamento::DINHEIRO->value);

        app(PagamentoService::class)->registrarPorItens($dto);

        $this->expectExceptionMessage('Um dos itens selecionados já foi pago ou não pertence a esta comanda.');

        app(PagamentoService::class)->registrarPorItens($dto);
    }

    public function test_pagamento_que_zera_saldo_fecha_a_comanda_automaticamente(): void
    {
        $comanda = Comanda::factory()->create();
        $item = $this->itemCobravel($comanda, 10.00);

        $dto = (new RegistrarPagamentoPorItensDTO())
            ->setComandaId($comanda->id)
            ->setItemPedidoIds([$item->id])
            ->setFormaPagamento(FormaPagamento::DINHEIRO->value);

        app(PagamentoService::class)->registrarPorItens($dto);

        $this->assertSame('fechada', $comanda->fresh()->status->value);
    }

    public function test_pagamento_parcial_mantem_comanda_aberta(): void
    {
        $comanda = Comanda::factory()->create();
        $this->itemCobravel($comanda, 100.00);

        $dto = (new RegistrarPagamentoValorLivreDTO())
            ->setComandaId($comanda->id)
            ->setValor(30.00)
            ->setFormaPagamento(FormaPagamento::DINHEIRO->value);

        app(PagamentoService::class)->registrarPorValorLivre($dto);

        $this->assertSame('aberta', $comanda->fresh()->status->value);
    }

    public function test_webhook_confirma_pagamento_pendente_e_fecha_comanda_se_saldo_zerado(): void
    {
        $this->mock(MercadoPagoGatewayInterface::class, function ($mock) {
            $mock->shouldReceive('consultarStatusOrdemPoint')
                ->once()
                ->with('mp-999')
                ->andReturn(StatusPagamento::CONFIRMADO->value);
            $mock->shouldNotReceive('consultarStatusPagamento');
        });

        $comanda = Comanda::factory()->create();
        $item = $this->itemCobravel($comanda, 10.00);

        $pagamento = Pagamento::factory()->create([
            'comanda_id' => $comanda->id,
            'valor' => 10.00,
            'status' => StatusPagamento::PENDENTE->value,
            'forma_pagamento' => FormaPagamento::PIX_CELULAR->value,
            'mp_payment_id' => 'mp-999',
        ]);
        $pagamento->itens()->create(['item_pedido_id' => $item->id]);

        app(PagamentoService::class)->processarWebhook('mp-999');

        $this->assertSame(StatusPagamento::CONFIRMADO, $pagamento->fresh()->status);
        $this->assertNotNull($pagamento->fresh()->confirmado_em);
        $this->assertSame('fechada', $comanda->fresh()->status->value);
    }

    public function test_webhook_pagamento_ja_confirmado_e_idempotente(): void
    {
        $this->mock(MercadoPagoGatewayInterface::class, function ($mock) {
            $mock->shouldNotReceive('consultarStatusPagamento');
            $mock->shouldNotReceive('consultarStatusOrdemPoint');
        });

        $comanda = Comanda::factory()->create();
        $pagamento = Pagamento::factory()->create([
            'comanda_id' => $comanda->id,
            'status' => StatusPagamento::CONFIRMADO->value,
            'forma_pagamento' => FormaPagamento::PIX_CELULAR->value,
            'mp_payment_id' => 'mp-already-done',
        ]);

        app(PagamentoService::class)->processarWebhook('mp-already-done');

        $this->assertSame(StatusPagamento::CONFIRMADO, $pagamento->fresh()->status);
    }

    public function test_webhook_com_mp_payment_id_desconhecido_nao_lanca_excecao(): void
    {
        $this->mock(MercadoPagoGatewayInterface::class, function ($mock) {
            $mock->shouldNotReceive('consultarStatusPagamento');
        });

        app(PagamentoService::class)->processarWebhook('id-que-nao-existe-no-sistema');

        $this->assertTrue(true); // não lançou exceção
    }

    public function test_webhook_ordem_point_usa_consulta_de_status_de_order(): void
    {
        $this->mock(MercadoPagoGatewayInterface::class, function ($mock) {
            $mock->shouldReceive('consultarStatusOrdemPoint')
                ->once()
                ->with('order-777')
                ->andReturn(StatusPagamento::REJEITADO->value);
            $mock->shouldNotReceive('consultarStatusPagamento');
        });

        $comanda = Comanda::factory()->create();
        $pagamento = Pagamento::factory()->create([
            'comanda_id' => $comanda->id,
            'status' => StatusPagamento::PENDENTE->value,
            'forma_pagamento' => FormaPagamento::API_POINT->value,
            'mp_payment_id' => 'order-777',
            'mp_device_id' => 'TERMINAL-1',
        ]);

        app(PagamentoService::class)->processarWebhook('order-777');

        $this->assertSame(StatusPagamento::REJEITADO, $pagamento->fresh()->status);
    }
}
