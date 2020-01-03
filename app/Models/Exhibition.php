<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model 
{

    protected $table = 'exhibitions';
    public $timestamps = true;
    protected $fillable = array('name');

    public function cars()
    {
        return $this->hasMany('App\Models\Car');
    }

}