<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoriaCompra extends Model
{
    use HasFactory;

    protected $table = 'categorias_compra';

    protected $fillable = [
        'nome',
    ];

    public function compras(): HasMany
    {
        return $this->hasMany(Compra::class);
    }
}
