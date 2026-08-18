<?php

namespace Tests\Feature\Comanda;

use App\Livewire\Comanda\ComandaIndex;
use App\Models\Comanda;
use App\Models\Mesa;
use App\Models\Perfil;
use App\Models\Usuario;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ComandaIndexTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_requer_autenticacao(): void
    {
        $this->get(route('comandas.index'))
            ->assertRedirect(route('login'));
    }

    public function test_index_renderiza_para_usuario_autenticado(): void
    {
        $usuario = Usuario::factory()->create();

        $this->actingAs($usuario)
            ->get(route('comandas.index'))
            ->assertOk();
    }

    public function test_filtra_por_status(): void
    {
        $usuario = Usuario::factory()->create();
        Comanda::factory()->create();
        Comanda::factory()->fechada()->create();

        Livewire::actingAs($usuario)
            ->test(ComandaIndex::class)
            ->set('status', 'fechada')
            ->assertViewHas('comandas', fn ($comandas) => $comandas->count() === 1);
    }

    public function test_filtra_por_mesa(): void
    {
        $usuario = Usuario::factory()->create();
        $mesaA = Mesa::factory()->create();
        $mesaB = Mesa::factory()->create();
        Comanda::factory()->create(['mesa_id' => $mesaA->id]);
        Comanda::factory()->create(['mesa_id' => $mesaB->id]);

        Livewire::actingAs($usuario)
            ->test(ComandaIndex::class)
            ->set('mesaId', (string) $mesaA->id)
            ->assertViewHas('comandas', fn ($comandas) => $comandas->count() === 1);
    }

    public function test_ver_detalhes_dispara_swal(): void
    {
        $usuario = Usuario::factory()->create();
        $comanda = Comanda::factory()->create();

        Livewire::actingAs($usuario)
            ->test(ComandaIndex::class)
            ->call('verDetalhes', $comanda->id)
            ->assertDispatched('swal');
    }

    public function test_atribuir_garcom_inline(): void
    {
        $usuario = Usuario::factory()->create();
        // firstOrCreate: Usuario::factory() já cria um Perfil aleatório por
        // baixo dos panos (UsuarioFactory) — criar direto com
        // Perfil::factory() colidiria com a constraint unique(nome) sempre
        // que esse perfil aleatório calhasse de já ser "garcom".
        $garcomPerfil = Perfil::firstOrCreate(['nome' => \App\Enums\Usuario\PerfilNome::GARCOM->value]);
        $garcom = Usuario::factory()->create(['perfil_id' => $garcomPerfil->id]);
        $comanda = Comanda::factory()->create();

        Livewire::actingAs($usuario)
            ->test(ComandaIndex::class)
            ->set("garcomPorComanda.{$comanda->id}", (string) $garcom->id)
            ->call('atribuirGarcom', $comanda->id);

        $this->assertSame($garcom->id, $comanda->fresh()->garcom_id);
    }

    public function test_fluxo_de_fechamento_com_confirmacao(): void
    {
        $usuario = Usuario::factory()->create();
        $comanda = Comanda::factory()->create();

        Livewire::actingAs($usuario)
            ->test(ComandaIndex::class)
            ->call('fechar', $comanda->id)
            ->assertDispatched('toastr');

        $this->assertSame('fechada', $comanda->fresh()->status->value);
    }
}
