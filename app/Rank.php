<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
     protected $guarded = array('id');
     
     public function guest() {
        return $this->hasMany('App\Guest');
     }
     
     public function review() {
        return $this->hasMany('App\Review');
}
}
