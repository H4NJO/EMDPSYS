<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_ingresos', function (Blueprint $table) {
            $table->increments('nIdIngreso');
            $table->datetime('dFechaIngreso');
            $table->int('nTotal');
            $table->int('nIGV');
            $table->foreign('nIdSucursal')->references('nIdSucursal')->on('MSucursal');
            $table->foreign('nIdProveedor')->references('nIdProveedor')->on('MProveedor');
            $table->foreign('nIdEmpleado')->references('nIdEmpleado')->on('MEmpleado');
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
        Schema::dropIfExists('m_ingresos');
    }
}
