@extends('layouts.app')

@section('content')
<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card w-75 m-auto">
    <div class="card-header">
      <h3 class="card-title float-right">العنوان</h3>

      <div class="card-tools float-left">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="card-body text-right">

      @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
      @endif
      لقد سجلت الدخول!

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->

@endsection
