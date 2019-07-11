
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Library Universitas Ternak Lele </title>

<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/nprogress.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/green.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-progressbar-3.3.4.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/custom.min.css') }}">
</head>

<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
          <a href="index.html" class="site_title"><i class="fa fa-book"></i> <span>Library UTL</span></a>
        </div>
        <div class="clearfix"></div>

        <div class="profile clearfix">
          <div class="profile_pic">
            <img src="{{ URL::asset('img/img.jpg') }}" alt="..." class="img-circle profile_img">
          </div>
          <div class="profile_info">
            <span>Welcome,</span>
            <h2>{{ Auth::user()->name }}</h2>
          </div>
        </div>
        <br />
        @include('layouts.sidebar')
      </div>
    </div>

    <!-- section navbar -->
    <div class="top_nav">
      <div class="nav_menu">
      <nav>
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="{{ URL::asset('img/img.jpg') }}" alt="">{{ Auth::user()->name }}
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="javascript:;"> Profile</a></li>
            <li>
              <a href="javascript:;">
                <span class="badge bg-red pull-right">50%</span>
                <span>Settings</span>
              </a>
            </li>
            <li><a href="javascript:;">Help</a></li>
            <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
          </li>
        
          @include('layouts.messages')
        </ul>
      </nav>
      </div>
    </div>
    <!-- end navbar -->

    <!-- section content -->
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        @yield('content')
        </div>
      </div>
    </div>
    <!-- endsection content -->

    <!-- footer -->
    <footer>
      <div class="pull-right">
        Admin - Library Universitas Ternak Lele
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- end footer -->

  </div> <!-- main body -->
</div> <!-- container body -->

<script src="{{ URL::asset('js/jquery.min.js') }}" ></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}" ></script>
<script src="{{ URL::asset('js/fastclick.js') }}" ></script>
<script src="{{ URL::asset('js/nprogress.js') }}" ></script>
<script src="{{ URL::asset('js/Chart.min.js') }}" ></script>
<script src="{{ URL::asset('js/gauge.min.js') }}" ></script>
<script src="{{ URL::asset('js/bootstrap-progressbar.min.js') }}" ></script>
<script src="{{ URL::asset('js/icheck.min.js') }}" ></script>
<script src="{{ URL::asset('js/skycons.js') }}" ></script>
<script src="{{ URL::asset('js/jquery.flot.js') }}" ></script>
<script src="{{ URL::asset('js/jquery.flot.pie.js') }}" ></script>
<script src="{{ URL::asset('js/jquery.flot.time.js') }}" ></script>
<script src="{{ URL::asset('js/jquery.flot.stack.js') }}" ></script>
<script src="{{ URL::asset('js/jquery.flot.resize.js') }}" ></script>
<script src="{{ URL::asset('js/jquery.flot.orderBars.js') }}"></script>
<script src="{{ URL::asset('js/jquery.flot.spline.min.js') }}"></script>
<script src="{{ URL::asset('js/curvedLines.js') }}"></script>
<script src="{{ URL::asset('js/date.js') }}"></script>
<script src="{{ URL::asset('js/jquery.vmap.js') }}"></script>
<script src="{{ URL::asset('js/jquery.vmap.world.js') }}"></script>
<script src="{{ URL::asset('js/jquery.vmap.sampledata.js') }}"></script>
<script src="{{ URL::asset('js/moment.min.js') }}"></script>
<script src="{{ URL::asset('js/daterangepicker.js') }}"></script>
<script src="{{ URL::asset('js/custom.min.js') }}" ></script>
<script src="{{ URL::asset('js/rocket-loader.min.js') }}"></script>

</body>
</html>
