<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    use HasFactory;

    protected $table = 'Estudiantes';
    protected $primaryKey = 'id_Estudiantes';
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Email',
        'Contraseña',
        'Rol',
        'Proyectos_id_Proyectos'
    ];
}


