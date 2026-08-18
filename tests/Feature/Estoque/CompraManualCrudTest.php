<?php

namespace Tests\Feature\Estoque;

use App\DTO\Estoque\CompraManualDTO;
use App\Enums\Estoque\FonteCompra;
use App\Models\Fornecedor;
use App\Models\GrupoEquivalencia;
use App\Models\Ingrediente;
use App\Models\Usuario;
use App\Services\CompraManualService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CompraManualCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_form_renderiza_para_usuario_autenticado(): void
    {
        $usuario = Usuario::factory()->create();

        $this->actingAs($usuario)
            ->get(route('estoque.compras.manual'))
            ->assertOk();
    }

    public function test_registrar_compra_manual_cria_compra_itens_e_movimentacao(): void
    {
        $fornecedor = Fornecedor::factory()->create(['cnpj' => null]);
        $ingrediente = Ingrediente::factory()->create();

        $dto = (new CompraManualDTO())
            ->setFornecedorId($fornecedor->id)
            ->setDataCompra(now()->toDateString())
            ->setItens([
                ['ingrediente_id' => $ingrediente->id, 'quantidade' => 5.0, 'unidade' => 'kg', 'valor_total_item' => 25.0],
            ]);

        $compra = app(CompraManualService::class)->registrar($dto);

        $this->assertSame(FonteCompra::MANUAL, $compra->fonte);
        $this->assertNull($compra->chave_acesso_nf);
        $this->assertEquals(25.0, $compra->valor_total);

        $this->assertDatabaseHas('itens_compra', [
            'compra_id' => $compra->id,
            'ingrediente_id' => $ingrediente->id,
            'quantidade' => 5.0,
            'valor_total_item' => 25.0,
            'preco_unitario' => 5.0,
        ]);

        $this->assertDatabaseHas('movimentacoes_estoque', [
            'ingrediente_id' => $ingrediente->id,
            'tipo' => 'entrada',
            'quantidade' => 5.0,
            'origem_tipo' => 'compra',
            'origem_id' => $compra->id,
        ]);
    }

    public function test_registrar_compra_manual_com_dois_itens(): void
    {
        $fornecedor = Fornecedor::factory()->create();
        $ingredienteA = Ingrediente::factory()->create();
        $ingredienteB = Ingrediente::factory()->create();

        $dto = (new CompraManualDTO())
            ->setFornecedorId($fornecedor->id)
            ->setDataCompra(now()->toDateString())
            ->setItens([
                ['ingrediente_id' => $ingredienteA->id, 'quantidade' => 1.0, 'unidade' => 'un', 'valor_total_item' => 10.0],
                ['ingrediente_id' => $ingredienteB->id, 'quantidade' => 2.0, 'unidade' => 'un', 'valor_total_item' => 20.0],
            ]);

        $compra = app(CompraManualService::class)->registrar($dto);

        $this->assertSame(2, $compra->itens()->count());
        $this->assertEquals(30.0, $compra->valor_total);
    }

    public function test_registrar_compra_manual_recalcula_custo_medio_ponderado_do_grupo(): void
    {
        $fornecedor = Fornecedor::factory()->create();
        $grupo = GrupoEquivalencia::factory()->create(['custo_medio_ponderado' => 0]);
        $ingrediente = Ingrediente::factory()->create(['grupo_equivalencia_id' => $grupo->id]);

        $dto = (new CompraManualDTO())
            ->setFornecedorId($fornecedor->id)
            ->setDataCompra(now()->toDateString())
            ->setItens([
                ['ingrediente_id' => $ingrediente->id, 'quantidade' => 10.0, 'unidade' => 'kg', 'valor_total_item' => 40.0],
            ]);

        app(CompraManualService::class)->registrar($dto);

        $this->assertEquals(4.0, $grupo->fresh()->custo_medio_ponderado);
    }
}
