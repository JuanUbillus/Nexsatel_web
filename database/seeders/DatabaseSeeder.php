<?php

namespace Database\Seeders;

use App\Models\Estilo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EmpresasTableSeeder::class,
            UsersTableSeeder::class,
            TarifasTableSeeder::class,
            EstiloTableSeeder::class,
            PreciosTableSeeder::class,
            CaracteristicasTableSeeder::class,
            DepartamentosTableSeeder::class,
            ProvinciasTableSeeder::class,
            DistritosTableSeeder::class,
            UbigeosTableSeeder::class,
            SolicitudesTableSeeder::class,
        ]);
    }
}
