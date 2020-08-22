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
            
            $table -> foreign('nldHorario')->references('nldHorario')->on('MHorario');
            $table -> foreign('nldEmpleado')->references('nldEmpleado')->on('MEmpleado');
            $table -> foreign('nldContrato')->references('nldContrato')->on('MContrato');
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
