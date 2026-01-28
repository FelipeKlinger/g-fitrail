<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
    protected $fillable = [ // Campos que se pueden asignar masivamente
        "nombre",
        "email",
        "telefono",
        "direccion",
        "especialidad",
        "password",
        "sede_id"
    ];

public function sedes()
    {
        return $this->belongsTo(Sede::class);
    }   

    public function entrenamientos(){
        return $this->hasMany(entrenamiento::class);
    }

}