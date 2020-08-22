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
            $table->decimal('nPrecioUnitario');
            $table->decimal('nCostoUnitario');
            $table->decimal('nGanancia');
            $table->datetime('dUltimaVenta');
            $table->datetime('dUltimaCompra');
            $table->boolean('bEstado');
            $table->integer("nIdCategoria")->unsigned();
            $table->foreign('nIdCategoria')->references('nIdCategoria')->on('t_categorias');
            $table->integer("nIdSubcategoria")->unsigned();
            $table->foreign('nIdSubcategoria')->references('nIdSubcategoria')->on('t_subcategorias');
            $table->integer("nIdMarca")->unsigned();
            $table->foreign('nIdMarca')->references('nIdMarca')->on('t_marcas');
            $table->integer("nIdUnidad")->unsigned();
            $table->foreign('nIdUnidad')->references('nIdUnidad')->on('t_unidads');
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
