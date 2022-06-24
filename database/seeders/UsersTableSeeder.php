<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = [
            [
              'id' => 1,
              'nombre' => "Juan",
              'apellido' => "Ubillus",
              'email' => "admin@gmail.com",
              'rol'=>'A',
              'tipo'=>'A',
              'estado' =>'A',
              'direccion' =>'shhshshshhshshshshs',
              'password' =>Hash::make("123"),
              'dni' => "71269685"
            ],
            [
              'id' => 2,
              'nombre' => "Sonny",
              'apellido' => "Taniguchi",
              'email' => "sonny.taniguchi@gmail.com",
              'rol'=>'A',
              'tipo'=>'T',
              'estado' =>'A',
              'direccion' =>'shhshshshhshshshshs',
              'password' =>Hash::make("123"),
              'dni' => "123456"
            ]
          ];
          User::insert($usuarios);
    }
}
