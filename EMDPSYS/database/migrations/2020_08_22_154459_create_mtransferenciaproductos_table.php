<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtransferenciaproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mtransferenciaproductos', function (Blueprint $table) {
            $table->increments("nIdTransferencia");            
            $table->string("cCorrelativo",250);
            $table->integer("nIdSucursal")->unsigned();
            $table->foreign("nIdSucursal")->references("nIdSucursal")->on("msucursals");
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
        Schema::dropIfExists('mtransferenciaproductos');
    }
}
