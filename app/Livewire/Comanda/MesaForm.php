<?php

namespace App\Livewire\Comanda;

use App\DTO\Comanda\MesaDTO;
use App\Models\Mesa;
use App\Services\MesaService;
use Livewire\Attributes\Validate;
use Livewire\Component;

class MesaForm extends Component
{
    public ?Mesa $mesa = null;

    #[Validate('required|string|max:10')]
    public string $numero = '';

    public function mount(?Mesa $mesa = null): void
    {
        if ($mesa?->exists) {
            $this->mesa = $mesa;
            $this->numero = $mesa->numero;
        }
    }

    public function salvar(MesaService $service): void
    {
        $this->validate();

        $dto = MesaDTO::fromLivewire($this);

        if ($this->mesa) {
            $service->atualizar($this->mesa->id, $dto);
        } else {
            $service->criar($dto);
        }

        $this->dispatch('toastr', message: 'Mesa salva com sucesso.', type: 'success', title: 'Pronto');

        $this->redirect(route('mesas.index'), navigate: false);
    }

    public function render()
    {
        return view('livewire.comanda.mesa-form');
    }
}
