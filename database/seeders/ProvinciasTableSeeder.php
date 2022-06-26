<?php

namespace Database\Seeders;

use App\Models\Provincia;
use Illuminate\Database\Seeder;

class ProvinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provincias = [
            [
                'id' => 1,
                'nombre' => "Lima",
            ]
        ];
        Provincia::insert($provincias);
    }
}
