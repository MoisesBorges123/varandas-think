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
        'validacao_estoque_automatica_ativa',
        'permitir_garcom_cancelar_item_colega',
        'permitir_garcom_excluir_proprio_item',
        'permitir_garcom_excluir_item_colega',
        'mp_device_id_balcao',
        'mp_device_id_portatil',
    ];

    protected function casts(): array
    {
        return [
            'bar_latitude' => 'decimal:7',
            'bar_longitude' => 'decimal:7',
            'raio_metros' => 'integer',
            'validacao_estoque_automatica_ativa' => 'boolean',
            'permitir_garcom_cancelar_item_colega' => 'boolean',
            'permitir_garcom_excluir_proprio_item' => 'boolean',
            'permitir_garcom_excluir_item_colega' => 'boolean',
        ];
    }
}
