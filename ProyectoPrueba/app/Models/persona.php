<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    protected $fillable = ['nombre_persona', 'edad_persona', 'telefono_persona', 'sexo_persona', 'fecha_nac','id_ocupacion'];
}
