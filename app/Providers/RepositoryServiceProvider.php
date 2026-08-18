<?php

namespace App\Providers;

use App\Repositories\Cardapio\CategoriaRepository;
use App\Repositories\Cardapio\ProdutoRepository;
use App\Repositories\Comanda\ComandaRepository;
use App\Repositories\Comanda\ConfiguracaoRepository;
use App\Repositories\Comanda\MesaRepository;
use App\Repositories\Contracts\CategoriaCompraRepositoryInterface;
use App\Repositories\Contracts\CategoriaRepositoryInterface;
use App\Repositories\Contracts\ComandaRepositoryInterface;
use App\Repositories\Contracts\CompraRepositoryInterface;
use App\Repositories\Contracts\ConfiguracaoRepositoryInterface;
use App\Repositories\Contracts\ConversaoProdutoRepositoryInterface;
use App\Repositories\Contracts\FornecedorRepositoryInterface;
use App\Repositories\Contracts\GrupoEquivalenciaRepositoryInterface;
use App\Repositories\Contracts\IngredienteRepositoryInterface;
use App\Repositories\Contracts\MesaRepositoryInterface;
use App\Repositories\Contracts\MovimentacaoEstoqueRepositoryInterface;
use App\Repositories\Contracts\NotificacaoRepositoryInterface;
use App\Repositories\Contracts\ProdutoRepositoryInterface;
use App\Repositories\Contracts\ReceitaRepositoryInterface;
use App\Repositories\Estoque\ConversaoProdutoRepository;
use App\Repositories\Estoque\GrupoEquivalenciaRepository;
use App\Repositories\Estoque\IngredienteRepository;
use App\Repositories\Estoque\ReceitaRepository;
use App\Repositories\NotaFiscal\CategoriaCompraRepository;
use App\Repositories\NotaFiscal\CompraRepository;
use App\Repositories\NotaFiscal\FornecedorRepository;
use App\Repositories\NotaFiscal\MovimentacaoEstoqueRepository;
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
        $this->app->bind(FornecedorRepositoryInterface::class, FornecedorRepository::class);
        $this->app->bind(MovimentacaoEstoqueRepositoryInterface::class, MovimentacaoEstoqueRepository::class);
        $this->app->bind(CompraRepositoryInterface::class, CompraRepository::class);
        $this->app->bind(ConversaoProdutoRepositoryInterface::class, ConversaoProdutoRepository::class);
        $this->app->bind(CategoriaCompraRepositoryInterface::class, CategoriaCompraRepository::class);
        $this->app->bind(MesaRepositoryInterface::class, MesaRepository::class);
        $this->app->bind(ComandaRepositoryInterface::class, ComandaRepository::class);
        $this->app->bind(ConfiguracaoRepositoryInterface::class, ConfiguracaoRepository::class);
    }
}
