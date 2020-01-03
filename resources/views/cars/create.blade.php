@extends('layouts.app')

@inject('car', 'App\Models\Car')

@section('page-title')
  اضافه سياره
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

      <h3 class="card-title float-right">اضافه سياره</h3>
      <div class="clearfix"></div>

    </div>
    <div class="card-body">
      @include('includes.errors')
      @include('includes.error-total')
      {!! Form::model($car, ['route' => 'car.store', 'files' => true]) !!}
      @csrf
        @include('cars.form')
      {!! Form::close() !!}
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->

@endsection

