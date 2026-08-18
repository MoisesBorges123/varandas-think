<?php

namespace App\Livewire\Comanda;

use App\Services\MesaService;
use Livewire\Attributes\On;
use Livewire\Component;

class MesaIndex extends Component
{
    public string $busca = '';

    public function confirmarExclusao(int $mesaId): void
    {
        // "..." obrigatório — ver comentário equivalente em CategoriaIndex.
        $this->dispatch('swal', ...[
            'title' => 'Excluir mesa?',
            'message' => 'Essa ação não pode ser desfeita.',
            'type' => 'warning',
            'showCancelButton' => true,
            'confirmButtonText' => 'Excluir',
            'confirmEvent' => 'mesa-excluir-confirmado',
            'confirmParams' => ['mesaId' => $mesaId],
        ]);
    }

    #[On('mesa-excluir-confirmado')]
    public function excluir(int $mesaId, MesaService $service): void
    {
        try {
            $service->excluir($mesaId);

            $this->dispatch('toastr', message: 'Mesa excluída.', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível excluir');
        }
    }

    public function render(MesaService $service)
    {
        return view('livewire.comanda.mesa-index', [
            'mesas' => $service->listar($this->busca ?: null),
        ]);
    }
}
