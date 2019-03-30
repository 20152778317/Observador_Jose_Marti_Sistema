<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Colegio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegio', function (Blueprint $table) 
        {
            $table->increments('Cod_Colegio');
            $table->string('Nombre_Colegio');
            $table->string('Nit_Colegio');
            $table->integer('Codigo_Dane');
            $table->integer('Codigo_Icfes');
            $table->integer('Resolucion_Aprobacion');
            $table->string('Rector_Colegio');
            $table->integer('Telefono_Colegio');
	        $table->string('Direccion_Colegio');
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
