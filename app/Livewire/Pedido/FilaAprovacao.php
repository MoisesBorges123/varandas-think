<?php

namespace App\Livewire\Pedido;

use App\Enums\Usuario\PerfilNome;
use App\Services\Pedido\ItemPedidoService;
use Livewire\Attributes\On;
use Livewire\Component;

class FilaAprovacao extends Component
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

    public function confirmarRejeicao(int $itemId): void
    {
        $this->dispatch('swal', ...[
            'title' => 'Rejeitar pedido?',
            'message' => 'O cliente vai receber um aviso de que o garçom vai até a mesa ajudar.',
            'type' => 'warning',
            'showCancelButton' => true,
            'confirmButtonText' => 'Rejeitar',
            'confirmEvent' => 'item-rejeitar-confirmado',
            'confirmParams' => ['itemId' => $itemId],
        ]);
    }

    #[On('item-rejeitar-confirmado')]
    public function rejeitar(int $itemId, ItemPedidoService $service): void
    {
        try {
            $service->rejeitar($itemId, auth()->id());

            $this->dispatch('toastr', message: 'Pedido rejeitado.', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível rejeitar');
        }
    }

    public function render(ItemPedidoService $service)
    {
        $usuario = auth()->user();
        $verTudo = in_array($usuario->perfil->nome, [PerfilNome::BALCONISTA, PerfilNome::ADMINISTRADOR], true);

        return view('livewire.pedido.fila-aprovacao', [
            'itens' => $service->listarFilaAprovacao($usuario->id, $verTudo),
        ]);
    }
}
