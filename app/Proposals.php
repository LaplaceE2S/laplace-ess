<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposals extends Model 
{

    protected $table = 'proposals';
    public $timestamps = true;

    public function subSkills()
    {
        return $this->hasOne('App\Sub_skills');
    }

    public function companies()
    {
        return $this->belongsToMany('App\Companies');
    }

}