<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_ingresos', function (Blueprint $table) {
            $table->increments('nIdIngreso');
            $table->datetime('dFechaIngreso');
            $table->decimal('nTotal');
            $table->decimal('nIGV');
            $table->integer("nIdSucursal")->unsigned();
            $table->foreign('nIdSucursal')->references('nIdSucursal')->on('m_sucursals');
            $table->integer("nIdProveedor")->unsigned();
            $table->foreign('nIdProveedor')->references('nIdProveedor')->on('m_proveedors');
            $table->integer("nIdEmpleado")->unsigned();
            $table->foreign('nIdEmpleado')->references('nIdEmpleado')->on('m_empleados');
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
        Schema::dropIfExists('m_ingresos');
    }
}
