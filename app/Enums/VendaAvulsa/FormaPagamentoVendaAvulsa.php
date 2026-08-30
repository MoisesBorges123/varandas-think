<?php

namespace App\Enums\VendaAvulsa;

enum FormaPagamentoVendaAvulsa: string
{
    case API_POINT = 'api_point';
    case CELULAR_APROXIMACAO = 'celular_aproximacao';
    case PIX_CELULAR = 'pix_celular';
    case DINHEIRO = 'dinheiro';

    public function label(): string
    {
        return match ($this) {
            self::API_POINT => 'Maquininha',
            self::CELULAR_APROXIMACAO => 'Cartão no celular',
            self::PIX_CELULAR => 'Pix',
            self::DINHEIRO => 'Dinheiro',
        };
    }
}
