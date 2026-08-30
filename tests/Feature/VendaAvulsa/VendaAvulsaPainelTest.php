<?php

namespace Tests\Feature\VendaAvulsa;

use App\Enums\Cardapio\TipoProduto;
use App\Enums\VendaAvulsa\FormaPagamentoVendaAvulsa;
use App\Livewire\Balcao\VendaAvulsaPainel;
use App\Models\ConversaoProduto;
use App\Models\GrupoEquivalencia;
use App\Models\Ingrediente;
use App\Models\Produto;
use App\Models\Usuario;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class VendaAvulsaPainelTest extends TestCase
{
    use RefreshDatabase;

    private function produtoAvulsoComConversao(string $nome = 'Bala de Goma'): Produto
    {
        $grupo = GrupoEquivalencia::factory()->create();
        Ingrediente::factory()->create(['grupo_equivalencia_id' => $grupo->id]);
        $produto = Produto::factory()->comPrecoInicial(1.50)->create([
            'tipo' => TipoProduto::AVULSO->value,
            'nome' => $nome,
        ]);

        ConversaoProduto::create([
            'produto_id' => $produto->id,
            'grupo_equivalencia_id' => $grupo->id,
            'unidade_compra' => 'gramas',
            'quantidade_unidade_compra' => 500,
            'rende_quantidade_venda' => 200,
        ]);

        return $produto;
    }

    public function test_grid_lista_apenas_avulso_ativo_disponivel_com_conversao(): void
    {
        $usuario = Usuario::factory()->create();
        $comConversao = $this->produtoAvulsoComConversao('Com Conversão');

        Produto::factory()->comPrecoInicial()->create(['tipo' => TipoProduto::PREPARADO->value, 'nome' => 'Prato Preparado']);
        Produto::factory()->comPrecoInicial()->create(['tipo' => TipoProduto::AVULSO->value, 'nome' => 'Avulso Sem Conversão']);
        Produto::factory()->comPrecoInicial()->create(['tipo' => TipoProduto::AVULSO->value, 'ativo' => false, 'nome' => 'Avulso Inativo']);

        Livewire::actingAs($usuario)
            ->test(VendaAvulsaPainel::class)
            ->assertViewHas('produtos', fn ($produtos) => $produtos->count() === 1 && $produtos->first()->id === $comConversao->id);
    }

    public function test_selecionar_produto_seta_estado(): void
    {
        $usuario = Usuario::factory()->create();
        $produto = $this->produtoAvulsoComConversao();

        Livewire::actingAs($usuario)
            ->test(VendaAvulsaPainel::class)
            ->call('selecionarProduto', $produto->id)
            ->assertSet('produtoSelecionadoId', (string) $produto->id)
            ->assertSet('quantidade', 1);
    }

    public function test_vender_para_cada_forma_de_pagamento_cria_registro_e_reseta_selecao(): void
    {
        $usuario = Usuario::factory()->create();

        foreach (FormaPagamentoVendaAvulsa::cases() as $forma) {
            $produto = $this->produtoAvulsoComConversao("Produto {$forma->value}");

            Livewire::actingAs($usuario)
                ->test(VendaAvulsaPainel::class)
                ->call('selecionarProduto', $produto->id)
                ->call('vender', $forma->value)
                ->assertSet('produtoSelecionadoId', '')
                ->assertDispatched('toastr');

            $this->assertDatabaseHas('vendas_avulsas', [
                'produto_id' => $produto->id,
                'forma_pagamento' => $forma->value,
                'vendido_por' => $usuario->id,
            ]);
        }
    }

    public function test_vendas_recentes_aparecem_no_feed_apos_a_venda(): void
    {
        $usuario = Usuario::factory()->create();
        $produto = $this->produtoAvulsoComConversao('Chocolate');

        Livewire::actingAs($usuario)
            ->test(VendaAvulsaPainel::class)
            ->call('selecionarProduto', $produto->id)
            ->call('vender', FormaPagamentoVendaAvulsa::PIX_CELULAR->value)
            ->assertViewHas('vendasRecentes', fn ($vendas) => $vendas->count() === 1 && $vendas->first()->produto->id === $produto->id);
    }

    public function test_incrementar_e_decrementar_quantidade(): void
    {
        $usuario = Usuario::factory()->create();
        $produto = $this->produtoAvulsoComConversao();

        Livewire::actingAs($usuario)
            ->test(VendaAvulsaPainel::class)
            ->call('selecionarProduto', $produto->id)
            ->call('incrementarQuantidade')
            ->call('incrementarQuantidade')
            ->assertSet('quantidade', 3)
            ->call('decrementarQuantidade')
            ->assertSet('quantidade', 2);
    }

    public function test_decrementar_nao_passa_de_um(): void
    {
        $usuario = Usuario::factory()->create();
        $produto = $this->produtoAvulsoComConversao();

        Livewire::actingAs($usuario)
            ->test(VendaAvulsaPainel::class)
            ->call('selecionarProduto', $produto->id)
            ->call('decrementarQuantidade')
            ->assertSet('quantidade', 1);
    }
}
