<?php

use App\Livewire\Balcao\BalcaoPainel;
use App\Livewire\Cardapio\CategoriaForm;
use App\Livewire\Cardapio\CategoriaIndex;
use App\Livewire\Cardapio\ProdutoForm;
use App\Livewire\Cardapio\ProdutoIndex;
use App\Livewire\Comanda\ComandaAbrirForm;
use App\Livewire\Comanda\ComandaIndex;
use App\Livewire\Comanda\ConfiguracaoForm;
use App\Livewire\Comanda\MesaForm;
use App\Livewire\Comanda\MesaIndex;
use App\Livewire\Cozinha\PainelCozinha;
use App\Livewire\Estoque\CompraIndex;
use App\Livewire\Estoque\CompraManualForm;
use App\Livewire\Estoque\ConversaoProdutoForm;
use App\Livewire\Estoque\FornecedorForm;
use App\Livewire\Estoque\FornecedorIndex;
use App\Livewire\Estoque\GrupoEquivalenciaForm;
use App\Livewire\Estoque\GrupoEquivalenciaIndex;
use App\Livewire\Estoque\IngredienteForm;
use App\Livewire\Estoque\ImportarNotaFiscal;
use App\Livewire\Estoque\IngredienteIndex;
use App\Livewire\Estoque\ReceitaForm;
use App\Livewire\Pedido\ComandaItens;
use App\Livewire\Pedido\FilaAprovacao;
use App\Livewire\Publico\ComandaAcesso;
use App\Livewire\Publico\MesaAcesso;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/painel', function () {
    return view('painel.index');
})->middleware('auth')->name('painel');

Route::middleware('auth')->prefix('cardapio')->name('cardapio.')->group(function () {
    Route::prefix('categorias')->name('categorias.')->group(function () {
        Route::get('/', CategoriaIndex::class)->name('index');
        Route::get('/criar', CategoriaForm::class)->name('criar');
        Route::get('/{categoria}/editar', CategoriaForm::class)->name('editar');
    });

    Route::prefix('produtos')->name('produtos.')->group(function () {
        Route::get('/', ProdutoIndex::class)->name('index');
        Route::get('/criar', ProdutoForm::class)->name('criar');
        Route::get('/{produto}/editar', ProdutoForm::class)->name('editar');
    });
});

Route::middleware('auth')->prefix('estoque')->name('estoque.')->group(function () {
    Route::prefix('grupos-equivalencia')->name('grupos.')->group(function () {
        Route::get('/', GrupoEquivalenciaIndex::class)->name('index');
        Route::get('/criar', GrupoEquivalenciaForm::class)->name('criar');
        Route::get('/{grupo}/editar', GrupoEquivalenciaForm::class)->name('editar');
    });

    Route::prefix('ingredientes')->name('ingredientes.')->group(function () {
        Route::get('/', IngredienteIndex::class)->name('index');
        Route::get('/criar', IngredienteForm::class)->name('criar');
        Route::get('/{ingrediente}/editar', IngredienteForm::class)->name('editar');
    });

    Route::get('/receitas/{produto}', ReceitaForm::class)->name('receitas.editar');

    Route::get('/conversoes/{produto}', ConversaoProdutoForm::class)->name('conversoes.editar');

    Route::get('/notas-fiscais/importar', ImportarNotaFiscal::class)->name('notas-fiscais.importar');

    Route::prefix('fornecedores')->name('fornecedores.')->group(function () {
        Route::get('/', FornecedorIndex::class)->name('index');
        Route::get('/criar', FornecedorForm::class)->name('criar');
        Route::get('/{fornecedor}/editar', FornecedorForm::class)->name('editar');
    });

    Route::prefix('compras')->name('compras.')->group(function () {
        Route::get('/', CompraIndex::class)->name('index');
        Route::get('/manual', CompraManualForm::class)->name('manual');
    });
});

Route::middleware('auth')->prefix('mesas')->name('mesas.')->group(function () {
    Route::get('/', MesaIndex::class)->name('index');
    Route::get('/criar', MesaForm::class)->name('criar');
    Route::get('/{mesa}/editar', MesaForm::class)->name('editar');
});

Route::middleware('auth')->prefix('comandas')->name('comandas.')->group(function () {
    Route::get('/', ComandaIndex::class)->name('index');
    Route::get('/abrir', ComandaAbrirForm::class)->name('abrir');
    Route::get('/configuracoes', ConfiguracaoForm::class)->name('configuracoes');
    Route::get('/{comanda}/itens', ComandaItens::class)->name('itens');
});

Route::middleware('auth')->prefix('pedidos')->name('pedidos.')->group(function () {
    Route::get('/fila-aprovacao', FilaAprovacao::class)->name('fila-aprovacao');
});

Route::get('/balcao', BalcaoPainel::class)->middleware('auth')->name('balcao');

Route::get('/cozinha', PainelCozinha::class)->middleware('auth')->name('cozinha');

// ==================================================================
// ROTAS PÚBLICAS — SEM MIDDLEWARE 'auth' (fluxo do cliente via QR code)
// O gate real é geolocalização + status da comanda, verificado DENTRO
// dos componentes Livewire (não há sessão de cliente autenticada).
// Ver CLAUDE.md seção 4.1/4.4.
// ==================================================================
Route::prefix('comanda')->name('publico.comanda.')->group(function () {
    Route::get('/mesa/{token}', MesaAcesso::class)->name('mesa');
    Route::get('/{token}', ComandaAcesso::class)->name('acesso');
});
