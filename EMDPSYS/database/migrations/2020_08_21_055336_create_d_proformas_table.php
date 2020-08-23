<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDProformasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_proformas', function (Blueprint $table) {
            $table -> increments('nIdDetProforma');
            $table -> integer('nCantidad');
            $table -> decimal('nPrecioUnitario',8,2);
            $table -> decimal('nTotal',8,2);
            $table -> integer('nIdProforma')->unsigned();
            $table -> foreign('nIdProforma')->references('nIdProforma')
            ->on('m_proformas');
            $table -> integer('nIdProducto')->unsigned();
            $table -> foreign('nIdProducto')->references('nIdProducto')
            ->on('m_productos');
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
        Schema::dropIfExists('d_proformas');
    }
}
