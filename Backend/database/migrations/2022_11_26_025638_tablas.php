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
        Schema::create('Usuarios',function(Blueprint $usuarios){
            $usuarios->id('Id_usuario');
            $usuarios->string('Nombres');
            $usuarios->string('Apellidos');
            $usuarios->string('Cedula')->unique();
            $usuarios->string('Correo_electronico');
            $usuarios->string('Fecha_nacimiento');
            $usuarios->string('Genero');
            $usuarios->string('Contraseña');
            $usuarios->timestamps();
        });

        Schema::create('Rol',function(Blueprint $rol){
            $rol->id('Id_rol');
            $rol->string('Tipo');
            $rol->string('Detalles');
            $rol->unsignedBigInteger('Id_usuario');
            $rol->foreign('Id_usuario')->references('Id_usuario')->on('Usuarios'); 
            $rol->timestamps();
        });

        Schema::create('Multa',function(Blueprint $multa){
            $multa->id('Id_multa');
            $multa->date('Fecha');
            $multa->integer('Duracion');
            $multa->string('Detalles');
            $multa->unsignedBigInteger('Id_usuario');
            $multa->foreign('Id_usuario')->references('Id_usuario')->on('Usuarios'); 
            $multa->timestamps();
        });

        Schema::create('Estacion',function(Blueprint $estacion){
            $estacion->id('Id_estacion');
            $estacion->string('Nombre');
            $estacion->integer('Num_bicicletas');
            $estacion->unsignedBigInteger('Id_usuario');
            $estacion->foreign('Id_usuario')->references('Id_usuario')->on('Usuarios'); 
            $estacion->timestamps();
        });

        Schema::create('Bicicletas',function(Blueprint $bici){
            $bici->id('Id_bici');
            $bici->string('Tipo_bici');
            $bici->string('Estado');
            $bici->string('Detalles');
            $bici->unsignedBigInteger('Id_estacion');
            $bici->foreign('Id_estacion')->references('Id_estacion')->on('Estacion'); 
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
            $mantenimiento->unsignedBigInteger('Id_taller');
            $mantenimiento->foreign('Id_taller')->references('Id_taller')->on('Taller'); 
            $mantenimiento->unsignedBigInteger('Id_bici');
            $mantenimiento->foreign('Id_bici')->references('Id_bici')->on('Bicicletas'); 
            $mantenimiento->timestamps();
        });

        Schema::create('Prestamo',function(Blueprint $prestamo){
            $prestamo->id('Id_prestamo');
            $prestamo->timestamps();
            $prestamo->unsignedBigInteger('Id_bici');
            $prestamo->foreign('Id_bici')->references('Id_bici')->on('Bicicletas');
            $prestamo->unsignedBigInteger('Id_estacion');
            $prestamo->foreign('Id_estacion')->references('Id_estacion')->on('Estacion'); 
            $prestamo->unsignedBigInteger('Id_usuario');
            $prestamo->foreign('Id_usuario')->references('Id_usuario')->on('Usuarios');     
        });
        
    }

    public function down()
    {
        //
    }
}
