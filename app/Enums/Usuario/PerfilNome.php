<?php

namespace App\Enums\Usuario;

enum PerfilNome: string
{
    case ADMINISTRADOR = 'administrador';
    case BALCONISTA = 'balconista';
    case COZINHEIRO = 'cozinheiro';
    case GARCOM = 'garcom';

    public function label(): string
    {
        return match ($this) {
            self::ADMINISTRADOR => 'Administrador',
            self::BALCONISTA => 'Balconista',
            self::COZINHEIRO => 'Cozinheiro(a)',
            self::GARCOM => 'Garçom',
        };
    }
}
