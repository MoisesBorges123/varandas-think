<?php

namespace App\Livewire\Cardapio;

use App\Services\CategoriaService;
use Livewire\Attributes\On;
use Livewire\Component;

class CategoriaIndex extends Component
{
    public string $busca = '';

    public function alternarAtivo(int $categoriaId, CategoriaService $service): void
    {
        $service->alternarAtivo($categoriaId);

        $this->dispatch('toastr', message: 'Categoria atualizada.', type: 'success', title: 'Pronto');
    }

    public function confirmarExclusao(int $categoriaId): void
    {
        $this->dispatch('swal', [
            'title' => 'Excluir categoria?',
            'message' => 'Essa ação não pode ser desfeita.',
            'type' => 'warning',
            'showCancelButton' => true,
            'confirmButtonText' => 'Excluir',
            'confirmEvent' => 'categoria-excluir-confirmado',
            'confirmParams' => ['categoriaId' => $categoriaId],
        ]);
    }

    #[On('categoria-excluir-confirmado')]
    public function excluir(int $categoriaId, CategoriaService $service): void
    {
        try {
            $service->excluir($categoriaId);

            $this->dispatch('toastr', message: 'Categoria excluída.', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível excluir');
        }
    }

    public function render(CategoriaService $service)
    {
        return view('livewire.cardapio.categoria-index', [
            'categorias' => $service->listar($this->busca ?: null),
        ]);
    }
}
