<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_ingresos', function (Blueprint $table) 
        {
            $table -> integer('nIdIngreso')->unsigned();
            $table -> foreign('nIdIngreso')->references('nIdIngreso')->on('m_ingresos');
            $table -> integer('nIdProducto')->unsigned();
            $table -> foreign('nIdProducto')->references('nIdProducto')->on('m_productos');
            $table -> decimal('nPrecioUnitario');
            $table -> decimal('nCostoUnitario');
            $table -> decimal('nGanancia');
            $table -> integer('nCantidad');
            $table -> integer('nTotal');
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
        Schema::dropIfExists('d_ingresos');
    }
}
