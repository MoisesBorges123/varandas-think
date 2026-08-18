<?php

namespace App\Models;

use App\Enums\Estoque\FonteCompra;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Compra extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'compras';

    protected $fillable = [
        'fornecedor_id',
        'categoria_compra_id',
        'chave_acesso_nf',
        'numero_nf',
        'serie_nf',
        'xml_path',
        'fonte',
        'data_emissao',
        'data_compra',
        'valor_produtos',
        'valor_desconto',
        'valor_outros',
        'valor_icms_base',
        'valor_icms',
        'valor_total',
        'created_by',
    ];

    protected function casts(): array
    {
        return [
            'fonte' => FonteCompra::class,
            'data_emissao' => 'datetime',
            'data_compra' => 'date',
        ];
    }

    public function fornecedor(): BelongsTo
    {
        return $this->belongsTo(Fornecedor::class);
    }

    public function categoriaCompra(): BelongsTo
    {
        return $this->belongsTo(CategoriaCompra::class);
    }

    public function itens(): HasMany
    {
        return $this->hasMany(ItemCompra::class);
    }
}
