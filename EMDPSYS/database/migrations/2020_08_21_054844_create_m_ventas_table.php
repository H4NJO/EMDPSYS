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
            $table -> integer('nldCliente')->unsigned();
            $table -> foreign('nldCliente')->references('nldCliente')->on('m_clientes');
            $table -> integer('nldEmpleado')->unsigned();
            $table -> foreign('nldEmpleado')->references('nldEmpleado')->on('m_empleados');
            $table -> integer('nldSucursal')->unsigned();
            $table -> foreign('nldSucursal')->references('nldSucursal')->on('m_sucursal');
            $table -> integer('nldMoneda')->unsigned();
            $table -> foreign('nldMoneda')->references('nldMoneda')->on('t_monedas');
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
