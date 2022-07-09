<?php
namespace App\Helpers;

class Util {
    public static function estadoColorSolicitud($estado){
        if($estado=='P'){
            $color = 'secondary';
        }else{
            $color = 'success';
        }
        return $color;
    }
    public static function estadoStringSolicitud($estado){
        if($estado=='P'){
            $texto = 'Pendiente';
        }else{
            $texto = 'Atendido';
        }
        return $texto;
    }
}