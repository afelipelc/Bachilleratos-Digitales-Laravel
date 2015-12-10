<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;

class Student extends Model
{
    use Authorizable;

    public function groups()
    {
      return $this->belongsToMany('App\Group');
    }

    public function tutor(){
      return $this->belongsTo('App\Tutor');
    }

    public function document(){
      return $this->hasOne('App\Document');
    }

    public function inscriptions()
    {
      return $this->hasMany('App\Inscription');
    }

    protected $fillable = ['nia', 'nombre', 'apellidop','apellidom', 'curp', 'sexo', 'nacimiento', 'entidadnacimiento', 'tiposangre', 'domicilio', 'cp', 'colonia', 'localidad', 'municipio', 'estado', 'tel', 'cel', 'email', 'tutor_id'];
}
