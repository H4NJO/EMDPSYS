<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTComprobanteVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_comprobante_ventas', function (Blueprint $table) {
            $table-> increments('nIdCompVenta');
            $table-> string('cNombreCompVenta');
            $table-> string('cCodigoSunat');
            $table-> boolean('bEstado');
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
        Schema::dropIfExists('t_comprobante_ventas');
    }
}
