<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo1',50);
            $table->string('plan1',10);
            $table->string('mb',20);
            $table->string('desc_p1',100);
            $table->string('desc_p1_2',100);
            $table->string('desc_p1_3',100);
            $table->string('desc_p1_4',100);
            $table->string('desc_p1_5',100);
            $table->string('titulo2',50);
            $table->string('plan2',10);
            $table->string('desc_p2',100);
            $table->string('desc_p2_2',100);
            $table->string('desc_p2_3',100);
            $table->string('desc_p2_4',100);
            $table->string('desc_p2_5',100);
            $table->string('titulo3',50);
            $table->string('plan3',10);
            $table->string('desc_p3',100);
            $table->string('desc_p3_2',100);
            $table->string('desc_p3_3',100);
            $table->string('desc_p3_4',100);
            $table->string('desc_p3_5',100);
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
        Schema::dropIfExists('precios');
    }
}
