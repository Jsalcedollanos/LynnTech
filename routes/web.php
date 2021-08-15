<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\ProductoController;

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

/* Route::get('/', function () {
    return view('home.index');
}); */


Route::get('/', function () {
    return view('home.index');
});

Route::get('/producto/index', function () {
    return view('producto.index');
});

Route::get('/producto/20/edit', function () {
    return view('producto.edit');
});








Route::resource('facturas','App\Http\Controllers\FacturaController');
Route::resource('productos','App\Http\Controllers\ProductoController');
Route::resource('tienda','App\Http\Controllers\TiendaproductoController');
Route::resource('add','App\Http\Controllers\TiendaproductoController');
Route::resource('productos','App\Http\Controllers\ProductoController');
Route::resource('costos','App\Http\Controllers\CostoController');
Route::resource('clientes','App\Http\Controllers\ClienteController');
Route::resource('registro','App\Http\Controllers\RegistroController');
Route::resource('admin','App\Http\Controllers\AdminController');
Route::resource('carrito','App\Http\Controllers\CarritoController');
Route::resource('home','App\Http\Controllers\UserController');
Route::resource('pruebaproductos','App\Http\Controllers\DatatableController');


Route::post('producto/index',[ProductoController::class,'store'])
->name('producto.create');

Route::get('producto/edit/{id}',[ProductoController::class,'edit'])
->name('producto.modalEditarProducto');

Route::put('producto/update/{id}',[ProductoController::class,'update'])
->name('producto.update');

Route::get('/productos',[ProductoController::class, 'index'])
->name('producto.index');

Route::get('producto/eliminar/{id}',[ProductoController::class,'destroy'])
->name('producto.modalEliminar');







/* Route::get('/productos',[DatatableController::class, 'index'])
->name('prueba.index'); */



/* Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin.index');
})->name('admin'); */

    Route::get('/admin', [AdminController::class,'index'])
        -> middleware('home.admin')
        -> name('admin.index');
/* 
    Route::get('/index2', [TiendaproductoController::class,'index'])
    -> middleware('user.tienda')
    -> name('producto.productos'); */






