<?php

namespace Tests\Feature\Estoque;

use App\DTO\Estoque\ConversaoProdutoDTO;
use App\Enums\Cardapio\TipoProduto;
use App\Models\GrupoEquivalencia;
use App\Models\Produto;
use App\Models\Usuario;
use App\Services\ConversaoProdutoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ConversaoProdutoCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_form_de_conversao_renderiza_para_produto_avulso(): void
    {
        $usuario = Usuario::factory()->create();
        $produto = Produto::factory()->create(['tipo' => TipoProduto::AVULSO->value]);
        GrupoEquivalencia::factory()->create();

        $this->actingAs($usuario)
            ->get(route('estoque.conversoes.editar', $produto))
            ->assertOk();
    }

    public function test_salvar_conversao_cria_o_registro(): void
    {
        $produto = Produto::factory()->create(['tipo' => TipoProduto::AVULSO->value]);
        $grupo = GrupoEquivalencia::factory()->create();

        $dto = (new ConversaoProdutoDTO())
            ->setProdutoId($produto->id)
            ->setGrupoEquivalenciaId($grupo->id)
            ->setUnidadeCompra('CX')
            ->setQuantidadeUnidadeCompra(1)
            ->setRendeQuantidadeVenda(48);

        $conversao = app(ConversaoProdutoService::class)->salvar($dto);

        $this->assertDatabaseHas('conversoes_produto', [
            'produto_id' => $produto->id,
            'grupo_equivalencia_id' => $grupo->id,
            'unidade_compra' => 'CX',
            'rende_quantidade_venda' => 48,
        ]);
        $this->assertSame($grupo->id, $conversao->grupo_equivalencia_id);
    }

    public function test_salvar_conversao_novamente_atualiza_em_vez_de_duplicar(): void
    {
        $produto = Produto::factory()->create(['tipo' => TipoProduto::AVULSO->value]);
        $grupoA = GrupoEquivalencia::factory()->create();
        $grupoB = GrupoEquivalencia::factory()->create();

        $service = app(ConversaoProdutoService::class);

        $service->salvar(
            (new ConversaoProdutoDTO())
                ->setProdutoId($produto->id)
                ->setGrupoEquivalenciaId($grupoA->id)
                ->setUnidadeCompra('pacote')
                ->setQuantidadeUnidadeCompra(500)
                ->setRendeQuantidadeVenda(200),
        );

        $conversao = $service->salvar(
            (new ConversaoProdutoDTO())
                ->setProdutoId($produto->id)
                ->setGrupoEquivalenciaId($grupoB->id)
                ->setUnidadeCompra('CX')
                ->setQuantidadeUnidadeCompra(1)
                ->setRendeQuantidadeVenda(48),
        );

        $this->assertSame(1, \App\Models\ConversaoProduto::count());
        $this->assertSame($grupoB->id, $conversao->grupo_equivalencia_id);
        $this->assertSame('CX', $conversao->unidade_compra);
    }

    public function test_um_produto_nao_pode_ter_duas_conversoes(): void
    {
        $produto = Produto::factory()->create(['tipo' => TipoProduto::AVULSO->value]);
        $grupo = GrupoEquivalencia::factory()->create();

        \App\Models\ConversaoProduto::create([
            'produto_id' => $produto->id,
            'grupo_equivalencia_id' => $grupo->id,
            'unidade_compra' => 'CX',
            'quantidade_unidade_compra' => 1,
            'rende_quantidade_venda' => 48,
        ]);

        $this->expectException(\Illuminate\Database\QueryException::class);

        \App\Models\ConversaoProduto::create([
            'produto_id' => $produto->id,
            'grupo_equivalencia_id' => $grupo->id,
            'unidade_compra' => 'CX',
            'quantidade_unidade_compra' => 1,
            'rende_quantidade_venda' => 48,
        ]);
    }
}
