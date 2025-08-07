<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'empresa',
        'email',
        'tipo_peticion',
        'comentario',
        'suscripcion',
        'referencia',
    ];
}
