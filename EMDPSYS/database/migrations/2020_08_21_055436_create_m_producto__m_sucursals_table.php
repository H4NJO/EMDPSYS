<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMProductoMSucursalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_producto__m_sucursals', function (Blueprint $table) {
            $table -> integer('nIdProducto')->unsigned();
            $table -> foreign('nIdProducto')->references('nIdProducto')
            ->on('m_productos');
            $table -> integer('nIdSucursal')->unsigned();
            $table -> foreign('nIdSucursal')->references('nIdSucursal')
            ->on('m_sucursals');
            $table -> int('nStock');
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
        Schema::dropIfExists('m_producto__m_sucursals');
    }
}
