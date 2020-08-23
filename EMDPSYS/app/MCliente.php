<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MCliente extends Model
{
    protected $fillable = ['cNumeroDocumento', 'cNombre', 'cApellidoPaterno', 'cApellidoMaterno', 'dFechaNacimiento', 'cTelefono', 'cCorreoElectronico', 'cDireccionDomicilio', 'bEstado', 'nIdDocumento'];
}
