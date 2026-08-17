<?php

namespace App\Models;

use App\Enums\Usuario\PerfilNome;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfis';

    protected $fillable = [
        'nome',
    ];

    protected function casts(): array
    {
        return [
            'nome' => PerfilNome::class,
        ];
    }

    public function usuarios(): HasMany
    {
        return $this->hasMany(Usuario::class);
    }
}
