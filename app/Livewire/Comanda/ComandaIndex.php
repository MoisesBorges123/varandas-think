<?php

namespace App\Livewire\Comanda;

use App\Enums\Usuario\PerfilNome;
use App\Models\Mesa;
use App\Models\Usuario;
use App\Services\ComandaService;
use Livewire\Attributes\On;
use Livewire\Component;

class ComandaIndex extends Component
{
    public string $status = '';

    public string $mesaId = '';

    public string $garcomId = '';

    /** @var array<int, int|string> comanda_id => garcom_id selecionado (ou '' pra sem garçom) */
    public array $garcomPorComanda = [];

    public function limparFiltros(): void
    {
        $this->reset(['status', 'mesaId', 'garcomId']);
    }

    public function verDetalhes(int $comandaId, ComandaService $service): void
    {
        $comanda = $service->encontrarComRelacoes($comandaId);

        $this->dispatch('swal', ...[
            'title' => 'Comanda #'.$comanda->id,
            'message' => view('livewire.comanda.partials.comanda-detalhes', ['comanda' => $comanda])->render(),
            'width' => '40em',
            'type' => 'info',
            'showCancelButton' => false,
            'confirmButtonText' => 'Fechar',
        ]);
    }

    public function atribuirGarcom(int $comandaId, ComandaService $service): void
    {
        $garcomId = $this->garcomPorComanda[$comandaId] ?? '';

        $service->atribuirGarcom($comandaId, $garcomId !== '' ? (int) $garcomId : null);

        $this->dispatch('toastr', message: 'Garçom atribuído.', type: 'success', title: 'Pronto');
    }

    public function confirmarFechamento(int $comandaId): void
    {
        // "..." obrigatório — ver comentário equivalente em CategoriaIndex.
        $this->dispatch('swal', ...[
            'title' => 'Fechar comanda?',
            'message' => 'Essa ação não pode ser desfeita.',
            'type' => 'warning',
            'showCancelButton' => true,
            'confirmButtonText' => 'Fechar comanda',
            'confirmEvent' => 'comanda-fechar-confirmado',
            'confirmParams' => ['comandaId' => $comandaId],
        ]);
    }

    #[On('comanda-fechar-confirmado')]
    public function fechar(int $comandaId, ComandaService $service): void
    {
        try {
            $service->fechar($comandaId);

            $this->dispatch('toastr', message: 'Comanda fechada.', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível fechar');
        }
    }

    public function render(ComandaService $service)
    {
        $comandas = $service->listar([
            'status' => $this->status ?: null,
            'mesa_id' => $this->mesaId ?: null,
            'garcom_id' => $this->garcomId ?: null,
        ]);

        foreach ($comandas as $comanda) {
            if (! array_key_exists($comanda->id, $this->garcomPorComanda)) {
                $this->garcomPorComanda[$comanda->id] = $comanda->garcom_id ?? '';
            }
        }

        return view('livewire.comanda.comanda-index', [
            'comandas' => $comandas,
            'mesas' => Mesa::orderBy('numero')->get(),
            'garcons' => Usuario::whereHas('perfil', fn ($q) => $q->where('nome', PerfilNome::GARCOM->value))
                ->orderBy('nome')
                ->get(),
        ]);
    }
}
