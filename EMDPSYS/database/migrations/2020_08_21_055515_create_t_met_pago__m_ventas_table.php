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
            $table -> integer('nIdMetPago')->unsigned();
            $table -> foreign('nIdMetPago')->references('nIdMetPago')
            ->on('t_metodo_pagos');
            $table -> integer('nIdVenta')->unsigned();
            $table -> foreign('nIdVenta')->references('nIdVenta')
            ->on('m_ventas');
            $table -> integer('nCantidad');
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
