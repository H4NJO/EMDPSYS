<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_ventas', function (Blueprint $table) 
        {
            $table -> increments('nIdVenta');
            $table -> datetime('dFechaVenta', 0);
            $table -> boolean('bAnulado');
            $table -> datetime('dFechaAnulacion', 0);
            $table -> decimal('nTotalVenta');
            $table -> decimal('nTotalImpuesto');
            $table -> decimal('nMontoIGV');
            $table -> decimal('nGravadas');
            $table -> foreign('nldCliente')->references('nldCliente')->on('MCliente');
            $table -> foreign('nldEmpleado')->references('nldEmpleado')->on('MEmpleado');
            $table -> foreign('nldSucursal')->references('nldSucursal')->on('MSucursal');
            $table -> foreign('nldMoneda')->references('nldMoneda')->on('TMoneda');
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
        Schema::dropIfExists('m_ventas');
    }
}
