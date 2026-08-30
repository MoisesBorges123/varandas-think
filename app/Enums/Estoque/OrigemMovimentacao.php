<?php

namespace App\Enums\Estoque;

enum OrigemMovimentacao: string
{
    case COMPRA = 'compra';
    case RECEITA = 'receita';
    case VENDA_AVULSA = 'venda_avulsa';
    case AJUSTE_MANUAL = 'ajuste_manual';
    case ESTORNO_COMPRA = 'estorno_compra';
    case ESTORNO_RECEITA = 'estorno_receita';

    public function label(): string
    {
        return match ($this) {
            self::COMPRA => 'Compra',
            self::RECEITA => 'Consumo em receita',
            self::VENDA_AVULSA => 'Venda avulsa',
            self::AJUSTE_MANUAL => 'Ajuste manual',
            self::ESTORNO_COMPRA => 'Estorno de compra excluída',
            self::ESTORNO_RECEITA => 'Estorno de item de pedido cancelado',
        };
    }
}
