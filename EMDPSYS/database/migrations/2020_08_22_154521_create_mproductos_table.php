<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mproductos', function (Blueprint $table) {
            $table->increments('nIdProducto');
            $table->String('cCodigo',20);
            $table->String('cNombreProducto',20);
            $table->decimal('nPrecioUnitario');
            $table->decimal('nCostoUnitario');
            $table->decimal('nGanancia');
            $table->datetime('dUltimaVenta');
            $table->datetime('dUltimaCompra');
            $table->boolean('bEstado');
            $table->integer("nIdCategoria")->unsigned();
            $table->foreign('nIdCategoria')->references('nIdCategoria')->on('tcategorias');
            $table->integer("nIdSubcategoria")->unsigned();
            $table->foreign('nIdSubcategoria')->references('nIdSubcategoria')->on('tsubcategorias');
            $table->integer("nIdMarca")->unsigned();
            $table->foreign('nIdMarca')->references('nIdMarca')->on('tmarcas');
            $table->integer("nIdUnidad")->unsigned();
            $table->foreign('nIdUnidad')->references('nIdUnidad')->on('tunidads');
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
        Schema::dropIfExists('mproductos');
    }
}
