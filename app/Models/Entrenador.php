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
        "sede_id",
        "user_id"
    ];

    public function sede()
    {
        return $this->belongsTo(Sede::class);
    }

    public function entrenamientos()
    {
        return $this->hasMany(Entrenamiento::class);
    }

    public function user()
    {

        return $this->belongsTo(User::class);

    }

}