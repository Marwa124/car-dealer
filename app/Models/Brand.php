<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model 
{

    protected $table = 'brands';
    public $timestamps = true;
    protected $fillable = array('name');

    public function trends()
    {
        return $this->hasMany('App\Models\Trend');
    }

}