<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMSucursalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_sucursals', function (Blueprint $table) {
            $table->increments('nIdSucursal');
            $table->string('cNombreSucursal',20);
            $table->string('cTelefono',20);
            $table->string('cSerieBoleta',20);
            $table->string('cRUC',20);
            $table->string('cRazonSocial',20);
            $table->string('cDireccion',20);
            $table->boolean('bEstado');
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
        Schema::dropIfExists('m_sucursals');
    }
}
