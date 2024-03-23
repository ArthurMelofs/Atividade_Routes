<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Usuário/{name}/{lastname?}', [UserController::class, 'Usuário']);

Route::get('/Operações/{conta}/{a}/{b}', [UserController::class, 'Operações']);

Route::get('/Estudante/{name}/{lastaname}/{age}/{rm}/{gender}/{address}', [UserController::class, 'Estudante']);

Route::get('/Lista de Produtos', [UserController::class, 'listadeprodutos']);



