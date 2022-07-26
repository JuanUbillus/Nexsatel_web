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
    public static function estadoColorUsuario($estado){
        if($estado=='A'){
            $color = 'success';
        }else{
            $color = 'secondary';
        }
        return $color;
    }
    public static function estadoStringUsuario($estado){
        if($estado=='A'){
            $texto = 'Activo';
        }else{
            $texto = 'Inactivo';
        }
        return $texto;
    }
    public static function tipoColorUsuario($tipo){
        if($tipo=='A'){
            $color = 'danger';
        }else{
            $color = 'primary';
        }
        return $color;
    }
    public static function tipoStringUsuario($tipo){
        if($tipo=='A'){
            $texto = 'Administrador';
        }else{
            $texto = 'Trabajador';
        }
        return $texto;
    }
}