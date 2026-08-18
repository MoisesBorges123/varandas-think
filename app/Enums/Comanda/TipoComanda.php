<?php

namespace App\Enums\Comanda;

enum TipoComanda: string
{
    case INDIVIDUAL = 'individual';
    case COMPARTILHADA = 'compartilhada';

    public function label(): string
    {
        return match ($this) {
            self::INDIVIDUAL => 'Individual',
            self::COMPARTILHADA => 'Compartilhada',
        };
    }
}
