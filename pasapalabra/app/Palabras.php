<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palabras extends Model
{
    protected $table = 'Palabras';
    protected $fillable = ['id', 'Palabra', 'Descripcion','Dificultad', 'created_at', 'updated_at'];

}
