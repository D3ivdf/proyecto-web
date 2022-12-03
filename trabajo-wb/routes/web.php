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

Route::get('/inici', function () {
    return view('inici');
});
Route::get('/vistaE', function () {
    return view('vistaE');
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
Route::get('/estacion', function () {
    return view('estacion');
})->name('estacion');
Route::get('/administrador', function () {
    return view('administrador');
});
Route::post('usuario', 'App\Http\Controllers\UsuarioController@store')->name('usuario.store');
Route::post('login', 'App\Http\Controllers\LoginController@store')->name('login.store');
Route::post('bicicleta', 'App\Http\Controllers\BicicletaController@store')->name('bicicleta.store');
Route::get('/vistaE',[App\Http\Controllers\BicicletaController::class, 'index'])->name('bicicleta.index');
Route::get('/editbici/{id}',[App\Http\Controllers\BicicletaController::class, 'edit'])->name('bicicleta.edit');
Route::put('/updatebici/{id}',[App\Http\Controllers\BicicletaController::class, 'update'])->name('bicicleta.update'); 
Route::get('/eliminar',[App\Http\Controllers\BicicletaController::class, 'show'])->name('bicicleta.show');

