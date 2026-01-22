<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{


    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    
    protected $fillable = [ //campos que se pueden asignar 
        'nombre',
        'email',
        'edad',
        'altura',
        'peso',
        'objetivo',
        'password',
        'plan_id',
    ];
}
