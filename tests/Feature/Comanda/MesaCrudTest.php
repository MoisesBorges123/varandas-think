<?php

namespace Tests\Feature\Comanda;

use App\DTO\Comanda\MesaDTO;
use App\Models\Comanda;
use App\Models\Mesa;
use App\Models\Usuario;
use App\Services\MesaService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MesaCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_requer_autenticacao(): void
    {
        $this->get(route('mesas.index'))
            ->assertRedirect(route('login'));
    }

    public function test_index_renderiza_para_usuario_autenticado(): void
    {
        $usuario = Usuario::factory()->create();

        $this->actingAs($usuario)
            ->get(route('mesas.index'))
            ->assertOk();
    }

    public function test_criar_mesa(): void
    {
        $dto = (new MesaDTO())->setNumero('12');

        $mesa = app(MesaService::class)->criar($dto);

        $this->assertDatabaseHas('mesas', [
            'id' => $mesa->id,
            'numero' => '12',
        ]);
    }

    public function test_excluir_mesa_sem_comanda_aberta(): void
    {
        $mesa = Mesa::factory()->create();

        $resultado = app(MesaService::class)->excluir($mesa->id);

        $this->assertTrue($resultado);
        $this->assertSoftDeleted('mesas', ['id' => $mesa->id]);
    }

    public function test_excluir_mesa_com_comanda_aberta_e_bloqueada(): void
    {
        $mesa = Mesa::factory()->create();
        Comanda::factory()->create(['mesa_id' => $mesa->id]);

        $this->expectExceptionMessage('Esta mesa possui uma comanda aberta e não pode ser excluída.');

        app(MesaService::class)->excluir($mesa->id);
    }
}
