<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposals extends Model 
{

    protected $table = 'proposals';
    public $timestamps = true;

    public function skills()
    {
        return $this->hasOne('App\Skills');
    }

    public function companies()
    {
        return $this->belongsToMany('App\Companies');
    }

}