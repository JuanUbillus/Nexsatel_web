<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Response;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = User::all();
        return view('user.index', compact('usuarios'));
    }
    
    public function create (){
        return view('user.create');
    }

    public function store (Request $request){
        $usuario = new User;
        $usuario->Nombre=$request->nombre;
        $usuario->Apellido=$request->apellido;
        $usuario->Email=$request->email;
        $usuario->Telefono=$request->telefono;
        $usuario->Tipo=$request->tipo;
        $usuario->Rol=$request->rol;
        $usuario->Estado=$request->estado;
        $usuario->Direccion=$request->direccion;
        $usuario->Password=Hash::make($request->password);
        $usuario->Dni=$request->dni;
        $usuario->Adicional=$request->adicional;
        $usuario->Foto="public/avatar/1.png";
        $usuario->save();
        return redirect()->route('usuarios');
    }

    public function edit($id){
        $usuario = User::find($id);
        return view('user.editar', compact('usuario'));
    }
    
    public function update ($id, Request $request){
        $usuario = User::find($id);
        $usuario->Nombre=$request->nombre;
        $usuario->Apellido=$request->apellido;
        $usuario->Email=$request->email;
        $usuario->Telefono=$request->telefono;
        $usuario->Tipo=$request->tipo;
        $usuario->Rol=$request->rol;
        $usuario->Estado=$request->estado;
        $usuario->Direccion=$request->direccion;
        $usuario->Password=$request->password;
        $usuario->Dni=$request->dni;
        $usuario->Adicional=$request->adicional;
        $usuario->save();
        return redirect('/usuarios');
    }

    public function delete($id){
        $usuario = User::find($id);
        $usuario->delete();
        return redirect('/usuarios');
    }
    
    public function perfil(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('user.perfil',compact('user'));
    }

    public function contador() {
        $usuarios = User::all();
        $contador = count($usuarios);
        return Response::json($contador);
    }
}
