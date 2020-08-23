<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTcompingresoMingresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcompingreso_mingresos', function (Blueprint $table) {
            $table -> integer('nIdCompIngreso')->unsigned();
            $table -> foreign('nIdCompIngreso')->references('nIdCompIngreso')->on('tcomprobanteingresos');
            $table -> integer('nIdIngreso')->unsigned();
            $table -> foreign('nIdIngreso')->references('nIdIngreso')->on('mingresos');
            $table -> string('cNumeroDocumento', 15);
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
        Schema::dropIfExists('tcompingreso_mingresos');
    }
}
