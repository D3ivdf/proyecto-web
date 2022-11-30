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

Route::get('/', function () {
    return view('inici');
});
Route::get('/registro', function () {
    return view('registro');
});
Route::get('/logins', function () {
    return view('logins');
});
Route::get('/bici', function () {
    return view('bici');
});
Route::post('usuario', 'App\Http\Controllers\UsuarioController@store')->name('usuario.store');
Route::post('login', 'App\Http\Controllers\LoginController@store')->name('login.store');
Route::post('bicicleta', 'App\Http\Controllers\BicicletaController@store')->name('bicicleta.store');