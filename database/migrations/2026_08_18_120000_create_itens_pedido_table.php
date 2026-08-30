<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Item de pedido — schema conforme docs/varandas-modelo-dados-completo.mermaid
 * (linhas 138-157). Soft delete real (deleted_at) — "excluir" é uma
 * operação distinta de "cancelar" (transição de status, sem apagar a
 * linha, preserva histórico pra análise de gargalo da seção 8).
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('itens_pedido', function (Blueprint $table) {
            $table->id();
            $table->foreignId('comanda_id')->constrained('comandas');
            $table->foreignId('produto_id')->constrained('produtos')->onDelete('restrict');
            $table->foreignId('preco_produto_id')->constrained('precos_produtos')->onDelete('restrict');
            $table->unsignedInteger('quantidade')->default(1);
            $table->string('pedido_por_nome', 100)->nullable();
            $table->enum('origem', ['garcom', 'cliente_app']);
            $table->enum('status', [
                'pendente_aprovacao', 'aprovado', 'rejeitado', 'enviado_cozinha',
                'pronto', 'liberado_balcao', 'entregue', 'cancelado', 'indisponivel_estoque',
            ])->default('pendente_aprovacao');

            // Nullable mesmo aprovado_por/cancelado_por — um item de
            // origem cliente_app não tem usuário autenticado "lançando".
            $table->foreignId('aprovado_por')->nullable()->constrained('usuarios')->onDelete('set null');
            $table->foreignId('cancelado_por')->nullable()->constrained('usuarios')->onDelete('set null');
            $table->foreignId('lancado_por')->nullable()->constrained('usuarios')->onDelete('set null');

            $table->timestamp('hora_pedido')->useCurrent();
            $table->timestamp('hora_aprovacao')->nullable();
            $table->timestamp('hora_pronto')->nullable();
            $table->timestamp('hora_liberado_balcao')->nullable();
            $table->timestamp('hora_entregue')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->softDeletes();

            $table->index(['comanda_id', 'status']);
            $table->index('status');
            $table->index('lancado_por');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('itens_pedido');
    }
};
