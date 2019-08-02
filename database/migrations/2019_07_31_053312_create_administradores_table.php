<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradoresTable extends Migration
{
    //Run the migrations.    
    public function up()
    {
        Schema::create('administradores', function (Blueprint $table) {
            $table->increments('id'); //clave primaria con incremento 
            $table->string('nombre', 50);
            $table->string('apellido', 50)->nullable();
            $table->string('correo', 100)->unique();
            $table->string('clave', 100);
            $table->boolean('nivel_acceso');
            $table->timestamps(); //Agrega columnas created_at y updated_at
        });
    }

    //Reverse the migrations.    
    public function down()
    {
        Schema::dropIfExists('administradores');
    }
}
