<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NavCat extends Model 
{

    protected $table = 'navCat';
    public $timestamps = true;

    public function page()
    {
        return $this->hasMany('App\Page');
    }

}