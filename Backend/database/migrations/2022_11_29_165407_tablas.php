<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tablas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Rol',function(Blueprint $rol){
            $rol->id('Id_rol');
            $rol->string('Tipo');
            $rol->string('Detalles');
            $rol->timestamps();
        });

        Schema::create('Usuarios',function(Blueprint $usuarios){
            $usuarios->id('Id_usuario');
            $usuarios->string('Nombres');
            $usuarios->string('Apellidos');
            $usuarios->string('Cedula')->unique();
            $usuarios->string('Correo_electronico');
            $usuarios->string('Fecha_nacimiento');
            $usuarios->string('Genero');
            $usuarios->string('Contraseña');
            $usuarios->unsignedBigInteger('Id_rol');// Bici_usuario=1, Administrador =2 
            $usuarios->foreign('Id_rol')->references('Id_rol')->on('Rol'); 
            $usuarios->timestamps();
        });

        Schema::create('Multa',function(Blueprint $multa){
            $multa->id('Id_multa');
            $multa->date('Fecha');
            $multa->integer('Duracion');
            $multa->string('Detalles');
            $multa->unsignedBigInteger('id_usuario');
            $multa->foreign('id_usuario')->references('Id_usuario')->on('Usuarios'); 
            $multa->timestamps();
        });

        Schema::create('Estacion',function(Blueprint $estacion){
            $estacion->id('Id_estacion');
            $estacion->string('Nombre');
            $estacion->integer('Num_bicicletas');
            $estacion->unsignedBigInteger('id_usuario');
            $estacion->foreign('id_usuario')->references('Id_Usuario')->on('Usuarios'); 
            $estacion->timestamps();
        });

        Schema::create('Bicicletas',function(Blueprint $bici){
            $bici->id('Id_bici');
            $bici->string('Tipo_bici');
            $bici->string('Estado');
            $bici->string('Detalles');
            $bici->unsignedBigInteger('id_estacion');
            $bici->foreign('id_estacion')->references('Id_estacion')->on('Estacion'); 
            $bici->timestamps();
        });

        Schema::create('Taller',function(Blueprint $taller){
            $taller->id('Id_taller');
            $taller->string('Nombre');
            $taller->string('Detalles');
            $taller->timestamps();
        });
        
        Schema::create('Mantenimiento',function(Blueprint $mantenimiento){
            $mantenimiento->id('Id_mantenimiento');
            $mantenimiento->unsignedBigInteger('id_taller');
            $mantenimiento->foreign('id_taller')->references('Id_taller')->on('Taller'); 
            $mantenimiento->unsignedBigInteger('id_bici');
            $mantenimiento->foreign('id_bici')->references('Id_bici')->on('Bicicletas'); 
            $mantenimiento->timestamps();
        });

        Schema::create('Prestamo',function(Blueprint $prestamo){
            $prestamo->id('Id_prestamo');
            $prestamo->timestamps();
            $prestamo->unsignedBigInteger('id_bici');
            $prestamo->foreign('id_bici')->references('Id_bici')->on('Bicicletas');
            $prestamo->unsignedBigInteger('id_estacion');
            $prestamo->foreign('id_estacion')->references('Id_estacion')->on('Estacion'); 
            $prestamo->unsignedBigInteger('id_usuario');
            $prestamo->foreign('id_usuario')->references('Id_usuario')->on('Usuarios');     
        });
        
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
