<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\FacturaController;


/*
|--------------------------------------------------------------------------
| Web Routes

|--------------------------------------------------------------------------
|
| Aquí se registran las rutas web del sistema.
|
*/

// Inicio
Route::get('/', [InicioController::class, 'index'])->name('inicio');

// Clientes
Route::controller(ClienteController::class)->group(function () {

    Route::get('/clientes', 'index')
        ->name('clientes.index');

    Route::post('/clientes', 'store')
        ->name('clientes.store');

    Route::get('/clientes/{cliente}', 'show')
        ->name('clientes.show');

    Route::put('/clientes/{cliente}', 'update')
        ->name('clientes.update');
});

// Productos
// Productos
Route::controller(ProductoController::class)->group(function () {

    Route::get('/productos', 'index')->name('productos.index');
    Route::get('/productos/create', 'create')->name('productos.create');
    Route::post('/productos', 'store')->name('productos.store');

    Route::get('/productos/{producto}', 'show')->name('productos.show');
    Route::get('/productos/{producto}/edit', 'edit')->name('productos.edit');
    Route::put('/productos/{producto}', 'update')->name('productos.update');

    // desactivar (lógico)
    Route::patch('/productos/{producto}/desactivar', 'desactivar')
        ->name('productos.desactivar');

    Route::patch('/productos/{producto}/activar', 'activar')
        ->name('productos.activar');
});
// Ventas
Route::get('/ventas', [VentaController::class, 'index'])
    ->name('ventas.index');

Route::post('/ventas', [VentaController::class, 'store'])
    ->name('ventas.store');

Route::get('/ventas/{venta}', [VentaController::class, 'show'])
    ->name('ventas.show');
// Facturas
Route::get('/facturas', [FacturaController::class, 'index'])->name('facturas.index');
Route::get('/facturas/{factura}', [FacturaController::class, 'show'])->name('facturas.show');
