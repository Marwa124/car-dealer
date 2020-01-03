<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
      $luxuries = Car::first()->luxuries()->pluck('name')->toArray();
      //dd(Car::first()->exhibition()->pluck('name')->toArray());
      return view('front.home', compact('luxuries'));
    }

    public function carDetails($id)
    {
      $car = Car::findOrFail($id);
      $trend = $car->trend()->first()->name; //getting a trend name for each car id
      $brand = $car->trend->brand()->first()->name; //getting trend's brand name
      $year = $car->manufactureYear()->first()->year;
      $luxuries = $car->luxuries()->pluck('name')->toArray();
      $exhibition = $car->exhibition()->first()->name;
      $type = $car->carType()->first()->name;
      if($car){
        return response()->json([
          'status' => 1,
          'message' => 'Car Details',
          'car' => $car,
          'trend' => $trend,
          'brand' => $brand,
          'year' => $year,
          'luxuries' => $luxuries,
          'exhibition' => $exhibition,
          'type' => $type
        ]);
      }
    }
}
