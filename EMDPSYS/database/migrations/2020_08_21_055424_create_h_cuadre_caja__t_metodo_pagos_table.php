<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHCuadreCajaTMetodoPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_cuadre_caja__t_metodo_pagos', function (Blueprint $table) {
            $table -> foreign('nIdMetPago')->references('nIdMetPago')
            ->on('TMetodoPago');
            $table -> foreign('nIdCuadre')->references('nIdCuadre')
            ->on('HCuadreCaja');
            $table -> decimal('nSubTotal',2,8);
            $table -> decimal('nComision',2,8);
            $table -> decimal('nTotal',2,8);
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
        Schema::dropIfExists('h_cuadre_caja__t_metodo_pagos');
    }
}
