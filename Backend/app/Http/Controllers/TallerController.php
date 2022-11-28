<?php

namespace App\Http\Controllers;

use App\Models\Taller;
use Illuminate\Http\Request;

class TallerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talleres=Taller::all();
        return $talleres;
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
        $taller= new Taller();
        $taller->Nombre= $request ->Nombre;
        $taller->Detalles= $request ->Detalles;
        $taller->save();
        $talleres=Taller::all();
        return $talleres;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Taller  $taller
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $taller=Taller::find($id);
        return $taller;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Taller  $taller
     * @return \Illuminate\Http\Response
     */
    public function edit(Taller $taller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Taller  $taller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $taller=Taller::find($id);
        $taller->Nombre= $request ->Nombre;
        $taller->Detalles= $request ->Detalles;
        $taller->save();
        $talleres=Taller::all();
        return $talleres;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Taller  $taller
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $taller=Taller::find($id);
        $taller->delete();
        return $taller;
    }
}
