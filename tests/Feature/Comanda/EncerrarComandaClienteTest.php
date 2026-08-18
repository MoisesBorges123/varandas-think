<?php

namespace Tests\Feature\Comanda;

use App\DTO\Comanda\ConfiguracaoDTO;
use App\Enums\Comanda\StatusComanda;
use App\Livewire\Publico\ComandaAcesso;
use App\Models\Comanda;
use App\Services\ConfiguracaoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class EncerrarComandaClienteTest extends TestCase
{
    use RefreshDatabase;

    private function configurarBar(): void
    {
        app(ConfiguracaoService::class)->atualizar(
            (new ConfiguracaoDTO())->setLatitude(-23.5505)->setLongitude(-46.6333)->setRaioMetros(100),
        );
    }

    public function test_encerra_quando_dentro_do_raio_e_aberta(): void
    {
        $this->configurarBar();
        $comanda = Comanda::factory()->create();

        Livewire::test(ComandaAcesso::class, ['token' => $comanda->token])
            ->call('encerrar', -23.5505, -46.6333)
            ->assertSet('encerradaComSucesso', true);

        $this->assertSame(StatusComanda::FECHADA, $comanda->fresh()->status);
    }

    public function test_nao_encerra_fora_do_raio(): void
    {
        $this->configurarBar();
        $comanda = Comanda::factory()->create();

        Livewire::test(ComandaAcesso::class, ['token' => $comanda->token])
            ->call('encerrar', -23.9, -46.9)
            ->assertSet('encerradaComSucesso', false);

        $this->assertSame(StatusComanda::ABERTA, $comanda->fresh()->status);
    }

    public function test_nao_encerra_comanda_ja_fechada(): void
    {
        $this->configurarBar();
        $comanda = Comanda::factory()->fechada()->create();

        Livewire::test(ComandaAcesso::class, ['token' => $comanda->token])
            ->call('encerrar', -23.5505, -46.6333)
            ->assertSet('encerradaComSucesso', false);
    }
}
