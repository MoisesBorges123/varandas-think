<?php

namespace App\Models;

use App\Enums\Cardapio\TipoProduto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'produtos';

    protected $fillable = [
        'categoria_id',
        'nome',
        'tipo',
        'ativo',
        'disponivel',
        'valida_estoque_automatico',
        'created_by',
    ];

    protected function casts(): array
    {
        return [
            'tipo' => TipoProduto::class,
            'ativo' => 'boolean',
            'disponivel' => 'boolean',
            'valida_estoque_automatico' => 'boolean',
        ];
    }

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function precos(): HasMany
    {
        return $this->hasMany(PrecoProduto::class)->orderByDesc('vigente_desde');
    }

    public function receita(): HasOne
    {
        return $this->hasOne(Receita::class);
    }

    /**
     * Preço vigente mais recente (CLAUDE.md, seção 2 — preço é histórico,
     * "preço atual" é sempre o registro mais recente).
     */
    public function precoAtual(): HasOne
    {
        return $this->hasOne(PrecoProduto::class)->ofMany('vigente_desde', 'max');
    }

    /**
     * Camadas 1 e 2 de disponibilidade (CLAUDE.md, seção 2). A camada 3
     * (validação de estoque) depende da feature de Estoque, ainda não
     * implementada.
     */
    public function podeSerVendido(): bool
    {
        return $this->ativo && $this->disponivel;
    }
}
