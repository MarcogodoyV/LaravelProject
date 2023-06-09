<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franquicia extends Model
{
    use HasFactory;

    protected $fillable = [
        'localidad',
        'nombre',
        'barrio',
        'direccion',
        'telefono',
        'urlIframeMap',
        'urlGoogleMaps'
    ];
    
}
