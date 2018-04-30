<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model 
{

    protected $table = 'companies';
    public $timestamps = true;

    public function skills()
    {
        return $this->belongsToMany('App\Skills');
    }

    public function proposals()
    {
        return $this->belongsToMany('App\Proposals');
    }

    public function users()
    {
        return $this->hasOne('App\Users');
    }

}