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
            $table -> integer('nIdCliente')->unsigned();
            $table -> foreign('nIdCliente')->references('nIdCliente')->on('m_clientes');
            $table -> integer('nIdEmpleado')->unsigned();
            $table -> foreign('nIdEmpleado')->references('nIdEmpleado')->on('m_empleados');
            $table -> integer('nIdSucursal')->unsigned();
            $table -> foreign('nIdSucursal')->references('nIdSucursal')->on('m_sucursals');
            $table -> integer('nIdMoneda')->unsigned();
            $table -> foreign('nIdMoneda')->references('nIdMoneda')->on('t_monedas');
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
