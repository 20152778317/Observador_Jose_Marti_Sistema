<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estudiante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->integer('Id_Estudiante')->primary();
            $table->unsignedInteger('Cod_Tipo_Doc_Estudiante');
            $table->foreign('Cod_Tipo_Doc_Estudiante')->references('Cod_Tipo_Doc')->on('tipo_documento');
	    $table->string('Nombres_Estudiante');
	    $table->string('Apellidos_Estudiante');
	    $table->string('Fecha_Nac_Estudiante');
	    $table->string('Direccion_Estudiante');
	    $table->integer('Telefono_Estudiante');
	    $table->unsignedInteger('Cod_Jornada_Estudiante');
	    $table->foreign('Cod_Jornada_Estudiante')->references('Cod_Jornada')->on('jornada');
	    $table->unsignedInteger('Cod_Sede_Estudiante');
            $table->foreign('Cod_Sede_Estudiante')->references('Cod_Sede')->on('sede');
	    $table->unsignedInteger('Cod_Ciudad_Estudiante');
            $table->foreign('Cod_Ciudad_Estudiante')->references('Cod_Ciudad')->on('ciudad');
	    $table->unsignedInteger('Cod_Localidad_Estudiante');
            $table->foreign('Cod_Localidad_Estudiante')->references('Cod_Localidad')->on('localidad');
	    $table->unsignedInteger('Cod_Eps_Estudiante');
            $table->foreign('Cod_Eps_Estudiante')->references('Cod_Eps')->on('eps');
	    $table->unsignedInteger('Cod_Ruta_Estudiante');
            $table->foreign('Cod_Ruta_Estudiante')->references('Cod_Ruta')->on('ruta');
	    $table->unsignedInteger('Cod_Curso_Estudiante');
            $table->foreign('Cod_Curso_Estudiante')->references('Cod_Curso')->on('curso');
	    $table->string('Email_Estudiante');
	    $table->unsignedInteger('Cod_Grupo_Sanquineo_Estudiante');
            $table->foreign('Cod_Grupo_Sanquineo_Estudiante')->references('Cod_Grupo_Sanquineo')->on('grupo_sanguineo');
	    $table->unsignedInteger('Cod_Genero_Estudiante'); 
	    $table->foreign('Cod_Genero_Estudiante')->references('Cod_Genero')->on('genero');
            $table->string('Estado_Estudiante');
            $table->unsignedInteger('Cod_Departamento_Estu');
	    $table->foreign('Cod_Departamento_Estu')->references('Cod_Departamento')->on('departamento');
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
