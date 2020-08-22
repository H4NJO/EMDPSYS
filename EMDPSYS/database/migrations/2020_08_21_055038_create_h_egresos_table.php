<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHEgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_egresos', function (Blueprint $table) {
            $table->increments('nIdEgreso');
            $table->String('cDescripcion',20);
            $table->datetime('dEgreso');
            $table->int('nMonto');
            $table->foreign('nIdEmpleado')->references('nIdEmpleado')->on('MEmpleado');
            $table->foreign('nIdSucursal')->references('nIdSucursal')->on('MSucursal');
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
        Schema::dropIfExists('h_egresos');
    }
}
