<?php

namespace Tests\Feature\Publico;

use App\DTO\Comanda\ConfiguracaoDTO;
use App\Enums\Cardapio\TipoProduto;
use App\Enums\Pedido\StatusItemPedido;
use App\Livewire\Publico\ComandaAcesso;
use App\Models\Comanda;
use App\Models\ItemPedido;
use App\Models\Produto;
use App\Services\ConfiguracaoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class CatalogoClienteTest extends TestCase
{
    use RefreshDatabase;

    private function configurarBar(): void
    {
        app(ConfiguracaoService::class)->atualizar(
            (new ConfiguracaoDTO())->setLatitude(-23.5505)->setLongitude(-46.6333)->setRaioMetros(100),
        );
    }

    public function test_catalogo_nao_lista_produto_de_venda_avulsa(): void
    {
        $this->configurarBar();
        $comanda = Comanda::factory()->create();

        $preparado = Produto::factory()->comPrecoInicial()->create(['tipo' => TipoProduto::PREPARADO->value, 'nome' => 'Hambúrguer Artesanal']);
        Produto::factory()->comPrecoInicial()->create(['tipo' => TipoProduto::AVULSO->value, 'nome' => 'Bala de Goma Avulsa']);

        $html = Livewire::test(ComandaAcesso::class, ['token' => $comanda->token])
            ->call('verificarLocalizacao', -23.5505, -46.6333)
            ->html();

        $this->assertStringContainsString('Hambúrguer Artesanal', $html);
        $this->assertStringNotContainsString('Bala de Goma Avulsa', $html);
    }

    public function test_banner_de_promocao_so_aparece_com_flag_ligada(): void
    {
        $this->configurarBar();
        $comanda = Comanda::factory()->create();

        Produto::factory()->comPrecoInicial()->create([
            'tipo' => TipoProduto::PREPARADO->value,
            'nome' => 'Prato Comum',
            'em_promocao' => false,
        ]);
        Produto::factory()->comPrecoInicial()->create([
            'tipo' => TipoProduto::PREPARADO->value,
            'nome' => 'Prato Em Destaque',
            'em_promocao' => true,
        ]);

        $html = Livewire::test(ComandaAcesso::class, ['token' => $comanda->token])
            ->call('verificarLocalizacao', -23.5505, -46.6333)
            ->html();

        // A classe catalogo-promo-faixa também existe no <style> (CSS),
        // então a asserção precisa mirar a tag real, não só o nome da
        // classe (que apareceria sempre, mesmo sem o banner renderizado).
        $this->assertStringContainsString('<div class="catalogo-promo-faixa">', $html);

        // Só "Prato Em Destaque" tem em_promocao=true — o selo "Promoção"
        // só é renderizado uma vez, dentro do banner, mesmo com dois
        // produtos aparecendo no catálogo (o nome da classe também
        // aparece uma vez no <style>, por isso mirar a tag real).
        $this->assertSame(1, substr_count($html, '<span class="catalogo-promo-selo">'));
    }

    public function test_produto_sem_promocao_nao_aparece_no_banner(): void
    {
        $this->configurarBar();
        $comanda = Comanda::factory()->create();

        Produto::factory()->comPrecoInicial()->create([
            'tipo' => TipoProduto::PREPARADO->value,
            'em_promocao' => false,
        ]);

        $html = Livewire::test(ComandaAcesso::class, ['token' => $comanda->token])
            ->call('verificarLocalizacao', -23.5505, -46.6333)
            ->html();

        // Mesma ressalva: mira a tag real, não o nome da classe (que
        // também aparece no <style> independente do banner renderizar).
        $this->assertStringNotContainsString('<div class="catalogo-promo-faixa">', $html);
    }

    public function test_abrir_detalhe_popula_produto_detalhe(): void
    {
        $this->configurarBar();
        $comanda = Comanda::factory()->create();
        $produto = Produto::factory()->comPrecoInicial()->create(['tipo' => TipoProduto::PREPARADO->value, 'nome' => 'Prato Detalhado']);

        Livewire::test(ComandaAcesso::class, ['token' => $comanda->token])
            ->call('verificarLocalizacao', -23.5505, -46.6333)
            ->call('abrirDetalhe', $produto->id)
            ->assertSet('produtoDetalheId', $produto->id)
            ->assertSee('produto-detalhe-overlay', false)
            ->assertSee('Prato Detalhado');
    }

    public function test_cliente_ve_apenas_a_media_agregada_de_avaliacao(): void
    {
        $this->configurarBar();
        $comanda = Comanda::factory()->create();
        $produto = Produto::factory()->comPrecoInicial()->create(['tipo' => TipoProduto::PREPARADO->value]);

        $itemA = ItemPedido::factory()->create(['produto_id' => $produto->id, 'preco_produto_id' => $produto->precoAtual->id, 'status' => StatusItemPedido::ENTREGUE->value]);
        $itemB = ItemPedido::factory()->create(['produto_id' => $produto->id, 'preco_produto_id' => $produto->precoAtual->id, 'status' => StatusItemPedido::ENTREGUE->value]);

        app(\App\Services\Cardapio\AvaliacaoProdutoService::class)->avaliar(
            (new \App\DTO\Cardapio\AvaliarProdutoDTO())->setItemPedidoId($itemA->id)->setNota(5),
        );
        app(\App\Services\Cardapio\AvaliacaoProdutoService::class)->avaliar(
            (new \App\DTO\Cardapio\AvaliarProdutoDTO())->setItemPedidoId($itemB->id)->setNota(1),
        );

        $html = Livewire::test(ComandaAcesso::class, ['token' => $comanda->token])
            ->call('verificarLocalizacao', -23.5505, -46.6333)
            ->html();

        $this->assertStringContainsString('★ 3,0', $html);
        $this->assertStringContainsString('(2)', $html);
    }

    public function test_avaliar_pelo_fluxo_do_cliente_bloqueia_reenvio(): void
    {
        $this->configurarBar();
        $comanda = Comanda::factory()->create();
        $produto = Produto::factory()->comPrecoInicial()->create(['tipo' => TipoProduto::PREPARADO->value]);
        $item = ItemPedido::factory()->create([
            'comanda_id' => $comanda->id,
            'produto_id' => $produto->id,
            'preco_produto_id' => $produto->precoAtual->id,
            'status' => StatusItemPedido::ENTREGUE->value,
        ]);

        $componente = Livewire::test(ComandaAcesso::class, ['token' => $comanda->token])
            ->call('verificarLocalizacao', -23.5505, -46.6333)
            ->call('avaliar', $item->id, 4)
            ->assertSee('Você avaliou: 4 ★');

        $this->assertDatabaseCount('avaliacoes_produto', 1);

        $componente->call('avaliar', $item->id, 5)->assertDispatched('toastr');

        $this->assertDatabaseCount('avaliacoes_produto', 1);
    }
}
