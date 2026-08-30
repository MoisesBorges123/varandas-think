<?php

namespace Tests\Feature\VendaAvulsa;

use App\DTO\VendaAvulsa\VenderAvulsoDTO;
use App\Enums\Cardapio\TipoProduto;
use App\Enums\Estoque\OrigemMovimentacao;
use App\Enums\VendaAvulsa\FormaPagamentoVendaAvulsa;
use App\Models\ConversaoProduto;
use App\Models\GrupoEquivalencia;
use App\Models\Ingrediente;
use App\Models\Produto;
use App\Repositories\Contracts\MovimentacaoEstoqueRepositoryInterface;
use App\Services\VendaAvulsa\VendaAvulsaService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VendaAvulsaServiceTest extends TestCase
{
    use RefreshDatabase;

    private function produtoAvulsoComConversao(
        float $preco = 5.00,
        float $quantidadeUnidadeCompra = 500,
        int $rendeQuantidadeVenda = 200,
    ): array {
        $grupo = GrupoEquivalencia::factory()->create();
        $ingrediente = Ingrediente::factory()->create(['grupo_equivalencia_id' => $grupo->id]);
        $produto = Produto::factory()->comPrecoInicial($preco)->create(['tipo' => TipoProduto::AVULSO->value]);

        $conversao = ConversaoProduto::create([
            'produto_id' => $produto->id,
            'grupo_equivalencia_id' => $grupo->id,
            'unidade_compra' => 'gramas',
            'quantidade_unidade_compra' => $quantidadeUnidadeCompra,
            'rende_quantidade_venda' => $rendeQuantidadeVenda,
        ]);

        return [$produto, $ingrediente, $conversao];
    }

    private function dto(int $produtoId, int $quantidade, FormaPagamentoVendaAvulsa $forma = FormaPagamentoVendaAvulsa::DINHEIRO): VenderAvulsoDTO
    {
        return (new VenderAvulsoDTO())
            ->setProdutoId($produtoId)
            ->setQuantidade($quantidade)
            ->setFormaPagamento($forma->value);
    }

    public function test_vender_calcula_valor_total_corretamente(): void
    {
        [$produto] = $this->produtoAvulsoComConversao(preco: 2.50);

        $venda = app(VendaAvulsaService::class)->vender($this->dto($produto->id, 4));

        $this->assertSame('10.00', $venda->valor_total);
        $this->assertSame(4, $venda->quantidade);
        $this->assertSame(FormaPagamentoVendaAvulsa::DINHEIRO, $venda->forma_pagamento);
    }

    public function test_vender_da_baixa_proporcional_no_ingrediente_do_grupo(): void
    {
        // 500g rende 200 unidades -> 2.5g por unidade vendida.
        [$produto, $ingrediente] = $this->produtoAvulsoComConversao(
            quantidadeUnidadeCompra: 500,
            rendeQuantidadeVenda: 200,
        );

        $movimentacaoRepo = app(MovimentacaoEstoqueRepositoryInterface::class);
        $movimentacaoRepo->registrarEntrada($ingrediente->id, 100, OrigemMovimentacao::COMPRA->value, null, null);

        app(VendaAvulsaService::class)->vender($this->dto($produto->id, 10));

        // 10 unidades * 2.5g = 25g consumidos.
        $this->assertSame(75.0, $movimentacaoRepo->saldoPorIngrediente($ingrediente->id));
    }

    public function test_vender_nao_bloqueia_mesmo_com_saldo_insuficiente_ou_negativo(): void
    {
        [$produto, $ingrediente] = $this->produtoAvulsoComConversao(
            quantidadeUnidadeCompra: 500,
            rendeQuantidadeVenda: 200,
        );

        // Nenhuma entrada registrada — saldo zero antes da venda.
        $venda = app(VendaAvulsaService::class)->vender($this->dto($produto->id, 50));

        $this->assertNotNull($venda->id);

        $movimentacaoRepo = app(MovimentacaoEstoqueRepositoryInterface::class);
        // 50 * 2.5g = 125g consumidos, saldo vai a -125.
        $this->assertSame(-125.0, $movimentacaoRepo->saldoPorIngrediente($ingrediente->id));
    }

    public function test_produto_preparado_rejeita_venda_avulsa(): void
    {
        $produto = Produto::factory()->comPrecoInicial()->create(['tipo' => TipoProduto::PREPARADO->value]);

        $this->expectExceptionMessage('Este produto não é de venda avulsa.');

        app(VendaAvulsaService::class)->vender($this->dto($produto->id, 1));
    }

    public function test_produto_sem_conversao_cadastrada_rejeita(): void
    {
        $produto = Produto::factory()->comPrecoInicial()->create(['tipo' => TipoProduto::AVULSO->value]);

        $this->expectExceptionMessage('Este produto não tem conversão de unidade cadastrada.');

        app(VendaAvulsaService::class)->vender($this->dto($produto->id, 1));
    }

    public function test_produto_inativo_rejeita(): void
    {
        [$produto] = $this->produtoAvulsoComConversao();
        $produto->update(['ativo' => false]);

        $this->expectExceptionMessage('Este produto não está disponível para venda.');

        app(VendaAvulsaService::class)->vender($this->dto($produto->id, 1));
    }

    public function test_produto_indisponivel_rejeita(): void
    {
        [$produto] = $this->produtoAvulsoComConversao();
        $produto->update(['disponivel' => false]);

        $this->expectExceptionMessage('Este produto não está disponível para venda.');

        app(VendaAvulsaService::class)->vender($this->dto($produto->id, 1));
    }

    public function test_produto_sem_preco_definido_rejeita(): void
    {
        $grupo = GrupoEquivalencia::factory()->create();
        $ingrediente = Ingrediente::factory()->create(['grupo_equivalencia_id' => $grupo->id]);
        $produto = Produto::factory()->create(['tipo' => TipoProduto::AVULSO->value]);

        ConversaoProduto::create([
            'produto_id' => $produto->id,
            'grupo_equivalencia_id' => $grupo->id,
            'unidade_compra' => 'gramas',
            'quantidade_unidade_compra' => 500,
            'rende_quantidade_venda' => 200,
        ]);

        $this->expectExceptionMessage('Este produto não tem preço definido.');

        app(VendaAvulsaService::class)->vender($this->dto($produto->id, 1));
    }
}
