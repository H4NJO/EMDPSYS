<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMcurriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcurriers', function (Blueprint $table) {
            $table -> increments('nIdCourier');
            $table -> integer('cNumeroDocumento');
            $table -> string("cNombre", 250);
            $table->string('cTelefono', 9);
            $table->string('cCorreoElectronico', 250);
            $table->string('cDireccion', 250);
            $table -> boolean('bEstado');
            $table-> integer('nIdDocumento')->unsigned();
            $table -> foreign('nIdDocumento')->references('nIdDocumento')->on('tdocumentos');
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
        Schema::dropIfExists('mcurriers');
    }
}
