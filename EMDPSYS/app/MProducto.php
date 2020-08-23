<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MProducto extends Model
{
    protected $fillable = ['cCodigo', 'cNombreProducto', 'nPrecioUnitario', 'nCostoUnitario', 'nGanancia', 'dUltimaVenta', 'dUltimaCompra', 'bEstado', 'nIdCategoria', 'nIdSubcategoria', 'nIdMarca', 'nIdUnidad'];
}
