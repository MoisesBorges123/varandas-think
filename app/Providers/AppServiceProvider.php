<?php

namespace App\Providers;

use App\Services\NotaFiscal\Extratores\ExtratorCupomFiscal;
use App\Services\NotaFiscal\Extratores\ExtratorPadraoSefaz;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ExtratorCupomFiscal::class, ExtratorPadraoSefaz::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
