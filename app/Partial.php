<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partial extends Model
{

    public function schoolyear(){
        return $this->belongsTo('App\Schoolyear');
    }
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'partials';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['schoolyear_id', 'semester_id', 'parcial', 'inicio', 'fin'];

}
