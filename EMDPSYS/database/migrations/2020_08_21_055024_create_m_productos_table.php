<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_productos', function (Blueprint $table) {
            $table->increments('nIdProducto');
            $table->String('cCodigo',20);
            $table->String('cNombreProducto',20);
            $table->int('nPrecioUnitario');
            $table->int('nCostoUnitario');
            $table->int('nGanancia');
            $table->datetime('dUltimaVenta');
            $table->datetime('dUltimaCompra');
            $table->boolean('bEstado');
            $table->foreign('nIdCategoria')->references('nIdCategoria')->on('TCategoria');
            $table->foreign('nIdSubcategoria')->references('nIdSubcategoria')->on('TSubcategoria');
            $table->foreign('nIdMarca')->references('nIdMarca')->on('TMarca');
            $table->foreign('nIdUnidad')->references('nIdUnidad')->on('TUnidad');
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
        Schema::dropIfExists('m_productos');
    }
}
