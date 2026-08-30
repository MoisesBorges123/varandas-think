<?php

namespace App\Models;

use App\Enums\VendaAvulsa\FormaPagamentoVendaAvulsa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Cabeçalho de uma venda avulsa de balcão — pode ter 1 ou mais itens
 * (produtos diferentes), mas um único pagamento (CLAUDE.md seção 3.2).
 */
class VendaAvulsa extends Model
{
    use HasFactory;

    protected $table = 'vendas_avulsas';

    const UPDATED_AT = null;

    protected $fillable = [
        'valor_total',
        'forma_pagamento',
        'vendido_por',
    ];

    protected function casts(): array
    {
        return [
            'valor_total' => 'decimal:2',
            'forma_pagamento' => FormaPagamentoVendaAvulsa::class,
        ];
    }

    public function itens(): HasMany
    {
        return $this->hasMany(ItemVendaAvulsa::class);
    }

    public function vendidoPor(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'vendido_por');
    }
}
