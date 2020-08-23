<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDtransferenciaproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtransferenciaproductos', function (Blueprint $table) {
            $table-> integer('nIdTransferencia')->unsigned();            
            $table->foreign('nIdTransferencia')->references('nIdTransferencia')->on('mtransferenciaproductos');
            $table-> integer('nIdProducto')->unsigned();            
            $table->foreign('nIdProducto')->references('nIdProducto')->on('mproductos');
            $table->string('nCantidad',20);
            $table->string('cLote',20);
            $table->datetime('dFechaVencimientoLote');
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
        Schema::dropIfExists('dtransferenciaproductos');
    }
}
