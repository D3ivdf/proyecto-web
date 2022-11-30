<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Roles=Rol::all();
        return $Roles;    
    }

    
    public function store(Request $request)
    {
        //
        $Rol= new Rol();
        $Rol->Tipo= $request ->Tipo;
        $Rol->Detalles= $request ->Detalles;
        $Rol->save();
        $Roles=Rol::all();
        return $Roles;
    }

    
    public function show($id)
    {
        //
        $Rol= Rol::find($id);
        return $Rol;


    } 
}
