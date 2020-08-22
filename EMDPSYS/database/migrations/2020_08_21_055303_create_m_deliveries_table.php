<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_deliveries', function (Blueprint $table)
         {
            $table -> increments('nIdDelivery');
            $table -> datetime('dFechaDelivery', 0);
            $table->string('cDireccion', 250);
            $table->string('cReceptor', 250);
            $table ->time('tHoraDelivery');
            $table->string('cLinkMapa', 250);
            $table->string('cTelefonoReceptor', 9);
            $table -> datetime('dFechaAnulacion', 0);
            $table -> boolean('bAnulado');
            $table -> foreign('nldVenta')->references('nldVenta')->on('MVenta');
            $table -> foreign('nldCourier')->references('nldCourier')->on('MCourier');
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
        Schema::dropIfExists('m_deliveries');
    }
}
