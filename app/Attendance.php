<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{

    // public $primarykey = 'emp_id';
    
    // Relationship to User Model

    public function user(){
        return $this->belongsTo('App\User');
    }
}
