<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudcontroller;

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
    return view('welcome');
});

Route::get('/crud', [crudcontroller::class, 'index'])->name("crud");
Route::post('/crud/store', [crudcontroller::class, 'store'])->name("inserir");
Route::get('/crud/retrieve', [crudcontroller::class, 'retrieve'])->name("recuperar");
Route::get('/crud/delete/{id}',[crudcontroller::class, 'remove'])->name("remover");
Route::get('/crud/update/{id}',[crudcontroller::class, 'edit'])->name("editar");