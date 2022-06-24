<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Ubigeo;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function provincia($departament){
        $departamento = Departamento::where('id',$departament)->first();
        $ubigeos = Ubigeo::where('departamento_id',$departamento->id)->select('provincia_id')->distinct()->get();
        $html = '<option value="">Provincia</option>';
        foreach ($ubigeos as $ubigeo){
            $temp = '<option value="'.$ubigeo->provincia->id.'">'.$ubigeo->provincia->nombre.'</option>';
            $html = $html . $temp;
        }

        return response()->json($html);
    }
    public function distrito($provincia){

        $provinciaTemp = Provincia::where('id',$provincia)->first();
        $ubigeos = Ubigeo::where('provincia_id',$provinciaTemp->id)->select('distrito_id')->distinct()->get();

        $html = '';
        foreach ($ubigeos as $ubigeo){
            $temp = '<option value="'.$ubigeo->distrito->id.'">'.$ubigeo->distrito->nombre.'</option>';
            $html = $html . $temp;
        }

        return response()->json($html);
    }
}
