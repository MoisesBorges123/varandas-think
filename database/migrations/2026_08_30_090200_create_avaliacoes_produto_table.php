<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Avaliação de 1 a 5 estrelas por item de pedido — amarrada ao item, não
 * à comanda, porque o cliente avalia "o prato que pediu" (unidade
 * auditável já existente em itens_pedido). Imutável depois de criada,
 * mesmo padrão de precos_produtos (sem updated_at).
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('avaliacoes_produto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_pedido_id')->constrained('itens_pedido')->restrictOnDelete();
            $table->foreignId('produto_id')->constrained('produtos')->restrictOnDelete();
            $table->unsignedTinyInteger('nota');
            $table->timestamp('created_at')->useCurrent();

            $table->unique('item_pedido_id');
            $table->index('produto_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('avaliacoes_produto');
    }
};
