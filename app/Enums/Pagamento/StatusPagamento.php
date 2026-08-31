<?php

namespace App\Enums\Pagamento;

enum StatusPagamento: string
{
    case PENDENTE = 'pendente';
    case CONFIRMADO = 'confirmado';
    case ESTORNADO = 'estornado';
    case REJEITADO = 'rejeitado';

    public function label(): string
    {
        return match ($this) {
            self::PENDENTE => 'Pendente',
            self::CONFIRMADO => 'Confirmado',
            self::ESTORNADO => 'Estornado',
            self::REJEITADO => 'Rejeitado',
        };
    }
}
