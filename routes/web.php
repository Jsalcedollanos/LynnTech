<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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


Route::get('/home', function () {
    return view('home.index2');
});




Route::resource('facturas','App\Http\Controllers\FacturaController');
Route::resource('productos','App\Http\Controllers\ProductoController');
Route::resource('tienda','App\Http\Controllers\TiendaproductoController');
Route::resource('add','App\Http\Controllers\TiendaproductoController');
Route::resource('costos','App\Http\Controllers\CostoController');
Route::resource('clientes','App\Http\Controllers\ClienteController');
Route::resource('registro','App\Http\Controllers\RegistroController');
Route::resource('admin','App\Http\Controllers\AdminController');
Route::resource('carrito','App\Http\Controllers\CarritoController');


/* Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin.index');
})->name('admin'); */

    Route::get('/admin', [AdminController::class,'index'])
        -> middleware('auth.admin')
        -> name('admin.index');







