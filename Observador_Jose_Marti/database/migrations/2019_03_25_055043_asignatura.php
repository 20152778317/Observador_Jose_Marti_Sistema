<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Asignatura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignatura', function (Blueprint $table) {
            $table->increments('Cod_Asignatura');
            $table->string('Nombre_Asignatura');
            $table->string('Estado_Asignatura');
            $table->unsignedInteger('Cod_AreaAsignatura');
            $table->foreign('Cod_AreaAsignatura')->references('Cod_Area')->on('area');
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
