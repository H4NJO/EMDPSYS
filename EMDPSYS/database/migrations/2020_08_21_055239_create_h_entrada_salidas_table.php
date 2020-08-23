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
            $table -> integer('nIdEmpleado')->unsigned();
            $table -> foreign('nIdEmpleado')->references('nIdEmpleado')->on('m_empleados');
            $table -> integer('nIdEntSal')->unsigned();
            $table -> foreign('nIdEntSal')->references('nIdEntSal')->on('t_ent_sals');
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
