<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Luxury extends Model 
{

    protected $table = 'luxuries';
    public $timestamps = true;
    protected $guarded = array('name');

    public function cars()
    {
        return $this->belongsToMany('App\Models\Car');
    }

}