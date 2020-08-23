<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDhorarioasignadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dhorarioasignados', function (Blueprint $table) {
            $table -> integer('nIdHorario')->unsigned();
            $table -> foreign('nIdHorario')->references('nIdHorario')->on('mhorarios');
            $table -> integer('nIdEmpleado')->unsigned();
            $table -> foreign('nIdEmpleado')->references('nIdEmpleado')->on('mempleados');
            $table -> integer('nIdContrato')->unsigned();
            $table -> foreign('nIdContrato')->references('nIdContrato')->on('mcontratos');
            $table -> string('cObservaciones', 250);
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
        Schema::dropIfExists('dhorarioasignados');
    }
}
