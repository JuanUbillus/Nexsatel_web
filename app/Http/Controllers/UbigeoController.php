<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\Provincia;
use App\Models\Ubigeo;
use Illuminate\Http\Request;
use Response;

class UbigeoController extends Controller
{
    public function index(){
        $ubigeos = Ubigeo::all();
        $departamentos = Departamento::all();
        $provincias = Provincia::all();
        $distritos = Distrito::all();
        return view('webpage.ubigeos', compact('ubigeos', 'departamentos', 'provincias', 'distritos'));
    }
    public function store(Request $request){
        $ubigeo = new Ubigeo;
        $ubigeo->departamento_id=$request->departamento;
        $ubigeo->provincia_id=$request->provincia;
        $ubigeo->distrito_id=$request->distrito;
        $ubigeo->save();
        return redirect()->route('ubigeos');
    }
    public function edit($id){
        $ubigeo = Ubigeo::find($id);
        $datos = [
            'nombre' => $ubigeo->nombre,
        ];
        return Response::json($datos);
    }
    public function update($id, Request $request){
        $ubigeo = Ubigeo::find($id);
        $ubigeo->nombre=$request->nombre;
        $ubigeo->save();
        return redirect()->route('ubigeos');
    }
    public function delete($id){
        $ubigeo = Ubigeo::find($id);
        $ubigeo->delete();
        return redirect('/ubigeos');
    }
}
