<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMcontratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcontratos', function (Blueprint $table) {
            $table->increments('nIdContrato');
            $table->integer("nIdEmpleado")->unsigned();
            $table->foreign('nIdEmpleado')->references('nIdEmpleado')->on('mempleados');
            $table->integer("nIdCargo")->unsigned();
            $table->foreign('nIdCargo')->references('nIdCargo')->on('tcargos');
            $table->datetime('dInicioContrato');
            $table->datetime('dFinContrato');
            $table->decimal('nSueldo');
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
        Schema::dropIfExists('mcontratos');
    }
}
