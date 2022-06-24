<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubigeo extends Model
{
    use HasFactory;
    public function departamentos(){
        return $this->hasMany(Departamento::class);
    }
    public function provincia(){
        return $this->belongsTo(Provincia::class);
    }
    public function distritos(){
        return $this->hasMany(Distrito::class);
    }
}
