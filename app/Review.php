<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
     protected $guarded = array('id');
     
     
     public static $rules = array(
        'comment' => 'required');
        
     public function guest() {
         return $this->hasMany('App\Guest');
     }
     
     public function facility() {
         return $this->hasMany('App\Facility');
     }
}
