<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $guarded = array('id');
    
    public static $rules =array(
        'name' => 'required',
        'adress' => 'required',
        );
        
        
     public function category() {
         return $this->hasMany('App\Category');
        
     }
}
