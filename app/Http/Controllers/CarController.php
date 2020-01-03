<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Trend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars  = Car::latest()->paginate(10);
        $paginate = pagePagination($cars);

        return view('cars.index', compact('cars', 'paginate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = [
        'trend_id' => 'required',
        'brands' => 'required',
        'car_type_id' => 'required',
        'exhibition_id' => 'required',
        'engine_capacity' => 'required',
        'km' => 'required|numeric|min:10|max:999999',
        'price' => 'required|numeric|min:1000|max:9999999999',
        'manufacture_year_id' => 'required',
        'motion_vector' => 'required|in:ناقل أوتوماتيك,ناقل يدوي',
        'doors_number' => 'required|in:2 باب,4 باب',
        'image' => 'required|image|max:2000',
        'car_code' => 'required'
      ];
      $messages = [
        'km.required' => 'برجاء كتابة عدد الكيلومترات',
        'km.numeric' => 'الكيلومترات غير صحيحة',
        'km.max' => 'الكيلومترات غير صحيحة',
        'km.min' => 'الكيلومترات غير صحيحة',
        'price.required' => 'برجاء كتابة السعر',
        'price.numeric' => 'السعر ارقام فقط',
        'price.min' => 'السعر يجب ألا يقل عن 1000 جنيه مصري',
        'price.max' => 'السعر يجب ألا يزيد عن 11 رقم',
        'trend_id.required' => 'برجاء اختيار الموديل',
        'brands.required' => 'برجاء تحديد الماركه',
        'car_type_id.required' => 'برجاء اختيار النمط',
        'exhibition_id.required' => 'برجاء اختيار المعرض',
        'manufacture_year_id.required' => 'برجاء احتيار سنه الصنع',
        'engine_capacity.required' => 'برجاء كتابة سعة المحرك',
        'motion_vector.required' => 'برجاء اختيار ناقل الحركة',
        'doors_number.required' => 'برجاء اختيار عدد الأبواب',
        'image.required' => 'برجاء اضافه الصوره ',
        'car_code.required' => 'برجاء ادخال كود السياره '
      ];
      $this->validate($request, $rules, $messages);
      $car = Car::create($request->all());

      $path = public_path();
        $destinationPath = $path . '/uploads/cars/';

        $photo = $request->file('image');
        $extension = $photo->getClientOriginalExtension();
        $name = time() . '' . rand(11111, 99999) . '.' . $extension;
        $photo->move($destinationPath, $name);


      $photo = Image::make($destinationPath . $name);
      $photo->resize(400, 300)->save($destinationPath . $name, 100);


        $car->image = 'uploads/cars/' . $name;

      $car->luxuries()->attach($request->luxuries_list);
      $car->save();
     // dd($request->all());

      toast('تم الانشاء بنجاح', 'success');
      return redirect(route('car.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::findOrFail($id);
        $trend = $car->luxuries()->pluck('name')->toArray();

       // dd($trend);
        return view('cars.show', compact('car'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $luxuries = $car->luxuries()->pluck('luxuries.id')->toArray();
        $car->luxuries()->detach($luxuries);
        $car->delete();
        //dd($car);
        toast('Deleted Successfully','success');

        return back();
    }

    public function imageStore($img)
    {
        $path = public_path();
        $destinationPath = $path . '/uploads/posts/';

        $photo = $img;
        $extension = $photo->getClientOriginalExtension();
        $name = time() . '' . rand(11111, 99999) . '.' . $extension;
        $photo->move($destinationPath, $name);


      $photo = Image::make($destinationPath . $name);
      $photo->resize(300, 300)->save($destinationPath . $name, 100);

      return $name;
    }
}
