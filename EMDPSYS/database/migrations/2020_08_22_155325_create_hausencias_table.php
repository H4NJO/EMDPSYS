<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHausenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hausencias', function (Blueprint $table) {
            $table -> increments('nIdAusencia');
            $table -> datetime('dInicio', 0);
            $table -> datetime('dFinal', 0);
            $table -> integer('nIdAdministrador');
            $table -> integer('nIdEmpleado')->unsigned();
            $table -> foreign('nIdEmpleado')->references('nIdEmpleado')->on('mempleados');
            $table -> string("cDescripcion", 250);
            $table -> boolean('bEstado');
            $table -> integer('nIdTAusencia')->unsigned();
            $table -> foreign('nIdTAusencia')->references('nIdTAusencia')->on('tausencias');
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
        Schema::dropIfExists('hausencias');
    }
}
