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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perfil_id')->constrained('perfis')->onDelete('restrict');
            $table->string('nome', 100);
            $table->string('email', 100)->unique();
            $table->string('senha_hash');
            $table->boolean('ativo')->default(true);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('email');
            $table->index('ativo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
