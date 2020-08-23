<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHentradasalidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hentradasalidas', function (Blueprint $table) {
            $table -> increments('nldEntradaSalida');
            $table -> datetime('dEntradaSalida');
            $table -> integer('nIdEmpleado')->unsigned();
            $table -> foreign('nIdEmpleado')->references('nIdEmpleado')->on('mempleados');
            $table -> integer('nIdEntSal')->unsigned();
            $table -> foreign('nIdEntSal')->references('nIdEntSal')->on('tentsals');
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
        Schema::dropIfExists('hentradasalidas');
    }
}
