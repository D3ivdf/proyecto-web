<?php

namespace App\Http\Controllers;

use App\Models\Multa;
use Illuminate\Http\Request;

class MultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $multas=Multa::all();
        return $multas;
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
        $multa= new Multa();
        $multa->Fecha= $request ->Fecha;
        $multa->Duracion= $request ->Duracion;
        $multa->Detalles= $request ->Detalles;
        $multa->save();
        $multas=Multa::all();
        return $multas;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Multa  $multa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $multa=Multa::find($id);
        return $multa;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Multa  $multa
     * @return \Illuminate\Http\Response
     */
    public function edit(Multa $multa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Multa  $multa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $multa=Multa::find($id);
        $multa->Nombre= $request ->Nombre;
        $multa->Detalles= $request ->Detalles;
        $multa->save();
        $multas=Multa::all();
        return $multas;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Multa  $multa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $multa=Multa::find($id);
        $multa->delete();
        return $multa;
    }
}
