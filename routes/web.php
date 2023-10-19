<?php

use App\Http\Controllers\CiudadController;
use App\Http\Controllers\TipoArticuloController;
use App\Http\Controllers\TipoDeDocumentoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('tipo_de_documentos',TipoDeDocumentoController::class);
Route::resource('ciudads',CiudadController::class);
Route::resource('tipo_articulos',TipoArticuloController::class);
