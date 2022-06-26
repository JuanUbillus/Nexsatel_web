<?php

namespace Database\Seeders;

use App\Models\Ubigeo;
use Illuminate\Database\Seeder;

class UbigeosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ubigeos = [
            [
              'departamento_id' => 1,
              'provincia_id' => 1,
              'distrito_id' => 1
            ],
            [
               'departamento_id' => 1,
               'provincia_id' => 1,
               'distrito_id' => 2
            ],
            [
               'departamento_id' => 1,
               'provincia_id' => 1,
               'distrito_id' => 3
            ],
        ];
        Ubigeo::insert($ubigeos);
    }
}
