<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMclientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mclientes', function (Blueprint $table) {
            $table->increments('nIdCliente');
            $table->String('cNumeroDocumento',20);
            $table->String('cNombre',20);
            $table->String('cApellidoPaterno',20);
            $table->Datetime('dFechaNacimiento');
            $table->String('cTelefono',20);
            $table->String('cCorreoElectronico',20);
            $table->String('cDireccion',20);
            $table->Boolean('bEstado');
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
        Schema::dropIfExists('mclientes');
    }
}
