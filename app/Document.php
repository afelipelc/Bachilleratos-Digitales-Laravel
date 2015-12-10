<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function student(){
      return $this->belongsTo('App\Student');
    }

    protected $fillable = ['student_id','tipo','crip','juzgado','nofolio'];
}
