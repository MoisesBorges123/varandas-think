<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Toggles do fluxo de pedidos (CLAUDE.md seções 2 e 10) — mesmo padrão já
 * usado pro raio de geolocalização: configuração de sistema simples numa
 * coluna da tabela singleton, sem o sistema de permissões granular (esse
 * continua adiado, CLAUDE.md seção 10.1).
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('configuracoes', function (Blueprint $table) {
            // OFF por padrão: diferente da geolocalização (falhar fechado
            // é o lado seguro), aqui falhar aberto é o lado seguro — ligar
            // por padrão bloquearia vendas com base num ledger de estoque
            // que pode estar incompleto no dia da migration.
            $table->boolean('validacao_estoque_automatica_ativa')->default(false);

            $table->boolean('permitir_garcom_cancelar_item_colega')->default(false);
            $table->boolean('permitir_garcom_excluir_proprio_item')->default(true);
            $table->boolean('permitir_garcom_excluir_item_colega')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('configuracoes', function (Blueprint $table) {
            $table->dropColumn([
                'validacao_estoque_automatica_ativa',
                'permitir_garcom_cancelar_item_colega',
                'permitir_garcom_excluir_proprio_item',
                'permitir_garcom_excluir_item_colega',
            ]);
        });
    }
};
