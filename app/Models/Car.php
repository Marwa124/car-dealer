<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    protected $table = 'cars';
    public $timestamps = true;
    protected $guarded = array('youtube_link');
    protected $fillable = array('trend_id', 'car_type_id', 'manufacture_year_id', 'engine_capacity', 'km', 'price', 'motion_vector', 'doors_number', 'car_code', 'exhibition_id', 'image');

    public function trend()
    {
        return $this->belongsTo('App\Models\Trend');
    }

    public function luxuries()
    {
        return $this->belongsToMany('App\Models\Luxury');
    }

    public function exhibition()
    {
        return $this->belongsTo('App\Models\Exhibition');
    }

    public function carType()
    {
        return $this->belongsTo('App\Models\CarType');
    }

    public function manufactureYear()
    {
        return $this->belongsTo('App\Models\ManufactureYear');
    }

}
