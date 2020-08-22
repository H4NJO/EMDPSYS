<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDDevolucionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_devolucions', function (Blueprint $table) {
            $table -> datetime('dFechaDevolucion');
            $table -> decimal('nTotal',2,8);
            $table -> integer('nIdIngreso')->unsigned();
            $table -> foreign('nIdIngreso')->references('nIdIngreso')
            ->on('m_ingresos');
            $table -> integer('nIdEmpleado')->unsigned();
            $table -> foreign('nIdEmpleado')->references('nIdEmpleado')
            ->on('m_ventas');
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
        Schema::dropIfExists('d_devolucions');
    }
}
