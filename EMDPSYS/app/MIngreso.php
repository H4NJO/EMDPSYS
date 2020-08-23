<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MIngreso extends Model
{
    protected $fillable = ['nIdIngreso', 'dFechaIngreso', 'nTotal', 'nIGV', 'nIdSucursal', 'nIdProveedor', 'nIdEmpleado'];
}
