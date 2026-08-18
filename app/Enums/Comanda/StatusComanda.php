<?php

namespace App\Enums\Comanda;

enum StatusComanda: string
{
    case ABERTA = 'aberta';
    case FECHADA = 'fechada';

    public function label(): string
    {
        return match ($this) {
            self::ABERTA => 'Aberta',
            self::FECHADA => 'Fechada',
        };
    }
}
