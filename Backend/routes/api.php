<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\TallerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::resource('Rol',RolController::class);
Route::resource('Usuario',UsuariosController::class);
Route::resource('Taller',TallerController::class);
Route::resource('Mantenimiento',TallerController::class);





