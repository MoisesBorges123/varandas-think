<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Preço histórico de um produto (CLAUDE.md, seção 2): nunca sofre UPDATE,
 * toda alteração de preço insere um novo registro. O "preço atual" é
 * sempre o registro mais recente por vigente_desde.
 */
class PrecoProduto extends Model
{
    protected $table = 'precos_produtos';

    const UPDATED_AT = null;

    protected $fillable = [
        'produto_id',
        'preco',
        'vigente_desde',
        'created_by',
    ];

    protected function casts(): array
    {
        return [
            'preco' => 'decimal:2',
            'vigente_desde' => 'datetime',
        ];
    }

    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class);
    }
}
