<?php

namespace App\Enums\Estoque;

enum TipoMovimentacao: string
{
    case ENTRADA = 'entrada';
    case SAIDA = 'saida';
    case AJUSTE = 'ajuste';

    public function label(): string
    {
        return match ($this) {
            self::ENTRADA => 'Entrada',
            self::SAIDA => 'Saída',
            self::AJUSTE => 'Ajuste',
        };
    }
}
