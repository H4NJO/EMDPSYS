<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_contratos', function (Blueprint $table) {
            $table->increments('nIdContrato');
            $table->foreign('nIdEmpleado')->references('nIdEmpleado')->on('MEmpleado');
            $table->foreign('nIdCargo')->references('nIdCargo')->on('TCargo');
            $table->datetime('dInicioContrato');
            $table->datetime('dFinContrato');
            $table->decimal('nSueldo');
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
        Schema::dropIfExists('m_contratos');
    }
}
