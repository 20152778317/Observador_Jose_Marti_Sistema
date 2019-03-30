<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Curso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->increments('Cod_Curso');
            $table->string('Nom_Curso');
	    $table->string('Año_Academico');
	    $table->integer('Id_DocenteCurso');
	    $table->foreign('Id_DocenteCurso')->references('Id_Docente')->on('docente');
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
