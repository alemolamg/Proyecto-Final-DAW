<?php

use App\Http\Controllers\cestaController;
use App\Http\Controllers\clientService;
use App\Http\Controllers\consolaController;
use App\Http\Controllers\pedidoController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;
use App\Mail\PedidoMailable;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
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

/**
 * Este grupo de rutas deben estar logueadas y verificadas por correo electrónico
 */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::post('/aniadirCestaSesion', [cestaController::class, 'aniadirCestaSesion'])->name('aniadirCestaSesion');
    Route::put('/eliminarProducto', [cestaController::class, 'eliminarDeCesta'])->name('eliminarProducto');
    Route::post('/vaciarCesta', [cestaController::class, 'vaciarCesta'])->name('vaciarCesta');
    Route::resource('clientService', clientService::class); //Controlador Servicio Cliente
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



// Controladores añadidos
Route::resource('producto', productController::class);  //Controlador Producto
Route::resource('consola', consolaController::class);   //Controlador Consola
Route::resource('cesta', cestaController::class);       //Controlador Cesta
Route::resource('pedido', pedidoController::class);     //Controlador Pedido


// Controles Administrador
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'adminAccess'
])->group(function () {
    Route::get('/listaPro', [productController::class, 'listarProductos'])->name('listaPro');
    Route::get('/activarPro/{id}', [productController::class, 'activar'])->name('activarPro');
});


// Ejemplo de email.
Route::get('prueba', function () {
    $correo = new PedidoMailable;
    Mail::to(Auth::user()->email)->send($correo);
    return "Mensaje enviado";
});
