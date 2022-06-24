<?php

namespace Database\Seeders;

use App\Models\Caracteristica;
use Illuminate\Database\Seeder;

class CaracteristicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $caracteristicas = [
            [
            'titulo1' => "Seguridad",
            'descripcion1' => "La empresa brinda seguridad en la red con la cual el usuario puede estar tranquilo",
            'titulo2' => "Conectividad",
            'descripcion2' => "Garantizamos el 80% de la velocidad contratada, una línea simétrica y estable las 24 horas del día",
            'titulo3' => "Garantía",
            'descripcion3' => "La garantia que ofrece la empresa es 100% seguro",
            ]
        ];
        Caracteristica::insert($caracteristicas);
    }
}
