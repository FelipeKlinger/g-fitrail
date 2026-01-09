<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [ //campos que se pueden asignar 
        'nombre',
        'email',
        'edad',
        'altura',
        'peso',
        'objetivo',
        'password',
    ];
}
