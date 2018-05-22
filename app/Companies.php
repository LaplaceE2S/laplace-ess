<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model 
{

    protected $table = 'companies';
    protected $fillable = ['structure', 'statut', 'budget', 'siret', 'rue', 'postal', 'ville', 'nom', 'prenom', 'telephone', 'url'];
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