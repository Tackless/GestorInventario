<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    protected $fillable = [
        'usuarioAsignado',
        'usuarioArea',
        'marcaHardware',
        'modeloHardware',
        'serieHardware',
        'tipoHardware',
        'oficinaResponsable',
        'descripcionHardware'
    ];

}
