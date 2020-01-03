@extends('layouts.app')
<?php
  $trend = $car->trend()->first();
  $brand = $trend->brand()->first()->name;
  $carType = $car->carType()->first()->name;
  $manufactureYear = $car->manufactureYear()->first()->year;
  $exhibition = $car->exhibition()->first()->name;
  $luxuries = $car->luxuries()->pluck('name')->toArray();
?>
@section('page-title')
{{$trend->name}}
@endsection

@section('content')

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">

      <div class="card-tools float-left">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
      <h3 class="card-title float-right">تفاصيل السياره</h3>
      <div class="clearfix"></div>
    </div>
    <div class="card-body text-right">
      <ul class="list-group">
        <li class="list-group-item text-center">
          <br><img src="{{asset( $car->image)}}" alt="" class=" img-thumbnail">
        </li>
        <li class="list-group-item active font-weight-bold">الماركه : &nbsp; {{$brand}}</li>
        <li class="list-group-item">الموديل : &nbsp; {{$trend->name}}</li>
        <li class="list-group-item">نمط السياره: &nbsp; {{$carType}}</li>
        <li class="list-group-item">عدد الكيلومترات: &nbsp; {{$car->km}}</li>
        <li class="list-group-item">السعر: &nbsp; {{$car->price}}</li>
        <li class="list-group-item">سعه المحرك: &nbsp; {{$car->engine_capacity}}</li>
        <li class="list-group-item">سنه الصنع: &nbsp; {{$manufactureYear}}</li>
        <li class="list-group-item">المعرض: &nbsp; {{$exhibition}}</li>
        <li class="list-group-item">ناقل الحركه: &nbsp; {{$car->motion_vector}}</li>
        <li class="list-group-item">عدد الابواب: &nbsp; {{$car->doors_number}}</li>
        <hr>
        <div class="row ">
          @foreach ($luxuries as $luxury)
          <div class="col-md-3">
            <li class="list-group-item">
              {{$luxury}}
            </li>
          </div>
          @endforeach
        </div>

        <a href="{{route('car.index')}}" class="btn btn-secondary mt-2 ">الرجوع</a>
      </ul>
    </div>
  </div>
</section>
@endsection
