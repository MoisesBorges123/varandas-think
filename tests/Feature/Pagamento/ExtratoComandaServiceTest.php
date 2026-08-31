<?php

namespace Tests\Feature\Pagamento;

use App\Enums\Pagamento\FormaPagamento;
use App\Enums\Pagamento\StatusPagamento;
use App\Enums\Pagamento\TipoPagamento;
use App\Enums\Pedido\StatusItemPedido;
use App\Models\Comanda;
use App\Models\ItemPedido;
use App\Models\Pagamento;
use App\Models\Produto;
use App\Services\Pagamento\ExtratoComandaService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExtratoComandaServiceTest extends TestCase
{
    use RefreshDatabase;

    private function itemCobravel(Comanda $comanda, float $preco = 10.00, int $quantidade = 1, StatusItemPedido $status = StatusItemPedido::ENVIADO_COZINHA): ItemPedido
    {
        $produto = Produto::factory()->comPrecoInicial($preco)->create();

        return ItemPedido::factory()->create([
            'comanda_id' => $comanda->id,
            'produto_id' => $produto->id,
            'preco_produto_id' => $produto->precoAtual->id,
            'quantidade' => $quantidade,
            'status' => $status->value,
        ]);
    }

    public function test_valor_total_soma_apenas_itens_ja_despachados_ou_entregues(): void
    {
        $comanda = Comanda::factory()->create();

        $this->itemCobravel($comanda, 10.00, 1, StatusItemPedido::ENVIADO_COZINHA);
        $this->itemCobravel($comanda, 20.00, 1, StatusItemPedido::PRONTO);
        $this->itemCobravel($comanda, 30.00, 1, StatusItemPedido::LIBERADO_BALCAO);
        $this->itemCobravel($comanda, 40.00, 1, StatusItemPedido::ENTREGUE);

        // Não entram na conta.
        $this->itemCobravel($comanda, 999, 1, StatusItemPedido::PENDENTE_APROVACAO);
        $this->itemCobravel($comanda, 999, 1, StatusItemPedido::CANCELADO);
        $this->itemCobravel($comanda, 999, 1, StatusItemPedido::REJEITADO);

        $extrato = app(ExtratoComandaService::class)->calcular($comanda->id);

        $this->assertSame(100.0, $extrato->valorTotalItens);
        $this->assertCount(4, $extrato->itensAbertos);
    }

    public function test_saldo_restante_desconta_pagamentos_confirmados(): void
    {
        $comanda = Comanda::factory()->create();
        $this->itemCobravel($comanda, 50.00);

        Pagamento::factory()->create([
            'comanda_id' => $comanda->id,
            'valor' => 20.00,
            'status' => StatusPagamento::CONFIRMADO->value,
            'tipo' => TipoPagamento::VALOR_LIVRE->value,
        ]);

        $extrato = app(ExtratoComandaService::class)->calcular($comanda->id);

        $this->assertSame(50.0, $extrato->valorTotalItens);
        $this->assertSame(20.0, $extrato->totalPago);
        $this->assertSame(30.0, $extrato->saldoRestante);
    }

    public function test_pagamento_pendente_nao_reduz_saldo_mas_bloqueia_item_selecionado(): void
    {
        $comanda = Comanda::factory()->create();
        $item = $this->itemCobravel($comanda, 50.00);

        $pagamento = Pagamento::factory()->create([
            'comanda_id' => $comanda->id,
            'valor' => 50.00,
            'status' => StatusPagamento::PENDENTE->value,
            'tipo' => TipoPagamento::ITEM_ESPECIFICO->value,
            'forma_pagamento' => FormaPagamento::PIX_CELULAR->value,
        ]);
        $pagamento->itens()->create(['item_pedido_id' => $item->id]);

        $extrato = app(ExtratoComandaService::class)->calcular($comanda->id);

        $this->assertSame(0.0, $extrato->totalPago);
        $this->assertSame(50.0, $extrato->saldoRestante);
        $this->assertCount(0, $extrato->itensAbertos);
    }

    public function test_pagamento_rejeitado_ou_estornado_devolve_item_para_lista_aberta(): void
    {
        $comanda = Comanda::factory()->create();
        $item = $this->itemCobravel($comanda, 50.00);

        $pagamento = Pagamento::factory()->create([
            'comanda_id' => $comanda->id,
            'valor' => 50.00,
            'status' => StatusPagamento::REJEITADO->value,
            'tipo' => TipoPagamento::ITEM_ESPECIFICO->value,
            'forma_pagamento' => FormaPagamento::PIX_CELULAR->value,
        ]);
        $pagamento->itens()->create(['item_pedido_id' => $item->id]);

        $extrato = app(ExtratoComandaService::class)->calcular($comanda->id);

        $this->assertCount(1, $extrato->itensAbertos);
        $this->assertSame(50.0, $extrato->saldoRestante);
    }

    public function test_saldo_restante_nunca_fica_negativo(): void
    {
        $comanda = Comanda::factory()->create();
        $this->itemCobravel($comanda, 10.00);

        Pagamento::factory()->create([
            'comanda_id' => $comanda->id,
            'valor' => 999.00,
            'status' => StatusPagamento::CONFIRMADO->value,
            'tipo' => TipoPagamento::VALOR_LIVRE->value,
        ]);

        $extrato = app(ExtratoComandaService::class)->calcular($comanda->id);

        $this->assertSame(0.0, $extrato->saldoRestante);
    }
}
