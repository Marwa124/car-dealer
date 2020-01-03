<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarType;
use App\Models\ManufactureYear;
use App\Models\Trend;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function brands()
    {
        $brands = Brand::all();
        return apiResponse(1, 'success', $brands);
    }

  public function trends(Request $request)
  {
      $trends = Trend::where(function ($query) use ($request) {
          if ($request->has('brand_id')) {
              $query->where('brand_id', $request->brand_id);
          }
      })->get();

      return apiResponse(1, 'success', $trends);
  }

  public function carTypes()
    {
        $car_types = CarType::all();
        return apiResponse(1, 'success', $car_types);
    }

    public function manufactureYear()
    {
        $manufacture_year = ManufactureYear::all();
        return apiResponse(1, 'success', $manufacture_year);
    }

    public function cars()
    {
        $cars = Car::all();
        return apiResponse(1, 'success', $cars);
    }

    public function addCar(Request $request)
    {
      $validation = validator()->make($request->all(), [
        'trend_id' => 'required',
        'car_type_id' => 'required',
        'manufacture_year_id' => 'required',
        'engine_capacity' => 'required',
        'km' => 'required',
        'price' => 'required',
        'motion_vector' => 'required',
        'doors_number' => 'required',
        'car_code' => 'required',
        'exhibition_id' => 'required',
        'luxury_id' => 'required|array|exists:luxuries,id',
      ]);
      if($validation->fails())
      {
        return apiResponse(0, $validation->errors()->first(), $validation->errors());
      }
      $car = Car::create($request->all());
      $car->luxuries()->attach($request->luxury_id);
      $car->save();

        return apiResponse(1, 'success', $car);
    }
}
