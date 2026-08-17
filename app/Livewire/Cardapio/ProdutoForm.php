<?php

namespace App\Livewire\Cardapio;

use App\DTO\Cardapio\DefinirPrecoDTO;
use App\DTO\Cardapio\ProdutoDTO;
use App\Enums\Cardapio\TipoProduto;
use App\Models\Categoria;
use App\Models\Produto;
use App\Services\ProdutoService;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ProdutoForm extends Component
{
    public ?Produto $produto = null;

    #[Validate('required|exists:categorias,id')]
    public string $categoriaId = '';

    #[Validate('required|string|max:100')]
    public string $nome = '';

    #[Validate('required|string')]
    public string $tipo = '';

    public bool $ativo = true;

    public bool $disponivel = true;

    public bool $validaEstoqueAutomatico = true;

    #[Validate('required|numeric|min:0.01')]
    public string $precoInicial = '';

    public string $novoPreco = '';

    public function mount(?Produto $produto = null): void
    {
        if ($produto?->exists) {
            $this->produto = $produto;
            $this->categoriaId = (string) $produto->categoria_id;
            $this->nome = $produto->nome;
            $this->tipo = $produto->tipo->value;
            $this->ativo = $produto->ativo;
            $this->disponivel = $produto->disponivel;
            $this->validaEstoqueAutomatico = $produto->valida_estoque_automatico;

            return;
        }

        $this->tipo = TipoProduto::PREPARADO->value;
    }

    public function salvar(ProdutoService $service): void
    {
        if ($this->produto) {
            $this->validate([
                'categoriaId' => 'required|exists:categorias,id',
                'nome' => 'required|string|max:100',
                'tipo' => 'required|string',
            ]);
        } else {
            $this->validate();
        }

        $dto = ProdutoDTO::fromLivewire($this);

        if ($this->produto) {
            $service->atualizar($this->produto->id, $dto);
        } else {
            $service->criar($dto, (float) str_replace(',', '.', $this->precoInicial));
        }

        $this->dispatch('toastr', message: 'Produto salvo com sucesso.', type: 'success', title: 'Pronto');

        $this->redirect(route('cardapio.produtos.index'), navigate: false);
    }

    public function definirPreco(ProdutoService $service): void
    {
        $this->validate([
            'novoPreco' => 'required|numeric|min:0.01',
        ]);

        $dto = DefinirPrecoDTO::fromLivewire($this);

        $service->definirPreco($dto);

        $this->novoPreco = '';
        $this->produto->refresh();

        $this->dispatch('toastr', message: 'Novo preço registrado.', type: 'success', title: 'Pronto');
    }

    public function render()
    {
        return view('livewire.cardapio.produto-form', [
            'categorias' => Categoria::where('ativo', true)->orderBy('nome')->get(),
            'tipos' => TipoProduto::cases(),
        ]);
    }
}
