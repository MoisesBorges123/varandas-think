<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Pagamento (parcial ou total) de uma comanda — CLAUDE.md seção 6/6.1.
 * Schema conforme docs/varandas-modelo-dados-completo.mermaid (linhas
 * 159-169), com três acréscimos deliberados:
 *   - `dinheiro` no enum de forma de pagamento (o ER original só listava
 *     as três formas via Mercado Pago, mas a seção 6 geral já trata
 *     dinheiro como modalidade válida "registrada manualmente").
 *   - status `rejeitado`, além dos três do ER (pendente/confirmado/
 *     estornado) — um pagamento via API Point/Pix pode ser recusado pelo
 *     gateway (cartão negado, etc.), distinto de "estornado" (que implica
 *     ter sido confirmado antes).
 *   - `mp_device_id`, `pix_qr_code`, `pix_qr_code_base64`,
 *     `registrado_por` e `confirmado_em` — dados técnicos necessários pra
 *     orquestrar a integração de verdade (qual terminal recebeu a ordem,
 *     o QR Pix gerado, quem iniciou o pagamento, quando foi confirmado),
 *     que o ER original não detalhava.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('comanda_id')->constrained('comandas')->restrictOnDelete();
            $table->enum('tipo', ['item_especifico', 'valor_livre']);
            $table->decimal('valor', 10, 2);
            $table->string('nome_pagador', 100)->nullable();
            $table->enum('forma_pagamento', [
                'api_point', 'celular_aproximacao', 'pix_celular', 'pix_qrcode_impresso', 'dinheiro',
            ]);
            $table->string('mp_payment_id', 50)->nullable();
            $table->string('mp_device_id', 50)->nullable();
            $table->text('pix_qr_code')->nullable();
            $table->text('pix_qr_code_base64')->nullable();
            $table->enum('status', ['pendente', 'confirmado', 'estornado', 'rejeitado'])->default('pendente');
            $table->foreignId('registrado_por')->nullable()->constrained('usuarios')->onDelete('set null');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('confirmado_em')->nullable();

            $table->index(['comanda_id', 'status']);
            $table->index('mp_payment_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pagamentos');
    }
};
