<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMempleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mempleados', function (Blueprint $table) {
            $table -> increments('nIdEmpleado');
            $table -> integer('cNumeroDocumento');
            $table -> string("cNombre", 250);
            $table -> string("cApellidoPaterno", 250);
            $table -> string("cApellidoMaterno", 250);
            $table -> datetime("dFechaNacimiento", 0);
            $table->string('cTelefono', 9);
            $table->string('cCorreoElectronico', 250);
            $table->string('cDireccionDomicilio', 250);
            $table->string('cPassword', 250);
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
        Schema::dropIfExists('mempleados');
    }
}
