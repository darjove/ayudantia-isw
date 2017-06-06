<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['rut','nombre','fecha_de_nacimiento','email'];
}
