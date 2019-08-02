<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('fecha_consulta');
            $table->string('respiracion');
            $table->string('temperatura');
            $table->string('pulsacion');
            $table->string('peso');
            $table->string('estado_reproductivo');
            $table->string('sintomas');
            $table->string('presunto_diagnostico');
            $table->boolean('solicitud_examen');
            $table->string('tipo_examen');
            $table->boolean('hospitalizacion');
            $table->integer('historia_id');
            $table->integer('cita_id');
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
        Schema::dropIfExists('consultas');
    }
}
