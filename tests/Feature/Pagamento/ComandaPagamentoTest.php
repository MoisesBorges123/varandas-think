<?php

namespace Tests\Feature\Pagamento;

use App\DTO\Comanda\ConfiguracaoDTO;
use App\Enums\Pagamento\FormaPagamento;
use App\Enums\Pedido\StatusItemPedido;
use App\Livewire\Pagamento\ComandaPagamento;
use App\Models\Comanda;
use App\Models\ItemPedido;
use App\Models\Produto;
use App\Models\Usuario;
use App\Services\ComandaService;
use App\Services\ConfiguracaoService;
use App\Services\Pagamento\Gateway\MercadoPagoGatewayInterface;
use App\Services\Pagamento\Gateway\ResultadoCobranca;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ComandaPagamentoTest extends TestCase
{
    use RefreshDatabase;

    private function itemCobravel(Comanda $comanda, float $preco = 10.00): ItemPedido
    {
        $produto = Produto::factory()->comPrecoInicial($preco)->create();

        return ItemPedido::factory()->create([
            'comanda_id' => $comanda->id,
            'produto_id' => $produto->id,
            'preco_produto_id' => $produto->precoAtual->id,
            'status' => StatusItemPedido::ENVIADO_COZINHA->value,
        ]);
    }

    public function test_mount_pre_marca_todos_os_itens_abertos(): void
    {
        $usuario = Usuario::factory()->create();
        $comanda = Comanda::factory()->create();
        $itemA = $this->itemCobravel($comanda);
        $itemB = $this->itemCobravel($comanda);

        Livewire::actingAs($usuario)
            ->test(ComandaPagamento::class, ['comanda' => $comanda])
            ->assertSet("itensSelecionados.{$itemA->id}", true)
            ->assertSet("itensSelecionados.{$itemB->id}", true);
    }

    public function test_alternar_item_desmarca_e_remarca(): void
    {
        $usuario = Usuario::factory()->create();
        $comanda = Comanda::factory()->create();
        $item = $this->itemCobravel($comanda);

        Livewire::actingAs($usuario)
            ->test(ComandaPagamento::class, ['comanda' => $comanda])
            ->call('alternarItem', $item->id)
            ->assertSet("itensSelecionados.{$item->id}", false)
            ->call('alternarItem', $item->id)
            ->assertSet("itensSelecionados.{$item->id}", true);
    }

    public function test_pagar_por_itens_em_dinheiro_reseta_selecao_e_fecha_comanda(): void
    {
        $usuario = Usuario::factory()->create();
        $comanda = Comanda::factory()->create();
        $item = $this->itemCobravel($comanda, 10.00);

        Livewire::actingAs($usuario)
            ->test(ComandaPagamento::class, ['comanda' => $comanda])
            ->call('pagarPorItens', FormaPagamento::DINHEIRO->value)
            ->assertDispatched('toastr');

        $this->assertDatabaseHas('pagamentos', [
            'comanda_id' => $comanda->id,
            'forma_pagamento' => FormaPagamento::DINHEIRO->value,
            'status' => 'confirmado',
        ]);
        $this->assertSame('fechada', $comanda->fresh()->status->value);
    }

    public function test_pagar_valor_livre_registra_pagamento(): void
    {
        $usuario = Usuario::factory()->create();
        $comanda = Comanda::factory()->create();
        $this->itemCobravel($comanda, 100.00);

        Livewire::actingAs($usuario)
            ->test(ComandaPagamento::class, ['comanda' => $comanda])
            ->set('valorLivre', '25,50')
            ->call('pagarValorLivre', FormaPagamento::DINHEIRO->value)
            ->assertDispatched('toastr');

        $this->assertDatabaseHas('pagamentos', [
            'comanda_id' => $comanda->id,
            'valor' => 25.50,
        ]);
    }

    public function test_pagamento_pix_exibe_qr_code_ate_fechar(): void
    {
        $this->mock(MercadoPagoGatewayInterface::class, function ($mock) {
            $mock->shouldReceive('gerarPixDinamico')
                ->once()
                ->andReturn(new ResultadoCobranca(mpId: 'mp-pix-1', status: 'pendente', qrCode: 'copia-cola-fake', qrCodeBase64: 'imagem-fake'));
        });

        $usuario = Usuario::factory()->create();
        $comanda = Comanda::factory()->create();
        $this->itemCobravel($comanda, 10.00);

        $componente = Livewire::actingAs($usuario)
            ->test(ComandaPagamento::class, ['comanda' => $comanda])
            ->set('valorLivre', '10')
            ->call('pagarValorLivre', FormaPagamento::PIX_CELULAR->value)
            ->assertSet('pixExibido.qr_code', 'copia-cola-fake');

        $componente->call('fecharQrPix')->assertSet('pixExibido', null);
    }

    public function test_botao_de_maquininha_fica_desabilitado_sem_device_id_configurado(): void
    {
        $usuario = Usuario::factory()->create();
        $comanda = Comanda::factory()->create();
        $this->itemCobravel($comanda, 10.00);

        $html = Livewire::actingAs($usuario)
            ->test(ComandaPagamento::class, ['comanda' => $comanda])
            ->html();

        // O title de aviso só é renderizado quando $semTerminal é true —
        // asserção direta na mensagem, não em "disabled" (que também
        // aparece em todo botão via wire:loading.attr="disabled").
        $this->assertStringContainsString('Configure o device_id dessa maquininha', $html);
    }

    public function test_botao_de_maquininha_habilita_quando_device_id_configurado(): void
    {
        app(ConfiguracaoService::class)->atualizar(
            (new ConfiguracaoDTO())
                ->setLatitude(0)->setLongitude(0)->setRaioMetros(100)
                ->setMpDeviceIdBalcao('TERMINAL-1')
                ->setMpDeviceIdPortatil('TERMINAL-2'),
        );

        $usuario = Usuario::factory()->create();
        $comanda = Comanda::factory()->create();
        $this->itemCobravel($comanda, 10.00);

        $html = Livewire::actingAs($usuario)
            ->test(ComandaPagamento::class, ['comanda' => $comanda])
            ->html();

        $this->assertStringNotContainsString('Configure o device_id dessa maquininha', $html);
    }
}
