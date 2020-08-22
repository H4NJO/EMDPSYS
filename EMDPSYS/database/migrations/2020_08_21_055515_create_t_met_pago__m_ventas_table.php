<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTMetPagoMVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_met_pago__m_ventas', function (Blueprint $table) {
            $table -> foreign('nIdMetPago')->references('nIdMetPago')
            ->on('TMetodoPago');
            $table -> foreign('nIdVenta')->references('nIdVenta')
            ->on('MVenta');
            $table -> int('nCantidad');
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
        Schema::dropIfExists('t_met_pago__m_ventas');
    }
}
