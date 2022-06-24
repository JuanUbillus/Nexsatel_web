<?php

namespace App\Http\Controllers;

use App\Models\Caracteristica;
use Illuminate\Http\Request;
use Response;

class CaracteristicaController extends Controller
{
    public function caracteristicas_index(){
        $caracteristicas = Caracteristica::all();
        return view('webpage.caracteristicas_index', compact('caracteristicas'));  
    }
    public function caracteristicas_edit($id){
        $caracteristica = Caracteristica::find($id);
        $datos = [
            'titulo1' => $caracteristica->titulo1,
            'descripcion1' => $caracteristica->descripcion1,
            'titulo2' => $caracteristica->titulo2,
            'descripcion2' => $caracteristica->descripcion2,
            'titulo3' => $caracteristica->titulo3,
            'descripcion3' => $caracteristica->descripcion3,
        ];
        return Response::json($datos);
    }
    public function caracteristicas_update($id, Request $request){
        $caracteristica = Caracteristica::find($id);
        $caracteristica->titulo1=$request->titulo1;
        $caracteristica->descripcion1=$request->descripcion1;
        $caracteristica->titulo2=$request->titulo2;
        $caracteristica->descripcion2=$request->descripcion2;
        $caracteristica->titulo3=$request->titulo3;
        $caracteristica->descripcion3=$request->descripcion3;
        $caracteristica->save();
        return redirect()->route('caracteristicas');
    }
}
