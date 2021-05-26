<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $guarded = array('id');
    
        public static $rules = array(
        'name' => 'required',
        'e-mail adress' => 'required',
        );
}
