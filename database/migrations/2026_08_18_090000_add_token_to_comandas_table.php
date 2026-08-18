<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Token de acesso público da comanda (link do QR code / celular do
 * cliente) — nunca o id sequencial, pra não dar pra enumerar/adivinhar
 * a comanda de outra mesa. Nullable só porque o Laravel exige isso ao
 * adicionar coluna unique numa tabela existente; na prática
 * ComandaService::abrir() sempre preenche.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('comandas', function (Blueprint $table) {
            $table->string('token', 40)->unique()->nullable()->after('id');
        });
    }

    public function down(): void
    {
        Schema::table('comandas', function (Blueprint $table) {
            $table->dropUnique(['token']);
            $table->dropColumn('token');
        });
    }
};
