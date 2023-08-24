<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controllers\Middleware;
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
    return view('auth.login');
});

Auth::routes();
//Route::resource('foroall', App\Http\Controllers\ForoallController::class);
Route::resource('comunidad', App\Http\Controllers\ComunidadController::class)->middleware('auth');
//Route::resource('consultas',App\Http\Controllers\ConsultaController::class);
Route::resource('asking', App\Http\Controllers\AskingController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');

Route::resource('forum', App\Http\Controllers\PostController::class);