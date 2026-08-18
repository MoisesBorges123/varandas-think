<?php

namespace Tests\Feature\Estoque;

use App\DTO\NotaFiscal\CategoriaCompraDTO;
use App\Enums\Estoque\OrigemMovimentacao;
use App\Models\Compra;
use App\Models\Fornecedor;
use App\Models\GrupoEquivalencia;
use App\Models\Ingrediente;
use App\Models\ItemCompra;
use App\Models\Usuario;
use App\Livewire\Estoque\CompraIndex;
use App\Repositories\Contracts\GrupoEquivalenciaRepositoryInterface;
use App\Repositories\Contracts\MovimentacaoEstoqueRepositoryInterface;
use App\Services\CategoriaCompraService;
use App\Services\CompraService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class CompraIndexTest extends TestCase
{
    use RefreshDatabase;

    private function compraComItem(array $atributosCompra = [], array $atributosIngrediente = []): Compra
    {
        $ingrediente = Ingrediente::factory()->create($atributosIngrediente);
        $compra = Compra::factory()->create($atributosCompra);
        ItemCompra::create([
            'compra_id' => $compra->id,
            'ingrediente_id' => $ingrediente->id,
            'codigo_fiscal' => $ingrediente->codigo_fiscal,
            'descricao_produto' => $ingrediente->nome,
            'quantidade' => 5,
            'unidade' => 'kg',
            'preco_unitario' => 2,
            'valor_total_item' => 10,
        ]);

        app(MovimentacaoEstoqueRepositoryInterface::class)->registrarEntrada(
            $ingrediente->id,
            5,
            OrigemMovimentacao::COMPRA->value,
            $compra->id,
            null,
        );

        return $compra->fresh();
    }

    public function test_index_requer_autenticacao(): void
    {
        $this->get(route('estoque.compras.index'))
            ->assertRedirect(route('login'));
    }

    public function test_index_renderiza_para_usuario_autenticado(): void
    {
        $usuario = Usuario::factory()->create();

        $this->actingAs($usuario)
            ->get(route('estoque.compras.index'))
            ->assertOk();
    }

    public function test_listar_filtra_por_fornecedor(): void
    {
        $fornecedorA = Fornecedor::factory()->create();
        $fornecedorB = Fornecedor::factory()->create();
        Compra::factory()->create(['fornecedor_id' => $fornecedorA->id]);
        Compra::factory()->create(['fornecedor_id' => $fornecedorB->id]);

        $resultado = app(CompraService::class)->listar(['fornecedor_id' => $fornecedorA->id]);

        $this->assertSame(1, $resultado->count());
        $this->assertSame($fornecedorA->id, $resultado->first()->fornecedor_id);
    }

    public function test_listar_filtra_por_intervalo_de_data(): void
    {
        Compra::factory()->create(['data_compra' => '2026-01-10']);
        Compra::factory()->create(['data_compra' => '2026-02-10']);

        $resultado = app(CompraService::class)->listar([
            'data_de' => '2026-02-01',
            'data_ate' => '2026-02-28',
        ]);

        $this->assertSame(1, $resultado->count());
    }

    public function test_listar_filtra_sem_categoria(): void
    {
        $categoria = app(CategoriaCompraService::class)->criar((new CategoriaCompraDTO())->setNome('Bebidas'));
        Compra::factory()->create(['categoria_compra_id' => $categoria->id]);
        Compra::factory()->create(['categoria_compra_id' => null]);

        $resultado = app(CompraService::class)->listar(['categoria_compra_id' => 'sem_categoria']);

        $this->assertSame(1, $resultado->count());
        $this->assertNull($resultado->first()->categoria_compra_id);
    }

    public function test_atualizar_categoria_da_compra(): void
    {
        $categoria = app(CategoriaCompraService::class)->criar((new CategoriaCompraDTO())->setNome('Hortifruti'));
        $compra = Compra::factory()->create();

        app(CompraService::class)->atualizarCategoria($compra->id, $categoria->id);

        $this->assertSame($categoria->id, $compra->fresh()->categoria_compra_id);
    }

    public function test_excluir_compra_estorna_o_estoque(): void
    {
        $compra = $this->compraComItem();
        $ingredienteId = $compra->itens->first()->ingrediente_id;

        $saldoAntes = app(MovimentacaoEstoqueRepositoryInterface::class)->saldoPorIngrediente($ingredienteId);
        $this->assertEquals(5, $saldoAntes);

        app(CompraService::class)->excluir($compra->id);

        $saldoDepois = app(MovimentacaoEstoqueRepositoryInterface::class)->saldoPorIngrediente($ingredienteId);
        $this->assertEquals(0, $saldoDepois);

        $this->assertSoftDeleted('compras', ['id' => $compra->id]);
        $this->assertDatabaseHas('movimentacoes_estoque', [
            'ingrediente_id' => $ingredienteId,
            'tipo' => 'saida',
            'origem_tipo' => OrigemMovimentacao::ESTORNO_COMPRA->value,
            'origem_id' => $compra->id,
        ]);

        // O item da compra continua no banco (espelho/auditoria) mesmo após a exclusão.
        $this->assertDatabaseHas('itens_compra', ['compra_id' => $compra->id]);
    }

    public function test_excluir_compra_ja_excluida_lanca_erro(): void
    {
        $compra = $this->compraComItem();

        app(CompraService::class)->excluir($compra->id);

        $this->expectException(\Exception::class);

        app(CompraService::class)->excluir($compra->id);
    }

    public function test_excluir_compra_recalcula_custo_medio_ponderado_do_grupo(): void
    {
        $grupo = GrupoEquivalencia::factory()->create(['custo_medio_ponderado' => 0]);
        $compra = $this->compraComItem([], ['grupo_equivalencia_id' => $grupo->id]);

        // compraComItem() monta a compra direto via repository (não passa
        // pelo Service de importação/registro), então o recálculo que
        // normalmente aconteceria na criação real precisa ser simulado aqui.
        app(GrupoEquivalenciaRepositoryInterface::class)->recalcularCustoMedioPonderado($grupo->id);
        $this->assertEquals(2, $grupo->fresh()->custo_medio_ponderado);

        app(CompraService::class)->excluir($compra->id);

        // Sem itens ativos restantes no grupo, o custo médio volta a 0
        // (mesmo default de um grupo que nunca recebeu compra).
        $this->assertEquals(0, $grupo->fresh()->custo_medio_ponderado);
    }

    public function test_ver_detalhes_dispara_swal_com_a_view_renderizada(): void
    {
        $usuario = Usuario::factory()->create();
        $compra = $this->compraComItem();

        Livewire::actingAs($usuario)
            ->test(CompraIndex::class)
            ->call('verDetalhes', $compra->id)
            ->assertDispatched('swal');
    }

    public function test_limpar_filtros_reseta_os_campos(): void
    {
        $usuario = Usuario::factory()->create();
        $fornecedor = Fornecedor::factory()->create();

        Livewire::actingAs($usuario)
            ->test(CompraIndex::class)
            ->set('dataDe', '2026-01-01')
            ->set('dataAte', '2026-01-31')
            ->set('fornecedorId', (string) $fornecedor->id)
            ->set('categoriaCompraId', 'sem_categoria')
            ->call('limparFiltros')
            ->assertSet('dataDe', '')
            ->assertSet('dataAte', '')
            ->assertSet('fornecedorId', '')
            ->assertSet('categoriaCompraId', '');
    }

    public function test_categoria_compra_criar_e_listar(): void
    {
        $service = app(CategoriaCompraService::class);
        $service->criar((new CategoriaCompraDTO())->setNome('Limpeza'));
        $service->criar((new CategoriaCompraDTO())->setNome('Bebidas'));

        $categorias = $service->listar();

        $this->assertSame(2, $categorias->count());
        $this->assertSame('Bebidas', $categorias->first()->nome);
    }
}
