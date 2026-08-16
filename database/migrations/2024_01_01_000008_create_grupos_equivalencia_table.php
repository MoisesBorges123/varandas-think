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
        Schema::create('grupos_equivalencia', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100)->unique()
                ->comment('Nome do insumo genérico (ex: cenoura)');
            $table->decimal('custo_medio_ponderado', 10, 4)->default(0)
                ->comment('Recalculado automaticamente a cada nova compra');
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos_equivalencia');
    }
};
