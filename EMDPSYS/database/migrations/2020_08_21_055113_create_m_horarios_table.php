<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_horarios', function (Blueprint $table) {
            $table->increments('nIdHorario');
            $table->String('Nombre',20);
            $table->Time('tHoraEntrada');
            $table->Time('tHoraSalida');
            $table->Boolean('bEstado');
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
        Schema::dropIfExists('m_horarios');
    }
}
