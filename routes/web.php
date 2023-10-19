<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DetalleFacturaController;
use App\Http\Controllers\DevolucionController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\FormaDePagoController;
use App\Http\Controllers\ProveedorController;
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
Route::resource('forma_de_pagos',FormaDePagoController::class);
Route::resource('clientes',ClienteController::class);
Route::resource('proveedors',ProveedorController::class);
Route::resource('articulos',ArticuloController::class);
Route::resource('facturas',FacturaController::class);
Route::resource('detalle_facturas',DetalleFacturaController::class);
Route::resource('devolucions',DevolucionController::class);
