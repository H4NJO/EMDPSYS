<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MEmpleado extends Model
{
    protected $fillable = ['cNumeroDocumento', 'cNombre', 'cApellidoPaterno', 'cApellidoMaterno', 'dFechaNacimiento', 'cTelefono', 'cCorreoElectronico', 'cDireccionDomicilio', 'cPassword', 'bEstado', 'nIdDocumento'];
}
