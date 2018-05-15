<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model 
{

    protected $table = 'page';
    public $timestamps = true;

    public function cat()
    {
        return $this->belongsTo('App\NavCat');
    }

}