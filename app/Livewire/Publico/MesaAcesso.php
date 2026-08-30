<?php

namespace App\Livewire\Publico;

use App\DTO\Comanda\AbrirComandaDTO;
use App\Enums\Comanda\TipoComanda;
use App\Models\Mesa;
use App\Services\ComandaService;
use App\Services\GeolocalizacaoService;
use App\Services\MesaService;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

/**
 * Ponto de entrada do QR code impresso na mesa (CLAUDE.md seção 4.1).
 * Sem autenticação — o "gate" real é geolocalização, verificado dentro
 * de abrirComanda(), não por middleware.
 *
 * A rota usa o TOKEN da mesa, nunca o id sequencial — id incremental na
 * URL deixaria qualquer um navegar mesa por mesa só trocando o número.
 */
#[Layout('components.layouts.cliente')]
class MesaAcesso extends Component
{
    public Mesa $mesa;

    public string $mesaId = '';

    #[Validate('required|string|max:100')]
    public string $clienteNome = '';

    #[Validate('required|string|max:20')]
    public string $clienteTelefone = '';

    #[Validate('nullable|email|max:150')]
    public string $clienteEmail = '';

    public string $tipo = '';

    public string $garcomId = '';

    public bool $foraDoRaio = false;

    public function mount(string $token, ComandaService $service, MesaService $mesaService): void
    {
        $this->mesa = $mesaService->encontrarPorToken($token) ?? abort(404);
        $this->mesaId = (string) $this->mesa->id;
        $this->tipo = TipoComanda::INDIVIDUAL->value;

        $comandaAberta = $service->listar(['mesa_id' => $this->mesa->id, 'status' => 'aberta'])->first();

        if ($comandaAberta) {
            $this->redirect(route('publico.comanda.acesso', $comandaAberta->token), navigate: false);
        }
    }

    public function abrirComanda(float $lat, float $lng, ComandaService $service, GeolocalizacaoService $geo): void
    {
        $this->validate();

        if (! $geo->estaDentroDoRaio($lat, $lng)) {
            $this->foraDoRaio = true;

            return;
        }

        $this->foraDoRaio = false;

        $dto = AbrirComandaDTO::fromLivewire($this);

        $comanda = $service->abrir($dto);

        $this->redirect(route('publico.comanda.acesso', $comanda->token), navigate: false);
    }

    public function render()
    {
        return view('livewire.publico.mesa-acesso');
    }
}
