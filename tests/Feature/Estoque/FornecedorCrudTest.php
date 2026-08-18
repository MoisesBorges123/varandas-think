<?php

namespace Tests\Feature\Estoque;

use App\DTO\NotaFiscal\FornecedorDTO;
use App\Models\Compra;
use App\Models\Fornecedor;
use App\Models\Usuario;
use App\Services\FornecedorService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FornecedorCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_requer_autenticacao(): void
    {
        $this->get(route('estoque.fornecedores.index'))
            ->assertRedirect(route('login'));
    }

    public function test_index_renderiza_para_usuario_autenticado(): void
    {
        $usuario = Usuario::factory()->create();

        $this->actingAs($usuario)
            ->get(route('estoque.fornecedores.index'))
            ->assertOk();
    }

    public function test_criar_fornecedor_sem_cnpj(): void
    {
        $dto = (new FornecedorDTO())
            ->setRazaoSocial('Feira do Zé')
            ->setCnpj(null)
            ->setUf('MG');

        $fornecedor = app(FornecedorService::class)->criar($dto);

        $this->assertDatabaseHas('fornecedores', [
            'id' => $fornecedor->id,
            'razao_social' => 'Feira do Zé',
            'cnpj' => null,
        ]);
    }

    public function test_criar_dois_fornecedores_sem_cnpj_nao_colide(): void
    {
        $service = app(FornecedorService::class);

        $service->criar((new FornecedorDTO())->setRazaoSocial('Feira do Zé')->setCnpj(null));
        $service->criar((new FornecedorDTO())->setRazaoSocial('Quitanda da Maria')->setCnpj(null));

        $this->assertSame(2, Fornecedor::count());
    }

    public function test_excluir_fornecedor_sem_compras(): void
    {
        $fornecedor = Fornecedor::factory()->create();

        $resultado = app(FornecedorService::class)->excluir($fornecedor->id);

        $this->assertTrue($resultado);
        $this->assertDatabaseMissing('fornecedores', ['id' => $fornecedor->id]);
    }

    public function test_excluir_fornecedor_com_compras_vinculadas_e_bloqueada(): void
    {
        $fornecedor = Fornecedor::factory()->create();
        Compra::factory()->create(['fornecedor_id' => $fornecedor->id]);

        $this->expectExceptionMessage('Este fornecedor possui compras vinculadas e não pode ser excluído.');

        app(FornecedorService::class)->excluir($fornecedor->id);
    }
}
