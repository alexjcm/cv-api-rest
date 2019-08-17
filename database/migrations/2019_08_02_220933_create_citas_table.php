<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('fecha_cita');
            $table->time('hora');
            $table->string('observaciones')->nullable();
            $table->integer('animal_id')->unsigned();
            $table->integer('veterinario_id')->unsigned();
            $table->timestamps();

            //claves foraneas
            $table->foreign('animal_id')->references('id')->on('animales');
            $table->foreign('veterinario_id')->references('id')->on('veterinarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
