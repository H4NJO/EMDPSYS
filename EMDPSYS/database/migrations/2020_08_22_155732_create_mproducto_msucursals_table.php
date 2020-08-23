<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMproductoMsucursalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mproducto_msucursals', function (Blueprint $table) {
            $table -> integer('nIdProducto')->unsigned();
            $table -> foreign('nIdProducto')->references('nIdProducto')->on('mproductos');
            $table -> integer('nIdSucursal')->unsigned();
            $table -> foreign('nIdSucursal')->references('nIdSucursal')->on('msucursals');
            $table -> integer('nStock');
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
        Schema::dropIfExists('mproducto_msucursals');
    }
}
