<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * IDs dos terminais Point vinculados à conta Mercado Pago (CLAUDE.md
 * seção 6) — a maquininha fixa do balcão e a portátil que o
 * garçom/atendente carrega. Configurável pelo dono, não fixo no código,
 * mesmo padrão já usado pro raio de geolocalização.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('configuracoes', function (Blueprint $table) {
            $table->string('mp_device_id_balcao', 50)->nullable()->after('permitir_garcom_excluir_item_colega');
            $table->string('mp_device_id_portatil', 50)->nullable()->after('mp_device_id_balcao');
        });
    }

    public function down(): void
    {
        Schema::table('configuracoes', function (Blueprint $table) {
            $table->dropColumn(['mp_device_id_balcao', 'mp_device_id_portatil']);
        });
    }
};
