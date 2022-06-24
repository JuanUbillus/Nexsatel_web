<?php

namespace App\Http\Controllers;

use App\Models\Caracteristica;
use App\Models\Departamento;
use App\Models\Empresa;
use App\Models\Tarifa;
use App\Models\Estilo;
use App\Models\Precio;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $empresas = Empresa::all();
        $tarifas = Tarifa::all();

        $dato = [
            'empresas' => $empresas,
            'tarifas' => $tarifas,
            'estilos' => Estilo::all()->first(),
            'precios' => Precio::all()->first(),
            'caracteristicas' => Caracteristica::all()->first(),
        ];
        return view('nexsatel.index', $dato);
    }
    public function nosotros(){
        $dato = [
            'estilos' => Estilo::all()->first(),
        ];
        
       return view('nexsatel.nosotros',$dato);
    }
    public function servicios(){
        $dato = [
            'estilos' => Estilo::all()->first(),
        ];
        return view('nexsatel.servicios',$dato);
    }
    public function contacto(){
        $dato = [
            'estilos' => Estilo::all()->first(),
            'departamentos' => Departamento::all(),
        ];
        return view('nexsatel.contacto',$dato);
    }
    public function planes(){
        $dato = [
            'estilos' => Estilo::all()->first(),
        ];
        $tarifas = Tarifa::all();
        return view('nexsatel.planes',compact('tarifas'),$dato);
    }
    public function pagos(){
        $dato = [
            'estilos' =>Estilo::all()->first(),
        ];
        return view('nexsatel.formas_pago',$dato);
    }
    public function fibraoptica(){
        $datos = [
            'estilos' => Estilo::all()->first(),
        ];
        return view('nexsatel.servicios_fibra',$datos);
    }
}
