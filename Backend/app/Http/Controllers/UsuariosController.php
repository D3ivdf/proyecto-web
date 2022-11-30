<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;

use Illuminate\Http\Request;

use App\Models\Rol;


class UsuariosController extends Controller
{
    
    public function index()
    {
        //
        $users=Usuarios::all();
        return $users;
    }    
    public function create()
    {
        //
        //$user=new Usuarios();
        //$Rol=Rol::pluck('Id_rol,Tipo');
        return view('Log_in');
    }
    public function store(Request $request)
    {
        $user= new Usuarios();
        //$roles= Rol::pluck('Tipo','Id_rol');
        $user->Nombres= $request ->Nombres;
        $user->Apellidos= $request ->Apellidos;
        $user->Cedula= $request->Cedula;
        $user->Correo_electronico =$request ->Correo_electronico;
        $user->Fecha_nacimiento= $request->Fecha_nacimiento;
        $user->Genero=$request->Genero;
        $user->Contraseña=$request->Contraseña;
        $user->id_rol=$request->id_rol;
        $user->save();
        return $user;
    }

    
    public function show($id)
    {
        $user= Usuarios::find($id);
        $user= Rol::where('Id_rol','=','1');
        return $user;
    }

    
    public function edit($id)
    {
        //
        $user= Usuarios::find($id);
        return $user;
    }

    
    public function update(Request $request, $id)
    {
        //
        $user= Usuarios::find($id,$id_rol);
        $user->Nombres= $request ->Nombres;
        $user->Apellidos= $request ->Apellidos;
        $user->Correo_electronico =$request ->Correo_electronico;
        $user->Fecha_nacimiento= $request->Fecha_nacimiento;
        $user->Genero=$request->Genero;
        $user->Contraseña=$request->Contraseña;
        $user->save();
        return $user;
    }

    
    public function destroy($id)
    {
        //
        $user=Usuarios::find($id);
        $user->delete();
        return $user;
    }
}
