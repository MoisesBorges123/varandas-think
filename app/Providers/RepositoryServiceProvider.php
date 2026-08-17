<?php

namespace App\Providers;

use App\Repositories\Cardapio\CategoriaRepository;
use App\Repositories\Cardapio\ProdutoRepository;
use App\Repositories\Contracts\CategoriaRepositoryInterface;
use App\Repositories\Contracts\ProdutoRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(CategoriaRepositoryInterface::class, CategoriaRepository::class);
        $this->app->bind(ProdutoRepositoryInterface::class, ProdutoRepository::class);
    }
}
