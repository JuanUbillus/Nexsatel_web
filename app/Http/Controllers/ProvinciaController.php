<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use Illuminate\Http\Request;
use Response;

class ProvinciaController extends Controller
{
    public function index(){
        $provincias = Provincia::all();

        return view('webpage.provincias', compact('provincias'));
    }
    public function store(Request $request){
        $provincia = new Provincia();
        $provincia->nombre=$request->nombre;
        $provincia->save();
        return redirect()->route('provincias');
    }
    public function edit($id){
        $provincia = Provincia::find($id);
        $datos = [
            'nombre' => $provincia->nombre,
        ];
        return Response::json($datos);
    }
    public function update($id, Request $request){
        $provincia = Provincia::find($id);
        $provincia->nombre=$request->nombre;
        $provincia->save();
        return redirect()->route('provincias');
    }
    public function delete($id){
        $provincia = Provincia::find($id);
        $provincia->delete();
        return redirect('/provincias');
    }
}
