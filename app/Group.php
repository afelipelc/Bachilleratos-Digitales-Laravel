<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //tutor grupo
    public function user(){
      return $this->belongsTo('App\User');
    }
    
    public function students()
    {
      return $this->belongsToMany('App\Student');
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

    public function scopeFromsy($query, $flag){
        return $query->where('schoolyear_id', $flag);
    }

    protected $fillable = ['nombre','user_id','school_id', 'schoolyear_id', 'semester_id'];
}
