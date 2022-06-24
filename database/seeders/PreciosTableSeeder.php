<?php

namespace Database\Seeders;

use App\Models\Precio;
use Illuminate\Database\Seeder;

class PreciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $precios = [
            [
            'titulo1' => "Domicilio",
            'plan1' => "50",
            'mb' => "Mbps",
            'desc_p1' => "Internert las 24 horas",
            'desc_p1_2' => "Velocidad Simétrica",
            'desc_p1_3' => "Internet Ilimitado",
            'desc_p1_4' => "Ideal para clases virtuales",
            'desc_p1_5' => "Ideal para HomeOffice",
            'titulo2' => "Negocio",
            'plan2' => "70",
            'desc_p2' => "Ideal para clases virtuales",
            'desc_p2_2' => "Internert las 24 horas",
            'desc_p2_3' => "Velocidad Simétrica",
            'desc_p2_4' => "Internet Ilimitado",
            'desc_p2_5' => "Ideal para HomeOffice",
            'titulo3' => "Empresas",
            'plan3' => "100",
            'desc_p3' => "Ideal para clases virtuales",
            'desc_p3_2' => "Internert las 24 horas",
            'desc_p3_3' => "Velocidad Simétrica",
            'desc_p3_4' => "Internet Ilimitado",
            'desc_p3_5' => "Ideal para HomeOffice",
            ],
        ];
        Precio::insert($precios);
    }
}
