<?php

namespace Tests\Feature\Cozinha;

use App\Enums\Cardapio\DestinoImpressao;
use App\Livewire\Cozinha\PainelCozinha;
use App\Models\Categoria;
use App\Models\ItemPedido;
use App\Models\Produto;
use App\Models\Usuario;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class PainelCozinhaTest extends TestCase
{
    use RefreshDatabase;

    public function test_lista_apenas_itens_com_destino_cozinha(): void
    {
        $usuario = Usuario::factory()->create();

        $categoriaCozinha = Categoria::factory()->create(['destino_impressao' => DestinoImpressao::COZINHA->value]);
        $categoriaBalcao = Categoria::factory()->create(['destino_impressao' => DestinoImpressao::BALCAO->value]);

        $produtoCozinha = Produto::factory()->for($categoriaCozinha, 'categoria')->comPrecoInicial()->create();
        $produtoBalcao = Produto::factory()->for($categoriaBalcao, 'categoria')->comPrecoInicial()->create();

        $itemCozinha = ItemPedido::factory()->enviadoCozinha()->create([
            'produto_id' => $produtoCozinha->id,
            'preco_produto_id' => $produtoCozinha->precoAtual->id,
        ]);

        ItemPedido::factory()->enviadoCozinha()->create([
            'produto_id' => $produtoBalcao->id,
            'preco_produto_id' => $produtoBalcao->precoAtual->id,
        ]);

        Livewire::actingAs($usuario)
            ->test(PainelCozinha::class)
            ->assertViewHas('itens', fn ($itens) => $itens->count() === 1 && $itens->first()->id === $itemCozinha->id);
    }

    public function test_novo_pedido_nao_dispara_no_primeiro_render_mas_dispara_quando_surge_item_novo(): void
    {
        $usuario = Usuario::factory()->create();
        $categoriaCozinha = Categoria::factory()->create(['destino_impressao' => DestinoImpressao::COZINHA->value]);
        $produto = Produto::factory()->for($categoriaCozinha, 'categoria')->comPrecoInicial()->create();

        ItemPedido::factory()->enviadoCozinha()->create([
            'produto_id' => $produto->id,
            'preco_produto_id' => $produto->precoAtual->id,
        ]);

        $test = Livewire::actingAs($usuario)->test(PainelCozinha::class);
        $test->assertNotDispatched('novoPedido');

        ItemPedido::factory()->enviadoCozinha()->create([
            'produto_id' => $produto->id,
            'preco_produto_id' => $produto->precoAtual->id,
        ]);

        $test->call('$refresh')->assertDispatched('novoPedido');
    }
}
