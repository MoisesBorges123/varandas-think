<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuracao extends Model
{
    use HasFactory;

    protected $table = 'configuracoes';

    protected $fillable = [
        'bar_latitude',
        'bar_longitude',
        'raio_metros',
    ];

    protected function casts(): array
    {
        return [
            'bar_latitude' => 'decimal:7',
            'bar_longitude' => 'decimal:7',
            'raio_metros' => 'integer',
        ];
    }
}
