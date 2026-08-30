<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Venda avulsa de balcão (CLAUDE.md seção 3.2) — schema conforme
 * docs/varandas-modelo-dados-completo.mermaid (linhas 187-195), com
 * "dinheiro" adicionado ao enum de forma de pagamento (a seção 6 geral já
 * trata dinheiro como modalidade válida, o ER original só não listou).
 * Sem updated_at nem soft delete — venda é imutável, sem fluxo de
 * cancelamento/estorno nesta etapa.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vendas_avulsas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produto_id')->constrained('produtos')->restrictOnDelete();
            $table->unsignedInteger('quantidade');
            $table->decimal('valor_total', 10, 2);
            $table->enum('forma_pagamento', ['api_point', 'celular_aproximacao', 'pix_celular', 'dinheiro']);
            $table->foreignId('vendido_por')->nullable()->constrained('usuarios')->onDelete('set null');
            $table->timestamp('created_at')->useCurrent();

            $table->index('produto_id');
            $table->index('vendido_por');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vendas_avulsas');
    }
};
