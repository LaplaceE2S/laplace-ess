<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model 
{

    protected $table = 'users';
    public $timestamps = true;

    public function companies()
    {
        return $this->belongsTo('App\Companies');
    }

}