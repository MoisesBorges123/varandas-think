<?php

namespace Tests\Feature\Cardapio;

use App\DTO\Cardapio\CategoriaDTO;
use App\Enums\Cardapio\DestinoImpressao;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Usuario;
use App\Services\CategoriaService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoriaCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_requer_autenticacao(): void
    {
        $this->get(route('cardapio.categorias.index'))
            ->assertRedirect(route('login'));
    }

    public function test_index_renderiza_para_usuario_autenticado(): void
    {
        $usuario = Usuario::factory()->create();

        $this->actingAs($usuario)
            ->get(route('cardapio.categorias.index'))
            ->assertOk();
    }

    public function test_criar_categoria(): void
    {
        $dto = (new CategoriaDTO())
            ->setNome('Bebidas')
            ->setDestinoImpressao(DestinoImpressao::BAR)
            ->setAtivo(true);

        $categoria = app(CategoriaService::class)->criar($dto);

        $this->assertDatabaseHas('categorias', [
            'id' => $categoria->id,
            'nome' => 'Bebidas',
            'destino_impressao' => 'bar',
        ]);
    }

    public function test_alternar_ativo(): void
    {
        $categoria = Categoria::factory()->create(['ativo' => true]);

        app(CategoriaService::class)->alternarAtivo($categoria->id);

        $this->assertFalse($categoria->fresh()->ativo);
    }

    public function test_excluir_categoria_sem_produtos(): void
    {
        $categoria = Categoria::factory()->create();

        $resultado = app(CategoriaService::class)->excluir($categoria->id);

        $this->assertTrue($resultado);
        $this->assertSoftDeleted('categorias', ['id' => $categoria->id]);
    }

    public function test_excluir_categoria_com_produtos_vinculados_e_bloqueada(): void
    {
        $categoria = Categoria::factory()->create();
        Produto::factory()->create(['categoria_id' => $categoria->id]);

        $this->expectExceptionMessage('Esta categoria possui produtos vinculados e não pode ser excluída.');

        app(CategoriaService::class)->excluir($categoria->id);
    }
}
