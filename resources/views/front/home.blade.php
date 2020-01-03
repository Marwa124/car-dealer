@extends('front.master')
@section('content')

<div class="Modern-Slider">
  <!-- Slide 1 -->
  <div class="item">
    <div class="img-fill">
      <img src="{{asset('front/images/main_slide_01.jpg')}}" alt="">
      <div class="info">
        <div id="car-details mb-5">


          <section class="top-slider-features wow fadeIn my-5" data-wow-duration="1.5s">
              <div class="row">
                <div class="col-md-12">
                  <div class="slider-top-features">
                    <div id="owl-top-features" class="owl-carousel owl-theme">

                      @foreach ($cars as $car)
                      <div id="car-item" class="item car-item" data-route="{{route('car.details', $car->id )}}">
                        <div class="row">
                          <div class="col-md-6 car-container">
                            <div class="thumb-content">
                              <img src="{{asset($car->image)}}" alt="car-img">
                            </div>
                            <div class="py-3 bg-light">
                              <h4>
                                {{$car->trend()->first()->name}}
                              </h4>
                              <span>{{$car->price}}</span>
                            </div>
                          </div>
                          <div class="col-md-6 text-white text-center py-5 d-flex justify-content-center">
                            <div style="width:50%; height:100%; car-details">
                              <div class="align-items-center">
                                <h4 class="logo-type">ACROPOS</h4>
                                <h5 class="logo-type">CAR DEALER TEMPLATE</h5>
                              </div>
                              <div id="car-container">

                                <h6 class="brand fa-3x bg-info"></h6>
                                <h6 class="trend fa-2x"></h6>
                                <h6 class="car_type"></h6>
                                <h6 class="manufacture_year"></h6>
                                <h6 class="engine_capacity"></h6>
                                <h6 class="km"></h6>
                                <h6 class="price"></h6>
                                <h6 class="motion_vector"></h6>
                                <h6 class="doors_number"></h6>
                                <h6 class="exhibition"></h6>
                                <div class="luxuries row">

                                </div>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach

                    </div>
                  </div>
                </div>
              </div>
          </section>

        </div>
      </div>
    </div>
  </div>
  <!-- // Slide 1 -->
</div>

@push('scripts')
  <script>

    $(document).on('click', '#car-item', function(){
      var route = $(this).data('route');
      $.ajax({
        url: route,
        type: 'get',
        success: function(data){
          //console.log(data.luxuries.length);

          if(data.status == 1){
            $('.logo-type').hide();
            $('.brand').html("الماركه: " + data.brand);
            $('.trend').html("الموديل: " + data.trend);
            $('.car_type').html(" نوع السياره: " + data.type);
            $('.manufacture_year').html(" سنه التصنيع: " + data.year);

            data.luxuries.forEach(e => {
              $('.luxuries').append('<div class="col-md-6 d-flex justify-content-between pt-2"><h6>'
                                      + e + '</h6></<div>');
            });
            $('.luxuries').append("<div style='margin-top:20rem; width:100%; height:10px;'></div>")

            $('.exhibition').html(" اسم المعرض: " + data.exhibition);
            $('.km').html("الكيلوميتر: " + data.car.km);
            $('.engine_capacity').html(" سعه المحرك: " + data.car.engine_capacity);
            $('.motion_vector').html(" ناقل الحركه: " + data.car.motion_vector);
            $('.doors_number').html(" عدد الابواب: " + data.car.doors_number);
            setTimeout(function(){
              $('.logo-type').show();
              $("#car-container h6").html('');
              $('.luxuries').empty();
            }, 3000);
          }
        },
        error: function(){

        }
      });
    });

  </script>
@endpush

@endsection
