<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDHorarioAsignadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_horario_asignados', function (Blueprint $table)
         {
            
            $table -> integer('nIdHorario')->unsigned();
            $table -> foreign('nIdHorario')->references('nIdHorario')->on('m_horarios');
            $table -> integer('nIdEmpleado')->unsigned();
            $table -> foreign('nIdEmpleado')->references('nIdEmpleado')->on('m_empleados');
            $table -> integer('nIdContrato')->unsigned();
            $table -> foreign('nIdContrato')->references('nIdContrato')->on('m_contratos');
            $table -> string('cObservaciones', 250);
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
        Schema::dropIfExists('d_horario_asignados');
    }
}
