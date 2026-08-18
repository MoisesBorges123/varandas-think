<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fornecedor_id')->constrained('fornecedores')->onDelete('restrict');
            $table->string('chave_acesso_nf', 44)->unique();
            $table->string('numero_nf', 20)->nullable();
            $table->string('serie_nf', 10)->nullable();

            // "Espelho" da nota: caminho do XML bruto quando disponível,
            // ou do HTML bruto do portal da Sefaz quando veio por
            // scraping — nunca os dois, mas sempre um registro da fonte
            // original para auditoria futura.
            $table->string('xml_path')->nullable();
            $table->string('fonte', 20)->comment('xml, scraping_sefaz');

            $table->dateTime('data_emissao')->nullable();
            $table->date('data_compra');

            $table->decimal('valor_produtos', 10, 2)->default(0);
            $table->decimal('valor_desconto', 10, 2)->default(0);
            $table->decimal('valor_outros', 10, 2)->default(0);
            $table->decimal('valor_icms_base', 10, 2)->nullable();
            $table->decimal('valor_icms', 10, 2)->nullable();
            $table->decimal('valor_total', 10, 2);

            $table->foreignId('created_by')->nullable()->constrained('usuarios')->onDelete('set null');
            $table->timestamps();

            $table->index('fornecedor_id');
            $table->index('data_compra');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
