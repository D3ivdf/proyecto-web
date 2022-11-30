<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\TallerController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\MultaController;
use App\Http\Controllers\EstacionController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\BicicletaController;
Route::get('/',function(){
    return view('inici');
});

Route::resource('Rol',RolController::class);
Route::resource('Usuario',UsuariosController::class);
Route::resource('Taller',TallerController::class);
Route::resource('Mantenimiento',TallerController::class);
Route::resource('Multa',MultaController::class);
Route::resource('Estacion',EstacionController::class);
Route::resource('Bicicleta',BicicletaController::class);
Route::resource('Prestamo',PrestamoController::class);


