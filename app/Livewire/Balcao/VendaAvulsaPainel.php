<?php

namespace App\Livewire\Balcao;

use App\DTO\VendaAvulsa\VenderAvulsoDTO;
use App\Enums\Cardapio\TipoProduto;
use App\Enums\VendaAvulsa\FormaPagamentoVendaAvulsa;
use App\Models\Produto;
use App\Services\VendaAvulsa\VendaAvulsaService;
use Livewire\Attributes\On;
use Livewire\Component;

/**
 * Mini-PDV de venda avulsa de balcão (CLAUDE.md seção 3.2) — carrinho com
 * adicionar/finalizar/cancelar: o balconista pode juntar 1 ou mais
 * produtos numa única venda, com um único pagamento no final.
 */
class VendaAvulsaPainel extends Component
{
    public string $produtoSelecionadoId = '';

    public int $quantidade = 1;

    /** @var array<int, int> produto_id => quantidade */
    public array $carrinho = [];

    public bool $mostrarPagamento = false;

    public string $busca = '';

    public string $categoriaId = '';

    public function limparFiltros(): void
    {
        $this->busca = '';
        $this->categoriaId = '';
    }

    public function selecionarProduto(int $produtoId): void
    {
        $this->produtoSelecionadoId = (string) $produtoId;
        $this->quantidade = 1;
    }

    public function cancelarSelecao(): void
    {
        $this->produtoSelecionadoId = '';
        $this->quantidade = 1;
    }

    public function incrementarQuantidade(): void
    {
        $this->quantidade++;
    }

    public function decrementarQuantidade(): void
    {
        $this->quantidade = max(1, $this->quantidade - 1);
    }

    public function adicionarAoCarrinho(): void
    {
        $produtoId = (int) $this->produtoSelecionadoId;

        if (! $produtoId) {
            return;
        }

        $this->carrinho[$produtoId] = ($this->carrinho[$produtoId] ?? 0) + $this->quantidade;

        $this->produtoSelecionadoId = '';
        $this->quantidade = 1;

        $this->dispatch('toastr', message: 'Item adicionado ao carrinho.', type: 'success', title: 'Pronto');
    }

    public function removerDoCarrinho(int $produtoId): void
    {
        unset($this->carrinho[$produtoId]);
    }

    public function abrirPagamento(): void
    {
        if ($this->carrinho === []) {
            return;
        }

        $this->mostrarPagamento = true;
    }

    public function fecharPagamento(): void
    {
        $this->mostrarPagamento = false;
    }

    public function confirmarCancelarCarrinho(): void
    {
        $this->dispatch('swal', ...[
            'title' => 'Cancelar venda?',
            'message' => 'Os itens adicionados ao carrinho serão descartados.',
            'type' => 'warning',
            'showCancelButton' => true,
            'confirmButtonText' => 'Cancelar venda',
            'confirmEvent' => 'venda-avulsa-carrinho-cancelado',
        ]);
    }

    #[On('venda-avulsa-carrinho-cancelado')]
    public function cancelarCarrinho(): void
    {
        $this->carrinho = [];
        $this->mostrarPagamento = false;
    }

    public function finalizar(string $formaPagamento, VendaAvulsaService $service): void
    {
        try {
            $dto = (new VenderAvulsoDTO())
                ->setItens(collect($this->carrinho)
                    ->map(fn ($quantidade, $produtoId) => ['produto_id' => (int) $produtoId, 'quantidade' => $quantidade])
                    ->values()
                    ->all())
                ->setFormaPagamento($formaPagamento);

            $service->vender($dto);

            $this->carrinho = [];
            $this->mostrarPagamento = false;

            $this->dispatch('toastr', message: 'Venda registrada!', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível finalizar');
        }
    }

    public function render(VendaAvulsaService $service)
    {
        // Base sem os filtros de busca/categoria — usada pra resolver o
        // carrinho e o produto selecionado, que precisam continuar válidos
        // mesmo que o balconista troque o filtro depois de já ter
        // adicionado um item (senão o item some da tela achando que ficou
        // indisponível).
        $todosOsProdutos = Produto::query()
            ->where('tipo', TipoProduto::AVULSO->value)
            ->where('ativo', true)
            ->where('disponivel', true)
            ->whereHas('conversao')
            ->with(['precoAtual', 'categoria'])
            ->orderBy('nome')
            ->get();

        $buscaNormalizada = mb_strtolower(trim($this->busca));

        $produtosFiltrados = $todosOsProdutos
            ->when($buscaNormalizada !== '', fn ($colecao) => $colecao->filter(
                fn (Produto $produto) => str_contains(mb_strtolower($produto->nome), $buscaNormalizada),
            ))
            ->when($this->categoriaId !== '', fn ($colecao) => $colecao->where('categoria_id', (int) $this->categoriaId));

        $produtosPorCategoria = $produtosFiltrados
            ->groupBy('categoria_id')
            ->sortBy(fn ($grupo) => $grupo->first()->categoria?->nome ?? 'Sem categoria');

        $categoriasDisponiveis = $todosOsProdutos
            ->pluck('categoria')
            ->filter()
            ->unique('id')
            ->sortBy('nome')
            ->values();

        $carrinhoDetalhado = collect($this->carrinho)
            ->map(function ($quantidade, $produtoId) use ($todosOsProdutos) {
                $produto = $todosOsProdutos->firstWhere('id', (int) $produtoId);
                $preco = (float) ($produto?->precoAtual?->preco ?? 0);

                return [
                    'produto_id' => (int) $produtoId,
                    'nome' => $produto?->nome ?? 'Produto indisponível',
                    'quantidade' => $quantidade,
                    'subtotal' => $preco * $quantidade,
                ];
            })
            ->values();

        return view('livewire.balcao.venda-avulsa-painel', [
            'produtosPorCategoria' => $produtosPorCategoria,
            'categoriasDisponiveis' => $categoriasDisponiveis,
            'produtoSelecionado' => $this->produtoSelecionadoId
                ? $todosOsProdutos->firstWhere('id', (int) $this->produtoSelecionadoId)
                : null,
            'carrinhoDetalhado' => $carrinhoDetalhado,
            'carrinhoTotal' => $carrinhoDetalhado->sum('subtotal'),
            'vendasRecentes' => $service->listarRecentes(10),
            'formasPagamento' => FormaPagamentoVendaAvulsa::cases(),
        ]);
    }
}
