<?php

use App\Livewire\Cardapio\CategoriaForm;
use App\Livewire\Cardapio\CategoriaIndex;
use App\Livewire\Cardapio\ProdutoForm;
use App\Livewire\Cardapio\ProdutoIndex;
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
