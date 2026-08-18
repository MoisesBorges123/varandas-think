<?php

namespace App\Enums\Estoque;

enum FonteCompra: string
{
    case XML = 'xml';
    case SCRAPING_SEFAZ = 'scraping_sefaz';
    case MANUAL = 'manual';

    public function label(): string
    {
        return match ($this) {
            self::XML => 'Arquivo XML',
            self::SCRAPING_SEFAZ => 'Portal da Sefaz',
            self::MANUAL => 'Compra sem nota fiscal',
        };
    }
}
