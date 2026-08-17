<?php

namespace App\Providers;

use App\Repositories\Cardapio\CategoriaRepository;
use App\Repositories\Cardapio\ProdutoRepository;
use App\Repositories\Contracts\CategoriaRepositoryInterface;
use App\Repositories\Contracts\GrupoEquivalenciaRepositoryInterface;
use App\Repositories\Contracts\IngredienteRepositoryInterface;
use App\Repositories\Contracts\NotificacaoRepositoryInterface;
use App\Repositories\Contracts\ProdutoRepositoryInterface;
use App\Repositories\Contracts\ReceitaRepositoryInterface;
use App\Repositories\Estoque\GrupoEquivalenciaRepository;
use App\Repositories\Estoque\IngredienteRepository;
use App\Repositories\Estoque\ReceitaRepository;
use App\Repositories\Notificacao\NotificacaoRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(CategoriaRepositoryInterface::class, CategoriaRepository::class);
        $this->app->bind(ProdutoRepositoryInterface::class, ProdutoRepository::class);
        $this->app->bind(GrupoEquivalenciaRepositoryInterface::class, GrupoEquivalenciaRepository::class);
        $this->app->bind(IngredienteRepositoryInterface::class, IngredienteRepository::class);
        $this->app->bind(ReceitaRepositoryInterface::class, ReceitaRepository::class);
        $this->app->bind(NotificacaoRepositoryInterface::class, NotificacaoRepository::class);
    }
}
