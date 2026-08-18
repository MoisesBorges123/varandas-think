<?php

namespace App\Livewire\Comanda;

use App\DTO\Comanda\AbrirComandaDTO;
use App\Enums\Comanda\TipoComanda;
use App\Enums\Usuario\PerfilNome;
use App\Models\Usuario;
use App\Services\ComandaService;
use App\Services\MesaService;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ComandaAbrirForm extends Component
{
    #[Validate('required|integer')]
    public string $mesaId = '';

    #[Validate('required|string')]
    public string $tipo = '';

    public string $garcomId = '';

    public string $clienteNome = '';

    public string $clienteCpf = '';

    public string $clienteTelefone = '';

    public function mount(): void
    {
        $this->tipo = TipoComanda::INDIVIDUAL->value;

        $usuario = auth()->user();

        if ($usuario?->perfil?->nome === PerfilNome::GARCOM) {
            $this->garcomId = (string) $usuario->id;
        }
    }

    public function salvar(ComandaService $service): void
    {
        $this->validate();

        $dto = AbrirComandaDTO::fromLivewire($this);

        $service->abrir($dto);

        $this->dispatch('toastr', message: 'Comanda aberta com sucesso.', type: 'success', title: 'Pronto');

        $this->redirect(route('comandas.index'), navigate: false);
    }

    public function render(MesaService $mesaService)
    {
        return view('livewire.comanda.comanda-abrir-form', [
            'mesasDisponiveis' => $mesaService->listarSemComandaAberta(),
            'garcons' => Usuario::whereHas('perfil', fn ($q) => $q->where('nome', PerfilNome::GARCOM->value))
                ->orderBy('nome')
                ->get(),
            'tipos' => TipoComanda::cases(),
        ]);
    }
}
