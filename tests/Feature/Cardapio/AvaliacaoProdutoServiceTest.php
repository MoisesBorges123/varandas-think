<?php

namespace Tests\Feature\Cardapio;

use App\DTO\Cardapio\AvaliarProdutoDTO;
use App\Enums\Pedido\StatusItemPedido;
use App\Models\ItemPedido;
use App\Models\Produto;
use App\Services\Cardapio\AvaliacaoProdutoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AvaliacaoProdutoServiceTest extends TestCase
{
    use RefreshDatabase;

    private function dto(int $itemPedidoId, int $nota): AvaliarProdutoDTO
    {
        return (new AvaliarProdutoDTO())->setItemPedidoId($itemPedidoId)->setNota($nota);
    }

    public function test_avaliar_item_entregue_funciona(): void
    {
        $item = ItemPedido::factory()->create(['status' => StatusItemPedido::ENTREGUE->value]);

        $avaliacao = app(AvaliacaoProdutoService::class)->avaliar($this->dto($item->id, 5));

        $this->assertSame($item->id, $avaliacao->item_pedido_id);
        $this->assertSame($item->produto_id, $avaliacao->produto_id);
        $this->assertSame(5, $avaliacao->nota);
    }

    public function test_item_nao_entregue_rejeita_avaliacao(): void
    {
        $item = ItemPedido::factory()->create(['status' => StatusItemPedido::ENVIADO_COZINHA->value]);

        $this->expectExceptionMessage('Você só pode avaliar pratos já entregues.');

        app(AvaliacaoProdutoService::class)->avaliar($this->dto($item->id, 4));
    }

    public function test_avaliar_duas_vezes_o_mesmo_item_rejeita(): void
    {
        $item = ItemPedido::factory()->create(['status' => StatusItemPedido::ENTREGUE->value]);

        app(AvaliacaoProdutoService::class)->avaliar($this->dto($item->id, 3));

        $this->expectExceptionMessage('Você já avaliou este pedido.');

        app(AvaliacaoProdutoService::class)->avaliar($this->dto($item->id, 4));
    }

    public function test_nota_fora_do_intervalo_de_1_a_5_e_rejeitada(): void
    {
        $item = ItemPedido::factory()->create(['status' => StatusItemPedido::ENTREGUE->value]);

        $this->expectException(\InvalidArgumentException::class);

        app(AvaliacaoProdutoService::class)->avaliar($this->dto($item->id, 6));
    }

    public function test_media_e_quantidade_com_zero_uma_e_varias_avaliacoes(): void
    {
        $produto = Produto::factory()->create();
        $service = app(AvaliacaoProdutoService::class);

        $vazio = $service->mediaEQuantidade($produto->id);
        $this->assertSame(0.0, $vazio['media']);
        $this->assertSame(0, $vazio['quantidade']);

        $itemA = ItemPedido::factory()->create(['produto_id' => $produto->id, 'status' => StatusItemPedido::ENTREGUE->value]);
        $service->avaliar($this->dto($itemA->id, 4));

        $comUma = $service->mediaEQuantidade($produto->id);
        $this->assertSame(4.0, $comUma['media']);
        $this->assertSame(1, $comUma['quantidade']);

        $itemB = ItemPedido::factory()->create(['produto_id' => $produto->id, 'status' => StatusItemPedido::ENTREGUE->value]);
        $service->avaliar($this->dto($itemB->id, 2));

        $comDuas = $service->mediaEQuantidade($produto->id);
        $this->assertSame(3.0, $comDuas['media']);
        $this->assertSame(2, $comDuas['quantidade']);
    }

    public function test_media_em_lote_agrupa_por_produto(): void
    {
        $produtoA = Produto::factory()->create();
        $produtoB = Produto::factory()->create();
        $service = app(AvaliacaoProdutoService::class);

        $itemA = ItemPedido::factory()->create(['produto_id' => $produtoA->id, 'status' => StatusItemPedido::ENTREGUE->value]);
        $service->avaliar($this->dto($itemA->id, 5));

        $itemB = ItemPedido::factory()->create(['produto_id' => $produtoB->id, 'status' => StatusItemPedido::ENTREGUE->value]);
        $service->avaliar($this->dto($itemB->id, 1));

        $resultado = $service->mediaEQuantidadePorProdutos([$produtoA->id, $produtoB->id]);

        $this->assertSame(5.0, $resultado[$produtoA->id]['media']);
        $this->assertSame(1.0, $resultado[$produtoB->id]['media']);
    }
}
