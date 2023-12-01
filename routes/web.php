<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\MarcaController;
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
)->middleware(['auth', 'verified'])->name('listado_articulo');

Route::get('/Bastidas/marcas', [MarcaController::class,'index']
)->middleware(['auth', 'verified'])->name('listado_marca');

Route::get('/Bastidas/presentacion', [MarcaController::class,'index']
)->middleware(['auth', 'verified'])->name('listado_presentacion');

