<?php

use App\Http\Controllers\cestaController;
use App\Http\Controllers\consolaController;
use App\Http\Controllers\pedidoController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;
use App\Mail\PedidoMailable;
use Illuminate\Support\Facades\Mail;

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::post('/aniadirCestaSesion', [cestaController::class, 'aniadirCestaSesion'])->name('aniadirCestaSesion');
});

/**
 * Rutas estándares
 * Son rutas que tienen la información necesaria para
 */
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('dashboard');
})->name('/');

// Vista solo para administradores.
/*Route::get('/admin', function () {
    return view('administration.adminPage');
})->middleware('auth', 'verified')->name('admin'); */


// Controladores añadidos
Route::resource('producto', productController::class);  //Controlador Producto
Route::resource('consola', consolaController::class);   //Controlador Consola
Route::resource('cesta', cestaController::class);       //Controlador Cesta
Route::resource('pedido', pedidoController::class);     //Controlador Pedido


// Controles Administrador
Route::get('/listaPro', [productController::class, 'listarProductos'])->middleware('auth', 'verified')->name('listaPro');


// Ejemplo de email.
Route::get('prueba', function () {
    $correo = new PedidoMailable;
    Mail::to('alemol@hotmail.com')->send($correo);
    return "Mensaje enviado";
});
