<?php

namespace App\Livewire\Pedido;

use App\DTO\Pedido\AdicionarItemPedidoDTO;
use App\Models\Categoria;
use App\Models\Comanda;
use App\Models\Produto;
use App\Services\Pedido\ItemPedidoService;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ComandaItens extends Component
{
    public Comanda $comanda;

    public int $comandaId = 0;

    #[Validate('required|integer')]
    public string $produtoSelecionadoId = '';

    #[Validate('required|integer|min:1')]
    public string $quantidade = '1';

    public string $pedidoPorNome = '';

    public string $categoriaFiltro = '';

    public function mount(Comanda $comanda): void
    {
        $this->comanda = $comanda;
        $this->comandaId = $comanda->id;
    }

    public function adicionarItem(ItemPedidoService $service): void
    {
        $this->validate();

        try {
            $dto = AdicionarItemPedidoDTO::fromLivewire($this);

            $service->lancarPeloGarcom($dto);

            $this->reset(['produtoSelecionadoId', 'quantidade', 'pedidoPorNome']);
            $this->quantidade = '1';

            $this->dispatch('toastr', message: 'Item enviado à cozinha.', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível lançar o item');
        }
    }

    public function confirmarCancelamento(int $itemId): void
    {
        $this->dispatch('swal', ...[
            'title' => 'Cancelar item?',
            'message' => 'Essa ação não pode ser desfeita.',
            'type' => 'warning',
            'showCancelButton' => true,
            'confirmButtonText' => 'Cancelar item',
            'confirmEvent' => 'item-cancelar-confirmado',
            'confirmParams' => ['itemId' => $itemId],
        ]);
    }

    #[On('item-cancelar-confirmado')]
    public function cancelar(int $itemId, ItemPedidoService $service): void
    {
        try {
            $service->cancelar($itemId, auth()->id());

            $this->dispatch('toastr', message: 'Item cancelado.', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível cancelar');
        }
    }

    public function render(ItemPedidoService $itemPedidoService)
    {
        return view('livewire.pedido.comanda-itens', [
            'categorias' => Categoria::where('ativo', true)->orderBy('nome')->get(),
            'produtos' => Produto::query()
                ->where('ativo', true)
                ->where('disponivel', true)
                ->when($this->categoriaFiltro, fn ($q) => $q->where('categoria_id', $this->categoriaFiltro))
                ->orderBy('nome')
                ->get(),
            'itens' => $itemPedidoService->listarPorComanda($this->comandaId),
        ]);
    }
}
