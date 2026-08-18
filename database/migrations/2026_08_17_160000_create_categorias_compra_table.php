<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Classificação livre de compras (ex.: "Bebidas", "Hortifruti", "Limpeza"),
 * cadastrada e usada só na tela de listagem de compras — não tem nenhuma
 * relação com App\Models\Categoria (categorias do cardápio).
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categorias_compra', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100)->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categorias_compra');
    }
};
