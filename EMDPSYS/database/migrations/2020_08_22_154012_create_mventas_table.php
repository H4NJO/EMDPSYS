<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mventas', function (Blueprint $table) {
            $table -> increments('nIdVenta');
            $table -> datetime('dFechaVenta', 0);
            $table -> boolean('bAnulado');
            $table -> datetime('dFechaAnulacion', 0);
            $table -> decimal('nTotalVenta');
            $table -> decimal('nTotalImpuesto');
            $table -> decimal('nMontoIGV');
            $table -> decimal('nGravadas');
            $table -> integer('nIdCliente')->unsigned();
            $table -> foreign('nIdCliente')->references('nIdCliente')->on('mclientes');
            $table -> integer('nIdEmpleado')->unsigned();
            $table -> foreign('nIdEmpleado')->references('nIdEmpleado')->on('mempleados');
            $table -> integer('nIdSucursal')->unsigned();
            $table -> foreign('nIdSucursal')->references('nIdSucursal')->on('msucursals');
            $table -> integer('nIdMoneda')->unsigned();
            $table -> foreign('nIdMoneda')->references('nIdMoneda')->on('tmonedas');
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
        Schema::dropIfExists('mventas');
    }
}
