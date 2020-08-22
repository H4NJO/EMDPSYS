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
            $table->decimal('nMontoApertura');
            $table->decimal('nMontoCierre');
            $table->datetime('CuadreCaje');
            $table->integer("nIdEmpleado")->unsigned();
            $table->foreign('nIdEmpleado')->references('nIdEmpleado')->on('m_empleados');
            $table->integer("nIdSucursal")->unsigned();
            $table->foreign('nIdSucursal')->references('nIdSucursal')->on('m_sucursals');
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
