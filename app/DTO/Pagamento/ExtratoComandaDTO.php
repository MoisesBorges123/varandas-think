<?php

namespace App\DTO\Pagamento;

use Illuminate\Support\Collection;

/**
 * Extrato ao vivo de uma comanda (CLAUDE.md seção 6.1) — não estende
 * DTOBase porque não é dado de entrada Livewire→Service, é o valor de
 * SAÍDA do cálculo (ExtratoComandaService::calcular()).
 */
final class ExtratoComandaDTO
{
    /**
     * @param  Collection<int, \App\Models\ItemPedido>  $itensAbertos  itens cobráveis ainda não cobertos por pagamento pendente/confirmado
     */
    public function __construct(
        public readonly float $valorTotalItens,
        public readonly float $totalPago,
        public readonly float $saldoRestante,
        public readonly Collection $itensAbertos,
    ) {
    }
}
