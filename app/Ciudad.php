<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    //public $timestamps = false;
    protected $table = 'ciudades';

    protected $fillable = [
        'nombre'
    ];
    
    public function persona()
    {
        return $this->hasOne('App\Persona');   
    }

}
