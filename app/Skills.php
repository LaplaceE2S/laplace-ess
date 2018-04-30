<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model 
{

    protected $table = 'skills';
    public $timestamps = true;

    public function subSkills()
    {
        return $this->hasMany('App\Sub_skills');
    }

    public function companies()
    {
        return $this->belongsToMany('App\Companies');
    }

    public function proposals()
    {
        return $this->hasMany('App\Proposals');
    }

}