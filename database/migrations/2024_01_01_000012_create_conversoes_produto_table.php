<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('conversoes_produto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produto_id')
                ->constrained('produtos')
                ->onDelete('cascade')
                ->comment('Produto de venda avulsa');
            $table->string('unidade_compra', 20)->comment('ex: gramas, kg');
            $table->decimal('quantidade_unidade_compra', 10, 3)->comment('ex: 500 (gramas)');
            $table->integer('rende_quantidade_venda')->comment('ex: 200 (unidades de venda)');
            
            $table->index('produto_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conversoes_produto');
    }
};
