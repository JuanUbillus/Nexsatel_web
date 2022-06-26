<?php

namespace Database\Seeders;

use App\Models\Distrito;
use Illuminate\Database\Seeder;

class DistritosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $distritos = [
            [
                'id' => 1,
                'nombre' => "Villa María del Tiunfo",
            ],
            [
                 'id' => 2,
                 'nombre' => "Lurín",
            ],
            [
                 'id' => 3,
                 'nombre' => "Pachacamac",
            ],
        ];
        Distrito::insert($distritos);
    }
}
