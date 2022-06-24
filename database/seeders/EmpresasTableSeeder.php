<?php

namespace Database\Seeders;

use App\Http\Controllers\EmpresaController;
use Illuminate\Database\Seeder;
use App\Models\Empresa;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresas = [
          [
            'id' => 1,
            'nombre' => "Mikrotik",
            'correo' => "admin@mikrotik.com",
            'imagen' => "public/img/mikrotik.png",
          ],
          [
            'id' => 2,
            'nombre' => "Huawei",
            'correo' => "admin@huawei.com",
            'imagen' => "public/img/huawie.png",
          ]
        ];
        Empresa::insert($empresas);
    }
}
