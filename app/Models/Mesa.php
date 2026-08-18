<?php

namespace App\Models;

use App\Enums\Comanda\StatusComanda;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mesa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'mesas';

    protected $fillable = [
        'numero',
        'token',
    ];

    public function comandas(): HasMany
    {
        return $this->hasMany(Comanda::class);
    }

    public function comandaAberta(): HasOne
    {
        return $this->hasOne(Comanda::class)->where('status', StatusComanda::ABERTA);
    }
}
