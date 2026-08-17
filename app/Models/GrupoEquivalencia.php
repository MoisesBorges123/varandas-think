<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GrupoEquivalencia extends Model
{
    use HasFactory;

    protected $table = 'grupos_equivalencia';

    const CREATED_AT = null;

    protected $fillable = [
        'nome',
        'custo_medio_ponderado',
    ];

    protected function casts(): array
    {
        return [
            'custo_medio_ponderado' => 'decimal:4',
        ];
    }

    public function ingredientes(): HasMany
    {
        return $this->hasMany(Ingrediente::class);
    }
}
