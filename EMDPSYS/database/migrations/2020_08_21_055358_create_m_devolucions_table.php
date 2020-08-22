<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMDevolucionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_devolucions', function (Blueprint $table) {
            $table -> increments('nIdDevolucion');
            $table -> datetime('dFechaDevolucion');
            $table -> decimal('nTotal',8,2);
            $table -> integer('nIdIngreso')->unsigned();
            $table -> foreign('nIdIngreso')->references('nIdIngreso')
            ->on('m_ingresos');
            $table -> integer('nIdEmpleado')->unsigned();
            $table -> foreign('nIdEmpleado')->references('nIdEmpleado')
            ->on('m_empleados');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_devolucions');
    }
}
