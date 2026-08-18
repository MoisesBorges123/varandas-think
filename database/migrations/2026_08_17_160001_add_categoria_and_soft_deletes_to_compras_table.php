<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Classificação opcional (categorias_compra) e exclusão lógica de compra.
 * Exclusão é soft-delete de propósito: a compra continua no banco pra
 * auditoria/espelho (CLAUDE.md seção 7), e o estoque que ela gerou é
 * desfeito por um lançamento de estorno separado (CompraService::excluir),
 * nunca apagando/alterando a movimentação de entrada original — o ledger
 * de movimentacoes_estoque é append-only (CLAUDE.md seção 3).
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('compras', function (Blueprint $table) {
            $table->foreignId('categoria_compra_id')
                ->nullable()
                ->after('fornecedor_id')
                ->constrained('categorias_compra')
                ->nullOnDelete();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::table('compras', function (Blueprint $table) {
            $table->dropConstrainedForeignId('categoria_compra_id');
            $table->dropSoftDeletes();
        });
    }
};
