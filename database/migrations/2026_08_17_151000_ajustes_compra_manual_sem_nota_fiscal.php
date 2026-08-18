<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Ajustes de schema para suportar compra manual sem nota fiscal (fornecedor
 * comprado num lugar que não emite nota, ou cadastrado manualmente):
 *
 * - fornecedores.cnpj: passa a ser opcional — feirante/produtor local
 *   costuma não ter CNPJ. Continua único quando informado (MySQL/SQLite
 *   permitem múltiplos NULL num índice único, então isso não colide).
 * - compras.chave_acesso_nf: passa a ser opcional — só existe quando a
 *   compra veio de XML/scraping de uma nota real.
 * - itens_compra.codigo_fiscal: passa a ser opcional — só existe quando o
 *   insumo daquele item tem código fiscal cadastrado (o que normalmente só
 *   acontece via importação de nota).
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->string('cnpj', 18)->nullable()->change();
        });

        Schema::table('compras', function (Blueprint $table) {
            $table->string('chave_acesso_nf', 44)->nullable()->change();
        });

        Schema::table('itens_compra', function (Blueprint $table) {
            $table->string('codigo_fiscal', 50)->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->string('cnpj', 18)->nullable(false)->change();
        });

        Schema::table('compras', function (Blueprint $table) {
            $table->string('chave_acesso_nf', 44)->nullable(false)->change();
        });

        Schema::table('itens_compra', function (Blueprint $table) {
            $table->string('codigo_fiscal', 50)->nullable(false)->change();
        });
    }
};
