<?php

namespace App\Livewire\Pagamento;

use App\DTO\Pagamento\RegistrarPagamentoPorItensDTO;
use App\DTO\Pagamento\RegistrarPagamentoValorLivreDTO;
use App\Enums\Pagamento\FormaPagamento;
use App\Models\Comanda;
use App\Models\Pagamento;
use App\Services\ConfiguracaoService;
use App\Services\Pagamento\ExtratoComandaService;
use App\Services\Pagamento\PagamentoService;
use Livewire\Component;

/**
 * Tela de pagamento da comanda (CLAUDE.md seção 6/6.1) — extrato ao
 * vivo, pagamento por itens específicos (todos marcados por padrão) ou
 * valor livre, com as formas de pagamento disponíveis.
 */
class ComandaPagamento extends Component
{
    public Comanda $comanda;

    public string $modo = 'itens';

    /** @var array<int, bool> item_pedido_id => selecionado */
    public array $itensSelecionados = [];

    public string $valorLivre = '';

    public string $nomePagador = '';

    /** @var array{qr_code: ?string, qr_code_base64: ?string}|null */
    public ?array $pixExibido = null;

    public function mount(Comanda $comanda, ExtratoComandaService $extratoService): void
    {
        $this->comanda = $comanda;

        $extrato = $extratoService->calcular($comanda->id);
        foreach ($extrato->itensAbertos as $item) {
            $this->itensSelecionados[$item->id] = true;
        }
    }

    public function alternarItem(int $itemPedidoId): void
    {
        $this->itensSelecionados[$itemPedidoId] = ! ($this->itensSelecionados[$itemPedidoId] ?? false);
    }

    public function pagarPorItens(string $formaPagamento, ConfiguracaoService $configService, PagamentoService $service, ExtratoComandaService $extratoService): void
    {
        try {
            $itemIds = collect($this->itensSelecionados)
                ->filter()
                ->keys()
                ->map(fn ($id) => (int) $id)
                ->values()
                ->all();

            $dto = (new RegistrarPagamentoPorItensDTO())
                ->setComandaId($this->comanda->id)
                ->setItemPedidoIds($itemIds)
                ->setFormaPagamento($formaPagamento)
                ->setNomePagador($this->nomePagador ?: null)
                ->setDeviceId($this->resolverDeviceId($formaPagamento, $configService));

            $pagamento = $service->registrarPorItens($dto);

            $this->aposRegistrarPagamento($pagamento, $extratoService);
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível registrar o pagamento');
        }
    }

    public function pagarValorLivre(string $formaPagamento, ConfiguracaoService $configService, PagamentoService $service, ExtratoComandaService $extratoService): void
    {
        try {
            $dto = (new RegistrarPagamentoValorLivreDTO())
                ->setComandaId($this->comanda->id)
                ->setValor((float) str_replace(',', '.', $this->valorLivre))
                ->setFormaPagamento($formaPagamento)
                ->setNomePagador($this->nomePagador ?: null)
                ->setDeviceId($this->resolverDeviceId($formaPagamento, $configService));

            $pagamento = $service->registrarPorValorLivre($dto);

            $this->aposRegistrarPagamento($pagamento, $extratoService);
        } catch (\Exception $e) {
            $this->dispatch('toastr', message: $e->getMessage(), type: 'error', title: 'Não foi possível registrar o pagamento');
        }
    }

    public function fecharQrPix(): void
    {
        $this->pixExibido = null;
    }

    private function aposRegistrarPagamento(Pagamento $pagamento, ExtratoComandaService $extratoService): void
    {
        $this->comanda = $this->comanda->fresh();
        $this->valorLivre = '';
        $this->nomePagador = '';

        $extrato = $extratoService->calcular($this->comanda->id);
        $this->itensSelecionados = [];
        foreach ($extrato->itensAbertos as $item) {
            $this->itensSelecionados[$item->id] = true;
        }

        if ($pagamento->pix_qr_code) {
            $this->pixExibido = [
                'qr_code' => $pagamento->pix_qr_code,
                'qr_code_base64' => $pagamento->pix_qr_code_base64,
            ];
        }

        $mensagem = $pagamento->status->value === 'confirmado'
            ? 'Pagamento confirmado!'
            : 'Pagamento registrado — aguardando confirmação.';

        $this->dispatch('toastr', message: $mensagem, type: 'success', title: 'Pronto');
    }

    private function resolverDeviceId(string $formaPagamento, ConfiguracaoService $configService): ?string
    {
        $config = $configService->obter();

        return match ($formaPagamento) {
            FormaPagamento::API_POINT->value => $config?->mp_device_id_balcao,
            FormaPagamento::CELULAR_APROXIMACAO->value => $config?->mp_device_id_portatil,
            default => null,
        };
    }

    public function render(ExtratoComandaService $extratoService, ConfiguracaoService $configService)
    {
        $extrato = $extratoService->calcular($this->comanda->id);

        // Item que apareceu depois do mount() (ex.: garçom lançou mais um
        // pedido enquanto a tela de pagamento estava aberta) entra
        // marcado por padrão, mesma regra do CLAUDE.md 6.1.
        foreach ($extrato->itensAbertos as $item) {
            if (! array_key_exists($item->id, $this->itensSelecionados)) {
                $this->itensSelecionados[$item->id] = true;
            }
        }

        $totalSelecionado = $extrato->itensAbertos
            ->filter(fn ($item) => $this->itensSelecionados[$item->id] ?? false)
            ->sum(fn ($item) => (float) $item->precoProduto->preco * $item->quantidade);

        return view('livewire.pagamento.comanda-pagamento', [
            'extrato' => $extrato,
            'totalSelecionado' => $totalSelecionado,
            'configuracao' => $configService->obter(),
            'formasPagamento' => FormaPagamento::cases(),
            'pagamentos' => $this->comanda->pagamentos()->with(['itens', 'registradoPor'])->orderByDesc('created_at')->get(),
        ]);
    }
}
