<?php

namespace Database\Seeders;

use App\Models\Tarifa;
use Illuminate\Database\Seeder;

class TarifasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tarifas = [
            [
                'id' => 1,
                'plan' => "50 Mb",
                'descripcion1' => "plan simetrico de fibra optica para casa",
                'descripcion2' => "plan simetrico de fibra optica para casa",
                'descripcion3' => "plan simetrico de fibra optica para casa",
                'descripcion4' => "plan simetrico de fibra optica para casa",
                'precio' => 50.00
            ],
            [
                'id' => 2,
                'plan' => "100 Mb",
                'descripcion1' => "plan simetrico de fibra optica para casa",
                'descripcion2' => "plan simetrico de fibra optica para casa",
                'descripcion3' => "plan simetrico de fibra optica para casa",
                'descripcion4' => "plan simetrico de fibra optica para casa",
                'precio' => 50.00
            ]
        ];
        Tarifa::insert($tarifas);
    }
}
