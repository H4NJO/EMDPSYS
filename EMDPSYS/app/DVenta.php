<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DVenta extends Model
{
    protected $fillable = ['nCantidad', 'nPrecioUnitario', 'nTotal', 'nIdVenta', 'nIdProducto'];
}
