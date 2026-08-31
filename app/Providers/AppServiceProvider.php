<?php

namespace App\Providers;

use App\Services\NotaFiscal\Extratores\ExtratorCupomFiscal;
use App\Services\NotaFiscal\Extratores\ExtratorPadraoSefaz;
use App\Services\Pagamento\Gateway\MercadoPagoGateway;
use App\Services\Pagamento\Gateway\MercadoPagoGatewayInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ExtratorCupomFiscal::class, ExtratorPadraoSefaz::class);

        // Sem credencial real configurada ainda (CLAUDE.md seção 6) — a
        // chamada de verdade só vai funcionar quando MP_ACCESS_TOKEN for
        // preenchido no .env. Testes trocam esse binding por um fake.
        $this->app->bind(MercadoPagoGatewayInterface::class, fn () => new MercadoPagoGateway(
            config('services.mercadopago.access_token'),
            config('services.mercadopago.notification_url'),
        ));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
