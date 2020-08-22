<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_deliveries', function (Blueprint $table) {
            $table -> integer('nIdDelivery')->unsigned();
            $table -> foreign('nIdDelivery')->references('nIdDelivery')
            ->on('m_deliveries');
            $table -> integer('nIdProducto')->unsigned();
            $table -> foreign('nIdProducto')->references('nIdProducto')
            ->on('m_productos');
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
        Schema::dropIfExists('d_deliveries');
    }
}
