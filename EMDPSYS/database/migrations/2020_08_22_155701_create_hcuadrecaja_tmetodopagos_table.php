<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHcuadrecajaTmetodopagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcuadrecaja_tmetodopagos', function (Blueprint $table) {
            $table -> integer('nIdMetPago')->unsigned();
            $table -> foreign('nIdMetPago')->references('nIdMetPago')->on('tmetodopagos');
            $table -> integer('nIdCuadre')->unsigned();
            $table -> foreign('nIdCuadre')->references('nIdCuadre')->on('hcuadrecajas');
            $table -> decimal('nSubTotal',8,2);
            $table -> decimal('nComision',8,2);
            $table -> decimal('nTotal',8,2);
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
        Schema::dropIfExists('hcuadrecaja_tmetodopagos');
    }
}
