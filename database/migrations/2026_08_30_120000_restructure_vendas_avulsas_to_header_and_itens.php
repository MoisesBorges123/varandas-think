<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Redesenho pra suportar carrinho (adicionar/finalizar/cancelar) — um
 * cliente pode comprar 1 ou mais produtos numa única venda avulsa, com
 * um único pagamento no final. `vendas_avulsas` vira o cabeçalho (valor
 * total + forma de pagamento + quem vendeu); os produtos/quantidades
 * migram pra `itens_venda_avulsa`, mesmo padrão já usado em
 * compras/itens_compra.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('vendas_avulsas', function (Blueprint $table) {
            $table->dropIndex(['produto_id']);
            $table->dropConstrainedForeignId('produto_id');
            $table->dropColumn('quantidade');
        });

        Schema::create('itens_venda_avulsa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('venda_avulsa_id')->constrained('vendas_avulsas')->cascadeOnDelete();
            $table->foreignId('produto_id')->constrained('produtos')->restrictOnDelete();
            $table->unsignedInteger('quantidade');
            $table->decimal('preco_unitario', 10, 2);
            $table->decimal('valor_total_item', 10, 2);

            $table->index(['venda_avulsa_id', 'produto_id']);
            $table->index('produto_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('itens_venda_avulsa');

        Schema::table('vendas_avulsas', function (Blueprint $table) {
            $table->foreignId('produto_id')->nullable()->after('id')->constrained('produtos')->restrictOnDelete();
            $table->unsignedInteger('quantidade')->nullable()->after('produto_id');
        });
    }
};
