<?php

namespace App\Models;

use App\Enums\Cardapio\DestinoImpressao;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categorias';

    protected $fillable = [
        'nome',
        'destino_impressao',
        'ativo',
        'created_by',
    ];

    protected function casts(): array
    {
        return [
            'destino_impressao' => DestinoImpressao::class,
            'ativo' => 'boolean',
        ];
    }

    public function produtos(): HasMany
    {
        return $this->hasMany(Produto::class);
    }
}
