<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHTrabExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_trab_extras', function (Blueprint $table) {
            $table->increments("nIdTrabExtra");
            $table->string("cDescripcion",250);
            $table->dateTime("dInicio");
            $table->dateTime("dFin");
            $table->integer("nIdEmpleado")->unsigned();
            $table->foreign("nIdEmpleado")->references("nIdEmpleado")->on("m_empleados");
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
        Schema::dropIfExists('h_trab_extras');
    }
}
