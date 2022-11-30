<?php

namespace App\Http\Controllers;

use App\Models\Estacion;
use Illuminate\Http\Request;
use App\Models\Usuarios;
class EstacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estaciones=Estacion::all();
        return $estaciones;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $estacion=new Estacion();
        $user=Usuarios::pluck('id_usuario','id_rol');
        return user.compact('estacion','user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $exist=DB::table('Usuarios')->where('id_rol','2');
        if(is_null($exist)){
            $estacion= new Estacion();
        $estacion->Nombre= $request ->Nombre;
        $estacion->Num_bicicletas= $request ->Num_bicicletas;
        
        $estacion->save();
        $estaciones=Estacion::all();
        return $estaciones;        
        }
        return console.log("Denegado");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estacion  $estacion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $estacion=Estacion::find($id);
        return $estacion;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estacion  $estacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Estacion $estacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estacion  $estacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $estacion=Estacion::find($id);
        $estacion->Num_bicicletas= $request ->Num_bicicletas;
        $estacion->save();
        $estaciones=Estacion::all();
        return $estaciones;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estacion  $estacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $estacion=Estacion::find($id);
        $estacion->delete();
        return $estacion;
    }
}
