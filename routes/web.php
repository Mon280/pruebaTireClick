<?php

// En tu archivo routes/web.php

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

// Ruta principal
Route::get('/', function () {
    if (auth()->check()) {
        return redirect('/home');
    }
    return view('auth.login');
});

// Rutas de autenticación
Auth::routes([
    'register' => false, // Si no deseas permitir el registro de usuarios
    'reset' => false, // Si no deseas permitir restablecimiento de contraseña
    'verify' => false, // Si no deseas utilizar la verificación de correo electrónico
    'redirectTo' => '/home' // Especifica la URL de redirección después del inicio de sesión
]);

// Ruta de inicio
Route::get('/home', function () {
    return view('home');
})->middleware('auth');
