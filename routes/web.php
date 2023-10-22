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
Route::resource('tipo-de-documentos',TipoDeDocumentoController::class)->middleware('auth');
Route::resource('ciudads',CiudadController::class)->middleware('auth');
Route::resource('tipo-articulos',TipoArticuloController::class)->middleware('auth');
Route::resource('forma-de-pagos',FormaDePagoController::class)->middleware('auth');
Route::resource('clientes',ClienteController::class)->middleware('auth');
Route::resource('proveedors',ProveedorController::class)->middleware('auth');
Route::resource('articulos',ArticuloController::class)->middleware('auth');
Route::resource('facturas',FacturaController::class)->middleware('auth');
Route::resource('detalle-facturas',DetalleFacturaController::class)->middleware('auth');
Route::resource('devolucions',DevolucionController::class)->middleware('auth');
