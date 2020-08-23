<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHbonificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hbonificacions', function (Blueprint $table) {
            $table->increments("nIdBonificacion");
            $table->dateTime("dFechaBonificacion");
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
        Schema::dropIfExists('hbonificacions');
    }
}
