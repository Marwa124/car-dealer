<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'cars deal') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('adminlte/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="{{asset('adminlte/css/bootstrap-rtl.min.css')}}">
  <!-- template rtl version -->
  <link rel="stylesheet" href="{{asset('adminlte/css/custom-style.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />

  @stack('extra-css')
  <style>
    .select2-container--default .select2-selection--multiple .select2-selection__choice{
      float: right;
    }
  </style>
  @stack('css')
  @yield('extra-css')
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-dark navbar-dark border-bottom">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav mr-auto">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('register') }}">{{ __('انشاء حساب') }}</a>
        </li>
        @endif
        @else

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>

        {{-- <div class="image d-inline nav-link" style="padding: 0.2rem 1rem;">
    {{ Auth::user()->name }} <span class="caret"></span>
        <img src="{{asset('adminlte/img/user2-160x160.jpg')}}" class="img-circle elevation-2 mr-2"
          style="height: auto; width: 2.1rem;" alt="User Image">
  </div> --}}

  <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
  document.getElementById('logout-form').submit();">
    <i class="fas fa-sign-out-alt"></i>
    {{ __('تسجيل الخروج') }}
  </a>
  @endguest
  </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link text-center">
      <span class="brand-text font-weight-light">Car Dealer</span>
    </a>

    @auth
    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
      <div style="direction: rtl">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info m-auto">
            <a href="#" class="d-block">{{auth()->user()->name}}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="{{route('car.index')}}" class="nav-link">
                <i class="nav-icon fa fa-th"></i>
                <p>
                  السيارات
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('role.index')}}" class="nav-link">
                <i class="nav-icon fa fa-list"></i>
                <p>
                  رتب المستخدمين
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('user.index')}}" class="nav-link">
                <i class="nav-icon fa fa-users"></i>
                <p>
                  المستخدمين
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
    @endauth

  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">
              @yield('title')
            </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-center">
    <strong>CopyLeft &copy; 2019 <a href="http://github.com/mratwan/">marwa mostafa</a></strong>
  </footer>

  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('adminlte/js/adminlte.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('adminlte/js/demo.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

  @stack('scripts')
  @include('sweetalert::alert')

</body>

</html>
