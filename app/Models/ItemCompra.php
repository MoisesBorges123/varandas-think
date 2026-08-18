<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Histórico imutável (sem timestamps) — item gravado exatamente como veio
 * na nota, mesmo que o ingrediente já cadastrado tenha outro nome hoje.
 */
class ItemCompra extends Model
{
    protected $table = 'itens_compra';

    public $timestamps = false;

    protected $fillable = [
        'compra_id',
        'ingrediente_id',
        'codigo_fiscal',
        'descricao_produto',
        'ncm',
        'cfop',
        'cest',
        'quantidade',
        'unidade',
        'preco_unitario',
        'valor_total_item',
    ];

    protected function casts(): array
    {
        return [
            'quantidade' => 'decimal:3',
            'preco_unitario' => 'decimal:4',
            'valor_total_item' => 'decimal:2',
        ];
    }

    public function compra(): BelongsTo
    {
        return $this->belongsTo(Compra::class);
    }

    public function ingrediente(): BelongsTo
    {
        return $this->belongsTo(Ingrediente::class);
    }
}
