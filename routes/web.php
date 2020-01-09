<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Artisan::call('config:clear', 'cache:clear', 'view:clear');
Route::group(['namespace' => 'Front'], function(){
  Route::get('/', 'FrontController@home')->name('master');
  Route::get('car-details/{id}', 'FrontController@carDetails')->name('car.details');
});

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('trend', 'CarController@trends')->name('trend');
  Route::resource('car', 'CarController');
  Route::resource('role', 'RoleController');
  Route::resource('user', 'UserController');

});
