<?php

namespace Tests\Feature\Publico;

use App\DTO\Comanda\ConfiguracaoDTO;
use App\Enums\Pedido\StatusItemPedido;
use App\Livewire\Publico\ComandaAcesso;
use App\Models\Comanda;
use App\Models\Ingrediente;
use App\Models\Produto;
use App\Models\Receita;
use App\Services\ConfiguracaoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class PedidoClienteTest extends TestCase
{
    use RefreshDatabase;

    private function configurarBar(): void
    {
        app(ConfiguracaoService::class)->atualizar(
            (new ConfiguracaoDTO())->setLatitude(-23.5505)->setLongitude(-46.6333)->setRaioMetros(100),
        );
    }

    public function test_pedir_item_fora_do_raio_nao_cria_pedido(): void
    {
        $this->configurarBar();
        $comanda = Comanda::factory()->create();
        $produto = Produto::factory()->comPrecoInicial()->create();

        Livewire::test(ComandaAcesso::class, ['token' => $comanda->token])
            ->call('verificarLocalizacao', -23.5505, -46.6333)
            ->set('produtoSelecionadoId', (string) $produto->id)
            ->set('quantidade', '1')
            ->call('pedirItem', -23.9, -46.9) // longe do raio configurado
            ->assertSet('liberado', false);

        $this->assertDatabaseCount('itens_pedido', 0);
    }

    public function test_pedir_item_dentro_do_raio_cria_pedido_pendente(): void
    {
        $this->configurarBar();
        $comanda = Comanda::factory()->create();
        $produto = Produto::factory()->comPrecoInicial()->create();

        Livewire::test(ComandaAcesso::class, ['token' => $comanda->token])
            ->call('verificarLocalizacao', -23.5505, -46.6333)
            ->set('produtoSelecionadoId', (string) $produto->id)
            ->set('quantidade', '2')
            ->call('pedirItem', -23.5505, -46.6333)
            ->assertDispatched('toastr');

        $this->assertDatabaseHas('itens_pedido', [
            'comanda_id' => $comanda->id,
            'produto_id' => $produto->id,
            'quantidade' => 2,
            'status' => StatusItemPedido::PENDENTE_APROVACAO->value,
        ]);
    }

    public function test_estoque_duvidoso_pede_confirmacao_antes_de_criar_pedido(): void
    {
        $this->configurarBar();

        app(ConfiguracaoService::class)->atualizar(
            (new ConfiguracaoDTO())
                ->setLatitude(-23.5505)->setLongitude(-46.6333)->setRaioMetros(100)
                ->setValidacaoEstoqueAutomaticaAtiva(true),
        );

        $ingrediente = Ingrediente::factory()->create();
        $produto = Produto::factory()->comPrecoInicial()->create(['valida_estoque_automatico' => true]);
        $receita = Receita::factory()->create(['produto_id' => $produto->id]);
        $receita->ingredientes()->attach($ingrediente->id, ['quantidade' => 5, 'unidade_medida' => 'un']);
        // Nenhuma entrada registrada — saldo zero, insuficiente.

        $comanda = Comanda::factory()->create();

        $test = Livewire::test(ComandaAcesso::class, ['token' => $comanda->token])
            ->call('verificarLocalizacao', -23.5505, -46.6333)
            ->set('produtoSelecionadoId', (string) $produto->id)
            ->set('quantidade', '1')
            ->call('pedirItem', -23.5505, -46.6333)
            ->assertSet('estoqueDuvidoso', true);

        $this->assertDatabaseCount('itens_pedido', 0);

        $test->call('confirmarPedidoComAviso')->assertSet('estoqueDuvidoso', false);

        $this->assertDatabaseHas('itens_pedido', [
            'comanda_id' => $comanda->id,
            'produto_id' => $produto->id,
            'status' => StatusItemPedido::PENDENTE_APROVACAO->value,
        ]);
    }
}
