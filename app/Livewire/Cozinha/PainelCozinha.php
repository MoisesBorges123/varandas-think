<?php

namespace App\Livewire\Cozinha;

use App\Enums\Usuario\PerfilNome;
use App\Services\Pedido\ItemPedidoService;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('components.layouts.template.admitro.tablet')]
class PainelCozinha extends Component
{
    /** @var array<int, int> ids do último lote renderizado — usado só pra detectar item novo entre polls. */
    public array $ultimoLoteIds = [];

    public bool $primeiroRender = true;

    public function marcarPronto(int $itemId, ItemPedidoService $service): void
    {
        try {
            $service->marcarPronto($itemId);

            $this->dispatch('toastr', message: 'Pedido marcado como pronto.', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível marcar');
        }
    }

    public function confirmarCancelamento(int $itemId): void
    {
        $this->dispatch('swal', ...[
            'title' => 'Cancelar pedido?',
            'message' => 'Essa ação não pode ser desfeita.',
            'type' => 'warning',
            'showCancelButton' => true,
            'confirmButtonText' => 'Cancelar pedido',
            'confirmEvent' => 'cozinha-item-cancelar-confirmado',
            'confirmParams' => ['itemId' => $itemId],
        ]);
    }

    #[On('cozinha-item-cancelar-confirmado')]
    public function cancelar(int $itemId, ItemPedidoService $service): void
    {
        try {
            $service->cancelar($itemId, auth()->id());

            $this->dispatch('toastr', message: 'Pedido cancelado.', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível cancelar');
        }
    }

    public function render(ItemPedidoService $service)
    {
        $itens = $service->listarParaCozinha();
        $idsAtuais = $itens->pluck('id')->all();

        $temItemNovo = ! $this->primeiroRender && array_diff($idsAtuais, $this->ultimoLoteIds) !== [];

        $this->ultimoLoteIds = $idsAtuais;
        $this->primeiroRender = false;

        if ($temItemNovo) {
            $this->dispatch('novoPedido');
        }

        $usuario = auth()->user();

        return view('livewire.cozinha.painel-cozinha', [
            'itens' => $itens,
            'podeCancel' => in_array($usuario->perfil->nome, [PerfilNome::BALCONISTA, PerfilNome::ADMINISTRADOR], true),
        ]);
    }
}
