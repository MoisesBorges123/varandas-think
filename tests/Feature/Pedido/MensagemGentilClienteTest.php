<?php

namespace Tests\Feature\Pedido;

use App\DTO\Comanda\ConfiguracaoDTO;
use App\Enums\Pedido\StatusItemPedido;
use App\Livewire\Publico\ComandaAcesso;
use App\Models\Comanda;
use App\Models\ItemPedido;
use App\Models\Produto;
use App\Services\ConfiguracaoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * CLAUDE.md seção 4.2: rejeitado, sem estoque e cancelado nunca podem
 * aparecer com linguagem técnica pro cliente — os três caem na mesma
 * mensagem gentil (labelParaCliente()).
 */
class MensagemGentilClienteTest extends TestCase
{
    use RefreshDatabase;

    public function test_status_tecnicos_nunca_aparecem_para_o_cliente(): void
    {
        app(ConfiguracaoService::class)->atualizar(
            (new ConfiguracaoDTO())->setLatitude(-23.5505)->setLongitude(-46.6333)->setRaioMetros(100),
        );

        $comanda = Comanda::factory()->create();
        $produto = Produto::factory()->comPrecoInicial()->create();

        foreach ([StatusItemPedido::REJEITADO, StatusItemPedido::INDISPONIVEL_ESTOQUE, StatusItemPedido::CANCELADO] as $status) {
            ItemPedido::factory()->create([
                'comanda_id' => $comanda->id,
                'produto_id' => $produto->id,
                'preco_produto_id' => $produto->precoAtual->id,
                'status' => $status->value,
            ]);
        }

        $html = Livewire::test(ComandaAcesso::class, ['token' => $comanda->token])
            ->call('verificarLocalizacao', -23.5505, -46.6333)
            ->assertSet('liberado', true)
            ->html();

        foreach (['rejeitad', 'recusad', 'indispon', 'cancelad'] as $termoTecnico) {
            $this->assertStringNotContainsStringIgnoringCase($termoTecnico, $html);
        }
    }
}
