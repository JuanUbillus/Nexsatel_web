<?php

namespace App\Http\Controllers;

use App\Models\Estilo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Response;

class EstiloController extends Controller
{
    public function cabecera_index(){
        $estilos = Estilo::all();
        return view('webpage.cabecera_index', compact('estilos'));  
    }
    public function cabecera_edit($id){
        $estilo = Estilo::find($id);
        $datos = [
            'correo' => $estilo->correo,
            'numero' => $estilo->numero,
            'direccion' => $estilo->direccion,
            'ubicacion' => $estilo->ubicacion,
        ];
        return Response::json($datos);
    }
    public function cabecera_update($id, Request $request){
        $estilo = Estilo::find($id);
        $estilo->correo=$request->correo;
        $estilo->numero=$request->numero;
        $estilo->direccion=$request->direccion;
        $estilo->ubicacion=$request->ubicacion;
        $estilo->save();
        return redirect()->route('cabecera');
    }
    public function logo_index(){
        $estilos = Estilo::all()->first();
        $logo = $estilos->logo;
        $icono = $estilos->icono;
        $nombre_empresa = $estilos->nombre_empresa;
        return view('webpage.logo_index', compact('logo','icono','nombre_empresa'));
    }
    public function logo_edit(){
        $estilo = Estilo::all()->first();
        $logo = Storage::url($estilo->logo);
        $icono = Storage::url($estilo->icono);
        $datos = [
            'logo' => $logo,
            'icono' => $icono,
            'nombre_empresa' => $estilo->nombre_empresa
        ];
        return Response::json($datos);
    }
    public function logo_update(Request $request){
        $estilo = Estilo::find(1);
        $estilo->nombre_empresa=$request->nombre_empresa;
        if(isset($request->logo)){  
            if($estilo->logo==null){
                $estilo->logo=$request->file('logo')->store('public/img');
            }else{
                Storage::delete($estilo->logo);
                $estilo->logo=$request->file('logo')->store('public/img');
            }
        };
        if(isset($request->icono)){  
            if($estilo->icono==null){
                $estilo->icono=$request->file('icono')->store('public/img');
            }else{
                Storage::delete($estilo->icono);
                $estilo->icono=$request->file('icono')->store('public/img');
            }
        };
        $estilo->save();
        return redirect()->route('logo');  
    }
    public function redes_index(){
        $estilos = Estilo::all()->find(1);
        return view('webpage.redes_index', compact('estilos')); 
    }
    public function redes_edit(){
        $estilo = Estilo::find(1);
        $datos = [
            'whatsapp' => $estilo->whatsapp,
            'facebook' => $estilo->facebook,
            'instagram' => $estilo->instagram,
            'twitter' => $estilo->twitter,
        ];
        return view('webpage.redes_edit', $datos);
    }
    public function redes_update(Request $request){
        $estilo = Estilo::find(1);
        $estilo->whatsapp=$request->whatsapp;
        $estilo->facebook=$request->facebook;
        $estilo->instagram=$request->instagram;
        $estilo->twitter=$request->twitter;
        $estilo->save();
        return redirect()->route('redes');
    }
    public function sliders_index(){
        $estilos = Estilo::all()->first();
        $slider1 = $estilos->slider1;
        $slider2 = $estilos->slider2;
        $slider3 = $estilos->slider3;
        return view('webpage.slider_index',compact('slider1', 'slider2', 'slider3'));
    }
    public function sliders_edit(){
        $estilos = Estilo::all()->first();
        $slider1 = Storage::url($estilos->slider1);
        $slider2 = Storage::url($estilos->slider2);
        $slider3 = Storage::url($estilos->slider3);
        $datos = [
            'slider1' => $slider1,
            'slider2' => $slider2,
            'slider3' => $slider3
        ];
        return Response::json($datos);
    }
    public function sliders_update(Request $request){
        $estilo = Estilo::find(1);
        if(!empty($request->slider1)){  
            if($estilo->slider1==null){
                $estilo->slider1=$request->file('slider1')->store('public/img');
            }else{
                Storage::delete($estilo->slider1);
                $estilo->slider1=$request->file('slider1')->store('public/img');
            }
        };
        if(isset($request->slider2)){  
            if($estilo->slider2==null){
                $estilo->slider2=$request->file('slider2')->store('public/img');
            }else{
                Storage::delete($estilo->slider2);
                $estilo->slider2=$request->file('slider2')->store('public/img');
            }
        };
        if(isset($request->slider3)){  
            if($estilo->slider3==null){
                $estilo->slider3=$request->file('slider3')->store('public/img');
            }else{
                Storage::delete($estilo->slider3);
                $estilo->slider3=$request->file('slider3')->store('public/img');
            }
        };
        $estilo->save();
        return redirect()->route('sliders');
    }
}
