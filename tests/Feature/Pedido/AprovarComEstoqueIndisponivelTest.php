<?php

namespace Tests\Feature\Pedido;

use App\DTO\Comanda\ConfiguracaoDTO;
use App\Enums\Pedido\StatusItemPedido;
use App\Enums\Usuario\PerfilNome;
use App\Models\Comanda;
use App\Models\Ingrediente;
use App\Models\ItemPedido;
use App\Models\Perfil;
use App\Models\Produto;
use App\Models\Receita;
use App\Models\Usuario;
use App\Services\ConfiguracaoService;
use App\Services\Pedido\ItemPedidoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AprovarComEstoqueIndisponivelTest extends TestCase
{
    use RefreshDatabase;

    public function test_aprovar_com_estoque_insuficiente_marca_indisponivel_sem_lancar_excecao(): void
    {
        app(ConfiguracaoService::class)->atualizar(
            (new ConfiguracaoDTO())
                ->setLatitude(-23.5505)
                ->setLongitude(-46.6333)
                ->setRaioMetros(100)
                ->setValidacaoEstoqueAutomaticaAtiva(true),
        );

        $ingrediente = Ingrediente::factory()->create();
        $produto = Produto::factory()->comPrecoInicial()->create(['valida_estoque_automatico' => true]);
        $receita = Receita::factory()->create(['produto_id' => $produto->id]);
        $receita->ingredientes()->attach($ingrediente->id, ['quantidade' => 5, 'unidade_medida' => 'un']);

        // Nenhuma entrada registrada — saldo zero, insuficiente pras 5 unidades.

        $garcomPerfil = Perfil::firstOrCreate(['nome' => PerfilNome::GARCOM->value]);
        $garcom = Usuario::factory()->create(['perfil_id' => $garcomPerfil->id]);

        $comanda = Comanda::factory()->create(['garcom_id' => null]);
        $item = ItemPedido::factory()->pendenteAprovacao()->deCliente()->create([
            'comanda_id' => $comanda->id,
            'produto_id' => $produto->id,
            'preco_produto_id' => $produto->precoAtual->id,
            'quantidade' => 1,
        ]);

        $resultado = app(ItemPedidoService::class)->aprovar($item->id, $garcom->id);

        $this->assertSame(StatusItemPedido::INDISPONIVEL_ESTOQUE, $resultado->status);
    }
}
