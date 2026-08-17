<?php

namespace App\Models;

use App\Enums\Notificacao\TipoNotificacao;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notificacao extends Model
{
    protected $table = 'notificacoes';

    const UPDATED_AT = null;

    protected $fillable = [
        'perfil_id',
        'usuario_id',
        'tipo',
        'titulo',
        'mensagem',
        'referencia_tipo',
        'referencia_id',
        'resolvida_em',
    ];

    protected function casts(): array
    {
        return [
            'tipo' => TipoNotificacao::class,
            'resolvida_em' => 'datetime',
        ];
    }

    public function perfil(): BelongsTo
    {
        return $this->belongsTo(Perfil::class);
    }

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class);
    }

    public function scopePendentes(Builder $query): Builder
    {
        return $query->whereNull('resolvida_em');
    }

    public function scopeParaUsuario(Builder $query, Usuario $usuario): Builder
    {
        return $query->where(function (Builder $query) use ($usuario) {
            $query->where('perfil_id', $usuario->perfil_id)
                ->orWhere('usuario_id', $usuario->id);
        });
    }
}
