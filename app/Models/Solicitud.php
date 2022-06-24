<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $table = 'solicitudes';//esto es para decir que es en plurar esta tabla

    public function ubigeo(){
        return $this->belongsTo(Ubigeo::class);
    }
}
