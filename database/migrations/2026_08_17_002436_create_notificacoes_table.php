<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notificacoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perfil_id')->nullable()->constrained('perfis')->onDelete('cascade')
                ->comment('Notificação para todos os usuários deste perfil');
            $table->foreignId('usuario_id')->nullable()->constrained('usuarios')->onDelete('cascade')
                ->comment('Notificação para um usuário específico');
            $table->string('tipo', 50);
            $table->string('titulo', 150);
            $table->text('mensagem');
            $table->string('referencia_tipo', 50)->nullable();
            $table->unsignedBigInteger('referencia_id')->nullable();
            $table->timestamp('resolvida_em')->nullable();
            $table->timestamp('created_at')->useCurrent();

            $table->index('perfil_id');
            $table->index('usuario_id');
            $table->index('tipo');
            $table->index('resolvida_em');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificacoes');
    }
};
