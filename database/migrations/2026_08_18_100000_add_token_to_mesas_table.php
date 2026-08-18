<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Token de acesso público da mesa (link/QR code impresso) — nunca o id
 * sequencial, pra não deixar ninguém navegar de mesa em mesa incrementando
 * o número na URL. Nullable pela mesma razão do token de comandas:
 * MesaService::criar() sempre preenche na prática — exceto aqui, onde
 * também precisamos gerar um token pras mesas que já existiam antes desta
 * migration (senão elas ficariam sem link público até serem re-salvas).
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('mesas', function (Blueprint $table) {
            $table->string('token', 40)->unique()->nullable()->after('id');
        });

        DB::table('mesas')->whereNull('token')->orderBy('id')->each(function ($mesa) {
            DB::table('mesas')->where('id', $mesa->id)->update(['token' => Str::random(40)]);
        });
    }

    public function down(): void
    {
        Schema::table('mesas', function (Blueprint $table) {
            $table->dropUnique(['token']);
            $table->dropColumn('token');
        });
    }
};
