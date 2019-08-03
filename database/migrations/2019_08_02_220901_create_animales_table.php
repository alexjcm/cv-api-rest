<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('raza');
            $table->string('especie')->nullable();
            $table->string('color')->nullable();
            $table->timestamp('fecha_nacimiento')->nullable();
            $table->integer('edad')->nullable();
            $table->tinyInteger('sexo');
            $table->integer('cliente_id')->unsigned();
            $table->timestamps();
            //clave foranea
            $table->foreign('cliente_id')->references('id')->on('clientes');
            /**
             * Eliminación en cascada ->onDelete('cascade').- 
             * Cuando se elimina un registro de la tabla padre automáticamente 
             * se eliminan todos los registros que coincidan en la clave foránea
             * de la tabla relacionada.
             * 
             * Actualizacion en cascada ->onUpdate('cascade').- 
             * funciona de manera similar al anterior.
             */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animales');
    }
}
