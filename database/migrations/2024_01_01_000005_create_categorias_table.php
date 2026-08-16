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
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->enum('destino_impressao', ['cozinha', 'bar', 'balcao', 'nenhum'])
                ->default('nenhum')
                ->comment('Define onde o pedido deve ser impresso/exibido');
            $table->boolean('ativo')->default(true);
            $table->foreignId('created_by')->nullable()->constrained('usuarios')->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('ativo');
            $table->index('destino_impressao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
