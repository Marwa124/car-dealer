<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'namespace' => 'Api'], function () {
  Route::get('brands', 'MainController@brands');
  Route::get('trends', 'MainController@trends');
  Route::get('car-types', 'MainController@carTypes');
  Route::get('manufacture-years', 'MainController@manufactureYear');
  Route::get('cars', 'MainController@cars');
  Route::post('add-car', 'MainController@addCar');
});
