<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estilo;

class EstiloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estilos = [
            [
            'correo' => "atencionalcliente@nexsatel.com.pe",
            'numero' => "+51965780922",
            'direccion' => "Mz K lote 8 Villa Alejandro Segunda Etapa - Lurín",
            'ubicacion' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d974.7994991012122!2d-76.90718727080223!3d-12.23486908881435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105bc04ca43bae3%3A0x715e52e8ccaf4455!2sNEXSATEL!5e0!3m2!1ses-419!2spe!4v1655758091310!5m2!1ses-419!2spe",
            'logo' => "public/img/logo.png",
            'icono' => "public/img/logo2.png",
            'nombre_empresa' => "Nexsatel",
            'slider1' => "public/img/slider1.jpg",
            'slider2' => "public/img/slider2.jpg",
            'slider3' => "public/img/slider3.jpg",
            'tit_caracteristica1' => "Seguridad",
            'tit_caracteristica2' => "Conectividad",
            'tit_caracteristica3' => "Garantía",
            'desc_caracteristica1' => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
            'desc_caracteristica2' => "Garantizamos el 80% de la velocidad contratada, una linea simétrica y estable las 24 horas del día.",
            'desc_caracteristica3' => "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur",
            'whatsapp' =>"965780922",
            ]
        ];
        Estilo::insert($estilos);
    }
}
