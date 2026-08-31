<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Amarra quais itens_pedido um pagamento "por item específico" cobriu
 * (CLAUDE.md seção 6.1) — vazio pra pagamentos tipo "valor_livre".
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pagamentos_itens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pagamento_id')->constrained('pagamentos')->cascadeOnDelete();
            $table->foreignId('item_pedido_id')->constrained('itens_pedido')->restrictOnDelete();

            $table->unique(['pagamento_id', 'item_pedido_id']);
            $table->index('item_pedido_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pagamentos_itens');
    }
};
