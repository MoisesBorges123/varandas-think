<?php

namespace App\Models;

use App\Enums\Pagamento\FormaPagamento;
use App\Enums\Pagamento\StatusPagamento;
use App\Enums\Pagamento\TipoPagamento;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Pagamento parcial ou total de uma comanda (CLAUDE.md seção 6/6.1) —
 * por itens específicos ou valor livre, com ou sem gateway (Mercado
 * Pago) por trás dependendo da forma de pagamento.
 */
class Pagamento extends Model
{
    use HasFactory;

    protected $table = 'pagamentos';

    const UPDATED_AT = null;

    protected $fillable = [
        'comanda_id',
        'tipo',
        'valor',
        'nome_pagador',
        'forma_pagamento',
        'mp_payment_id',
        'mp_device_id',
        'pix_qr_code',
        'pix_qr_code_base64',
        'status',
        'registrado_por',
        'confirmado_em',
    ];

    protected function casts(): array
    {
        return [
            'tipo' => TipoPagamento::class,
            'valor' => 'decimal:2',
            'forma_pagamento' => FormaPagamento::class,
            'status' => StatusPagamento::class,
            'confirmado_em' => 'datetime',
        ];
    }

    public function comanda(): BelongsTo
    {
        return $this->belongsTo(Comanda::class);
    }

    public function itens(): HasMany
    {
        return $this->hasMany(PagamentoItem::class);
    }

    public function registradoPor(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'registrado_por');
    }

    /**
     * api_point/celular_aproximacao usam a Orders API (recurso "order");
     * pix_celular/pix_qrcode_impresso usam a Payments API clássica
     * (recurso "payment") — o gateway precisa saber qual consultar.
     */
    public function usaOrdersApi(): bool
    {
        return $this->forma_pagamento->precisaDeTerminal();
    }
}
