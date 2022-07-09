<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('direccion',150);
            $table->string('telefono',16);
            $table->string('email',50)->nullable();
            $table->string('tdocumento',10);
            $table->string('ndocumento',20);
            $table->foreignId('ubigeo_id')->references('id')->on('ubigeos');
            $table->char('estado',1)->default('P')->comment('P:Pendiente | A:Atendido');
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
        Schema::dropIfExists('solicitudes');
    }
}
