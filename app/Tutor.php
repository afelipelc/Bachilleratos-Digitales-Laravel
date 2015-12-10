<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    public function students(){
      return $this->hasMany('App\Student');
    }

    protected $fillable = ['nombre'];
}
