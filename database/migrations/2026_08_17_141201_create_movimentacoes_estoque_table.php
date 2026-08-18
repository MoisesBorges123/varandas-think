<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('movimentacoes_estoque', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ingrediente_id')->constrained('ingredientes')->onDelete('restrict');
            $table->string('tipo', 20)->comment('entrada, saida, ajuste');
            $table->decimal('quantidade', 10, 3);
            $table->string('origem_tipo', 30)->comment('compra, receita, venda_avulsa, ajuste_manual');
            $table->unsignedBigInteger('origem_id')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->foreignId('created_by')->nullable()->constrained('usuarios')->onDelete('set null');

            $table->index('ingrediente_id');
            $table->index(['origem_tipo', 'origem_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('movimentacoes_estoque');
    }
};
