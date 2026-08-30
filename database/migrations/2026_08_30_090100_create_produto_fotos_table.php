<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Fotos do produto (1:N) — CLAUDE.md não previa isso no ER original,
 * feature nova pro catálogo visual do cliente. `ordem` define a posição
 * na galeria; a menor ordem é a capa exibida no card do catálogo.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produto_fotos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produto_id')->constrained('produtos')->cascadeOnDelete();
            $table->string('caminho', 255);
            $table->unsignedInteger('ordem')->default(0);
            $table->timestamps();

            $table->index(['produto_id', 'ordem']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produto_fotos');
    }
};
