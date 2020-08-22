<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHEntradaSalidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_entrada_salidas', function (Blueprint $table)
         {
            $table -> increments('nldEntradaSalida');
            $table -> datetime('dEntradaSalida');
            $table -> foreign('nldEmpleado')->references('nldEmpleado')->on('MEmpleado');
            $table -> foreign('nldEntSal')->references('nldEntSal')->on('TEntSal');
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
        Schema::dropIfExists('h_entrada_salidas');
    }
}
