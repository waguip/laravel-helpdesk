<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChamadoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/chamados', [ChamadoController::class, 'index'])->name('chamados.index');
Route::get('/chamados/create', [ChamadoController::class, 'create'])->name('chamados.create');
Route::post('/chamados', [ChamadoController::class, 'store'])->name('chamados.store');
Route::delete('/chamados/{chamado}/delete', [ChamadoController::class, 'destroy'])->name('chamados.destroy');
Route::put('/chamados/{chamado}/update', [ChamadoController::class, 'update'])->name('chamados.update');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::delete('/categorias/{categoria}/delete', [CategoriaController::class, 'destroy'])->name('categorias.destroy');