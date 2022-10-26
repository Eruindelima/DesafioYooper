<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/clientes', [App\Http\Controllers\HomeController::class, 'show'])->name('clientes');

Route::get('/clientes/cliente', [App\Http\Controllers\HomeController::class, 'details'])->name('cliente');

Route::get('/clentes/cliente/editar_cliente', [App\Http\Controllers\HomeController::class, 'edit'])->name('editar_cliente');