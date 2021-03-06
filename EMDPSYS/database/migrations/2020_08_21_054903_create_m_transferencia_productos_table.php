<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMTransferenciaProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_transferencia_productos', function (Blueprint $table) {
            $table->increments("nIdTransferencia");            
            $table->string("cCorrelativo",250);
            $table->integer("nIdSucursal")->unsigned();
            $table->foreign("nIdSucursal")->references("nIdSucursal")->on("m_sucursals");
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
        Schema::dropIfExists('m_transferencia_productos');
    }
}
