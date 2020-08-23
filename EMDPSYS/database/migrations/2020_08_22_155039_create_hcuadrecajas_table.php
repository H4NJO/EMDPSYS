<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHcuadrecajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcuadrecajas', function (Blueprint $table) {
            $table->increments('nIdCuadre');
            $table->decimal('nMontoApertura');
            $table->decimal('nMontoCierre');
            $table->datetime('CuadreCaje');
            $table->integer("nIdEmpleado")->unsigned();
            $table->foreign('nIdEmpleado')->references('nIdEmpleado')->on('mempleados');
            $table->integer("nIdSucursal")->unsigned();
            $table->foreign('nIdSucursal')->references('nIdSucursal')->on('msucursals');
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
        Schema::dropIfExists('hcuadrecajas');
    }
}
