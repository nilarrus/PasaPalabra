<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class palabra extends Model
{
    //
    protected $table = 'palabras';
    protected $fillable =  ['id','Palabra', 'Descripcion','Dificultad','created_at','modify_at'];
}
