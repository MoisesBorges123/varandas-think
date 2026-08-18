<?php

namespace App\Enums\Estoque;

/**
 * Lista fechada de unidades para o cadastro manual de compra — evita
 * variações de digitação (kg, Kg, quilo...) que quebrariam comparação de
 * preço entre compras do mesmo insumo.
 */
enum UnidadeMedida: string
{
    case KG = 'kg';
    case G = 'g';
    case L = 'l';
    case ML = 'ml';
    case UN = 'un';
    case CX = 'cx';
    case PCT = 'pct';
    case FD = 'fd';
    case DZ = 'dz';

    public function label(): string
    {
        return match ($this) {
            self::KG => 'Quilograma (kg)',
            self::G => 'Grama (g)',
            self::L => 'Litro (l)',
            self::ML => 'Mililitro (ml)',
            self::UN => 'Unidade (un)',
            self::CX => 'Caixa (cx)',
            self::PCT => 'Pacote (pct)',
            self::FD => 'Fardo (fd)',
            self::DZ => 'Dúzia (dz)',
        };
    }
}
