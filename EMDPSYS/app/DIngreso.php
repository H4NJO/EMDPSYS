<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DIngreso extends Model
{
    protected $fillable = ['nIdIngreso', 'nIdProducto', 'nPrecioUnitario', 'nCostoUnitario', 'nGanancia', 'nCantidad', 'nTotal'];
}
