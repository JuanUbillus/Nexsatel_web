<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Response;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = User::orderBy('nombre', 'ASC')->get();
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
        $usuario->Estado=$request->estado;
        $usuario->Password=Hash::make($request->password);
        $usuario->Dni=$request->dni;
        $usuario->save();
        return redirect()->route('usuarios');
    }

    public function edit($id){
        $usuario = User::find($id);
        $datos = [
            'nombre' => $usuario->nombre,
            'apellido' => $usuario->apellido,
            'email' => $usuario->email,
            'telefono' => $usuario->telefono,
            'tipo' => $usuario->tipo,
            'estado' => $usuario->estado,
            'dni' => $usuario->dni,
        ];
        return Response::json($datos);
    }
    
    public function update ($id, Request $request){
        $usuario = User::find($id);
        $usuario->Nombre=$request->nombre;
        $usuario->Apellido=$request->apellido;
        $usuario->Email=$request->email;
        $usuario->Telefono=$request->telefono;
        $usuario->Tipo=$request->tipo;
        $usuario->Estado=$request->estado;
        if($request->password != null){
            $usuario->Password=Hash::make($request->password);
        }
        $usuario->Dni=$request->dni;
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
    public function editarDatosPersonales(){
        $id = Auth::user()->id;
        $usuario = User::find($id);
        $datos = [
            'telefono' => $usuario->telefono,
            'direccion' => $usuario->direccion,
            'email' => $usuario->email,
            'adicional' => $usuario->adicional,
        ];
        return Response::json($datos);
    }
    public function updateDatosPersonales(Request $request){
        $id = Auth::user()->id;
        $usuario = User::find($id);
        $usuario->telefono=$request->telefono;
        $usuario->direccion=$request->direccion;
        $usuario->email=$request->email;
        $usuario->adicional=$request->adicional;
        $usuario->save();
        return redirect('/perfil');
    }
    public function cambiarFoto(Request $request){
        $id = Auth::user()->id;
        $usuario = User::find($id);
        if(isset($request->foto)){  
            if($usuario->foto==null){
                $usuario->foto=$request->file('foto')->store('public/img');
            }else{
                Storage::delete($usuario->foto);
                $usuario->foto=$request->file('foto')->store('public/img');
            }
        }
        $usuario->save();
        return redirect('/perfil');  
    }
    public function cambiarContraseña(Request $request){
        $id = Auth::user()->id;
        $usuario = User::find($id);
        $response = 'error';
        if(Hash::check($request->oldpass, $usuario->password)){
            $usuario->password=Hash::make($request->newpass);
            $usuario->save();
            $response = 'ok';
        }
        return Response::json($response);
    }



    
}
