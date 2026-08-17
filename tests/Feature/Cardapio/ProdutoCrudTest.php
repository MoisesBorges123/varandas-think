<?php

namespace Tests\Feature\Cardapio;

use App\DTO\Cardapio\DefinirPrecoDTO;
use App\DTO\Cardapio\ProdutoDTO;
use App\Enums\Cardapio\TipoProduto;
use App\Models\Categoria;
use App\Models\PrecoProduto;
use App\Models\Produto;
use App\Models\Usuario;
use App\Services\ProdutoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProdutoCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_requer_autenticacao(): void
    {
        $this->get(route('cardapio.produtos.index'))
            ->assertRedirect(route('login'));
    }

    public function test_index_renderiza_para_usuario_autenticado(): void
    {
        $usuario = Usuario::factory()->create();

        $this->actingAs($usuario)
            ->get(route('cardapio.produtos.index'))
            ->assertOk();
    }

    public function test_criar_produto_ja_registra_preco_inicial(): void
    {
        $categoria = Categoria::factory()->create();

        $dto = (new ProdutoDTO())
            ->setCategoriaId($categoria->id)
            ->setNome('X-Salada')
            ->setTipo(TipoProduto::PREPARADO)
            ->setAtivo(true)
            ->setDisponivel(true)
            ->setValidaEstoqueAutomatico(true);

        $produto = app(ProdutoService::class)->criar($dto, 25.90);

        $this->assertDatabaseHas('produtos', [
            'id' => $produto->id,
            'nome' => 'X-Salada',
        ]);
        $this->assertDatabaseHas('precos_produtos', [
            'produto_id' => $produto->id,
            'preco' => 25.90,
        ]);
        $this->assertSame('25.90', $produto->precoAtual->preco);
    }

    public function test_definir_preco_insere_nova_linha_em_vez_de_atualizar_a_antiga(): void
    {
        $produto = Produto::factory()->comPrecoInicial(10.00)->create();
        $precoAntigo = $produto->precos()->first();

        $dto = (new DefinirPrecoDTO())
            ->setProdutoId($produto->id)
            ->setPreco(15.00);

        app(ProdutoService::class)->definirPreco($dto);

        $this->assertSame(2, $produto->precos()->count());

        $precoAntigo->refresh();
        $this->assertSame('10.00', $precoAntigo->preco);

        $this->assertSame('15.00', $produto->precoAtual->fresh()->preco);
    }

    public function test_alternar_ativo_e_disponivel(): void
    {
        $produto = Produto::factory()->create(['ativo' => true, 'disponivel' => true]);

        app(ProdutoService::class)->alternarAtivo($produto->id);
        app(ProdutoService::class)->alternarDisponivel($produto->id);

        $produto->refresh();
        $this->assertFalse($produto->ativo);
        $this->assertFalse($produto->disponivel);
        $this->assertFalse($produto->podeSerVendido());
    }
}
