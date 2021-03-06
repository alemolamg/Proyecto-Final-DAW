<?php

use App\Http\Controllers\cestaController;
use App\Http\Controllers\clientService;
use App\Http\Controllers\consolaController;
use App\Http\Controllers\pedidoController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use App\Mail\PedidoMailable;
use App\Models\Reparacion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


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
    Route::resource('pedido', pedidoController::class);     //Controlador Pedido
    Route::get('/misPedidos', [pedidoController::class, 'pedidosUser'])->name('pedidosUser');
});


/**
 * Rutas estándares
 * Son rutas que redirigen al menú de inicio. No se puede simplificar en solo una porque Laravel
 * las utiliza de manera interna con los dos nombres, pero 'dashboard' se redirige a '/'
 */
Route::get('/dashboard', function () {
    return redirect('dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('dashboard');
})->name('/');



// Controladores añadidos
Route::resource('producto', productController::class);  //Controlador Producto
Route::resource('consola', consolaController::class);   //Controlador Consola
Route::resource('cesta', cestaController::class);       //Controlador Cesta
Route::resource('user', userController::class);         //Controlador Cesta


// Controles Administrador
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'adminAccess'
])->group(function () {
    Route::get('/listaUsers', [userController::class, 'listarUsuarios'])->name('listaUsers');
    Route::get('/listaPedidos', [pedidoController::class, 'listarPedidos'])->name('listaPedidos');
    Route::get('/activarPedido/{id}', [pedidoController::class, 'activar'])->name('activarPedido');
    Route::get('/listaPro', [productController::class, 'listarProductos'])->name('listaPro');
    Route::get('/activarPro/{id}', [productController::class, 'activar'])->name('activarPro');
    Route::get('/searchProductsAdmin', [productController::class, 'searchProductsAdmin'])->name('searchProductsAdmin');
});


Route::get('/searchProducts', [productController::class, 'searchProducts'])->name('searchProducts');


// Ejemplo de email.
Route::get('prueba', function () {
    $correo = new PedidoMailable;
    Mail::to(Auth::user()->email)->send($correo);
    return "Mensaje enviado";
})->middleware('auth:sanctum');
