<?php

namespace App\Http\Controllers;

use App\Models\Distrito;
use Illuminate\Http\Request;
use Response;

class DistritoController extends Controller
{
    public function index(){
        $distritos = Distrito::all();

        return view('webpage.distritos', compact('distritos'));
    }
    public function store(Request $request){
        $distrito = new Distrito;
        $distrito->nombre=$request->nombre;
        $distrito->save();
        return redirect()->route('distritos');
    }
    public function edit($id){
        $distrito = Distrito::find($id);
        $datos = [
            'nombre' => $distrito->nombre,
        ];
        return Response::json($datos);
    }
    public function update($id, Request $request){
        $distrito = Distrito::find($id);
        $distrito->nombre=$request->nombre;
        $distrito->save();
        return redirect()->route('distritos');
    }
    public function delete($id){
        $distrito = Distrito::find($id);
        $distrito->delete();
        return redirect('/distritos');
    }
}
