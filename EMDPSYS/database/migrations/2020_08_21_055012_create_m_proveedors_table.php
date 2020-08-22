<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_proveedors', function (Blueprint $table) 
        {
            $table -> increments('nIdProveedor');
            $table -> integer('cNumeroDocumento');
            $table -> string("cNombreContacto", 250);
            $table -> string("cApellidoPaterno", 250);
            $table -> string("cApellidoMaterno", 250);
            $table -> string("cNombreEmpresa", 250);
            $table->string('cTelefono', 9);
            $table->string('cCorreoElectronico', 250);
            $table->string('cDireccion', 250);
            $table -> boolean('bEstado');
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
        Schema::dropIfExists('m_proveedors');
    }
}
