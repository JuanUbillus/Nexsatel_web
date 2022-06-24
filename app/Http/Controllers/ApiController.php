<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Ubigeo;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function provincia($departament){
        $departamento = Departamento::where('nombre',$departament)->first();
        $ubigeos = Ubigeo::where('departamento_id',$departamento->id)->select('provincia_id')->distinct()->get();
        $html = '';
        foreach ($ubigeos as $ubigeo){
            $temp = '<option value="'.$ubigeo->provincia->nombre.'">'.$ubigeo->provincia->nombre.'</option>';
            $html = $html . $temp; 
        }
        
        return response()->json($html);
    }
}
