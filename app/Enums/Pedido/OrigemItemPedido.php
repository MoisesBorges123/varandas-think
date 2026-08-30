<?php

namespace App\Enums\Pedido;

enum OrigemItemPedido: string
{
    case GARCOM = 'garcom';
    case CLIENTE_APP = 'cliente_app';

    public function label(): string
    {
        return match ($this) {
            self::GARCOM => 'Garçom',
            self::CLIENTE_APP => 'Cliente (app)',
        };
    }
}
