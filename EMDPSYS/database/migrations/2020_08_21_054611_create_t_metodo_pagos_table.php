<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTMetodoPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_metodo_pagos', function (Blueprint $table) {
            $table-> increments('nIdMetPago');
            $table-> string('cNombre');
            $table-> decimal('nComision');
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
        Schema::dropIfExists('t_metodo_pagos');
    }
}
