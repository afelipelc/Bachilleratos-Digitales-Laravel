<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;

class Inscription extends Model
{
    use Authorizable;

    public function student(){
      return $this->belongsTo('App\Student');
    }
    public function group(){
      return $this->belongsTo('App\Group');
    }

    public function semester(){
      return $this->belongsTo('App\Semester');
    }

    public function school(){
      return $this->belongsTo('App\School');
    }

    public function schoolyear(){
      return $this->belongsTo('App\Schoolyear');
    }

    protected $fillable = ['student_id','school_id','semester_id','schoolyear_id', 'group_id'];
}
