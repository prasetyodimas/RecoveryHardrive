<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <title>Admin Sistem</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" >
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- FAVICON -->  
  <link href="{{asset('frontend/fronthemes/asset-images/favico/favicon-16.png')}}" rel="icon" type="image/png" sizes="16x16" >
  <link href="{{asset('frontend/adminthemes/icomoon/style.css')}}" rel="stylesheet">
  <!-- BOOTSTRAP.CSS -->
  <link href="{{asset('frontend/adminthemes/css/main.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/adminthemes/css/fullcalendar.css')}}" rel="stylesheet">
  <!-- JAVASCRIPT -->
  <script src="{{asset('../frontend/adminthemes/js/html5-trunk.js')}}"></script>
  <script src="{{asset('frontend/adminthemes/js/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/adminthemes/js/bootstrap.js')}}"></script>
  <script src="{{asset('frontend/adminthemes/js/jquery-ui-1.8.23.custom.min.js')}}"></script>
  <!-- MORRIS CHARTS -->
  <script src="{{asset('frontend/adminthemes/js/morris/morris.js')}}"></script>
  <script src="{{asset('frontend/adminthemes/js/morris/raphael-min.js')}}"></script>
  <!-- Flot charts -->
  <script src="{{asset('frontend/adminthemes/js/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('frontend/adminthemes/js/flot/jquery.flot.resize.min.js')}}"></script>
  <!-- Calendar Js -->
  <script src="{{asset('frontend/adminthemes/js/fullcalendar.js')}}"></script>
  <!-- Tiny Scrollbar JS -->
  <script src="{{asset('frontend/adminthemes/js/tiny-scrollbar.js')}}"></script>
  <!-- CUSTOM JS -->
  <script src="{{asset('frontend/adminthemes/js/custom-index.js')}}"></script>
  <script src="{{asset('frontend/adminthemes/js/custom.js')}}"></script>
</head>
<body>
  <!-- NAV MINI -->
  <header>
    <!-- MINI NAV -->
    <a href="{{url('baseadmin/dashboard')}}" class="logo">Admin Recovery Hardrive</a>
    <div id="mini-nav">
      <ul class="hidden-phone">
        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            Messages <span id="messagesCountDown">1</span>
            <b class="caret icon-white"></b>
          </a>
          <ul class="dropdown-menu pull-right">
            <li class="quick-messages">
              <img src="{{asset('frontend/adminthemes/img/avatar-1.png')}}" class="avatar" alt="Avatar">
              <div class="message-date text-info">
                <i>02 <span class="month">mins</span></i>
              </div>
              <div class="message-wrapper">
                <h4 class="message-heading">Ubiquitous customized</h4>
                <p class="message">
                  Enable impactful niches engage impactful 
                </p>
              </div>
            </li>
          </ul>
        </li>
        <li><a href="{{url('baseadmin/logout')}}">Logout</a></li>
      </ul>
    </div>
  </header>
  <!-- MAIN NAV -->
  <div class="container-fluid">
    <!-- NAVIGATION TOP -->
    <div id="mainnav" class="hidden-phone hidden-tablet">
      <ul>
        <li class="{{Request::segment(2) =="dashboard" ? 'active':''}}">
          <span class="current-arrow"></span>
          <a href="{{url('baseadmin/dashboard')}}">
            <div class="icon">
              <span class="fs1" aria-hidden="true" data-icon="&#xe0a1;"></span>
            </div>
            Dashboard
          </a>
        </li>
        <li class="{{Request::segment(2)=="data-master" ? 'active':''}}">
          <a href="{{url('baseadmin/data-master')}}">
            <div class="icon">
              <span class="fs1" aria-hidden="true" data-icon="&#xe020;"></span>
            </div>
            Data Master
          </a>
        </li>
        <li class="{{Request::segment(2)=="transaksi" ? 'active':''}}">
          <a href="{{url('baseadmin/transaksi')}}">
            <div class="icon">
              <span class="fs1" aria-hidden="true" data-icon="&#xe03f;"></span>
            </div>
            Transaksi
          </a>
        </li>
        <li class="{{Request::segment(2)=="laporan" ? 'active':''}}">
          <a href="{{url('baseadmin/laporan')}}">
            <div class="icon">
              <span class="fs1" aria-hidden="true" data-icon="&#xe05b;"></span>
            </div>
            Laporan
          </a>
        </li>
        <li class="{{Request::segment(2)=="pusat-bantuan" ? 'active':''}}">
          <a href="{{url('baseadmin/pusat-bantuan')}}">
            <div class="icon">
              <span class="fs1" aria-hidden="true" data-icon="&#xe06d;"></span>
            </div>
            Pusat Bantuan
          </a>
        </li>
         <li class="{{Request::segment(2)=="setting-user" ? 'active':''}}">
          <a href="{{url('baseadmin/setting-user')}}">
            <div class="icon">
              <span class="fs1" aria-hidden="true" data-icon="&#xe070;"></span>
            </div>
            Setting 
          </a>
        </li>
      </ul>
    </div>
    <div class="dashboard-wrapper">
      <div class="main-container">
        <div class="navbar hidden-desktop">
          <div class="navbar-inner">
            <div class="container">
              <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <div class="nav-collapse collapse navbar-responsive-collapse">
                <ul class="nav">
                  <li><a href="{{url('baseadmin')}}">Dashboard</a></li> 
                  <li><a href="{{url('baseadmin')}}">Charts</a></li> 
                  <li><a href="{{url('baseadmin/timeline')}}">Timeline</a></li> 
                  <li><a href="{{url('baseadmin')}}">Tables</a></li> 
                  <li><a href="{{url('baseadmin')}}">Forms</a></li> 
                  <li><a href="{{url('basedmin')}}">UI Elements</a></li> 
                  <li><a href="{{url('baseadmin')}}">Grid</a></li> 
                  <li><a href="{{url('baseadmin')}}">Gallery</a></li> 
                  <li><a href="{{url('baseadmin')}}">Typography</a></li> 
                  <li><a href="{{url('baseadmin')}}">Icons</a></li> 
                  <li><a href="{{url('baseadmin')}}">Login</a></li> 
                  <li><a href="{{url('baseadmin')}}">404</a></li> 
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span12">
            <ul class="breadcrumb-beauty">
              <li>
                <a href="{{url('baseadmin')}}">
                  <span class="fs1" aria-hidden="true" data-icon="&#xe002;"></span> Dashboard
                </a>
              </li>
              <li></li> 
              @yield('navigation-content')
            </ul>
          </div>
        </div>
        <br>
        <!-- CONTAINER -->
        <div class="row-fluid">
          @yield('content')
        </div>
      </div><!-- dashboard-container -->
    </div><!-- container-fluid -->
    <footer>
      <p class="copyright">&copy; RecoveryHardrive {{date('Y')}}</p>
    </footer>
  </body>
</html>