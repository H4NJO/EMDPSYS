<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUnidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_unidads', function (Blueprint $table) {
            $table->increments("nIdUnidad");
            $table->string("cNombreUnidad",250);
            $table->string("cUnidadSunat",250);
            $table->boolean("bEstado");
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
        Schema::dropIfExists('t_unidads');
    }
}
