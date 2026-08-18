<?php

namespace App\Livewire\Estoque;

use App\Services\FornecedorService;
use Livewire\Attributes\On;
use Livewire\Component;

class FornecedorIndex extends Component
{
    public string $busca = '';

    public function confirmarExclusao(int $fornecedorId): void
    {
        // "..." obrigatório — ver comentário equivalente em CategoriaIndex.
        $this->dispatch('swal', ...[
            'title' => 'Excluir fornecedor?',
            'message' => 'Essa ação não pode ser desfeita.',
            'type' => 'warning',
            'showCancelButton' => true,
            'confirmButtonText' => 'Excluir',
            'confirmEvent' => 'fornecedor-excluir-confirmado',
            'confirmParams' => ['fornecedorId' => $fornecedorId],
        ]);
    }

    #[On('fornecedor-excluir-confirmado')]
    public function excluir(int $fornecedorId, FornecedorService $service): void
    {
        try {
            $service->excluir($fornecedorId);

            $this->dispatch('toastr', message: 'Fornecedor excluído.', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível excluir');
        }
    }

    public function render(FornecedorService $service)
    {
        return view('livewire.estoque.fornecedor-index', [
            'fornecedores' => $service->listar($this->busca ?: null),
        ]);
    }
}
