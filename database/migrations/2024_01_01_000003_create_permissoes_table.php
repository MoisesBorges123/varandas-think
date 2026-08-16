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
        Schema::create('permissoes', function (Blueprint $table) {
            $table->id();
            $table->char('codigo', 6)->unique()->comment('6 dígitos numéricos fixos, gerado automaticamente');
            $table->string('modulo', 50)->comment('Definido via atributo HasPermissions na classe');
            $table->string('nome_legivel', 100)->comment('Editável livremente, não afeta o código fixo');
            $table->timestamps();
            
            $table->index('codigo');
            $table->index('modulo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissoes');
    }
};
