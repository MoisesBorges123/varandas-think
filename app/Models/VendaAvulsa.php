<?php

namespace App\Models;

use App\Enums\VendaAvulsa\FormaPagamentoVendaAvulsa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VendaAvulsa extends Model
{
    use HasFactory;

    protected $table = 'vendas_avulsas';

    const UPDATED_AT = null;

    protected $fillable = [
        'produto_id',
        'quantidade',
        'valor_total',
        'forma_pagamento',
        'vendido_por',
    ];

    protected function casts(): array
    {
        return [
            'quantidade' => 'integer',
            'valor_total' => 'decimal:2',
            'forma_pagamento' => FormaPagamentoVendaAvulsa::class,
        ];
    }

    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class);
    }

    public function vendidoPor(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'vendido_por');
    }
}
