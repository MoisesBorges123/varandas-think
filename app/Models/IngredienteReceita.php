<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Pivot explícito de ingredientes_receita (tem PK própria, diferente do
 * pivot padrão do Eloquent).
 */
class IngredienteReceita extends Pivot
{
    protected $table = 'ingredientes_receita';

    public $incrementing = true;

    public $timestamps = false;

    protected $fillable = [
        'receita_id',
        'ingrediente_id',
        'quantidade',
        'unidade_medida',
    ];

    protected function casts(): array
    {
        return [
            'quantidade' => 'decimal:3',
        ];
    }
}
