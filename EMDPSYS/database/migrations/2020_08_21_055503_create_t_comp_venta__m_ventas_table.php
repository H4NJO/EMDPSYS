<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCompVentaMVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_comp_venta__m_ventas', function (Blueprint $table) {
            $table -> integer('nIdCompVenta')->unsigned();
            $table -> foreign('nIdCompVenta')->references('nIdCompVenta')
            ->on('t_comprobante_ventas');
            $table -> integer('nIdVenta')->unsigned();
            $table -> foreign('nIdVenta')->references('nIdVenta')
            ->on('m_ventas');
            $table -> string('cSerie', 20);
            $table -> string('cCorrelativo',20);
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
        Schema::dropIfExists('t_comp_venta__m_ventas');
    }
}
