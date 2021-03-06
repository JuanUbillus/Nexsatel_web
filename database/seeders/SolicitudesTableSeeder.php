<?php

namespace Database\Seeders;

use App\Models\Solicitud;
use Illuminate\Database\Seeder;

class SolicitudesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $solicitudes = [
            [
                'id' => 1,
                'nombre' => "Juan",
                'apellido' => "Ubillus",
                'ubigeo_id' => 1,
                'direccion' => "Jr. leoncio prado Jose Galvez",
                'telefono' => "58525478",
                'tdocumento' => "DNI",
                'ndocumento' => "5258547",
                'mensaje' => "prueba01",
            ],
            [
                'id' => 2,
                'nombre' => "Mijael",
                'apellido' => "Rivera",
                'ubigeo_id' => 1,
                'direccion' => "Jr. leoncio prado Jose Galvez",
                'telefono' => "547852585",
                'tdocumento' => "RUC",
                'ndocumento' => "2000475858",
                'mensaje' => "prueba02",
            ]
        ];
        Solicitud::insert($solicitudes);
    }
}
