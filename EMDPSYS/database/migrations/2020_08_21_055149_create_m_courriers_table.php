<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMCourriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_courriers', function (Blueprint $table) 
        {
            $table -> increments('nIdCourier');
            $table -> int('cNumeroDocumento');
            $table -> string("cNombre", 250);
            $table->string('cTelefono', 9);
            $table->string('cCorreoElectronico', 250);
            $table->string('cDireccion', 250);
            $table -> boolean('bEstado');
            $table -> foreign('nldDocumento')->references('nldDocumento')->on('TDocumento');
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
        Schema::dropIfExists('m_courriers');
    }
}
