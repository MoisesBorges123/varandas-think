<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ConversaoProduto extends Model
{
    protected $table = 'conversoes_produto';

    public $timestamps = false;

    protected $fillable = [
        'produto_id',
        'grupo_equivalencia_id',
        'unidade_compra',
        'quantidade_unidade_compra',
        'rende_quantidade_venda',
    ];

    protected function casts(): array
    {
        return [
            'quantidade_unidade_compra' => 'decimal:3',
            'rende_quantidade_venda' => 'integer',
        ];
    }

    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class);
    }

    public function grupoEquivalencia(): BelongsTo
    {
        return $this->belongsTo(GrupoEquivalencia::class, 'grupo_equivalencia_id');
    }
}
