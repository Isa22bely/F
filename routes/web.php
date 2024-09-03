<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('inicio');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('index');
});


Route::get('/filme', [App\Http\Controllers\ControladorFilme::class, 'create'])->name('novoFilme');
Route::post('/filme', [App\Http\Controllers\ControladorFilme::class, 'store'])->name('GravarNovoFilme');
Route::get('/filme/editar/{id}', [App\Http\Controllers\ControladorFilme::class, 'edit'])->name('EditarFilme');
Route::post('/filme/{id}', [App\Http\Controllers\ControladorFilme::class, 'update'])->name('AtualizaFilme');
Route::get('/filme', [App\Http\Controllers\ControladorFilme::class, 'index'])->name('exibeFilme');
