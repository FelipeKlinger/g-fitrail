<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    public function plans()
    {
        return $this->belongsToMany(Plan::class);
    }
    public function reserva()
    {
        return $this->hasMany(Reserva::class);
    }

    public function user(){
        return $this->belongsTo(User::class); // 1:1
    }

    protected $fillable = [ //campos que se pueden asignar 
        'nombre',
        "apellido",
        'email',
        'edad',
        'altura',
        'peso',
        'objetivo',
        'user_id'
    ];

}
