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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('restrict');
            $table->string('nome', 100);
            $table->enum('tipo', ['preparado', 'avulso'])->default('preparado')
                ->comment('preparado: tem receita | avulso: venda direta de balcão');
            $table->boolean('ativo')->default(true)
                ->comment('Produto existe no cardápio (descontinuado ou não)');
            $table->boolean('disponivel')->default(true)
                ->comment('Controle manual diário (acabou insumo, equipamento quebrado, etc)');
            $table->boolean('valida_estoque_automatico')->default(true)
                ->comment('Se deve validar estoque antes de permitir venda');
            $table->foreignId('created_by')->nullable()->constrained('usuarios')->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('categoria_id');
            $table->index('tipo');
            $table->index(['ativo', 'disponivel']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
