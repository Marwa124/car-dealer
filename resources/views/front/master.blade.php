<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">

<!-- Mirrored from cocotemplates.com/html/acropos/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Dec 2019 20:21:38 GMT -->

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Car Dealer Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Acropos - Car Dealer HTML5 Template</title>

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/main.css')}}">
  <!-- Slider Pro Css -->
  <link rel="stylesheet" href="{{asset('front/css/sliderPro.css')}}">
  <!-- Owl Carousel Css -->
  <link rel="stylesheet" href="{{asset('front/css/owl-carousel.css')}}">
  <!-- Flat Icons Css -->
  <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
  <!-- Animated Css -->
  <link rel="stylesheet" href="{{asset('front/css/animated.css')}}">

  <style>
    #car-item{
      cursor: pointer;
    }
    section.top-slider-features .slider-top-features .car-item{
      background-color: transparent;
    }
    section.top-slider-features .slider-top-features{
      background-color: transparent;
      width: 100%;
    }
    .top-slider-features img{
      max-height: 25rem;
    }
    .Modern-Slider .item .img-fill .info{
      line-height: 0%;
    }
  </style>

</head>

<body>

  <div class="preloader">
    <div class="preloader-bounce">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="search">
    <button type="button" class="close">×</button>
    <form>
      <input type="search" value="" placeholder="type keyword(s) here" />
      <button type="submit" class="primary-button">Search <i class="fa fa-search"></i></button>
    </form>
  </div>

  <header class="site-header wow fadeIn" data-wow-duration="1s">
    <div id="main-header" class="main-header">
      <div class="container clearfix">
        <div class="logo">
          <a href="{{route('master')}}"></a>
        </div>
        <div id='cssmenu'>
          <ul>
            <li><a href='index-2.html'>Homepage</a></li>
            <li class='active'><a href='#'>Car Listing</a>
              <ul>
                <li><a href='#'>Sidebar</a>
                  <ul>
                    <li><a href='car_listing_sidebar.html'>Car Listing</a></li>
                    <li><a href='car_grid_sidebar.html'>Car Grid</a></li>
                  </ul>
                </li>
                <li><a href='#'>No Sidebar</a>
                  <ul>
                    <li><a href='car_listing_no_sidebar.html'>Car Listing</a></li>
                    <li><a href='car_grid_no_sidebar.html'>Car Grid</a></li>
                  </ul>
                </li>
                <li><a href="single_car.html">Single Car</a></li>
              </ul>
            </li>
            <li class='active'><a href='#'>Blog</a>
              <ul>
                <li><a href='#'>Sidebar</a>
                  <ul>
                    <li><a href='blog_listing_sidebar.html'>Blog Classic</a></li>
                    <li><a href='blog_grid_sidebar.html'>Blog Grid</a></li>
                  </ul>
                </li>
                <li><a href='#'>No Sidebar</a>
                  <ul>
                    <li><a href='blog_listing_no_sidebar.html'>Blog Classic</a></li>
                    <li><a href='blog_grid_no_sidebar.html'>Blog Grid</a></li>
                  </ul>
                </li>
                <li><a href="single_post.html">Single Post</a></li>
              </ul>
            </li>
            <li><a href='about_us.html'>About Us</a></li>
            <li><a href='contact_us.html'>Contact Us</a></li>
            <li>
              <a href="#search"><i class="fa fa-search"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  @yield('content')

  <script src="{{asset('front/js/jquery-1.11.0.min.js')}}"></script>

  <!-- Slider Pro Js -->
  <script src="{{asset('front/js/sliderpro.min.js')}}"></script>

  <!-- Slick Slider Js -->
  <script src="{{asset('front/js/slick.js')}}"></script>

  <!-- Owl Carousel Js -->
  <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>

  <!-- Boostrap Js -->
  <script src="{{asset('front/js/bootstrap.min.js')}}"></script>

  <!-- Boostrap Js -->
  <script src="{{asset('front/js/wow.animation.js')}}"></script>

  <!-- Custom Js -->
  <script src="{{asset('front/js/custom.js')}}"></script>

  @stack('scripts')

</body>

<!-- Mirrored from cocotemplates.com/html/acropos/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Dec 2019 20:21:38 GMT -->

</html>
