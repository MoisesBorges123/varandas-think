<?php

namespace App\Enums\Cardapio;

enum TipoProduto: string
{
    case PREPARADO = 'preparado';
    case AVULSO = 'avulso';

    public function label(): string
    {
        return match ($this) {
            self::PREPARADO => 'Preparado (com receita)',
            self::AVULSO => 'Avulso (venda direta de balcão)',
        };
    }
}
