<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\TiendaController;
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
    return view('welcome');
});

Route::get('/Getial/articulos', [ArticuloController::class,'index']
)->name('listado_articulo');

Route::get('/Bastidas/marcas', [MarcaController::class,'index']
)->name('listado_marca');

Route::get('/Bastidas/presentacion', [TiendaController::class,'index']
)->name('listado_presentacion');

