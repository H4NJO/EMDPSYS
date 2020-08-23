<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MProveedor extends Model
{
    protected $fillable = ['cNumeroDocumento', 'cNombreContacto', 'cApellidoPaterno', 'cApellidoMaterno', 'cNombreEmpresa', 'cTelefono', 'cCorreoElectronico', 'cDireccionDomicilio', 'bEstado'];
}
