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
            $table -> foreign('nIdModena')->references('nIdModena')
            ->on('TMoneda');
            $table -> foreign('nIdEmpleado')->references('nIdEmpleado')
            ->on('MEmpleado');
            $table -> foreign('nIdCliente')->references('nIdCliente')
            ->on('MCliente');
            $table -> foreign('nIdSucursal')->references('nIdSucursal')
            ->on('MSucursal');
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
