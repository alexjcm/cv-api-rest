<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeterinariosTable extends Migration
{
    //Ejecuta las migraciones.
    public function up()
    {
        Schema::create('veterinarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo')->unique();
            $table->string('clave');
            $table->string('cedula')->unique();
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->boolean('estado');
            $table->boolean('nivel_acceso');
            $table->timestamps();
        });
    }

    //Revierte las migraciones.
    public function down()
    {
        Schema::dropIfExists('veterinarios');
    }
}
