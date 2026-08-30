<?php

namespace Tests\Feature\Pedido;

use App\Enums\Estoque\OrigemMovimentacao;
use App\Enums\Pedido\StatusItemPedido;
use App\Enums\Usuario\PerfilNome;
use App\Models\Comanda;
use App\Models\Ingrediente;
use App\Models\ItemPedido;
use App\Models\Perfil;
use App\Models\Produto;
use App\Models\Receita;
use App\Models\Usuario;
use App\Repositories\Contracts\MovimentacaoEstoqueRepositoryInterface;
use App\Services\Pedido\ItemPedidoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EstornoEstoqueAoCancelarTest extends TestCase
{
    use RefreshDatabase;

    public function test_cancelar_item_ja_despachado_estorna_o_estoque_baixado(): void
    {
        $ingrediente = Ingrediente::factory()->create();
        $produto = Produto::factory()->comPrecoInicial()->create();
        $receita = Receita::factory()->create(['produto_id' => $produto->id]);
        $receita->ingredientes()->attach($ingrediente->id, ['quantidade' => 3, 'unidade_medida' => 'un']);

        $movimentacaoRepo = app(MovimentacaoEstoqueRepositoryInterface::class);
        $movimentacaoRepo->registrarEntrada($ingrediente->id, 10, OrigemMovimentacao::COMPRA->value, null, null);

        $balconistaPerfil = Perfil::firstOrCreate(['nome' => PerfilNome::BALCONISTA->value]);
        $balconista = Usuario::factory()->create(['perfil_id' => $balconistaPerfil->id]);

        $comanda = Comanda::factory()->create();
        $item = ItemPedido::factory()->enviadoCozinha()->create([
            'comanda_id' => $comanda->id,
            'produto_id' => $produto->id,
            'preco_produto_id' => $produto->precoAtual->id,
            'quantidade' => 1,
        ]);

        // Simula a baixa que teria acontecido quando o item entrou em
        // enviado_cozinha (o item foi criado direto via factory, sem
        // passar pelo Service, então precisamos simular esse passo).
        $movimentacaoRepo->registrarSaida($ingrediente->id, 3, OrigemMovimentacao::RECEITA->value, $item->id, null);

        $this->assertSame(7.0, $movimentacaoRepo->saldoPorIngrediente($ingrediente->id));

        app(ItemPedidoService::class)->cancelar($item->id, $balconista->id);

        $this->assertSame(10.0, $movimentacaoRepo->saldoPorIngrediente($ingrediente->id));
        $this->assertSame(StatusItemPedido::CANCELADO, $item->fresh()->status);
    }

    public function test_cancelar_item_ainda_nao_despachado_nao_gera_estorno(): void
    {
        $ingrediente = Ingrediente::factory()->create();
        $produto = Produto::factory()->comPrecoInicial()->create();
        $receita = Receita::factory()->create(['produto_id' => $produto->id]);
        $receita->ingredientes()->attach($ingrediente->id, ['quantidade' => 3, 'unidade_medida' => 'un']);

        $movimentacaoRepo = app(MovimentacaoEstoqueRepositoryInterface::class);
        $movimentacaoRepo->registrarEntrada($ingrediente->id, 10, OrigemMovimentacao::COMPRA->value, null, null);

        $garcomPerfil = Perfil::firstOrCreate(['nome' => PerfilNome::GARCOM->value]);
        $garcom = Usuario::factory()->create(['perfil_id' => $garcomPerfil->id]);

        $item = ItemPedido::factory()->pendenteAprovacao()->create([
            'produto_id' => $produto->id,
            'preco_produto_id' => $produto->precoAtual->id,
            'lancado_por' => $garcom->id,
        ]);

        app(ItemPedidoService::class)->cancelar($item->id, $garcom->id);

        $this->assertSame(10.0, $movimentacaoRepo->saldoPorIngrediente($ingrediente->id));
    }
}
