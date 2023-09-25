<?php

use App\Http\Controllers\CadastroController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [CadastroController::class, 'index'])->name('index');

Route::get('/criar-cadastro', [CadastroController::class, 'create'])->name('criar-cadastro');
Route::post('/criar-cadastro-post', [CadastroController::class, 'store'])->name('criar-cadastro-post');

Route::get('/cadastros', [CadastroController::class, 'list'])->name('lista-cadastros');
