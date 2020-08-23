<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHestadodeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hestadodeliveries', function (Blueprint $table) {
            $table-> integer("nIdEstDelivery")->unsigned();
            $table -> foreign("nIdEstDelivery")->references("nIdEstDelivery")->on("testadodeliveries");
            $table-> integer("nIdDelivery")->unsigned();
            $table -> foreign("nIdDelivery")->references("nIdDelivery")->on("mdeliveries");
            $table->dateTime("dCambioEstado");
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
        Schema::dropIfExists('hestadodeliveries');
    }
}
