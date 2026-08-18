<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ingrediente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ingredientes';

    protected $fillable = [
        'grupo_equivalencia_id',
        'nome',
        'unidade_medida',
        'codigo_fiscal',
    ];

    public function grupoEquivalencia(): BelongsTo
    {
        return $this->belongsTo(GrupoEquivalencia::class);
    }

    public function receitas(): BelongsToMany
    {
        return $this->belongsToMany(Receita::class, 'ingredientes_receita')
            ->using(IngredienteReceita::class)
            ->withPivot(['id', 'quantidade', 'unidade_medida']);
    }

    public function movimentacoes(): HasMany
    {
        return $this->hasMany(MovimentacaoEstoque::class);
    }

    public function estaSemGrupo(): bool
    {
        return $this->grupo_equivalencia_id === null;
    }
}
