<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Amarra um pagamento "por item específico" aos itens_pedido cobertos —
 * vazio pra pagamentos tipo "valor_livre" (CLAUDE.md seção 6.1).
 */
class PagamentoItem extends Model
{
    protected $table = 'pagamentos_itens';

    public $timestamps = false;

    protected $fillable = [
        'pagamento_id',
        'item_pedido_id',
    ];

    public function pagamento(): BelongsTo
    {
        return $this->belongsTo(Pagamento::class);
    }

    public function itemPedido(): BelongsTo
    {
        return $this->belongsTo(ItemPedido::class);
    }
}
