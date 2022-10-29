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

Route::group(['prefix' => 'cliente', 'middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\ClientesController::class, 'index'])->name('listar_clientes');
    Route::get('/novo', [App\Http\Controllers\ClientesController::class, 'create'])->name('criar_cliente');
    Route::post('/salvar', [App\Http\Controllers\ClientesController::class, 'store'])->name('salvar_cliente');
    Route::get('{id}', [App\Http\Controllers\ClientesController::class, 'edit'])->name('editar_cliente');
    Route::post('{id}', [App\Http\Controllers\ClientesController::class, 'update'])->name('atualizar_cliente');
    Route::get('/delete/{id}', [App\Http\Controllers\ClientesController::class, 'delete'])->name('deletar_cliente');
});

