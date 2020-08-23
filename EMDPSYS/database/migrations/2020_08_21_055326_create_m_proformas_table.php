<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMProformasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_proformas', function (Blueprint $table) {
            $table -> increments('nIdProforma');
            $table -> string('cSerie', 20);
            $table -> string('cCorrelativo', 20);
            $table -> decimal('nTotal',8,2);
            $table -> decimal('nIGV',8,2);
            $table -> integer('nIdMoneda')->unsigned();
            $table -> foreign('nIdMoneda')->references('nIdMoneda')
            ->on('t_monedas');
            $table -> integer('nIdEmpleado')->unsigned();
            $table -> foreign('nIdEmpleado')->references('nIdEmpleado')
            ->on('m_empleados');
            $table -> integer('nIdCliente')->unsigned();
            $table -> foreign('nIdCliente')->references('nIdCliente')
            ->on('m_clientes');
            $table -> integer('nIdSucursal')->unsigned();
            $table -> foreign('nIdSucursal')->references('nIdSucursal')
            ->on('m_sucursals');
            $table -> timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_proformas');
    }
}
