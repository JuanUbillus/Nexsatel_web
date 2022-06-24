<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarifa;

class TarifaController extends Controller
{
    public function index(){
        $tarifas = Tarifa::all();
        return view('tarifa.index', compact('tarifas'));
    }

    public function create(){
        return view('tarifa.create');
    }

    public function store(Request $request){
        $tarifa = new Tarifa;
        $tarifa->Plan=$request->plan;
        $tarifa->Precio=$request->precio;
        $tarifa->Descripcion1=$request->descripcion1;
        $tarifa->Descripcion2=$request->descripcion2;
        $tarifa->Descripcion3=$request->descripcion3;
        $tarifa->Descripcion4=$request->descripcion4;
        $tarifa->save();
        return redirect()->route('tarifas');
    }

    public function edit($id){
        $tarifa = Tarifa::find($id);
        return view('tarifa.editar', compact('tarifa'));
    }

    public function update ($id, Request $request){
        $tarifa = Tarifa::find($id);
        $tarifa->Plan=$request->plan;
        $tarifa->Precio=$request->precio;
        $tarifa->Descripcion1=$request->descripcion1;
        $tarifa->Descripcion2=$request->descripcion2;
        $tarifa->Descripcion3=$request->descripcion3;
        $tarifa->Descripcion4=$request->descripcion4;
        $tarifa->save();
        return redirect('/tarifas');
    }

    public function delete($id){
        $tarifa = Tarifa::find($id);
        $tarifa->delete();
        return redirect('/tarifas');
    }

}
