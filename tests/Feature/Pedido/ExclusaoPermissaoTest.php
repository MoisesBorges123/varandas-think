<?php

namespace Tests\Feature\Pedido;

use App\DTO\Comanda\ConfiguracaoDTO;
use App\Enums\Usuario\PerfilNome;
use App\Models\ItemPedido;
use App\Models\Perfil;
use App\Models\Usuario;
use App\Services\ConfiguracaoService;
use App\Services\Pedido\ItemPedidoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Excluir é soft-delete real, diferente de cancelar (CLAUDE.md seção 10 usa
 * toggles separados pros dois verbos). "Excluir item próprio" É toggle
 * (default ligado) — diferente de "cancelar item próprio", que nunca é
 * toggle.
 */
class ExclusaoPermissaoTest extends TestCase
{
    use RefreshDatabase;

    private function garcom(): Usuario
    {
        $perfil = Perfil::firstOrCreate(['nome' => PerfilNome::GARCOM->value]);

        return Usuario::factory()->create(['perfil_id' => $perfil->id]);
    }

    private function balconista(): Usuario
    {
        $perfil = Perfil::firstOrCreate(['nome' => PerfilNome::BALCONISTA->value]);

        return Usuario::factory()->create(['perfil_id' => $perfil->id]);
    }

    public function test_autor_pode_excluir_item_proprio_por_padrao(): void
    {
        $garcom = $this->garcom();
        $item = ItemPedido::factory()->pendenteAprovacao()->create(['lancado_por' => $garcom->id]);

        app(ItemPedidoService::class)->excluir($item->id, $garcom->id);

        $this->assertSoftDeleted('itens_pedido', ['id' => $item->id]);
    }

    public function test_autor_nao_pode_excluir_item_proprio_quando_toggle_desligado(): void
    {
        app(ConfiguracaoService::class)->atualizar(
            (new ConfiguracaoDTO())->setLatitude(0)->setLongitude(0)->setRaioMetros(100)->setPermitirGarcomExcluirProprioItem(false),
        );

        $garcom = $this->garcom();
        $item = ItemPedido::factory()->pendenteAprovacao()->create(['lancado_por' => $garcom->id]);

        $this->expectExceptionMessage('Você não tem permissão para esta ação neste item.');

        app(ItemPedidoService::class)->excluir($item->id, $garcom->id);
    }

    public function test_colega_nao_pode_excluir_item_alheio_por_padrao(): void
    {
        $autor = $this->garcom();
        $colega = $this->garcom();
        $item = ItemPedido::factory()->pendenteAprovacao()->create(['lancado_por' => $autor->id]);

        $this->expectExceptionMessage('Você não tem permissão para esta ação neste item.');

        app(ItemPedidoService::class)->excluir($item->id, $colega->id);
    }

    public function test_colega_pode_excluir_item_alheio_quando_toggle_ligado(): void
    {
        app(ConfiguracaoService::class)->atualizar(
            (new ConfiguracaoDTO())->setLatitude(0)->setLongitude(0)->setRaioMetros(100)->setPermitirGarcomExcluirItemColega(true),
        );

        $autor = $this->garcom();
        $colega = $this->garcom();
        $item = ItemPedido::factory()->pendenteAprovacao()->create(['lancado_por' => $autor->id]);

        app(ItemPedidoService::class)->excluir($item->id, $colega->id);

        $this->assertSoftDeleted('itens_pedido', ['id' => $item->id]);
    }

    public function test_pos_despacho_so_balcao_pode_excluir_mesmo_o_autor(): void
    {
        $autor = $this->garcom();
        $item = ItemPedido::factory()->enviadoCozinha()->create(['lancado_por' => $autor->id]);

        $this->expectExceptionMessage('Depois de enviado à produção, só o balcão pode cancelar ou excluir este item.');

        app(ItemPedidoService::class)->excluir($item->id, $autor->id);
    }

    public function test_balcao_pode_excluir_item_pos_despacho(): void
    {
        $autor = $this->garcom();
        $balconista = $this->balconista();
        $item = ItemPedido::factory()->enviadoCozinha()->create(['lancado_por' => $autor->id]);

        app(ItemPedidoService::class)->excluir($item->id, $balconista->id);

        $this->assertSoftDeleted('itens_pedido', ['id' => $item->id]);
    }
}
