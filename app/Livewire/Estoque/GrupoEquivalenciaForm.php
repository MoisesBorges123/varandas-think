<?php

namespace App\Livewire\Estoque;

use App\DTO\Estoque\GrupoEquivalenciaDTO;
use App\Models\GrupoEquivalencia;
use App\Services\GrupoEquivalenciaService;
use Livewire\Attributes\Validate;
use Livewire\Component;

class GrupoEquivalenciaForm extends Component
{
    public ?GrupoEquivalencia $grupo = null;

    #[Validate('required|string|max:100')]
    public string $nome = '';

    public function mount(?GrupoEquivalencia $grupo = null): void
    {
        if ($grupo?->exists) {
            $this->grupo = $grupo;
            $this->nome = $grupo->nome;
        }
    }

    public function salvar(GrupoEquivalenciaService $service): void
    {
        $this->validate();

        $dto = GrupoEquivalenciaDTO::fromLivewire($this);

        if ($this->grupo) {
            $service->atualizar($this->grupo->id, $dto);
        } else {
            $service->criar($dto);
        }

        $this->dispatch('toastr', message: 'Grupo de equivalência salvo com sucesso.', type: 'success', title: 'Pronto');

        $this->redirect(route('estoque.grupos.index'), navigate: false);
    }

    public function render()
    {
        return view('livewire.estoque.grupo-equivalencia-form');
    }
}
