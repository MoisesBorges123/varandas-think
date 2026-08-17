<?php

namespace App\Livewire\Cardapio;

use App\DTO\Cardapio\CategoriaDTO;
use App\Enums\Cardapio\DestinoImpressao;
use App\Models\Categoria;
use App\Services\CategoriaService;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CategoriaForm extends Component
{
    public ?Categoria $categoria = null;

    #[Validate('required|string|max:100')]
    public string $nome = '';

    #[Validate('required|string')]
    public string $destinoImpressao = '';

    public bool $ativo = true;

    public function mount(?Categoria $categoria = null): void
    {
        if ($categoria?->exists) {
            $this->categoria = $categoria;
            $this->nome = $categoria->nome;
            $this->destinoImpressao = $categoria->destino_impressao->value;
            $this->ativo = $categoria->ativo;

            return;
        }

        $this->destinoImpressao = DestinoImpressao::NENHUM->value;
    }

    public function salvar(CategoriaService $service): void
    {
        $this->validate();

        $dto = CategoriaDTO::fromLivewire($this);

        if ($this->categoria) {
            $service->atualizar($this->categoria->id, $dto);
        } else {
            $service->criar($dto);
        }

        $this->dispatch('toastr', message: 'Categoria salva com sucesso.', type: 'success', title: 'Pronto');

        $this->redirect(route('cardapio.categorias.index'), navigate: false);
    }

    public function render()
    {
        return view('livewire.cardapio.categoria-form', [
            'destinos' => DestinoImpressao::cases(),
        ]);
    }
}
