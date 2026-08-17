<?php

namespace App\Livewire\Estoque;

use App\Repositories\Contracts\IngredienteRepositoryInterface;
use App\Services\IngredienteService;
use Livewire\Attributes\On;
use Livewire\Component;

class IngredienteIndex extends Component
{
    public string $busca = '';

    public bool $apenasSemGrupo = false;

    public function confirmarExclusao(int $ingredienteId): void
    {
        // "..." obrigatório — ver comentário equivalente em CategoriaIndex.
        $this->dispatch('swal', ...[
            'title' => 'Excluir insumo?',
            'message' => 'Essa ação não pode ser desfeita.',
            'type' => 'warning',
            'showCancelButton' => true,
            'confirmButtonText' => 'Excluir',
            'confirmEvent' => 'ingrediente-excluir-confirmado',
            'confirmParams' => ['ingredienteId' => $ingredienteId],
        ]);
    }

    #[On('ingrediente-excluir-confirmado')]
    public function excluir(int $ingredienteId, IngredienteService $service): void
    {
        try {
            $service->excluir($ingredienteId);

            $this->dispatch('toastr', message: 'Insumo excluído.', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível excluir');
        }
    }

    public function render(IngredienteService $service, IngredienteRepositoryInterface $ingredienteRepository)
    {
        return view('livewire.estoque.ingrediente-index', [
            'ingredientes' => $service->listar($this->busca ?: null, $this->apenasSemGrupo ?: null),
            'totalSemGrupo' => $ingredienteRepository->countSemGrupo(),
        ]);
    }
}
