<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSubcategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('t_subcategorias', function (Blueprint $table) {
            $table-> increments('nIdSubcategoria');
            $table-> string('cNombreSubcategoria');
            $table-> boolean('bEstado');
            $table-> integer('nIdCategoria')->unsigned();
            $table-> foreign('nIdCategoria')->references('nIdCategoria')->on('t_categorias');
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
        Schema::dropIfExists('t_subcategorias');
    }
}
