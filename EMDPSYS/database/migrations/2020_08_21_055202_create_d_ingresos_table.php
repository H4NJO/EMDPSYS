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
            $table -> foreign('nldIngreso')->references('nldIngreso')->on('MIngreso');
            $table -> foreign('nldProducto')->references('nldProducto')->on('MProducto');
            $table -> decimal('nPrecioUnitario');
            $table -> decimal('nCostoUnitario');
            $table -> decimal('nGanancia');
            $table -> int('nCantidad');
            $table -> int('nTotal');
            $table -> string('cLote');
            $table -> datetime("dFechaVencimientoLote", 0);
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
