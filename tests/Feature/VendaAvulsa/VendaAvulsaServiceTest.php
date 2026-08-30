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

    /**
     * @return array{0: Produto, 1: Ingrediente, 2: ConversaoProduto}
     */
    private function produtoAvulsoComConversao(
        string $nome = 'Bala de Goma',
        float $preco = 5.00,
        float $quantidadeUnidadeCompra = 500,
        int $rendeQuantidadeVenda = 200,
    ): array {
        $grupo = GrupoEquivalencia::factory()->create();
        $ingrediente = Ingrediente::factory()->create(['grupo_equivalencia_id' => $grupo->id]);
        $produto = Produto::factory()->comPrecoInicial($preco)->create(['tipo' => TipoProduto::AVULSO->value, 'nome' => $nome]);

        $conversao = ConversaoProduto::create([
            'produto_id' => $produto->id,
            'grupo_equivalencia_id' => $grupo->id,
            'unidade_compra' => 'gramas',
            'quantidade_unidade_compra' => $quantidadeUnidadeCompra,
            'rende_quantidade_venda' => $rendeQuantidadeVenda,
        ]);

        return [$produto, $ingrediente, $conversao];
    }

    private function dto(array $itens, FormaPagamentoVendaAvulsa $forma = FormaPagamentoVendaAvulsa::DINHEIRO): VenderAvulsoDTO
    {
        return (new VenderAvulsoDTO())
            ->setItens($itens)
            ->setFormaPagamento($forma->value);
    }

    public function test_vender_um_item_calcula_valor_total_corretamente(): void
    {
        [$produto] = $this->produtoAvulsoComConversao(preco: 2.50);

        $venda = app(VendaAvulsaService::class)->vender($this->dto([
            ['produto_id' => $produto->id, 'quantidade' => 4],
        ]));

        $this->assertSame('10.00', $venda->valor_total);
        $this->assertCount(1, $venda->itens);
        $this->assertSame(4, $venda->itens->first()->quantidade);
        $this->assertSame(FormaPagamentoVendaAvulsa::DINHEIRO, $venda->forma_pagamento);
    }

    public function test_vender_carrinho_com_varios_produtos_diferentes(): void
    {
        [$produtoA] = $this->produtoAvulsoComConversao(nome: 'Bala', preco: 1.00);
        [$produtoB] = $this->produtoAvulsoComConversao(nome: 'Chocolate', preco: 3.00);

        $venda = app(VendaAvulsaService::class)->vender($this->dto([
            ['produto_id' => $produtoA->id, 'quantidade' => 5],
            ['produto_id' => $produtoB->id, 'quantidade' => 2],
        ]));

        $this->assertSame('11.00', $venda->valor_total); // 5*1 + 2*3
        $this->assertCount(2, $venda->itens);

        $this->assertDatabaseHas('itens_venda_avulsa', [
            'venda_avulsa_id' => $venda->id,
            'produto_id' => $produtoA->id,
            'quantidade' => 5,
            'valor_total_item' => 5.00,
        ]);
        $this->assertDatabaseHas('itens_venda_avulsa', [
            'venda_avulsa_id' => $venda->id,
            'produto_id' => $produtoB->id,
            'quantidade' => 2,
            'valor_total_item' => 6.00,
        ]);
    }

    public function test_vender_da_baixa_proporcional_no_ingrediente_do_grupo_para_cada_item(): void
    {
        // 500g rende 200 unidades -> 2.5g por unidade vendida.
        [$produtoA, $ingredienteA] = $this->produtoAvulsoComConversao(nome: 'A', quantidadeUnidadeCompra: 500, rendeQuantidadeVenda: 200);
        [$produtoB, $ingredienteB] = $this->produtoAvulsoComConversao(nome: 'B', quantidadeUnidadeCompra: 300, rendeQuantidadeVenda: 100);

        $movimentacaoRepo = app(MovimentacaoEstoqueRepositoryInterface::class);
        $movimentacaoRepo->registrarEntrada($ingredienteA->id, 100, OrigemMovimentacao::COMPRA->value, null, null);
        $movimentacaoRepo->registrarEntrada($ingredienteB->id, 100, OrigemMovimentacao::COMPRA->value, null, null);

        app(VendaAvulsaService::class)->vender($this->dto([
            ['produto_id' => $produtoA->id, 'quantidade' => 10], // 10 * 2.5g = 25g
            ['produto_id' => $produtoB->id, 'quantidade' => 10], // 10 * 3.0g = 30g
        ]));

        $this->assertSame(75.0, $movimentacaoRepo->saldoPorIngrediente($ingredienteA->id));
        $this->assertSame(70.0, $movimentacaoRepo->saldoPorIngrediente($ingredienteB->id));
    }

    public function test_vender_nao_bloqueia_mesmo_com_saldo_insuficiente_ou_negativo(): void
    {
        [$produto, $ingrediente] = $this->produtoAvulsoComConversao(quantidadeUnidadeCompra: 500, rendeQuantidadeVenda: 200);

        // Nenhuma entrada registrada — saldo zero antes da venda.
        $venda = app(VendaAvulsaService::class)->vender($this->dto([
            ['produto_id' => $produto->id, 'quantidade' => 50],
        ]));

        $this->assertNotNull($venda->id);

        $movimentacaoRepo = app(MovimentacaoEstoqueRepositoryInterface::class);
        // 50 * 2.5g = 125g consumidos, saldo vai a -125.
        $this->assertSame(-125.0, $movimentacaoRepo->saldoPorIngrediente($ingrediente->id));
    }

    public function test_carrinho_vazio_rejeita(): void
    {
        $this->expectExceptionMessage('Adicione ao menos um item à venda.');

        app(VendaAvulsaService::class)->vender($this->dto([]));
    }

    public function test_produto_preparado_no_carrinho_rejeita_a_venda_inteira(): void
    {
        $produto = Produto::factory()->comPrecoInicial()->create(['tipo' => TipoProduto::PREPARADO->value]);

        $this->expectExceptionMessage('não é de venda avulsa');

        app(VendaAvulsaService::class)->vender($this->dto([
            ['produto_id' => $produto->id, 'quantidade' => 1],
        ]));
    }

    public function test_produto_sem_conversao_cadastrada_rejeita(): void
    {
        $produto = Produto::factory()->comPrecoInicial()->create(['tipo' => TipoProduto::AVULSO->value]);

        $this->expectExceptionMessage('não tem conversão de unidade cadastrada');

        app(VendaAvulsaService::class)->vender($this->dto([
            ['produto_id' => $produto->id, 'quantidade' => 1],
        ]));
    }

    public function test_produto_inativo_rejeita(): void
    {
        [$produto] = $this->produtoAvulsoComConversao();
        $produto->update(['ativo' => false]);

        $this->expectExceptionMessage('não está mais disponível para venda');

        app(VendaAvulsaService::class)->vender($this->dto([
            ['produto_id' => $produto->id, 'quantidade' => 1],
        ]));
    }

    public function test_produto_indisponivel_rejeita(): void
    {
        [$produto] = $this->produtoAvulsoComConversao();
        $produto->update(['disponivel' => false]);

        $this->expectExceptionMessage('não está mais disponível para venda');

        app(VendaAvulsaService::class)->vender($this->dto([
            ['produto_id' => $produto->id, 'quantidade' => 1],
        ]));
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

        $this->expectExceptionMessage('não tem preço definido');

        app(VendaAvulsaService::class)->vender($this->dto([
            ['produto_id' => $produto->id, 'quantidade' => 1],
        ]));
    }

    public function test_um_produto_invalido_no_carrinho_impede_a_venda_inteira_sem_gravar_nada(): void
    {
        [$produtoValido] = $this->produtoAvulsoComConversao(nome: 'Válido');
        $produtoInvalido = Produto::factory()->comPrecoInicial()->create(['tipo' => TipoProduto::PREPARADO->value]);

        try {
            app(VendaAvulsaService::class)->vender($this->dto([
                ['produto_id' => $produtoValido->id, 'quantidade' => 1],
                ['produto_id' => $produtoInvalido->id, 'quantidade' => 1],
            ]));
            $this->fail('Deveria ter lançado exceção.');
        } catch (\Exception) {
            // esperado
        }

        $this->assertDatabaseCount('vendas_avulsas', 0);
        $this->assertDatabaseCount('itens_venda_avulsa', 0);
    }
}
