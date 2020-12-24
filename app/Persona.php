<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public $timestamps = false;
    protected $table = 'personas';

    protected $fillable = [
        'numero_documento',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'direccion',
        'celular',
        'fecha_nacimiento',
        'ciudad_id',
        'padre_id',
        'madre_id',
        'sexo'
    ];
    
    public function ciudad()
    {
        return $this->belongsTo('App\Ciudad');   
    }

    public function padre()
    {
        return $this->belongsTo('App\Persona','padre_id','id');   
    }

    public function madre()
    {
        return $this->belongsTo('App\Persona','madre_id','id');   
    }

}
