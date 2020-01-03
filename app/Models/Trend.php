<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trend extends Model 
{

    protected $table = 'trends';
    public $timestamps = true;
    protected $fillable = array('name', 'brand_id');

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }

    public function cars()
    {
        return $this->hasMany('App\Models\Car');
    }

}