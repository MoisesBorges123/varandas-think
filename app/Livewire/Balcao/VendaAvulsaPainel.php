<?php

namespace App\Livewire\Balcao;

use App\DTO\VendaAvulsa\VenderAvulsoDTO;
use App\Enums\Cardapio\TipoProduto;
use App\Enums\VendaAvulsa\FormaPagamentoVendaAvulsa;
use App\Models\Produto;
use App\Services\VendaAvulsa\VendaAvulsaService;
use Livewire\Component;

/**
 * Mini-PDV de venda avulsa de balcão (CLAUDE.md seção 3.2) — fluxo de
 * "poucos toques": tocar o produto abre o seletor de quantidade/forma de
 * pagamento; tocar a forma de pagamento já executa a venda.
 */
class VendaAvulsaPainel extends Component
{
    public string $produtoSelecionadoId = '';

    public int $quantidade = 1;

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

    public function vender(string $formaPagamento, VendaAvulsaService $service): void
    {
        try {
            $dto = (new VenderAvulsoDTO())
                ->setProdutoId((int) $this->produtoSelecionadoId)
                ->setQuantidade($this->quantidade)
                ->setFormaPagamento($formaPagamento);

            $service->vender($dto);

            $this->produtoSelecionadoId = '';
            $this->quantidade = 1;

            $this->dispatch('toastr', message: 'Venda registrada!', type: 'success', title: 'Pronto');
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível vender');
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

        return view('livewire.balcao.venda-avulsa-painel', [
            'produtos' => $produtos,
            'produtoSelecionado' => $this->produtoSelecionadoId
                ? $produtos->firstWhere('id', (int) $this->produtoSelecionadoId)
                : null,
            'vendasRecentes' => $service->listarRecentes(10),
            'formasPagamento' => FormaPagamentoVendaAvulsa::cases(),
        ]);
    }
}
