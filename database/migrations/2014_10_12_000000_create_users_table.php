<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('telefono')->nullable();
            $table->char('tipo',1)->comment('A:admin | T:trabajador');
            $table->char('estado',1)->comment('A:activo | I:inactivo');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('direccion',200)->nullable();
            $table->string('password')->nullable();
            $table->string('foto',100)->nullable();
            $table->string('dni', 16)->nullable();
            $table->string('adicional',300)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
