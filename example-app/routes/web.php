<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",[\App\Http\Controllers\PrincipalController::class,'principal']);

Route::get("/sobre-nos", [\App\Http\Controllers\SobreNosController::class, 'sobreNos']);

Route::get("/contatos", [\App\Http\Controllers\ContatosController::class, 'contatos']);


Route::get(
    "/contatos/{name}/{categoria_id}",
    function(
        string $name = "Desconhecido",
        int $categoria_id = 1) {
            echo "Estamos aqui $name - $categoria_id";
})
->where('categoria_id', '[0-9]+')
->where('name', '[A-Za-z]+');
