<?php

namespace Tests\Feature\Balcao;

use App\Enums\Pedido\StatusItemPedido;
use App\Enums\Usuario\PerfilNome;
use App\Livewire\Balcao\BalcaoPainel;
use App\Models\ItemPedido;
use App\Models\Perfil;
use App\Models\Usuario;
use App\Services\Pedido\ItemPedidoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class BalcaoPainelTest extends TestCase
{
    use RefreshDatabase;

    private function balconista(): Usuario
    {
        $perfil = Perfil::firstOrCreate(['nome' => PerfilNome::BALCONISTA->value]);

        return Usuario::factory()->create(['perfil_id' => $perfil->id]);
    }

    public function test_painel_separa_itens_por_status(): void
    {
        $balconista = $this->balconista();

        $pendente = ItemPedido::factory()->pendenteAprovacao()->create();
        $emPreparo = ItemPedido::factory()->enviadoCozinha()->create();
        $pronto = ItemPedido::factory()->pronto()->create();
        $liberado = ItemPedido::factory()->liberadoBalcao()->create();

        Livewire::actingAs($balconista)
            ->test(BalcaoPainel::class)
            ->assertViewHas('filaAprovacao', fn ($colecao) => $colecao->pluck('id')->all() === [$pendente->id])
            ->assertViewHas('emPreparo', fn ($colecao) => $colecao->pluck('id')->all() === [$emPreparo->id])
            ->assertViewHas('prontos', fn ($colecao) => $colecao->pluck('id')->all() === [$pronto->id])
            ->assertViewHas('liberados', fn ($colecao) => $colecao->pluck('id')->all() === [$liberado->id]);
    }

    public function test_liberar_para_garcom_atualiza_status(): void
    {
        $balconista = $this->balconista();
        $item = ItemPedido::factory()->pronto()->create();

        Livewire::actingAs($balconista)
            ->test(BalcaoPainel::class)
            ->call('liberarParaGarcom', $item->id)
            ->assertDispatched('toastr');

        $this->assertSame(StatusItemPedido::LIBERADO_BALCAO, $item->fresh()->status);
    }

    public function test_marcar_entregue_atualiza_status(): void
    {
        $balconista = $this->balconista();
        $item = ItemPedido::factory()->liberadoBalcao()->create();

        Livewire::actingAs($balconista)
            ->test(BalcaoPainel::class)
            ->call('marcarEntregue', $item->id)
            ->assertDispatched('toastr');

        $this->assertSame(StatusItemPedido::ENTREGUE, $item->fresh()->status);
    }

    public function test_marcar_pronto_notifica_o_balcao(): void
    {
        // notificarPerfil() exige que exista um Perfil de destino
        // cadastrado — o alerta é pro perfil Balconista (CLAUDE.md seção 5).
        Perfil::firstOrCreate(['nome' => PerfilNome::BALCONISTA->value]);

        $item = ItemPedido::factory()->enviadoCozinha()->create();

        app(ItemPedidoService::class)->marcarPronto($item->id);

        $this->assertSame(StatusItemPedido::PRONTO, $item->fresh()->status);
        $this->assertDatabaseHas('notificacoes', [
            'referencia_tipo' => 'item_pedido',
            'referencia_id' => $item->id,
        ]);
    }
}
