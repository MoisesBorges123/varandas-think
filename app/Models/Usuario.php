<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Usuario extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    use SoftDeletes;

    protected $table = 'usuarios';

    protected $fillable = [
        'perfil_id',
        'nome',
        'email',
        'senha_hash',
        'password',
        'ativo',
    ];

    protected $hidden = [
        'senha_hash',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'ativo' => 'boolean',
        ];
    }

    /**
     * Ponte para as Actions padrão do Fortify (ResetUserPassword,
     * UpdateUserPassword), que escrevem no atributo `password` — aqui a
     * coluna real é `senha_hash` (ver diagrama ER do Varandas).
     */
    protected function password(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->senha_hash,
            set: fn (string $value) => ['senha_hash' => Hash::make($value)],
        );
    }

    public function getAuthPassword(): string
    {
        return $this->senha_hash;
    }

    public function perfil(): BelongsTo
    {
        return $this->belongsTo(Perfil::class);
    }
}
