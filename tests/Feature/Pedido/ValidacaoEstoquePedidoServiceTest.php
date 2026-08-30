<?php

namespace Tests\Feature\Pedido;

use App\DTO\Comanda\ConfiguracaoDTO;
use App\Models\Ingrediente;
use App\Models\Produto;
use App\Models\Receita;
use App\Repositories\Contracts\MovimentacaoEstoqueRepositoryInterface;
use App\Services\ConfiguracaoService;
use App\Services\Pedido\ValidacaoEstoquePedidoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ValidacaoEstoquePedidoServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_esta_ativa_requer_os_dois_toggles_ligados(): void
    {
        $produtoComToggle = Produto::factory()->create(['valida_estoque_automatico' => true]);
        $produtoSemToggle = Produto::factory()->create(['valida_estoque_automatico' => false]);

        $service = app(ValidacaoEstoquePedidoService::class);

        // Toggle geral nasce desligado (CLAUDE.md/plano: fail-open) — os
        // dois produtos ficam sem validação até o dono ligar conscientemente.
        $this->assertFalse($service->estaAtiva($produtoComToggle));
        $this->assertFalse($service->estaAtiva($produtoSemToggle));

        app(ConfiguracaoService::class)->atualizar(
            (new ConfiguracaoDTO())->setLatitude(0)->setLongitude(0)->setRaioMetros(100)->setValidacaoEstoqueAutomaticaAtiva(true),
        );

        $this->assertTrue($service->estaAtiva($produtoComToggle));
        $this->assertFalse($service->estaAtiva($produtoSemToggle));
    }

    public function test_sem_receita_cadastrada_nao_bloqueia(): void
    {
        $produto = Produto::factory()->create();

        $this->assertTrue(app(ValidacaoEstoquePedidoService::class)->possuiEstoqueSuficiente($produto, 1));
    }

    public function test_bloqueia_quando_saldo_insuficiente(): void
    {
        $ingrediente = Ingrediente::factory()->create();
        $produto = Produto::factory()->create();
        $receita = Receita::factory()->create(['produto_id' => $produto->id]);
        $receita->ingredientes()->attach($ingrediente->id, ['quantidade' => 10, 'unidade_medida' => 'un']);

        $this->assertFalse(app(ValidacaoEstoquePedidoService::class)->possuiEstoqueSuficiente($produto, 1));
    }

    public function test_libera_quando_saldo_suficiente(): void
    {
        $ingrediente = Ingrediente::factory()->create();
        $produto = Produto::factory()->create();
        $receita = Receita::factory()->create(['produto_id' => $produto->id]);
        $receita->ingredientes()->attach($ingrediente->id, ['quantidade' => 2, 'unidade_medida' => 'un']);

        app(MovimentacaoEstoqueRepositoryInterface::class)->registrarEntrada($ingrediente->id, 10, 'compra', null, null);

        $service = app(ValidacaoEstoquePedidoService::class);

        $this->assertTrue($service->possuiEstoqueSuficiente($produto, 3)); // precisa de 6, tem 10
        $this->assertFalse($service->possuiEstoqueSuficiente($produto, 6)); // precisa de 12, tem 10
    }
}
