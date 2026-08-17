<?php

namespace App\Livewire\Estoque;

use App\DTO\Estoque\ReceitaDTO;
use App\Models\Ingrediente;
use App\Models\Produto;
use App\Services\ReceitaService;
use Livewire\Component;

class ReceitaForm extends Component
{
    public Produto $produto;

    /** @var array<int, array{ingrediente_id: string, quantidade: string, unidade_medida: string}> */
    public array $itens = [];

    public function mount(Produto $produto, ReceitaService $service): void
    {
        $this->produto = $produto;

        $receita = $service->buscarPorProduto($produto->id);

        $this->itens = $receita
            ? $receita->ingredientes->map(fn (Ingrediente $ingrediente) => [
                'ingrediente_id' => (string) $ingrediente->id,
                'quantidade' => (string) $ingrediente->pivot->quantidade,
                'unidade_medida' => $ingrediente->pivot->unidade_medida,
            ])->all()
            : [];

        if (empty($this->itens)) {
            $this->adicionarLinha();
        }
    }

    public function adicionarLinha(): void
    {
        $this->itens[] = ['ingrediente_id' => '', 'quantidade' => '', 'unidade_medida' => ''];
    }

    public function removerLinha(int $index): void
    {
        unset($this->itens[$index]);
        $this->itens = array_values($this->itens);
    }

    public function salvar(ReceitaService $service): void
    {
        $this->validate([
            'itens' => 'array|min:1',
            'itens.*.ingrediente_id' => 'required',
            'itens.*.quantidade' => 'required|numeric|min:0.001',
            'itens.*.unidade_medida' => 'required|string|max:20',
        ], [
            'itens.min' => 'Adicione ao menos um ingrediente à receita.',
        ]);

        $dto = ReceitaDTO::fromLivewire($this);

        $service->salvar($dto);

        $this->dispatch('toastr', message: 'Receita salva com sucesso.', type: 'success', title: 'Pronto');

        $this->redirect(route('cardapio.produtos.index'), navigate: false);
    }

    public function render()
    {
        return view('livewire.estoque.receita-form', [
            'ingredientesDisponiveis' => Ingrediente::orderBy('nome')->get(),
        ]);
    }
}
