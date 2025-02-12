<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\registrarAtividadeController;

Route::get('/', function () {
    return view('paginas/index');
});

Route::get('/cadastrar', function () {
    return view('paginas/cadastrar');
});

Route::get('/consultar', function () {
    return view('paginas/consultar');
});

Route::get('/editar', function () {
    return view('paginas/editar');
});

Route::get('/cadastrar/salvar', [App\Http\Controllers\registrarAtividadeController::class,'store']);





