<?php

namespace App\Livewire\Balcao;

use App\Enums\Pedido\StatusItemPedido;
use App\Services\Pedido\ItemPedidoService;
use Livewire\Attributes\On;
use Livewire\Component;

class BalcaoPainel extends Component
{
    public function aprovar(int $itemId, ItemPedidoService $service): void
    {
        try {
            $service->aprovar($itemId, auth()->id());

            $this->dispatch('toastr', message: 'Pedido aprovado.', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível aprovar');
        }
    }

    public function rejeitar(int $itemId, ItemPedidoService $service): void
    {
        try {
            $service->rejeitar($itemId, auth()->id());

            $this->dispatch('toastr', message: 'Pedido rejeitado.', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível rejeitar');
        }
    }

    public function liberarParaGarcom(int $itemId, ItemPedidoService $service): void
    {
        try {
            $service->liberarParaGarcom($itemId);

            $this->dispatch('toastr', message: 'Liberado para o garçom.', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível liberar');
        }
    }

    public function marcarEntregue(int $itemId, ItemPedidoService $service): void
    {
        try {
            $service->marcarEntregue($itemId);

            $this->dispatch('toastr', message: 'Marcado como entregue.', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível marcar');
        }
    }

    public function confirmarCancelamento(int $itemId): void
    {
        // "..." obrigatório — ver comentário equivalente em CategoriaIndex.
        $this->dispatch('swal', ...[
            'title' => 'Cancelar item?',
            'message' => 'Essa ação não pode ser desfeita.',
            'type' => 'warning',
            'showCancelButton' => true,
            'confirmButtonText' => 'Cancelar item',
            'confirmEvent' => 'balcao-item-cancelar-confirmado',
            'confirmParams' => ['itemId' => $itemId],
        ]);
    }

    #[On('balcao-item-cancelar-confirmado')]
    public function cancelar(int $itemId, ItemPedidoService $service): void
    {
        try {
            $service->cancelar($itemId, auth()->id());

            $this->dispatch('toastr', message: 'Item cancelado.', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível cancelar');
        }
    }

    public function render(ItemPedidoService $service)
    {
        $itens = $service->listarParaBalcao([]);

        return view('livewire.balcao.balcao-painel', [
            'filaAprovacao' => $itens->where('status', StatusItemPedido::PENDENTE_APROVACAO),
            'emPreparo' => $itens->where('status', StatusItemPedido::ENVIADO_COZINHA),
            'prontos' => $itens->where('status', StatusItemPedido::PRONTO),
            'liberados' => $itens->where('status', StatusItemPedido::LIBERADO_BALCAO),
        ]);
    }
}
