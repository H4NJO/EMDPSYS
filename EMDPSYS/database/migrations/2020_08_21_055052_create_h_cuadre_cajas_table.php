<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHCuadreCajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_cuadre_cajas', function (Blueprint $table) {
            $table->increments('nIdCuadre');
            $table->int('nMontoApertura');
            $table->int('nMontoCierre');
            $table->datetime('CuadreCaje');
            $table->foreign('nldEmpleado')->references('nldEmpleado')->on('MEmpleado');
            $table->foreign('nldSucursal')->references('nldSucursal')->on('MSucursal');
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
        Schema::dropIfExists('h_cuadre_cajas');
    }
}
