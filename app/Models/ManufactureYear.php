<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManufactureYear extends Model 
{

    protected $table = 'manufacture_years';
    public $timestamps = true;
    protected $fillable = array('year');

    public function cars()
    {
        return $this->hasMany('App\Models\Car');
    }

}