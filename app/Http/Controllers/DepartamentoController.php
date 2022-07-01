<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use Response;

class DepartamentoController extends Controller
{
    public function index(){
        $departamentos = Departamento::all();

        return view('webpage.departamentos', compact('departamentos'));
    }
    public function store(Request $request){
        $departamento = new Departamento;
        $departamento->nombre=$request->nombre;
        $departamento->save();
        return redirect()->route('departamentos');
    }
    public function edit($id){
        $departamento = Departamento::find($id);
        $datos = [
            'nombre' => $departamento->nombre,
        ];
        return Response::json($datos);
    }
    public function update($id, Request $request){
        $departamento = Departamento::find($id);
        $departamento->nombre=$request->nombre;
        $departamento->save();
        return redirect()->route('departamentos');
    }
    public function delete($id){
        $departamento = Departamento::find($id);
        $departamento->delete();
        return redirect('/departamentos');
    }
}
