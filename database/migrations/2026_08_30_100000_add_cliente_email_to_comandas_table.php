<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * E-mail do cliente — opcional, ao contrário de nome/telefone (decisão do
 * dono: simplificar a abertura de comanda pelo QR code, sem exigir CPF).
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('comandas', function (Blueprint $table) {
            $table->string('cliente_email', 150)->nullable()->after('cliente_cpf');
        });
    }

    public function down(): void
    {
        Schema::table('comandas', function (Blueprint $table) {
            $table->dropColumn('cliente_email');
        });
    }
};
