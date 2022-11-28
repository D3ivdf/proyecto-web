<?php

namespace App\Http\Controllers;

use App\Models\Bicicleta;
use Illuminate\Http\Request;

class BicicletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Bicicletas=Bicicleta::all();
        return $Bicicletas;   
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
        $bicicleta= new Bicicleta();
        $bicicleta->Tipo_bici= $request ->Tipo_bici;
        $bicicleta->Estado= $request ->Estado;
        $bicicleta->Detalles= $request ->Detalles;
        $bicicleta->save();

        return $bicicleta;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bicicleta  $bicicleta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $bicicleta= Bicicleta::find($id);
        //$bicicleta= Rol::where('Id_rol','=','1');
        return $bicicleta;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bicicleta  $bicicleta
     * @return \Illuminate\Http\Response
     */
    public function edit(Bicicleta $bicicleta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bicicleta  $bicicleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $bicicleta=Bicicleta::find($id);
        $bicicleta->Nombre= $request ->Nombre;
        $bicicleta->Detalles= $request ->Detalles;
        $bicicleta->save();
        $talleres=Bicicleta::all();
        return $talleres;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bicicleta  $bicicleta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $bicicleta=Bicicleta::find($id);
        $bicicleta->delete();
        return $bicicleta;
    }
}
