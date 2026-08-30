<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AvaliacaoProduto extends Model
{
    use HasFactory;

    protected $table = 'avaliacoes_produto';

    const UPDATED_AT = null;

    protected $fillable = [
        'item_pedido_id',
        'produto_id',
        'nota',
    ];

    protected function casts(): array
    {
        return [
            'nota' => 'integer',
        ];
    }

    public function itemPedido(): BelongsTo
    {
        return $this->belongsTo(ItemPedido::class);
    }

    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class);
    }
}
