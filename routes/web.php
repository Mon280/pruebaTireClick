<?php

// En tu archivo routes/web.php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductoController;
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
    if (auth()->check()) {
        return redirect('/home');
    }
    return redirect()->route('inicio');
});


// Ruta de inicio
Route::get('/home', function () {
    return view('home');
})->middleware('auth');
Route::resource('/productos', ProductoController::class);

// Rutas landing
Route::get('inicio', [LandingController::class, 'inicio'])->name('inicio');
Route::get('productos-cliente', [LandingController::class, 'productosCliente'])->name('productos-cliente');

Route::get('productos/{slug}', 'ProductosController@show')->name('productos.show');
// Carrito
Route::get('carrito', [CarritoController::class, 'index'])->name('carrito.index');
Route::post('carrito/agregar', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::delete('carrito/remover/{producto}', [CarritoController::class, 'remover'])->name('carrito.remover');
Route::delete('carrito/vaciar', [CarritoController::class, 'vaciar'])->name('carrito.vaciar');
