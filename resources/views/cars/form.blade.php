@inject('trend_id', 'App\Models\Trend')
@inject('brands', 'App\Models\brand')
@inject('car_type_id', 'App\Models\CarType')
@inject('luxuries', 'App\Models\Luxury')
@inject('manufacture_year_id', 'App\Models\ManufactureYear')
@inject('exhibition_id', 'App\Models\Exhibition')

<div class=" text-right">
  <div class=" row">
    <div class="col-md-6 form-group text-right my-2 pt-2">
      <label for="brands">أختر الماركه <span class=" text-danger">*</span>&nbsp;&nbsp; </label>
      <div style=" font-size: 1.2rem; height: 3rem;">
        {!! Form::select('brands', $brands->pluck('name','id')->toArray() ,null,[
        'placeholder' => 'أختر الماركه',
        'class' => 'form-control',
        'id' => 'brands'
        ]) !!}
      </div>
      @yield('brand')
    </div>

    <div class="col-md-6 form-group text-right my-2 pt-2">
      <label for="trend_id">أختر الموديل <span class=" text-danger">*</span>&nbsp;&nbsp; </label>
      <div style=" font-size: 1.2rem; height: 3rem;">
        {!! Form::select('trend_id', [], null,[
        'placeholder' => 'أختر الموديل',
        'class' => 'form-control',
        'id' => 'trends'
        ]) !!}
      </div>
      @yield('trend')
    </div>
    <div class="col-md-6 form-group text-right my-2 pt-2">
      <label for="car_type_id">نمط السياره <span class=" text-danger">*</span>&nbsp;&nbsp; </label>
      <div style=" font-size: 1.2rem; height: 3rem;">
        {!! Form::select('car_type_id', $car_type_id->pluck('name','id')->toArray() ,null,[
        'placeholder' => 'نمط السياره',
        'class' => 'form-control',
        ]) !!}
      </div>
      @yield('cartype')
    </div>
    <div class="col-md-6 form-group text-right my-2 pt-2">
      <div class="form-group">
        <label for="engine_capacity">سعة المحرك (سي سي)&nbsp; <span class=" text-danger">*</span></label>
        {!! Form::text('engine_capacity', $value = null, $attributes = [
        'class' => 'form-control'
        ]); !!}
        @yield('engine_capacity')
      </div>
    </div>
    <div class="col-md-6 form-group text-right my-2 pt-2">
      <div class="form-group">
        <label for="km">كيلومتر&nbsp; <span class=" text-danger">*</span></label>
        {!! Form::text('km', $value = null, $attributes = [
        'class' => 'form-control'
        ]); !!}
        @yield('km')
      </div>
    </div>
    <div class="col-md-6 form-group text-right my-2 pt-2">
      <div class="form-group">
        <label for="manufacture_year_id">سنه الصنع&nbsp; <span class=" text-danger">*</span></label>
        {!! Form::select('manufacture_year_id', $manufacture_year_id->pluck('year', 'id')->toArray(),
        null, $attributes = [
        'class' => 'form-control',
        'placeholder' => 'اختر سنه الصنع'
        ]); !!}
        @yield('manufactureyear')
      </div>
    </div>
    <div class="col-md-6 form-group text-right my-2 pt-2">
      <div class="form-group">
        <label for="price">السعر&nbsp; <span class=" text-danger">*</span></label>
        {!! Form::text('price', $value = null, $attributes = [
        'class' => 'form-control'
        ]); !!}
        @yield('price')
      </div>
    </div>
    <div class="col-md-6 form-group text-right my-2 pt-2">
      <div class="form-group">
        <label for="exhibition_id">اسم المعرض &nbsp; <span class=" text-danger">*</span></label>
        {!! Form::select('exhibition_id', $exhibition_id->pluck('name', 'id')->toArray(),
        null, $attributes = [
        'class' => 'form-control',
        'placeholder' => 'اختر المعرض'
        ]); !!}
        @yield('exhibition')
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 form-group text-right my-2 pt-2">
      <div class="form-group">
        <label for="motion_vector" class="text-primary">برجاء اختيار ناقل الحركة&nbsp;
          <span class=" text-danger">*</span>
        </label>
        <div class="row">
          <div class="col-md-6">
            <input type="radio" name="motion_vector" value="ناقل يدوي" @if ($car->motion_vector == 'ناقل يدوي')
            checked
            @endif
            />
            <label class="form-check-label pr-1" for="motion_vector1">ناقل يدوي</label>
          </div>
          <div class="col-md-6">
            <input type="radio" name="motion_vector" value="ناقل أوتوماتيك" @if ($car->motion_vector == 'ناقل
            أوتوماتيك')
            checked
            @endif
            />
            <label class="form-check-label pr-1" for="motion_vector2">ناقل أوتوماتيك</label>
          </div>
        </div>
        @yield('motionvector')
      </div>
    </div>

    <div class="col-md-6 form-group text-right my-2 pt-2">
      <div class="form-group">
        <label for="doors_number" class="text-primary">برجاء اختيار عدد الابواب&nbsp;
          <span class=" text-danger">*</span>
        </label>
        <div class="row">
          <div class="col-md-6">
            <input type="radio" name="doors_number" value="2 باب" @if ($car->doors_number == '2 باب')
            checked
            @endif
            />
            <label class="form-check-label pr-1" for="doors_number1"> 2 باب</label>
          </div>
          <div class="col-md-6">
            <input type="radio" name="doors_number" value="4 باب" @if ($car->doors_number == '4 باب')
            checked
            @endif
            />
            <label class="form-check-label pr-1" for="doors_number2">4 باب</label>
          </div>
        </div>
        @yield('cardoor')
      </div>
    </div>

  </div>
</div>

<hr>
<div class="row text-right text-muted">
  @foreach ($luxuries->all() as $luxury)
  <div class="col-3">
    <label>
      <input type="checkbox" name="luxuries_list[]" value="{{$luxury->id}}" @if ($car->luxuries->contains($luxury->id))
      checked
      @endif
      >
      {{$luxury->name}}
    </label>
  </div>
  @endforeach
</div>

<div class="form-group mt-2">
  <label for="image">الصوره</label>
  {!! Form::file('image', $attributes = [
  'placeholder' => 'اختر صوره',
  'class' => 'form-control w-50',
  'style' => 'height:2.8rem !important;',
  ]); !!}
</div>

<div class="form-group mt-2">
  {!! Form::text('car_code', $value = null, $attributes = [
  'class' => 'form-control w-25',
  'placeholder' => 'كود السياره مطلوب'
  ]); !!}
  @yield('car_code')
</div>

<div class="form-group">
  <button class="btn btn-primary" type="submit">حفظ</button>
  <a href="{{url(route('car.index'))}}" class="btn btn-danger">الغاء</a>
</div>
</div>

@push('scripts')
<script>
  $('#brands').change(function(e) {
    e.preventDefault();
    var brand_id = $("#brands").val();
    //alert(brand_id);
    if (brand_id) {
      $.ajax({
        url: '{{url('api/v1/trends?brand_id=')}}' + brand_id,
        type : 'get',
        success: function(data) {
          if (data.status == 1) {
            $("#trends").empty();
            $("#trends").append(`<option value="">اختر الموديل</option>`);
            $.each(data.data, function(index, trend) {
              $("#trends").append(`<option value="` + trend.id + `">` + trend.name + `</option>`)
            });
          }
        },
        error: function(jxl, status, errorMessage) {
          alert(errorMessage);
        }
      });
    } else {
      $("#trends").empty();
      $("#trends").append(`<option value="">اختر مدينه</option>`);
    }
  });
</script>
@endpush
