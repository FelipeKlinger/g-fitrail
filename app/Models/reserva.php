<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Model;

class reserva extends Model
{
    protected $fillable = [
        "client_id",
        "entrenamiento_id",
        "estado",
        "fecha_reserva"
    ];

    public function cliente(){
        $this->belongsTo(Client::class);
    }

    public function entrenamiento(){
        $this->belongsTo(Entrenamiento::class);
    }
}
