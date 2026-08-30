<?php

namespace App\Livewire\Cardapio;

use App\DTO\Cardapio\DefinirPrecoDTO;
use App\DTO\Cardapio\ProdutoDTO;
use App\Enums\Cardapio\TipoProduto;
use App\Models\Categoria;
use App\Models\Produto;
use App\Services\Cardapio\AvaliacaoProdutoService;
use App\Services\Cardapio\FotoProdutoService;
use App\Services\ProdutoService;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProdutoForm extends Component
{
    use WithFileUploads;

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

    public bool $emPromocao = false;

    #[Validate('required|numeric|min:0.01')]
    public string $precoInicial = '';

    public string $novoPreco = '';

    #[Validate(['novasFotos.*' => 'image|max:5120'])]
    public array $novasFotos = [];

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
            $this->emPromocao = $produto->em_promocao;

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

    public function enviarFotos(FotoProdutoService $service): void
    {
        $this->validate(['novasFotos.*' => 'image|max:5120']);

        try {
            $service->adicionarFotos($this->produto, $this->novasFotos);

            $this->reset('novasFotos');
            $this->produto->refresh();

            $this->dispatch('toastr', message: 'Fotos enviadas.', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível enviar as fotos');
        }
    }

    public function removerFoto(int $fotoId, FotoProdutoService $service): void
    {
        $service->remover($fotoId);

        $this->produto->refresh();

        $this->dispatch('toastr', message: 'Foto removida.', type: 'success', title: 'Pronto');
    }

    public function tornarCapa(int $fotoId, FotoProdutoService $service): void
    {
        $service->tornarCapa($fotoId);

        $this->produto->refresh();
    }

    public function render(AvaliacaoProdutoService $avaliacaoService)
    {
        return view('livewire.cardapio.produto-form', [
            'categorias' => Categoria::where('ativo', true)->orderBy('nome')->get(),
            'tipos' => TipoProduto::cases(),
            'fotos' => $this->produto?->fotos ?? collect(),
            'mediaAvaliacoes' => $this->produto ? $avaliacaoService->mediaEQuantidade($this->produto->id) : null,
            'avaliacoes' => $this->produto ? $avaliacaoService->listarPorProduto($this->produto->id)->take(50) : collect(),
        ]);
    }
}
