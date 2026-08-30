<?php

namespace Tests\Feature\Pedido;

use App\DTO\Pedido\AdicionarItemPedidoDTO;
use App\Enums\Pedido\OrigemItemPedido;
use App\Enums\Pedido\StatusItemPedido;
use App\Enums\Usuario\PerfilNome;
use App\Models\Comanda;
use App\Models\ItemPedido;
use App\Models\Perfil;
use App\Models\Produto;
use App\Models\Usuario;
use App\Services\Pedido\ItemPedidoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ItemPedidoServiceTest extends TestCase
{
    use RefreshDatabase;

    private function garcom(): Usuario
    {
        $perfil = Perfil::firstOrCreate(['nome' => PerfilNome::GARCOM->value]);

        return Usuario::factory()->create(['perfil_id' => $perfil->id]);
    }

    private function balconista(): Usuario
    {
        $perfil = Perfil::firstOrCreate(['nome' => PerfilNome::BALCONISTA->value]);

        return Usuario::factory()->create(['perfil_id' => $perfil->id]);
    }

    private function dto(int $comandaId, int $produtoId, int $quantidade = 1): AdicionarItemPedidoDTO
    {
        return (new AdicionarItemPedidoDTO())
            ->setComandaId($comandaId)
            ->setProdutoId($produtoId)
            ->setQuantidade($quantidade);
    }

    public function test_lancar_pelo_garcom_cria_direto_enviado_a_cozinha(): void
    {
        $garcom = $this->garcom();
        $this->actingAs($garcom);

        $comanda = Comanda::factory()->create(['garcom_id' => $garcom->id]);
        $produto = Produto::factory()->comPrecoInicial()->create();

        $item = app(ItemPedidoService::class)->lancarPeloGarcom($this->dto($comanda->id, $produto->id));

        $this->assertSame(StatusItemPedido::ENVIADO_COZINHA, $item->status);
        $this->assertSame(OrigemItemPedido::GARCOM, $item->origem);
        $this->assertSame($garcom->id, $item->lancado_por);
    }

    public function test_pedir_pelo_cliente_cai_na_fila_de_aprovacao(): void
    {
        $comanda = Comanda::factory()->create();
        $produto = Produto::factory()->comPrecoInicial()->create();

        $item = app(ItemPedidoService::class)->pedirPeloCliente($this->dto($comanda->id, $produto->id));

        $this->assertSame(StatusItemPedido::PENDENTE_APROVACAO, $item->status);
        $this->assertSame(OrigemItemPedido::CLIENTE_APP, $item->origem);
        $this->assertNull($item->lancado_por);
    }

    public function test_produto_indisponivel_nao_pode_ser_lancado_pelo_garcom(): void
    {
        $garcom = $this->garcom();
        $this->actingAs($garcom);

        $comanda = Comanda::factory()->create();
        $produto = Produto::factory()->indisponivel()->comPrecoInicial()->create();

        $this->expectException(\Exception::class);

        app(ItemPedidoService::class)->lancarPeloGarcom($this->dto($comanda->id, $produto->id));
    }

    public function test_garcom_atribuido_e_o_unico_que_pode_aprovar(): void
    {
        $garcomDaMesa = $this->garcom();
        $outroGarcom = $this->garcom();

        $comanda = Comanda::factory()->create(['garcom_id' => $garcomDaMesa->id]);
        $item = ItemPedido::factory()->pendenteAprovacao()->deCliente()->create(['comanda_id' => $comanda->id]);

        $this->expectExceptionMessage('Este pedido é exclusivo do garçom responsável pela mesa.');

        app(ItemPedidoService::class)->aprovar($item->id, $outroGarcom->id);
    }

    public function test_garcom_atribuido_consegue_aprovar_seu_proprio_pedido(): void
    {
        $garcomDaMesa = $this->garcom();

        $comanda = Comanda::factory()->create(['garcom_id' => $garcomDaMesa->id]);
        $item = ItemPedido::factory()->pendenteAprovacao()->deCliente()->create(['comanda_id' => $comanda->id]);

        $aprovado = app(ItemPedidoService::class)->aprovar($item->id, $garcomDaMesa->id);

        $this->assertSame(StatusItemPedido::ENVIADO_COZINHA, $aprovado->status);
    }

    public function test_mesa_sem_garcom_qualquer_garcom_pode_aprovar(): void
    {
        $qualquerGarcom = $this->garcom();

        $comanda = Comanda::factory()->create(['garcom_id' => null]);
        $item = ItemPedido::factory()->pendenteAprovacao()->deCliente()->create(['comanda_id' => $comanda->id]);

        $aprovado = app(ItemPedidoService::class)->aprovar($item->id, $qualquerGarcom->id);

        $this->assertSame(StatusItemPedido::ENVIADO_COZINHA, $aprovado->status);
    }

    public function test_balcao_pode_aprovar_mesmo_com_garcom_atribuido_a_outra_pessoa(): void
    {
        $garcomDaMesa = $this->garcom();
        $balconista = $this->balconista();

        $comanda = Comanda::factory()->create(['garcom_id' => $garcomDaMesa->id]);
        $item = ItemPedido::factory()->pendenteAprovacao()->deCliente()->create(['comanda_id' => $comanda->id]);

        $aprovado = app(ItemPedidoService::class)->aprovar($item->id, $balconista->id);

        $this->assertSame(StatusItemPedido::ENVIADO_COZINHA, $aprovado->status);
    }

    public function test_rejeitar_com_trava_otimista(): void
    {
        $garcomA = $this->garcom();
        $garcomB = $this->garcom();

        $comanda = Comanda::factory()->create(['garcom_id' => null]);
        $item = ItemPedido::factory()->pendenteAprovacao()->deCliente()->create(['comanda_id' => $comanda->id]);

        app(ItemPedidoService::class)->rejeitar($item->id, $garcomA->id);

        $this->assertSame(StatusItemPedido::REJEITADO, $item->fresh()->status);

        $this->expectExceptionMessage('Este pedido já foi resolvido por outro colega.');

        app(ItemPedidoService::class)->rejeitar($item->id, $garcomB->id);
    }
}
