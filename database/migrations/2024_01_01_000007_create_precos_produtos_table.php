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
        Schema::create('precos_produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produto_id')->constrained('produtos')->onDelete('cascade');
            $table->decimal('preco', 10, 2);
            $table->timestamp('vigente_desde')->useCurrent()
                ->comment('Data a partir da qual este preço está válido');
            $table->foreignId('created_by')->nullable()->constrained('usuarios')->onDelete('set null');
            $table->timestamp('created_at')->useCurrent();
            
            $table->index(['produto_id', 'vigente_desde']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('precos_produtos');
    }
};
