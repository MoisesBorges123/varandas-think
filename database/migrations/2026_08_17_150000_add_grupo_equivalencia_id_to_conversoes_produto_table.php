<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * A migration original de conversoes_produto guardava a taxa de conversão
 * (unidade de compra -> unidade de venda) mas não tinha nenhuma coluna
 * apontando pro insumo — sem isso não há como saber de onde baixar estoque
 * quando um produto avulso é vendido. Aponta pro grupo de equivalência (não
 * pro ingrediente específico) para ficar consistente com a receita
 * (CLAUDE.md seção 3.1): baixa sempre do saldo consolidado do grupo, mesmo
 * que o insumo seja recomprado depois com outro código fiscal/fornecedor.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('conversoes_produto', function (Blueprint $table) {
            $table->foreignId('grupo_equivalencia_id')
                ->after('produto_id')
                ->constrained('grupos_equivalencia')
                ->comment('Insumo (grupo de equivalência) de onde a venda avulsa baixa estoque');

            $table->unique('produto_id', 'conversoes_produto_produto_id_unique');
        });
    }

    public function down(): void
    {
        Schema::table('conversoes_produto', function (Blueprint $table) {
            $table->dropUnique('conversoes_produto_produto_id_unique');
            $table->dropConstrainedForeignId('grupo_equivalencia_id');
        });
    }
};
