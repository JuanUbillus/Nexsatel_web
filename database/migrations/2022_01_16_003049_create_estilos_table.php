<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstilosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estilos', function (Blueprint $table) {
            $table->id();
            $table->string('correo',100)->nullable();
            $table->string('numero',100)->nullable();
            $table->string('direccion',300)->nullable();
            $table->string('ubicacion',500)->nullable();
            $table->string('logo',100)->nullable();
            $table->string('icono',100)->nullable();
            $table->string('nombre_empresa',100)->nullable();
            $table->string('slider1',100)->nullable();
            $table->string('slider2',100)->nullable();
            $table->string('slider3',100)->nullable();
            $table->string('tit_caracteristica1',100)->nullable();
            $table->string('tit_caracteristica2',100)->nullable();
            $table->string('tit_caracteristica3',100)->nullable();
            $table->string('desc_caracteristica1',500)->nullable();
            $table->string('desc_caracteristica2',500)->nullable();
            $table->string('desc_caracteristica3',500)->nullable();
            $table->string('whatsapp',20)->nullable();
            $table->string('facebook',100)->nullable();
            $table->string('instagram',100)->nullable();
            $table->string('twitter',100)->nullable();
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
        Schema::dropIfExists('estilos');
    }
}
