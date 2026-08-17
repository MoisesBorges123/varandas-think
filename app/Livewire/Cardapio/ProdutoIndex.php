<?php

namespace App\Livewire\Cardapio;

use App\Services\ProdutoService;
use Livewire\Component;

class ProdutoIndex extends Component
{
    public string $busca = '';

    public function alternarAtivo(int $produtoId, ProdutoService $service): void
    {
        $service->alternarAtivo($produtoId);

        $this->dispatch('toastr', message: 'Produto atualizado.', type: 'success', title: 'Pronto');
    }

    public function alternarDisponivel(int $produtoId, ProdutoService $service): void
    {
        $service->alternarDisponivel($produtoId);

        $this->dispatch('toastr', message: 'Produto atualizado.', type: 'success', title: 'Pronto');
    }

    public function render(ProdutoService $service)
    {
        return view('livewire.cardapio.produto-index', [
            'produtos' => $service->listar($this->busca ?: null),
        ]);
    }
}
