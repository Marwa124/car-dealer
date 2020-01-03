<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarLuxury extends Model 
{

    protected $table = 'car_luxury';
    public $timestamps = true;
    protected $fillable = array('car_id', 'luxury_id');

}