<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMingresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mingresos', function (Blueprint $table) {
            $table->increments('nIdIngreso');
            $table->datetime('dFechaIngreso');
            $table->decimal('nTotal');
            $table->decimal('nIGV');
            $table->integer("nIdSucursal")->unsigned();
            $table->foreign('nIdSucursal')->references('nIdSucursal')->on('msucursals');
            $table->integer("nIdProveedor")->unsigned();
            $table->foreign('nIdProveedor')->references('nIdProveedor')->on('mproveedors');
            $table->integer("nIdEmpleado")->unsigned();
            $table->foreign('nIdEmpleado')->references('nIdEmpleado')->on('mempleados');
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
        Schema::dropIfExists('mingresos');
    }
}
