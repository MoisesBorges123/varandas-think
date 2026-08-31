<?php

namespace App\Services\Pagamento;

use App\DTO\Pagamento\ExtratoComandaDTO;
use App\Enums\Pagamento\StatusPagamento;
use App\Enums\Pedido\StatusItemPedido;
use App\Repositories\Contracts\ItemPedidoRepositoryInterface;
use App\Repositories\Contracts\PagamentoRepositoryInterface;
use App\Services\Base\ServiceBase;

/**
 * Extrato ao vivo de uma comanda (CLAUDE.md seção 6.1): quanto já foi
 * pago, quanto falta, e quais itens ainda estão em aberto. Cálculo puro
 * — nunca uma coluna de saldo cacheada, mesmo princípio já usado pro
 * estoque (CLAUDE.md seção 3).
 */
class ExtratoComandaService extends ServiceBase
{
    /**
     * Status de item_pedido que efetivamente entram na conta — uma vez
     * despachado pra produção, o insumo já foi comprometido (mesmo
     * conjunto de App\Models\ItemPedido::jaFoiDespachadoParaProducao(),
     * mais ENTREGUE).
     */
    private const STATUS_COBRAVEIS = [
        StatusItemPedido::ENVIADO_COZINHA,
        StatusItemPedido::PRONTO,
        StatusItemPedido::LIBERADO_BALCAO,
        StatusItemPedido::ENTREGUE,
    ];

    public function __construct(
        private readonly ItemPedidoRepositoryInterface $itemPedidoRepository,
        private readonly PagamentoRepositoryInterface $pagamentoRepository,
    ) {
    }

    public function calcular(int $comandaId): ExtratoComandaDTO
    {
        $itensCobraveis = $this->itemPedidoRepository->listarPorComanda($comandaId)
            ->filter(fn ($item) => in_array($item->status, self::STATUS_COBRAVEIS, true))
            ->values();

        $valorTotalItens = (float) $itensCobraveis->sum(
            fn ($item) => (float) $item->precoProduto->preco * $item->quantidade,
        );

        $pagamentos = $this->pagamentoRepository->listarPorComanda($comandaId);

        $totalPago = (float) $pagamentos
            ->where('status', StatusPagamento::CONFIRMADO)
            ->sum(fn ($pagamento) => (float) $pagamento->valor);

        // Itens cobertos por um pagamento pendente ou já confirmado saem
        // da lista de "abertos" — evita vender o mesmo item duas vezes
        // enquanto uma cobrança via gateway ainda está em voo.
        $itemIdsBloqueados = $pagamentos
            ->whereIn('status', [StatusPagamento::PENDENTE, StatusPagamento::CONFIRMADO])
            ->flatMap(fn ($pagamento) => $pagamento->itens->pluck('item_pedido_id'))
            ->all();

        $itensAbertos = $itensCobraveis
            ->reject(fn ($item) => in_array($item->id, $itemIdsBloqueados, true))
            ->values();

        return new ExtratoComandaDTO(
            valorTotalItens: $valorTotalItens,
            totalPago: $totalPago,
            saldoRestante: max(0.0, $valorTotalItens - $totalPago),
            itensAbertos: $itensAbertos,
        );
    }
}
