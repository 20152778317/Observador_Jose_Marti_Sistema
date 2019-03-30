<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Observacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observacion', function (Blueprint $table) {
            $table->increments('Cod_Observacion');
            $table->integer('Id_Docente_Observacion');
            $table->foreign('Id_Docente_Observacion')->references('Id_Docente')->on('docente');
            $table->integer('Id_Estudiante_Observacion');
            $table->foreign('Id_Estudiante_Observacion')->references('Id_Estudiante')->on('estudiante');
            $table->string('Observacion');
	    $table->string('Fecha_Observacion');
	    $table->unsignedInteger('Cod_FaltaObservacion');
            $table->foreign('Cod_FaltaObservacion')->references('Cod_Falta')->on('falta');
            $table->string('Compromiso_Estudiante');
            $table->unsignedInteger('Cod_CitacionEstudiante');
            $table->foreign('Cod_CitacionEstudiante')->references('Cod_Citacion')->on('citacion');
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
        //
    }
}
