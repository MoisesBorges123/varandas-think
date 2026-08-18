<?php

namespace App\Livewire\Publico;

use App\Models\Comanda;
use App\Services\ComandaService;
use App\Services\GeolocalizacaoService;
use Livewire\Attributes\Layout;
use Livewire\Component;

/**
 * Sessão contínua da comanda do cliente (CLAUDE.md seção 4.4) — token
 * inválido, comanda fechada e fora do raio caem todos no mesmo estado
 * "bloqueado", com a mesma mensagem genérica, pra nunca confirmar que
 * uma comanda existiu por trás de um token específico.
 */
#[Layout('components.layouts.cliente')]
class ComandaAcesso extends Component
{
    public string $token = '';

    public bool $verificado = false;

    public bool $liberado = false;

    public bool $encerradaComSucesso = false;

    public ?Comanda $comanda = null;

    public function mount(string $token): void
    {
        $this->token = $token;
    }

    public function verificarLocalizacao(float $lat, float $lng, ComandaService $service, GeolocalizacaoService $geo): void
    {
        $comanda = $service->encontrarPorToken($this->token);

        $this->liberado = $comanda !== null
            && $comanda->estaAberta()
            && $geo->estaDentroDoRaio($lat, $lng);

        $this->comanda = $this->liberado ? $comanda->load('mesa') : null;
        $this->verificado = true;
    }

    public function encerrar(float $lat, float $lng, ComandaService $service, GeolocalizacaoService $geo): void
    {
        $this->verificarLocalizacao($lat, $lng, $service, $geo);

        if (! $this->liberado) {
            return;
        }

        $service->fechar($this->comanda->id);

        $this->liberado = false;
        $this->comanda = null;
        $this->encerradaComSucesso = true;
    }

    public function render()
    {
        return view('livewire.publico.comanda-acesso');
    }
}
