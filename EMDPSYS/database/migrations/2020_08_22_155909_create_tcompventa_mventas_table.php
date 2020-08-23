<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTcompventaMventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcompventa_mventas', function (Blueprint $table) {
            $table -> integer('nIdCompVenta')->unsigned();
            $table -> foreign('nIdCompVenta')->references('nIdCompVenta')->on('tcomprobanteventas');
            $table -> integer('nIdVenta')->unsigned();
            $table -> foreign('nIdVenta')->references('nIdVenta')->on('mventas');
            $table -> string('cSerie', 20);
            $table -> string('cCorrelativo',20);
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
        Schema::dropIfExists('tcompventa_mventas');
    }
}
