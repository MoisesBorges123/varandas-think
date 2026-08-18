<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('itens_compra', function (Blueprint $table) {
            $table->id();
            $table->foreignId('compra_id')->constrained('compras')->onDelete('cascade');
            $table->foreignId('ingrediente_id')->constrained('ingredientes')->onDelete('restrict');
            $table->string('codigo_fiscal', 50);

            // "Espelho" do item: gravado como veio na nota, mesmo que o
            // ingrediente já cadastrado tenha outro nome hoje — histórico
            // não pode depender do estado atual do cadastro.
            $table->string('descricao_produto', 150);
            $table->string('ncm', 20)->nullable();
            $table->string('cfop', 10)->nullable();
            $table->string('cest', 20)->nullable();

            $table->decimal('quantidade', 10, 3);
            $table->string('unidade', 20);
            $table->decimal('preco_unitario', 10, 4);
            $table->decimal('valor_total_item', 10, 2);

            $table->index(['compra_id', 'ingrediente_id']);
            $table->index('ingrediente_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('itens_compra');
    }
};
