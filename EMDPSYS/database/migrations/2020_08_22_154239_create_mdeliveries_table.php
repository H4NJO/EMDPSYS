<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMdeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mdeliveries', function (Blueprint $table) {
            $table -> increments('nIdDelivery');
            $table -> datetime('dFechaDelivery', 0);
            $table->string('cDireccion', 250);
            $table->string('cReceptor', 250);
            $table ->time('tHoraDelivery');
            $table->string('cLinkMapa', 250);
            $table->string('cTelefonoReceptor', 9);
            $table -> datetime('dFechaAnulacion', 0);
            $table -> boolean('bAnulado');
            $table-> integer('nIdVenta')->unsigned();            
            $table -> foreign('nIdVenta')->references('nIdVenta')->on('mventas');
            $table-> integer('nIdCourier')->unsigned();
            $table -> foreign('nIdCourier')->references('nIdCourier')->on('mcurriers');
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
        Schema::dropIfExists('mdeliveries');
    }
}
