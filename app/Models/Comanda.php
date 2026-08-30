<?php

namespace App\Models;

use App\Enums\Comanda\StatusComanda;
use App\Enums\Comanda\TipoComanda;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comanda extends Model
{
    use HasFactory;

    protected $table = 'comandas';

    protected $fillable = [
        'token',
        'mesa_id',
        'garcom_id',
        'tipo',
        'status',
        'cliente_nome',
        'cliente_cpf',
        'cliente_telefone',
        'cliente_email',
        'aberta_em',
        'fechada_em',
    ];

    protected function casts(): array
    {
        return [
            'tipo' => TipoComanda::class,
            'status' => StatusComanda::class,
            'aberta_em' => 'datetime',
            'fechada_em' => 'datetime',
        ];
    }

    public function mesa(): BelongsTo
    {
        return $this->belongsTo(Mesa::class);
    }

    public function garcom(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'garcom_id');
    }

    public function itensPedido(): HasMany
    {
        return $this->hasMany(ItemPedido::class);
    }

    public function estaAberta(): bool
    {
        return $this->status === StatusComanda::ABERTA;
    }
}
