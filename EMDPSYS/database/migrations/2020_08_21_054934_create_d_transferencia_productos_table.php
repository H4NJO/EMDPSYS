<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDTransferenciaProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_transferencia_productos', function (Blueprint $table) {

            $table-> integer('nIdTransferencia')->unsigned();            
            $table->foreign('nIdTransferencia')->references('nIdTransferencia')->on('m_transferencia_productos');
            $table-> integer('nIdProducto')->unsigned();            
            $table->foreign('nIdProducto')->references('nIdProducto')->on('m_productos');
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
        Schema::dropIfExists('d_transferencia_productos');
    }
}
