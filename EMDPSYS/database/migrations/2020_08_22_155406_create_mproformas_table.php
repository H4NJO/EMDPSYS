<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMproformasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mproformas', function (Blueprint $table) {
            $table -> increments('nIdProforma');
            $table -> string('cSerie', 20);
            $table -> string('cCorrelativo', 20);
            $table -> decimal('nTotal',8,2);
            $table -> decimal('nIGV',8,2);
            $table -> integer('nIdMoneda')->unsigned();
            $table -> foreign('nIdMoneda')->references('nIdMoneda')->on('tmonedas');
            $table -> integer('nIdEmpleado')->unsigned();
            $table -> foreign('nIdEmpleado')->references('nIdEmpleado')->on('mempleados');
            $table -> integer('nIdCliente')->unsigned();
            $table -> foreign('nIdCliente')->references('nIdCliente')->on('mclientes');
            $table -> integer('nIdSucursal')->unsigned();
            $table -> foreign('nIdSucursal')->references('nIdSucursal')->on('msucursals');
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
        Schema::dropIfExists('mproformas');
    }
}
