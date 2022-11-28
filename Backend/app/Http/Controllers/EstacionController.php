<?php

namespace App\Http\Controllers;

use App\Models\Estacion;
use Illuminate\Http\Request;

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
        $estacion= new Taller();
        $estacion->Nombre= $request ->Nombre;
        $estacion->Num_bicicletas= $request ->Num_bicicletas;
        $estacion->save();
        $talleres=Taller::all();
        return $talleres;
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
