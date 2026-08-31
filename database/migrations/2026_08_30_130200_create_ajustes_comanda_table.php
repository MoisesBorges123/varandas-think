<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * CLAUDE.md seção 6.2: acréscimo/desconto pós-pagamento parcial — cenário
 * que não existe hoje operacionalmente. Decisão já tomada anteriormente:
 * estruturar no banco (esta tabela) mas SEM implementação de
 * Model/Service/frontend por enquanto. Não usar esta tabela até que a
 * necessidade real apareça e seja pedida explicitamente.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ajustes_comanda', function (Blueprint $table) {
            $table->id();
            $table->foreignId('comanda_id')->constrained('comandas')->restrictOnDelete();
            $table->enum('tipo', ['acrescimo', 'desconto']);
            $table->decimal('valor', 10, 2);
            $table->string('motivo')->nullable();
            $table->foreignId('aplicado_por')->nullable()->constrained('usuarios')->onDelete('set null');
            $table->timestamp('created_at')->useCurrent();

            $table->index('comanda_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ajustes_comanda');
    }
};
