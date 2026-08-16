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
        Schema::create('ingredientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('grupo_equivalencia_id')
                ->nullable()
                ->constrained('grupos_equivalencia')
                ->onDelete('restrict')
                ->comment('Nullable gera alerta de pendência');
            $table->string('nome', 100);
            $table->string('unidade_medida', 20)->comment('kg, l, un, etc');
            $table->string('codigo_fiscal', 50)->nullable()
                ->comment('Código fiscal da nota eletrônica (NCM/EAN)');
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('grupo_equivalencia_id');
            $table->index('codigo_fiscal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredientes');
    }
};
