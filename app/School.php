<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;

class School extends Model
{
    use Authorizable;

    //miembros de la escuela
    public function users()
    {
      return $this->hasMany('App\User');
    }

    //director
    public function user()
    {
      return $this->belongsTo('App\User');
    }

    //groups
    public function groups(){
        return $this->hasMany('App\Group');
    }

    protected $fillable = ['nombre','clave','direccion','localidad','municipio','entidad','cp','user_id'];
}
