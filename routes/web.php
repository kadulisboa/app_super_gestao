<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return "Olá Mundo";
});

Route::get('/sobre-nos', function () {
    return "Olá Mundo, aqui é sobre nós";
});

Route::get('/contato', function () {
    return "Olá Mundo, aqui é contato";
});
