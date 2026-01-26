<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
    protected $fillable = [
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



}