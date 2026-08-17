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
        // O "..." é obrigatório: espalha o array como argumentos NOMEADOS
        // no variádico dispatch(...$params). Sem ele, o array vira um
        // único argumento posicional e chega no JS como [ {...} ] (um
        // array com um item) em vez de um objeto plano — e
        // Livewire.on('swal', (params) => params.title) simplesmente
        // nunca acha os campos.
        $this->dispatch('swal', ...[
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
