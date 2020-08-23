<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTComprobanteIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_comprobante_ingresos', function (Blueprint $table) {
            $table-> increments('nIdCompIngreso');
            $table-> string('cNombreCompIngreso');
            $table-> boolean('bEstado');
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
        Schema::dropIfExists('t_comprobante_ingresos');
    }
}
