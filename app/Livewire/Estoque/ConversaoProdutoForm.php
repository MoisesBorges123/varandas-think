<?php

namespace App\Livewire\Estoque;

use App\DTO\Estoque\ConversaoProdutoDTO;
use App\Models\GrupoEquivalencia;
use App\Models\Produto;
use App\Services\ConversaoProdutoService;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ConversaoProdutoForm extends Component
{
    public Produto $produto;

    #[Validate('required|integer')]
    public string $grupoEquivalenciaId = '';

    #[Validate('required|string|max:20')]
    public string $unidadeCompra = '';

    #[Validate('required|numeric|min:0.001')]
    public string $quantidadeUnidadeCompra = '';

    #[Validate('required|integer|min:1')]
    public string $rendeQuantidadeVenda = '';

    public function mount(Produto $produto, ConversaoProdutoService $service): void
    {
        $this->produto = $produto;

        $conversao = $service->buscarPorProduto($produto->id);

        if ($conversao) {
            $this->grupoEquivalenciaId = (string) $conversao->grupo_equivalencia_id;
            $this->unidadeCompra = $conversao->unidade_compra;
            $this->quantidadeUnidadeCompra = (string) $conversao->quantidade_unidade_compra;
            $this->rendeQuantidadeVenda = (string) $conversao->rende_quantidade_venda;
        }
    }

    public function salvar(ConversaoProdutoService $service): void
    {
        $this->validate();

        $dto = ConversaoProdutoDTO::fromLivewire($this);

        $service->salvar($dto);

        $this->dispatch('toastr', message: 'Conversão salva com sucesso.', type: 'success', title: 'Pronto');

        $this->redirect(route('cardapio.produtos.index'), navigate: false);
    }

    public function render()
    {
        return view('livewire.estoque.conversao-produto-form', [
            'gruposDisponiveis' => GrupoEquivalencia::orderBy('nome')->get(),
        ]);
    }
}
