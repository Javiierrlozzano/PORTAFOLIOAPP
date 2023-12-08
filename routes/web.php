<?php

use Illuminate\Support\Facades\Route;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Empresa;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $categorias =Categoria::all();
    $productos=Producto::where('Estado','Activo')->get();
    $empresas= Empresa::where('Estado','Activo')->first();
    $cliente=null;
    return view('welcome' , compact('productos','categorias','empresas','cliente'));

});

Auth::routes();
Route::get('/productos/autocomplete', [App\Http\Controllers\ProductoController::class, 'autocomplete'])->name('productos.autocomplete');
Route::get('/clientes/autocomplete', [App\Http\Controllers\ClienteController::class, 'autocomplete'])->name('clientes.autocomplete');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('bodegas',App\Http\Controllers\BodegaController::class);
Route::resource('tipomovimientos',App\Http\Controllers\TipoMovimientoController::class);
Route::resource('movimientos',App\Http\Controllers\MovimientoController::class);
Route::resource('categorias',App\Http\Controllers\CategoriaController::class);
Route::resource('categorias',App\Http\Controllers\CategoriaController::class);
Route::resource('clientes',App\Http\Controllers\ClienteController::class);
Route::resource('facturas',App\Http\Controllers\FacturaController::class);
Route::resource('productos',App\Http\Controllers\ProductoController::class);
Route::get('/productos/{id}/{clientes}', [App\Http\Controllers\ProductoController::class, 'mostrar'])->name('productos.mostrar');
Route::resource('empresas',App\Http\Controllers\EmpresaController::class);
