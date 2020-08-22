<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHBonificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_bonificacions', function (Blueprint $table) {
            $table->increments("nIdBonificacion");
            $table->dateTime("dFechaBonificacion");
            $table->decimal("nMonto");
            $table->boolean("bEstado");
            $table->string("cDescripcion",250);
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
        Schema::dropIfExists('h_bonificacions');
    }
}
