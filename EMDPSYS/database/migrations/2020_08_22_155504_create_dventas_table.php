<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dventas', function (Blueprint $table) {
            $table -> increments('nIdDVenta');
            $table -> integer('nCantidad');
            $table -> decimal('nPrecioUnitario',8,2);
            $table -> decimal('nTotal',8,2);
            $table -> integer('nIdVenta')->unsigned();
            $table -> foreign('nIdVenta')->references('nIdVenta')->on('mventas');
            $table -> integer('nIdProducto')->unsigned();
            $table -> foreign('nIdProducto')->references('nIdProducto')->on('mproductos');
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
        Schema::dropIfExists('dventas');
    }
}
