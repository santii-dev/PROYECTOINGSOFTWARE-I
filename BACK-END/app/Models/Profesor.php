<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    protected $table = 'Profesores';
    protected $primaryKey = 'id_Profesores';
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Apellidos',
        'Email',
        'Contraseña',
        'Rol',
    ];
}






