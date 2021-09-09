<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\RolesController;

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
    return view('home.index');
});

Route::get('/producto/index', function () {
    return view('producto.index');
});

Route::get('/roles/index', function (){
    return view('roles.index');
});

Route::get('/producto/20/edit', function () {
    return view('producto.edit');
});

Route::get('/facturas/index', function () {
    return view('factura.index');
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

/* RUTAS DE FACTURAS */
Route::post('facturas',[FactutaController::class,'index'])
->name('factura.index');

Route::get('facturas/eliminar/{id}',[FacturaController::class,'destroy'])
->name('factura.modalEliminarFactura');

Route::post('facturas/index',[FacturaController::class,'store'])
->name('factura.create');

Route::put('facturas/update/{id}',[FacturaController::class,'update'])
->name('factura.update');

Route::get('facturas/editar/{id}',[FacturaController::class,'edit'])
->name('producto.modalEditarFactura');

/* FIN DE RUTAS DE FACTURAS */

/* RUTAS DE PRODUCTOS */
Route::post('producto/index',[ProductoController::class,'store'])
->name('producto.create');

Route::get('producto/edit/{id}',[ProductoController::class,'edit'])
->name('producto.modalEditarProducto');

Route::put('producto/update/{id}',[ProductoController::class,'update'])
->name('producto.update');

Route::post('/productos',[ProductoController::class, 'index'])
->name('producto.index');

Route::get('producto/eliminar/{id}',[ProductoController::class,'destroy'])
->name('producto.modalEliminar');

/* FIN DE RUTAS DE PRODUCTOS */

/* RUTAS DE ROLES */
Route::get('roles/index',[RolesController::class,'index'])
->name('roles.index');
/* FIN DE RUTAS */


/* Middleware para bloqueo a user no autorizados */

    /* Route::get('/admin', [AdminController::class,'index'])
        -> middleware('home.admin')
        -> name('admin.index'); */


    Route::get('/roles/index', [RolesController::class,'mostrar']) 
        -> middleware('auth.role')     
        -> name('roles.index');

    Route::get('/producto/index',[ProductoController::class,'mostrar'])
        -> middleware('productos.admin')
        -> name('producto.index');

    Route::get('/facturas/index',[FacturaController::class,'mostrar'])
        -> middleware('facturas.admin')
        -> name('factura.index');

    
    

/* Fin */






