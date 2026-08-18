<?php

namespace App\Models;

use App\Enums\Estoque\TipoMovimentacao;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Ledger append-only (CLAUDE.md seção 3) — nunca é atualizado ou
 * excluído, só compensado com novos lançamentos.
 */
class MovimentacaoEstoque extends Model
{
    protected $table = 'movimentacoes_estoque';

    const UPDATED_AT = null;

    protected $fillable = [
        'ingrediente_id',
        'tipo',
        'quantidade',
        'origem_tipo',
        'origem_id',
        'created_by',
    ];

    protected function casts(): array
    {
        return [
            'tipo' => TipoMovimentacao::class,
            'quantidade' => 'decimal:3',
        ];
    }

    public function ingrediente(): BelongsTo
    {
        return $this->belongsTo(Ingrediente::class);
    }
}
