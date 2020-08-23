<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MVenta extends Model
{
    protected $fillable = ['dFechaVenta', 'bAnulado', 'dFechaAnulacion', 'nTotalVenta', 'nTotalImpuesto', 'nMontoIGV', 'nGravadas', 'nIdCliente', 'nIdEmpleado', 'nIdSucursal', 'nIdMoneda'];
}
