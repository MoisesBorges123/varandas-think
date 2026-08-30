<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Linha de produto dentro de uma venda avulsa — histórico imutável (sem
 * timestamps), mesmo padrão de ItemCompra.
 */
class ItemVendaAvulsa extends Model
{
    protected $table = 'itens_venda_avulsa';

    public $timestamps = false;

    protected $fillable = [
        'venda_avulsa_id',
        'produto_id',
        'quantidade',
        'preco_unitario',
        'valor_total_item',
    ];

    protected function casts(): array
    {
        return [
            'quantidade' => 'integer',
            'preco_unitario' => 'decimal:2',
            'valor_total_item' => 'decimal:2',
        ];
    }

    public function vendaAvulsa(): BelongsTo
    {
        return $this->belongsTo(VendaAvulsa::class);
    }

    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class);
    }
}
