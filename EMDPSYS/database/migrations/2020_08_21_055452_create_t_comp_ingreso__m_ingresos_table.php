<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCompIngresoMIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_comp_ingreso__m_ingresos', function (Blueprint $table) {
            $table -> integer('nIdComIngreso')->unsigned();
            $table -> foreign('nIdComIngreso')->references('nIdComIngreso')
            ->on('t_comprobante_ingresos');
            $table -> integer('nIdIngreso')->unsigned();
            $table -> foreign('nIdIngreso')->references('nIdIngreso')
            ->on('m_ingresos');
            $table -> string('cNumeroDocumento', 15);
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
        Schema::dropIfExists('t_comp_ingreso__m_ingresos');
    }
}
