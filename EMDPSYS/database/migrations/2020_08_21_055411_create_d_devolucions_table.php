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
            $table -> foreign('nIdIngreso')->references('nIdIngreso')
            ->on('MIngreso');
            $table -> foreign('nIdEmpleado')->references('nIdEmpleado')
            ->on('MEmpleado');
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
