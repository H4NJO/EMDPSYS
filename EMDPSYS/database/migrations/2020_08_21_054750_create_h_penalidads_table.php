<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHPenalidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_penalidads', function (Blueprint $table) {
            $table->increments("nIdPenalidad");
            $table->dateTime("dFechaPenalidad");
            $table->decimal("nMonto");
            $table->boolean("bEstado");
            $table->string("cDescripcion",250);
            $table->integer("nIdEmpleado")->unsigned();
            $table -> foreign("nIdEmpleado")->references("nIdEmpleado")->on("m_empleados");
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
        Schema::dropIfExists('h_penalidads');
    }
}
