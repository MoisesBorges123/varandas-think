<?php

use App\Livewire\Cardapio\CategoriaForm;
use App\Livewire\Cardapio\CategoriaIndex;
use App\Livewire\Cardapio\ProdutoForm;
use App\Livewire\Cardapio\ProdutoIndex;
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
