<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo_Colegio extends Model
{
    protected $table = 'colegio';
    protected $fillable = ['Cod_Colegio','Nombre_Colegio','Nit_Colegio','Codigo_Dane','Codigo_Icfes','Resolucion_Aprobacion','Rector_Colegio','Telefono_Colegio','Direccion_Colegio'];
}
