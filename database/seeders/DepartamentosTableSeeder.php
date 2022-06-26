<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamentos = [
            [
              'id' => 1,
              'nombre' => "Lima",
            ]
        ];
        Departamento::insert($departamentos);
    }
}
