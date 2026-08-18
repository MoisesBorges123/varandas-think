<?php

namespace App\Livewire\Estoque;

use App\DTO\Estoque\CompraManualDTO;
use App\Enums\Estoque\UnidadeMedida;
use App\Models\Fornecedor;
use App\Models\Ingrediente;
use App\Services\CompraManualService;
use Livewire\Component;

class CompraManualForm extends Component
{
    public string $fornecedorId = '';

    public string $dataCompra = '';

    /** @var array<int, array{ingrediente_id: string, quantidade: string, unidade: string, valor_total_item: string}> */
    public array $itens = [];

    public function mount(): void
    {
        $this->dataCompra = now()->toDateString();
        $this->adicionarLinha();
    }

    public function adicionarLinha(): void
    {
        $this->itens[] = ['ingrediente_id' => '', 'quantidade' => '', 'unidade' => '', 'valor_total_item' => ''];
    }

    public function removerLinha(int $index): void
    {
        unset($this->itens[$index]);
        $this->itens = array_values($this->itens);
    }

    public function salvar(CompraManualService $service): void
    {
        $this->validate([
            'fornecedorId' => 'required|exists:fornecedores,id',
            'dataCompra' => 'required|date',
            'itens' => 'array|min:1',
            'itens.*.ingrediente_id' => 'required|exists:ingredientes,id',
            'itens.*.quantidade' => 'required|numeric|min:0.001',
            'itens.*.unidade' => 'required|string|max:20',
            'itens.*.valor_total_item' => 'required|numeric|min:0.01',
        ], [
            'itens.min' => 'Adicione ao menos um item à compra.',
        ]);

        $dto = CompraManualDTO::fromLivewire($this);

        $service->registrar($dto);

        $this->dispatch('toastr', message: 'Compra registrada com sucesso.', type: 'success', title: 'Pronto');

        $this->redirect(route('estoque.compras.index'), navigate: false);
    }

    public function render()
    {
        return view('livewire.estoque.compra-manual-form', [
            'fornecedores' => Fornecedor::orderBy('razao_social')->get(),
            'ingredientesDisponiveis' => Ingrediente::orderBy('nome')->get(),
            'unidadesMedida' => UnidadeMedida::cases(),
        ]);
    }
}
