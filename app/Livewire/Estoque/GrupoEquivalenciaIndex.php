<?php

namespace App\Livewire\Estoque;

use App\Services\GrupoEquivalenciaService;
use Livewire\Attributes\On;
use Livewire\Component;

class GrupoEquivalenciaIndex extends Component
{
    public string $busca = '';

    public function confirmarExclusao(int $grupoId): void
    {
        $this->dispatch('swal', [
            'title' => 'Excluir grupo de equivalência?',
            'message' => 'Essa ação não pode ser desfeita.',
            'type' => 'warning',
            'showCancelButton' => true,
            'confirmButtonText' => 'Excluir',
            'confirmEvent' => 'grupo-excluir-confirmado',
            'confirmParams' => ['grupoId' => $grupoId],
        ]);
    }

    #[On('grupo-excluir-confirmado')]
    public function excluir(int $grupoId, GrupoEquivalenciaService $service): void
    {
        try {
            $service->excluir($grupoId);

            $this->dispatch('toastr', message: 'Grupo excluído.', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível excluir');
        }
    }

    public function render(GrupoEquivalenciaService $service)
    {
        return view('livewire.estoque.grupo-equivalencia-index', [
            'grupos' => $service->listar($this->busca ?: null),
        ]);
    }
}
