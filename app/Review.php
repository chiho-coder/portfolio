<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
     protected $guarded = array('id');
     
     
     public static $rules = array(
        'title'   => 'required',     
        'comment' => 'required');
        
     public function guest() {
         return $this->hasMany('App\User');
     }
     
     public function facility() {
         return $this->hasMany('App\Facility');
     }
}
