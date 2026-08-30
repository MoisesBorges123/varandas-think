<?php

namespace Tests\Feature\Pedido;

use App\DTO\Comanda\ConfiguracaoDTO;
use App\Enums\Pedido\StatusItemPedido;
use App\Enums\Usuario\PerfilNome;
use App\Models\ItemPedido;
use App\Models\Perfil;
use App\Models\Usuario;
use App\Services\ConfiguracaoService;
use App\Services\Pedido\ItemPedidoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Matriz de permissão de cancelamento (CLAUDE.md seção 10): item próprio
 * sempre pode (não é toggle); item de colega é toggle (default off); e a
 * regra fixa "pós-despacho só balcão" sobrepõe tudo, mesmo pro autor.
 */
class CancelamentoPermissaoTest extends TestCase
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

    public function test_autor_pode_cancelar_item_proprio_pendente(): void
    {
        $garcom = $this->garcom();
        $item = ItemPedido::factory()->pendenteAprovacao()->create(['lancado_por' => $garcom->id]);

        app(ItemPedidoService::class)->cancelar($item->id, $garcom->id);

        $this->assertSame(StatusItemPedido::CANCELADO, $item->fresh()->status);
        $this->assertSame($garcom->id, $item->fresh()->cancelado_por);
    }

    public function test_colega_nao_pode_cancelar_item_alheio_por_padrao(): void
    {
        $autor = $this->garcom();
        $colega = $this->garcom();
        $item = ItemPedido::factory()->pendenteAprovacao()->create(['lancado_por' => $autor->id]);

        $this->expectExceptionMessage('Você não tem permissão para esta ação neste item.');

        app(ItemPedidoService::class)->cancelar($item->id, $colega->id);
    }

    public function test_colega_pode_cancelar_item_alheio_quando_toggle_ligado(): void
    {
        app(ConfiguracaoService::class)->atualizar(
            (new ConfiguracaoDTO())->setLatitude(0)->setLongitude(0)->setRaioMetros(100)->setPermitirGarcomCancelarItemColega(true),
        );

        $autor = $this->garcom();
        $colega = $this->garcom();
        $item = ItemPedido::factory()->pendenteAprovacao()->create(['lancado_por' => $autor->id]);

        app(ItemPedidoService::class)->cancelar($item->id, $colega->id);

        $this->assertSame(StatusItemPedido::CANCELADO, $item->fresh()->status);
    }

    public function test_pos_despacho_so_balcao_pode_cancelar_mesmo_o_autor(): void
    {
        $autor = $this->garcom();
        $item = ItemPedido::factory()->enviadoCozinha()->create(['lancado_por' => $autor->id]);

        $this->expectExceptionMessage('Depois de enviado à produção, só o balcão pode cancelar ou excluir este item.');

        app(ItemPedidoService::class)->cancelar($item->id, $autor->id);
    }

    public function test_balcao_pode_cancelar_item_pos_despacho(): void
    {
        $autor = $this->garcom();
        $balconista = $this->balconista();
        $item = ItemPedido::factory()->enviadoCozinha()->create(['lancado_por' => $autor->id]);

        app(ItemPedidoService::class)->cancelar($item->id, $balconista->id);

        $this->assertSame(StatusItemPedido::CANCELADO, $item->fresh()->status);
    }
}
