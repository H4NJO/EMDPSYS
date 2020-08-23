<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHpenalidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hpenalidads', function (Blueprint $table) {
            $table->increments("nIdPenalidad");
            $table->dateTime("dFechaPenalidad");
            $table->decimal("nMonto");
            $table->boolean("bEstado");
            $table->string("cDescripcion",250);
            $table->integer("nIdEmpleado")->unsigned();
            $table->foreign("nIdEmpleado")->references("nIdEmpleado")->on("mempleados");
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
        Schema::dropIfExists('hpenalidads');
    }
}
