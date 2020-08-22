<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHAusenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_ausencias', function (Blueprint $table) 
        {
            $table -> increments('nIdAusencia');
            $table -> datetime('dInicio', 0);
            $table -> datetime('dFinal', 0);
            $table -> int('nIdAdministrador');
            $table -> foreign('nldEmpleado')->references('nldEmpleado')->on('MEmpleado');
            $table -> string("cDescripcion", 250);
            $table -> boolean('bEstado');
            $table -> foreign('nldAusencia')->references('nldAusencia')->on('TAusencia');
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
        Schema::dropIfExists('h_ausencias');
    }
}
