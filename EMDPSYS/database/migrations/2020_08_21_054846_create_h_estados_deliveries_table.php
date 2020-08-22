<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHEstadosDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_estados_deliveries', function (Blueprint $table) {
            $table->integer("nIdEstDelivery")->unsigned();
            $table -> foreign("nIdEstDelivery")->references("nIdEstDelivery")->on("t_estados_deliveries");
            $table->integer("nIdDelivery")->unsigned();
            $table -> foreign("nIdDelivery")->references("nIdDelivery")->on("m_deliveries");
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
        Schema::dropIfExists('h_estados_deliveries');
    }
}
