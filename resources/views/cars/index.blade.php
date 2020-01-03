@extends('layouts.app')

@inject('trends', 'App\Models\Trend')

@section('page')
السيارات
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

      <h3 class="card-title float-right">قائمه السيارات</h3>
      <div class="clearfix"></div>

    </div>
    <div class="card-body">
      <a href="{{route('car.create')}}" class="btn btn-primary mb-4 float-right"><i class="fas fa-plus"></i> &nbsp;
        أضافه سياره جديده</a>
      <div class="clearfix"></div>

      @if (count($cars))
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
            <tr class="text-right">
              <th>#</th>
              <th>الماركه</th>
              <th class="text-center">مشاهده</th>
              <th class="text-center">حذف</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cars as $car)
            <tr class="text-right">
              <td>{{$loop->iteration + $paginate}}</td>
              <td>{{$car->trend->brand()->where('brands.id', $car->trend->brand_id)->first()->name}}</td>
              <td class="text-center">
                <a href="{{route('car.show' , $car->id)}}" class="btn btn-info btn-xs"><i class="fas fa-eye"
                    style="font-size: 16px;"></i></a>
              </td>
              <td class="text-center">
                {!! Form::open([
                'action' => ['CarController@destroy', $car->id],
                'method' => 'delete'
                ]) !!}
                <button type="submit" onclick="return confirm('هل انت متأكد?')" class="btn btn-danger btn-xs"><i
                    class="fas fa-trash-alt"></i></button>
                {!! Form::close() !!}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{$cars->links()}}
      </div>
      @else
      <div class="alert alert-danger" role="alert">
        لا توجد بيانات
      </div>
      @endif
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->

@endsection
