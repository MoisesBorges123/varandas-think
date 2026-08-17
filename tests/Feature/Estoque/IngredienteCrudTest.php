<?php

namespace Tests\Feature\Estoque;

use App\DTO\Estoque\IngredienteDTO;
use App\Enums\Notificacao\TipoNotificacao;
use App\Enums\Usuario\PerfilNome;
use App\Models\GrupoEquivalencia;
use App\Models\Ingrediente;
use App\Models\Notificacao;
use App\Models\Perfil;
use App\Models\Usuario;
use App\Services\IngredienteService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IngredienteCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_requer_autenticacao(): void
    {
        $this->get(route('estoque.ingredientes.index'))
            ->assertRedirect(route('login'));
    }

    public function test_index_renderiza_para_usuario_autenticado(): void
    {
        $usuario = Usuario::factory()->create();

        $this->actingAs($usuario)
            ->get(route('estoque.ingredientes.index'))
            ->assertOk();
    }

    public function test_criar_ingrediente_sem_grupo_gera_notificacao_para_perfil_administrador(): void
    {
        $perfilAdmin = Perfil::factory()->create(['nome' => PerfilNome::ADMINISTRADOR->value]);

        $dto = (new IngredienteDTO())
            ->setGrupoEquivalenciaId(null)
            ->setNome('Cenoura fresca')
            ->setUnidadeMedida('kg');

        $ingrediente = app(IngredienteService::class)->criar($dto);

        $this->assertDatabaseHas('notificacoes', [
            'perfil_id' => $perfilAdmin->id,
            'tipo' => TipoNotificacao::INGREDIENTE_SEM_GRUPO->value,
            'referencia_tipo' => 'ingrediente',
            'referencia_id' => $ingrediente->id,
            'resolvida_em' => null,
        ]);
    }

    public function test_vincular_grupo_depois_resolve_a_notificacao(): void
    {
        Perfil::factory()->create(['nome' => PerfilNome::ADMINISTRADOR->value]);

        $dto = (new IngredienteDTO())
            ->setGrupoEquivalenciaId(null)
            ->setNome('Cenoura fresca')
            ->setUnidadeMedida('kg');

        $ingrediente = app(IngredienteService::class)->criar($dto);
        $grupo = GrupoEquivalencia::factory()->create();

        $dtoAtualizado = (new IngredienteDTO())
            ->setGrupoEquivalenciaId($grupo->id)
            ->setNome('Cenoura fresca')
            ->setUnidadeMedida('kg');

        app(IngredienteService::class)->atualizar($ingrediente->id, $dtoAtualizado);

        $this->assertDatabaseHas('notificacoes', [
            'referencia_tipo' => 'ingrediente',
            'referencia_id' => $ingrediente->id,
        ]);

        $notificacao = Notificacao::where('referencia_id', $ingrediente->id)->first();
        $this->assertNotNull($notificacao->resolvida_em);
    }

    public function test_criar_ingrediente_com_grupo_nao_gera_notificacao(): void
    {
        Perfil::factory()->create(['nome' => PerfilNome::ADMINISTRADOR->value]);
        $grupo = GrupoEquivalencia::factory()->create();

        $dto = (new IngredienteDTO())
            ->setGrupoEquivalenciaId($grupo->id)
            ->setNome('Cenoura fresca')
            ->setUnidadeMedida('kg');

        app(IngredienteService::class)->criar($dto);

        $this->assertDatabaseCount('notificacoes', 0);
    }

    public function test_excluir_ingrediente_vinculado_a_receita_e_bloqueada(): void
    {
        $ingrediente = Ingrediente::factory()->create();
        $receita = \App\Models\Receita::factory()->create();
        $receita->ingredientes()->attach($ingrediente->id, ['quantidade' => 1, 'unidade_medida' => 'kg']);

        $this->expectExceptionMessage('Este insumo está vinculado a uma ou mais receitas e não pode ser excluído.');

        app(IngredienteService::class)->excluir($ingrediente->id);
    }
}
