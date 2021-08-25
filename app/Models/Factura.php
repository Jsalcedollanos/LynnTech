<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','nfactura', 'cedula','nombres','apellidos','telefono','direccion','valor','created_at'
    ];
}
