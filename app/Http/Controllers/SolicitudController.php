<?php

namespace App\Http\Controllers;

use App\Exports\solicitudesExport;
use App\Models\Solicitud;
use App\Models\Ubigeo;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Response;
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class SolicitudController extends Controller
{
    public function index(){
        $solicitudes = Solicitud::orderBy('created_at', 'DESC')->get();
        return view('solicitud.index',compact('solicitudes'));
    }

    public function store(Request $request){
        $solicitud = New Solicitud;

        $ubigeo = Ubigeo::where('departamento_id',$request->departamento)
            ->where('provincia_id',$request->provincia)
            ->where('distrito_id',$request->distrito)->first();
        $solicitud->ubigeo_id = $ubigeo->id;
        $solicitud->nombre=$request->nombre;
        $solicitud->apellido=$request->apellido;
        $solicitud->direccion=$request->direccion;
        $solicitud->telefono=$request->telefono;
        $solicitud->email=$request->email;
        $solicitud->tdocumento=$request->tdocumento;
        $solicitud->ndocumento=$request->ndocumento;
        $solicitud->save();
        $texto ='Nexsatel';
         Mail::to('atencionalcliente@nexsatel.com.pe')->send(new ContactoMail($texto));
        
        return redirect()->route('contacto');
    }

    public function exportExcel(){
        ini_set('memory_limit','-1');
        set_time_limit(3000000);
        return Excel::download(new SolicitudesExport, 'solicitudes_excel.xlsx');
    }

    public function contador(){
        $solicitudes = Solicitud::all();
        $contador = count($solicitudes);
        return Response::json($contador);
    }
    public function alert($id){
        $solicitud = Solicitud::find($id);
        
        if($solicitud->estado=='P'){
            $solicitud->estado='A';
        }else{
            $solicitud->estado='P';
        }
        $solicitud->save();
        return redirect()->route('solicitudes');
    }
    public function ver($id){
        $solicitud = Solicitud::find($id);
        $datos = [
            'nombre' => $solicitud->nombre,
            'apellido' => $solicitud->apellido,
            'distrito' => $solicitud->ubigeo->distrito->nombre,
            'direccion' => $solicitud->direccion,
            'telefono' => $solicitud->telefono,
            'email' => $solicitud->email,
            'tdocumento' => $solicitud->tdocumento,
            'ndocumento' => $solicitud->ndocumento,
        ];
        return Response::json($datos);
    }
}
