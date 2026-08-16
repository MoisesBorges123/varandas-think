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
        Schema::create('ingredientes_receita', function (Blueprint $table) {
            $table->id();
            $table->foreignId('receita_id')->constrained('receitas')->onDelete('cascade');
            $table->foreignId('ingrediente_id')->constrained('ingredientes')->onDelete('restrict');
            $table->decimal('quantidade', 10, 3);
            $table->string('unidade_medida', 20);
            
            $table->index(['receita_id', 'ingrediente_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredientes_receita');
    }
};
