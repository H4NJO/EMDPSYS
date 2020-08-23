<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmetpagoMventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmetpago_mventas', function (Blueprint $table) {
            $table -> integer('nIdMetPago')->unsigned();
            $table -> foreign('nIdMetPago')->references('nIdMetPago')->on('tmetodopagos');
            $table -> integer('nIdVenta')->unsigned();
            $table -> foreign('nIdVenta')->references('nIdVenta')->on('mventas');
            $table -> integer('nCantidad');
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
        Schema::dropIfExists('tmetpago_mventas');
    }
}
