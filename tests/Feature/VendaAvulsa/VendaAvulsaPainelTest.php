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

    private function produtoAvulsoComConversao(string $nome = 'Bala de Goma', float $preco = 1.50): Produto
    {
        $grupo = GrupoEquivalencia::factory()->create();
        Ingrediente::factory()->create(['grupo_equivalencia_id' => $grupo->id]);
        $produto = Produto::factory()->comPrecoInicial($preco)->create([
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

    public function test_adicionar_ao_carrinho_acumula_quantidade_do_mesmo_produto(): void
    {
        $usuario = Usuario::factory()->create();
        $produto = $this->produtoAvulsoComConversao();

        Livewire::actingAs($usuario)
            ->test(VendaAvulsaPainel::class)
            ->call('selecionarProduto', $produto->id)
            ->call('incrementarQuantidade')
            ->call('adicionarAoCarrinho') // quantidade 2
            ->assertSet('carrinho', [$produto->id => 2])
            ->assertSet('produtoSelecionadoId', '')
            ->call('selecionarProduto', $produto->id)
            ->call('adicionarAoCarrinho') // + quantidade 1
            ->assertSet('carrinho', [$produto->id => 3]);
    }

    public function test_carrinho_com_produtos_diferentes(): void
    {
        $usuario = Usuario::factory()->create();
        $produtoA = $this->produtoAvulsoComConversao('Bala');
        $produtoB = $this->produtoAvulsoComConversao('Chocolate');

        Livewire::actingAs($usuario)
            ->test(VendaAvulsaPainel::class)
            ->call('selecionarProduto', $produtoA->id)
            ->call('adicionarAoCarrinho')
            ->call('selecionarProduto', $produtoB->id)
            ->call('adicionarAoCarrinho')
            ->assertSet('carrinho', [$produtoA->id => 1, $produtoB->id => 1])
            ->assertViewHas('carrinhoDetalhado', fn ($carrinho) => $carrinho->count() === 2);
    }

    public function test_remover_do_carrinho(): void
    {
        $usuario = Usuario::factory()->create();
        $produto = $this->produtoAvulsoComConversao();

        Livewire::actingAs($usuario)
            ->test(VendaAvulsaPainel::class)
            ->call('selecionarProduto', $produto->id)
            ->call('adicionarAoCarrinho')
            ->call('removerDoCarrinho', $produto->id)
            ->assertSet('carrinho', []);
    }

    public function test_cancelar_carrinho_via_evento_de_confirmacao_limpa_tudo(): void
    {
        $usuario = Usuario::factory()->create();
        $produto = $this->produtoAvulsoComConversao();

        Livewire::actingAs($usuario)
            ->test(VendaAvulsaPainel::class)
            ->call('selecionarProduto', $produto->id)
            ->call('adicionarAoCarrinho')
            ->call('abrirPagamento')
            ->assertSet('mostrarPagamento', true)
            ->call('cancelarCarrinho')
            ->assertSet('carrinho', [])
            ->assertSet('mostrarPagamento', false);
    }

    public function test_finalizar_com_multiplos_itens_e_forma_de_pagamento_cria_uma_unica_venda(): void
    {
        $usuario = Usuario::factory()->create();
        $produtoA = $this->produtoAvulsoComConversao('Bala', 1.00);
        $produtoB = $this->produtoAvulsoComConversao('Chocolate', 3.00);

        Livewire::actingAs($usuario)
            ->test(VendaAvulsaPainel::class)
            ->call('selecionarProduto', $produtoA->id)
            ->call('incrementarQuantidade')
            ->call('adicionarAoCarrinho') // 2x Bala
            ->call('selecionarProduto', $produtoB->id)
            ->call('adicionarAoCarrinho') // 1x Chocolate
            ->call('abrirPagamento')
            ->call('finalizar', FormaPagamentoVendaAvulsa::PIX_CELULAR->value)
            ->assertSet('carrinho', [])
            ->assertSet('mostrarPagamento', false)
            ->assertDispatched('toastr');

        $this->assertDatabaseCount('vendas_avulsas', 1);
        $this->assertDatabaseHas('vendas_avulsas', [
            'forma_pagamento' => FormaPagamentoVendaAvulsa::PIX_CELULAR->value,
            'valor_total' => 5.00, // 2*1 + 1*3
            'vendido_por' => $usuario->id,
        ]);
        $this->assertDatabaseCount('itens_venda_avulsa', 2);
    }

    public function test_vendas_recentes_aparecem_no_feed_apos_finalizar(): void
    {
        $usuario = Usuario::factory()->create();
        $produto = $this->produtoAvulsoComConversao('Chocolate');

        Livewire::actingAs($usuario)
            ->test(VendaAvulsaPainel::class)
            ->call('selecionarProduto', $produto->id)
            ->call('adicionarAoCarrinho')
            ->call('finalizar', FormaPagamentoVendaAvulsa::PIX_CELULAR->value)
            ->assertViewHas('vendasRecentes', fn ($vendas) => $vendas->count() === 1 && $vendas->first()->itens->first()->produto->id === $produto->id);
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
