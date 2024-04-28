<?php

// En tu archivo routes/web.php
// En tu archivo routes/web.php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('inicio');
});

// Ruta de inicio
Route::get('/home', function () {
    return view('home');
})->middleware('auth');

// Rutas para productos
Route::resource('/productos', ProductoController::class);
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rutas de la landing
Route::get('inicio', [LandingController::class, 'inicio'])->name('inicio');
Route::get('productos-cliente', [LandingController::class, 'productosCliente'])->name('productos-cliente');
Route::get('productos/{slug}', 'ProductosController@show')->name('productos.show');

// Carrito
Route::get('carrito', [CarritoController::class, 'index'])->name('carrito.index');
Route::post('carrito/agregar', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::delete('carrito/remover/{producto}', [CarritoController::class, 'remover'])->name('carrito.remover');
Route::delete('carrito/vaciar', [CarritoController::class, 'vaciar'])->name('carrito.vaciar');

// Ventas
Route::post('ventas', [VentasController::class, 'store'])->name('ventas.store');

// Ruta para el login
Route::get('login', function () {
    return view('auth.login');
})->name('login');
