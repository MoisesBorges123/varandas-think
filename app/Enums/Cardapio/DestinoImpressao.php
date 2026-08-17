<?php

namespace App\Enums\Cardapio;

enum DestinoImpressao: string
{
    case COZINHA = 'cozinha';
    case BAR = 'bar';
    case BALCAO = 'balcao';
    case NENHUM = 'nenhum';

    public function label(): string
    {
        return match ($this) {
            self::COZINHA => 'Cozinha',
            self::BAR => 'Bar',
            self::BALCAO => 'Balcão',
            self::NENHUM => 'Nenhum',
        };
    }
}
