<?php

namespace App\Enums\Pagamento;

enum FormaPagamento: string
{
    case API_POINT = 'api_point';
    case CELULAR_APROXIMACAO = 'celular_aproximacao';
    case PIX_CELULAR = 'pix_celular';
    case PIX_QRCODE_IMPRESSO = 'pix_qrcode_impresso';
    case DINHEIRO = 'dinheiro';

    public function label(): string
    {
        return match ($this) {
            self::API_POINT => 'Maquininha do balcão',
            self::CELULAR_APROXIMACAO => 'Maquininha portátil',
            self::PIX_CELULAR => 'Pix (celular)',
            self::PIX_QRCODE_IMPRESSO => 'Pix (QR impresso)',
            self::DINHEIRO => 'Dinheiro',
        };
    }

    /**
     * api_point/celular_aproximacao mandam a ordem de cobrança pra um
     * terminal Point físico específico (CLAUDE.md seção 6) — precisam de
     * um device_id configurado.
     */
    public function precisaDeTerminal(): bool
    {
        return in_array($this, [self::API_POINT, self::CELULAR_APROXIMACAO], true);
    }

    public function ehPix(): bool
    {
        return in_array($this, [self::PIX_CELULAR, self::PIX_QRCODE_IMPRESSO], true);
    }
}
