<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use Illuminate\Support\Facades\Storage;
use Response;

class EmpresaController extends Controller
{
    public function index(){
        $empresas = Empresa::all();
        
        return view('empresa.index', compact('empresas'));

    }
    public function store (Request $request){
        $empresa = new Empresa;
        $empresa->Nombre=$request->nombre;
        $empresa->Correo=$request->correo;
        $empresa->Telefono=$request->telefono;
        $empresa->Direccion=$request->direccion;
        $empresa->Imagen=$request->file('imagenes')->store('public/img');
        $empresa->save();
        return redirect()->route('empresas');
    }
    public function edit($id){
        $empresa = Empresa::find($id);
        $imagen = Storage::url($empresa->Imagen);
        $datos = [
            'empresa' => $empresa,
            'imagen' => $imagen
        ];
        return Response::json($datos);
    }
    public function update ($id, Request $request){
        $empresa = Empresa::find($id);
        $empresa->Nombre=$request->nombre;
        $empresa->Correo=$request->correo;
        $empresa->Telefono=$request->telefono;
        $empresa->Direccion=$request->direccion;
       if(isset($request->imagenes)){  
            if($empresa->Imagen==null){
                $empresa->Imagen=$request->file('imagenes')->store('public/img');
            }else{
                Storage::delete($empresa->Imagen);
                $empresa->Imagen=$request->file('imagenes')->store('public/img');
            }
        }        
        $empresa->save();
        return redirect('/empresas');
    }
    public function delete($id){
        $empresa = Empresa::find($id);
        $imagen=$empresa->Imagen;
        if(Storage::exists($imagen)){
            Storage::delete($imagen);
        }
        $empresa->delete();
        return redirect('/empresas');
    }
}
