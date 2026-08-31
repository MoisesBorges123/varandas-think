<?php

namespace App\Enums\Pagamento;

enum TipoPagamento: string
{
    case ITEM_ESPECIFICO = 'item_especifico';
    case VALOR_LIVRE = 'valor_livre';

    public function label(): string
    {
        return match ($this) {
            self::ITEM_ESPECIFICO => 'Por itens específicos',
            self::VALOR_LIVRE => 'Valor livre',
        };
    }
}
