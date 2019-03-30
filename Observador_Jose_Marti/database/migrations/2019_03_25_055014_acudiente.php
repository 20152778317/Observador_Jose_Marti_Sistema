<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Acudiente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acudiente', function (Blueprint $table) {
            $table->integer('Id_Acudiente')->primary();
            $table->unsignedInteger('Cod_Tipo_Doc_Acudiente');
            $table->foreign('Cod_Tipo_Doc_Acudiente')->references('Cod_Tipo_Doc')->on('tipo_documento');
	    $table->string('Nombres_Acudiente');
            $table->string('Apellidos_Acudiente');
            $table->unsignedInteger('Cod_Parentesco_Acudiente');
            $table->foreign('Cod_Parentesco_Acudiente')->references('Cod_Parentesco')->on('parentesco');
	    $table->string('Direccion_Acudiente');
	    $table->integer('Id_EstudianteAcudiente');
            $table->foreign('Id_EstudianteAcudiente')->references('Id_Estudiante')->on('estudiante');
            $table->string('Email_Acudiente');
            $table->string('Fecha_Naci_Acu');
            $table->unsignedInteger('Cod_Genero_Acudi');
            $table->foreign('Cod_Genero_Acudi')->references('Cod_Genero')->on('genero');
            $table->integer('Telefono_Acudiente');
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
