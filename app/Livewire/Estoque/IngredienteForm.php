<?php

namespace App\Livewire\Estoque;

use App\DTO\Estoque\IngredienteDTO;
use App\Models\GrupoEquivalencia;
use App\Models\Ingrediente;
use App\Services\IngredienteService;
use Livewire\Attributes\Validate;
use Livewire\Component;

class IngredienteForm extends Component
{
    public ?Ingrediente $ingrediente = null;

    public string $grupoEquivalenciaId = '';

    #[Validate('required|string|max:100')]
    public string $nome = '';

    #[Validate('required|string|max:20')]
    public string $unidadeMedida = '';

    public string $codigoFiscal = '';

    public function mount(?Ingrediente $ingrediente = null): void
    {
        if ($ingrediente?->exists) {
            $this->ingrediente = $ingrediente;
            $this->grupoEquivalenciaId = (string) ($ingrediente->grupo_equivalencia_id ?? '');
            $this->nome = $ingrediente->nome;
            $this->unidadeMedida = $ingrediente->unidade_medida;
            $this->codigoFiscal = (string) $ingrediente->codigo_fiscal;
        }
    }

    public function salvar(IngredienteService $service): void
    {
        $this->validate();

        $dto = IngredienteDTO::fromLivewire($this);

        if ($this->ingrediente) {
            $service->atualizar($this->ingrediente->id, $dto);
        } else {
            $service->criar($dto);
        }

        $this->dispatch('toastr', message: 'Insumo salvo com sucesso.', type: 'success', title: 'Pronto');

        $this->redirect(route('estoque.ingredientes.index'), navigate: false);
    }

    public function render()
    {
        return view('livewire.estoque.ingrediente-form', [
            'grupos' => GrupoEquivalencia::orderBy('nome')->get(),
        ]);
    }
}
