<?php

namespace App\Http\Controllers;

use App\Models\Precio;
use Illuminate\Http\Request;
use Response;

class PrecioController extends Controller
{
    public function precios_index(){
        $precios = Precio::all();
        return view('webpage.precios_index',compact('precios'));
    }
    public function precios_edit(){
        $precio = Precio::find(1);
        $datos = [
            'titulo1' => $precio->titulo1,
            'plan1' => $precio->plan1,
            'mb' => $precio->mb,
            'desc_p1' => $precio->desc_p1,
            'desc_p1_2' => $precio->desc_p1_2,
            'desc_p1_3' => $precio->desc_p1_3,
            'desc_p1_4' => $precio->desc_p1_4,
            'desc_p1_5' => $precio->desc_p1_5,
            'titulo2' => $precio->titulo2,
            'plan2' => $precio->plan2,
            'desc_p2' => $precio->desc_p2,
            'desc_p2_2' => $precio->desc_p2_2,
            'desc_p2_3' => $precio->desc_p2_3,
            'desc_p2_4' => $precio->desc_p2_4,
            'desc_p2_5' => $precio->desc_p2_5,
            'titulo3' => $precio->titulo3,
            'plan3' => $precio->plan3,
            'desc_p3' => $precio->desc_p3,
            'desc_p3_2' => $precio->desc_p3_2,
            'desc_p3_3' => $precio->desc_p3_3,
            'desc_p3_4' => $precio->desc_p3_4,
            'desc_p3_5' => $precio->desc_p3_5,
        ];
        return Response::json($datos);
    }
    public function precios_update(Request $request){
        $precio = Precio::find(1);
        $precio->titulo1=$request->titulo1;
        $precio->plan1=$request->plan1;
        $precio->desc_p1=$request->desc_p1;
        $precio->desc_p1_2=$request->desc_p1_2;
        $precio->desc_p1_3=$request->desc_p1_3;
        $precio->desc_p1_4=$request->desc_p1_4;
        $precio->desc_p1_5=$request->desc_p1_5;
        $precio->titulo2=$request->titulo2;
        $precio->plan2=$request->plan2;
        $precio->desc_p2=$request->desc_p2;
        $precio->desc_p2_2=$request->desc_p2_2;
        $precio->desc_p2_3=$request->desc_p2_3;
        $precio->desc_p2_4=$request->desc_p2_4;
        $precio->desc_p2_5=$request->desc_p2_5;
        $precio->titulo3=$request->titulo3;
        $precio->plan3=$request->plan3;
        $precio->desc_p3=$request->desc_p3;
        $precio->desc_p3_2=$request->desc_p3_2;
        $precio->desc_p3_3=$request->desc_p3_3;
        $precio->desc_p3_4=$request->desc_p3_4;
        $precio->desc_p3_5=$request->desc_p3_5;
        $precio->mb=$request->mb;
        $precio->save();
        return redirect()->route('precios');
    }
}
