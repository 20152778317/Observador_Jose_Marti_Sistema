<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Docente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente', function (Blueprint $table) {
            $table->integer('Id_Docente')->primary();
            $table->unsignedInteger('Cod_Tipo_Doc_Docente');
	    $table->foreign('Cod_Tipo_Doc_Docente')->references('Cod_Tipo_Doc')->on('tipo_documento');
            $table->string('Nombres_Docente');
	    $table->string('Apellidos_Docente');
	    $table->string('Email_Docente');
	    $table->integer('Telefono_Docente');
	    $table->string('Fecha_Nacimiento_Docente');
	    $table->unsignedInteger('Cod_Area_Docente');
	    $table->foreign('Cod_Area_Docente')->references('Cod_Area')->on('area');
	    $table->unsignedInteger('Cod_Genero_Docente');
	    $table->foreign('Cod_Genero_Docente')->references('Cod_Genero')->on('genero');
	    $table->unsignedInteger('Cod_Grupo_Sanquineo_Docente');
	    $table->foreign('Cod_Grupo_Sanquineo_Docente')->references('Cod_Grupo_Sanquineo')->on('grupo_sanguineo');
	    $table->string('Estado_Docente');
	    $table->unsignedInteger('Cod_Departamento_Docente');
	    $table->foreign('Cod_Departamento_Docente')->references('Cod_Departamento')->on('departamento');
	    $table->unsignedInteger('Cod_Ciudad_Docente');
	    $table->foreign('Cod_Ciudad_Docente')->references('Cod_Ciudad')->on('ciudad');
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
