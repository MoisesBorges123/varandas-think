<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

/**
 * Tabela singleton (sempre id=1) de configurações do sistema — hoje só
 * geolocalização (CLAUDE.md seção 4.4: raio configurável, não fixo no
 * código). Semeia a linha aqui pra tela de configuração sempre ter algo
 * pra editar, mas deixa lat/lng em branco — coordenadas reais do bar não
 * são adivinháveis pela migration. Enquanto não configuradas,
 * GeolocalizacaoService falha fechado (nega acesso), nunca aberto.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('configuracoes', function (Blueprint $table) {
            $table->id();
            $table->decimal('bar_latitude', 10, 7)->nullable();
            $table->decimal('bar_longitude', 10, 7)->nullable();
            $table->unsignedInteger('raio_metros')->default(100);
            $table->timestamps();
        });

        DB::table('configuracoes')->insert([
            'id' => 1,
            'raio_metros' => 100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('configuracoes');
    }
};
