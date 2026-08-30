<?php

namespace App\Models;

use App\Enums\Pedido\OrigemItemPedido;
use App\Enums\Pedido\StatusItemPedido;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemPedido extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'itens_pedido';

    const UPDATED_AT = null;

    protected $fillable = [
        'comanda_id',
        'produto_id',
        'preco_produto_id',
        'quantidade',
        'pedido_por_nome',
        'origem',
        'status',
        'aprovado_por',
        'cancelado_por',
        'lancado_por',
        'hora_pedido',
        'hora_aprovacao',
        'hora_pronto',
        'hora_liberado_balcao',
        'hora_entregue',
    ];

    protected function casts(): array
    {
        return [
            'origem' => OrigemItemPedido::class,
            'status' => StatusItemPedido::class,
            'hora_pedido' => 'datetime',
            'hora_aprovacao' => 'datetime',
            'hora_pronto' => 'datetime',
            'hora_liberado_balcao' => 'datetime',
            'hora_entregue' => 'datetime',
        ];
    }

    public function comanda(): BelongsTo
    {
        return $this->belongsTo(Comanda::class);
    }

    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class);
    }

    public function precoProduto(): BelongsTo
    {
        return $this->belongsTo(PrecoProduto::class);
    }

    public function aprovadoPor(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'aprovado_por');
    }

    public function canceladoPor(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'cancelado_por');
    }

    public function lancadoPor(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'lancado_por');
    }

    public function estaPendenteAprovacao(): bool
    {
        return $this->status === StatusItemPedido::PENDENTE_APROVACAO;
    }

    /**
     * Uma vez despachado pra produção, a regra fixa de cancelamento
     * (CLAUDE.md seção 10 — "envolve desperdício de insumo") passa a
     * valer, independente de quem lançou o item.
     */
    public function jaFoiDespachadoParaProducao(): bool
    {
        return in_array($this->status, [
            StatusItemPedido::ENVIADO_COZINHA,
            StatusItemPedido::PRONTO,
            StatusItemPedido::LIBERADO_BALCAO,
        ], true);
    }
}
