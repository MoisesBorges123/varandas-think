<?php

namespace Tests\Feature\Estoque;

use App\DTO\Estoque\GrupoEquivalenciaDTO;
use App\Models\GrupoEquivalencia;
use App\Models\Ingrediente;
use App\Models\Usuario;
use App\Services\GrupoEquivalenciaService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GrupoEquivalenciaCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_requer_autenticacao(): void
    {
        $this->get(route('estoque.grupos.index'))
            ->assertRedirect(route('login'));
    }

    public function test_index_renderiza_para_usuario_autenticado(): void
    {
        $usuario = Usuario::factory()->create();

        $this->actingAs($usuario)
            ->get(route('estoque.grupos.index'))
            ->assertOk();
    }

    public function test_criar_grupo(): void
    {
        $dto = (new GrupoEquivalenciaDTO())->setNome('Cenoura');

        $grupo = app(GrupoEquivalenciaService::class)->criar($dto);

        $this->assertDatabaseHas('grupos_equivalencia', [
            'id' => $grupo->id,
            'nome' => 'Cenoura',
        ]);
    }

    public function test_excluir_grupo_sem_ingredientes(): void
    {
        $grupo = GrupoEquivalencia::factory()->create();

        $resultado = app(GrupoEquivalenciaService::class)->excluir($grupo->id);

        $this->assertTrue($resultado);
        $this->assertDatabaseMissing('grupos_equivalencia', ['id' => $grupo->id]);
    }

    public function test_excluir_grupo_com_ingredientes_vinculados_e_bloqueada(): void
    {
        $grupo = GrupoEquivalencia::factory()->create();
        Ingrediente::factory()->create(['grupo_equivalencia_id' => $grupo->id]);

        $this->expectExceptionMessage('Este grupo de equivalência possui insumos vinculados e não pode ser excluído.');

        app(GrupoEquivalenciaService::class)->excluir($grupo->id);
    }
}
