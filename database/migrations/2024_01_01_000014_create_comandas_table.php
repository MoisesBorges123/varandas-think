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
        Schema::create('comandas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mesa_id')->nullable()->constrained('mesas')->onDelete('set null');
            $table->foreignId('garcom_id')->nullable()->constrained('usuarios')->onDelete('set null')
                ->comment('Garçom responsável pela mesa');
            $table->enum('tipo', ['individual', 'compartilhada'])->default('individual');
            $table->enum('status', ['aberta', 'fechada'])->default('aberta');
            $table->string('cliente_nome', 100)->nullable()
                ->comment('Preenchido quando cliente abre via QR code');
            $table->string('cliente_cpf', 14)->nullable();
            $table->string('cliente_telefone', 20)->nullable();
            $table->timestamp('aberta_em')->useCurrent();
            $table->timestamp('fechada_em')->nullable();
            $table->timestamps();
            
            $table->index(['mesa_id', 'status']);
            $table->index('garcom_id');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comandas');
    }
};
