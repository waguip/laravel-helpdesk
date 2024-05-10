<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChamadoController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/chamados', [ChamadoController::class, 'index'])->name('chamados.index');
Route::get('/chamados/create', [ChamadoController::class, 'create'])->name('chamados.create');
Route::post('/chamados', [ChamadoController::class, 'store'])->name('chamados.store');
Route::delete('/chamados/{chamado}/delete', [ChamadoController::class, 'destroy'])->name('chamados.destroy');