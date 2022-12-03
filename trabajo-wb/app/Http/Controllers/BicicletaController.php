<?php

namespace App\Http\Controllers;

use App\Models\bicicleta;
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
        $bici = bicicleta::all();
        return view('vistaE', compact('bici'));
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
        $bicicleta = new bicicleta();
        $bicicleta->modelo = $request->modelo;
        $bicicleta->estacion = $request->estacion;
        $bicicleta->tipo = $request->tipo;
        $bicicleta->detalles = $request->detalles;
        $bicicleta->save();
        return view('administrador');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bicicleta  $bicicleta
     * @return \Illuminate\Http\Response
     */
    public function show(bicicleta $bicicleta)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bicicleta  $bicicleta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //     
        $bicicleta = bicicleta::find($id);
        return view('editbici',compact('bicicleta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bicicleta  $bicicleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $bicicleta = bicicleta::find($id);
        $bicicleta->modelo = $request->modelo;
        $bicicleta->estacion = $request->estacion;
        $bicicleta->tipo = $request->tipo;
        $bicicleta->detalles = $request->detalles;
        $bicicleta->save();
        return view('editbici',compact('bicicleta'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bicicleta  $bicicleta
     * @return \Illuminate\Http\Response
     */
    public function destroy(bicicleta $bicicleta)
    {
        //
    }
}
