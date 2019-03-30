<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeloDocente extends Model
{
    //
    protected $table = 'docente';
    protected $fillable = [
        'Id_Docente',
        'Cod_Tipo_Doc_Docente',
        'Nombres_Docente',
        'Apellidos_Docente',
        'Email_Docente',
        'Telefono_Docente',
        'Fecha_Nacimiento_Docente',
        'Cod_Area_Docente',
        'Cod_Genero_Docente',
        'Cod_Grupo_Sanquineo_Docente',
        'Estado_Docente',
        'Cod_Departamento_Docente',
        'Cod_Ciudad_Docente '
    ];
}
