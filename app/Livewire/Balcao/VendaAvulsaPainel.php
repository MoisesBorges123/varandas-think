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
        $produtos = Produto::query()
            ->where('tipo', TipoProduto::AVULSO->value)
            ->where('ativo', true)
            ->where('disponivel', true)
            ->whereHas('conversao')
            ->with('precoAtual')
            ->orderBy('nome')
            ->get();

        $carrinhoDetalhado = collect($this->carrinho)
            ->map(function ($quantidade, $produtoId) use ($produtos) {
                $produto = $produtos->firstWhere('id', (int) $produtoId);
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
            'produtos' => $produtos,
            'produtoSelecionado' => $this->produtoSelecionadoId
                ? $produtos->firstWhere('id', (int) $this->produtoSelecionadoId)
                : null,
            'carrinhoDetalhado' => $carrinhoDetalhado,
            'carrinhoTotal' => $carrinhoDetalhado->sum('subtotal'),
            'vendasRecentes' => $service->listarRecentes(10),
            'formasPagamento' => FormaPagamentoVendaAvulsa::cases(),
        ]);
    }
}
