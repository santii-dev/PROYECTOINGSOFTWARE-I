<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $table = 'Proyectos';
    protected $primaryKey = 'id_Proyectos';
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Nota',
        'Guia',
        'Recursos_materiales',
        'Instrucciones',
        'Profesores_id_Profesores'
    ];
}


