@section('brand')
@error('brands')
  @if ($errors->any())
  <div class="alert alert-danger" style="padding:0px 2rem 5px; margin-right:0%;">
    {{ $errors->first('brands') }}
  </div>
  <div class="clearfix"></div>
  @endif
  @enderror
@endsection

@section('trend')
@error('trend_id')
  @if ($errors->any())
  <div class="alert alert-danger" style="padding:0px 2rem 5px; margin-right:0%;">
    {{ $errors->first('trend_id') }}
  </div>
  <div class="clearfix"></div>
  @endif
  @enderror
@endsection

@section('cartype')
@error('car_type_id')
  @if ($errors->any())
  <div class="alert alert-danger" style="padding:0px 2rem 5px; margin-right:0%;">
    {{ $errors->first('car_type_id') }}
  </div>
  <div class="clearfix"></div>
  @endif
  @enderror
@endsection

@section('engine_capacity')
@error('engine_capacity')
  @if ($errors->any())
  <div class="alert alert-danger" style="padding:0px 2rem 5px; margin-right:0%;">
    {{ $errors->first('engine_capacity') }}
  </div>
  <div class="clearfix"></div>
  @endif
  @enderror
@endsection

@section('km')
@error('km')
  @if ($errors->any())
  <div class="alert alert-danger" style="padding:0px 2rem 5px; margin-right:0%;">
    {{ $errors->first('km') }}
  </div>
  <div class="clearfix"></div>
  @endif
  @enderror
@endsection

@section('manufactureyear')
@error('manufacture_year_id')
  @if ($errors->any())
  <div class="alert alert-danger" style="padding:0px 2rem 5px; margin-right:0%;">
    {{ $errors->first('manufacture_year_id') }}
  </div>
  <div class="clearfix"></div>
  @endif
  @enderror
@endsection

@section('price')
@error('price')
  @if ($errors->any())
  <div class="alert alert-danger" style="padding:0px 2rem 5px; margin-right:0%;">
    {{ $errors->first('price') }}
  </div>
  <div class="clearfix"></div>
  @endif
  @enderror
@endsection

@section('cardoor')
@error('doors_number')
  @if ($errors->any())
  <div class="alert alert-danger" style="padding:0px 2rem 5px; margin-right:0%;">
    {{ $errors->first('doors_number') }}
  </div>
  <div class="clearfix"></div>
  @endif
  @enderror
@endsection

@section('motionvector')
@error('motion_vector')
  @if ($errors->any())
  <div class="alert alert-danger" style="padding:0px 2rem 5px; margin-right:0%;">
    {{ $errors->first('motion_vector') }}
  </div>
  <div class="clearfix"></div>
  @endif
  @enderror
@endsection

@section('exhibition')
@error('exhibition_id')
  @if ($errors->any())
  <div class="alert alert-danger" style="padding:0px 2rem 5px; margin-right:0%;">
    {{ $errors->first('exhibition_id') }}
  </div>
  <div class="clearfix"></div>
  @endif
  @enderror
@endsection

@section('car_code')
@error('car_code')
  @if ($errors->any())
  <div class="alert alert-danger w-25" style="padding:0px 2rem 5px; margin-right:0%;">
    {{ $errors->first('car_code') }}
  </div>
  <div class="clearfix"></div>
  @endif
  @enderror
@endsection
