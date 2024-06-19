<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = 'Asignaturas'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_Asignaturas'; // Nombre de la clave primaria
    public $timestamps = false; // Si no usas timestamps, déjalo como false

    protected $fillable = ['Nombre']; // Campos que se pueden llenar masivamente
}
