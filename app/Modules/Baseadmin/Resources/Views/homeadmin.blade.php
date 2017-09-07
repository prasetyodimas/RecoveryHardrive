<!DOCTYPE html>
  <html lang="en">
  <head>
    @include('baseadmin::header.header')
  </head>
  <body>
    <header>
    <!-- NAV MINI -->
      @include('baseadmin::nav.mini-nav.mini-nav')
    </header>
    <!-- MAIN NAV -->
    <div class="container-fluid">
      <div id="mainnav" class="hidden-phone hidden-tablet">
        <ul>
          <li class="active">
            <span class="current-arrow"></span>
            <a href="{{url('baseadmin')}}">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0a1;"></span>
              </div>
              Dashboard
            </a>
          </li>
          <li>
            <a href="{{url('baseadmin')}}">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe020;"></span>
              </div>
              Data Master
            </a>
          </li>
          <li>
            <a href="{{url('baseadmin')}}">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe03f;"></span>
              </div>
              Transaksi
            </a>
          </li>
          <li>
            <a href="{{url('baseadmin')}}">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe05b;"></span>
              </div>
              Laporan
            </a>
          </li>
          <li>
            <a href="{{url('baseadmin')}}">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe06d;"></span>
              </div>
              Pusat Bantuan
            </a>
          </li>
           <li>
            <a href="{{url('baseadmin')}}">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe070;"></span>
              </div>
              Setting User
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
                    <li>
                      <a href="{{url('baseadmin')}}">Dashboard</a>
                    </li>
                    <li>
                      <a href="{{url('baseadmin')}}">Charts</a>
                    </li>
                    <li>
                      <a href="{{url('baseadmin/timeline')}}">Timeline</a>
                    </li>
                    <li>
                      <a href="{{url('baseadmin')}}">Tables</a>
                    </li>
                    <li>
                      <a href="{{url('baseadmin')}}">Forms</a>
                    </li>
                    <li>
                      <a href="{{url('basedmin')}}">UI Elements</a>
                    </li>
                    <li>
                      <a href="{{url('baseadmin')}}">Grid</a>
                    </li>
                    <li>
                      <a href="{{url('baseadmin')}}">Gallery</a>
                    </li>
                    <li>
                      <a href="{{url('baseadmin')}}">Typography</a>
                    </li>
                    <li>
                      <a href="{{url('baseadmin')}}">Icons</a>
                    </li>
                    <li>
                      <a href="{{url('baseadmin')}}">Login</a>
                    </li>
                    <li>
                      <a href="{{url('baseadmin')}}">404</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- CONTAINER -->
          <div class="row-fluid">
            <div class="span12">
              <ul class="breadcrumb-beauty">
                <li>
                  <a href="{{url('baseadmin')}}"><span class="fs1" aria-hidden="true" data-icon="&#xe002;"></span> Dashboard</a>
                </li>
                <li>
                  <a href="#"></a>
                </li>
              </ul>
            </div>
          </div>

          <br>

          <div class="row-fluid">
            <div class="span12">
              <div class="row-fluid">
                <div class="span10">
                  <div class="widget">
                    <div class="widget-body">
                      <div id="selectionCharts" style="height:200px;"></div>
                    </div>
                  </div>
                </div>
                <div class="span2">
                  <div class="stats-count">
                    <span class="fs1 arrow text-success hidden-tablet" aria-hidden="true" data-icon="&#xe1bd;"></span> 
                    <h5 class="stat-value text-success">62%</h5>
                    <span class="stat-name">Chrome Users</span>
                  </div>
                  <div class="stats-count">
                    <span class="fs1 arrow text-error hidden-tablet" aria-hidden="true" data-icon="&#xe1be;"></span> 
                    <h5 class="stat-value text-error">21%</h5>
                    <span class="stat-name">Firefox Users</span>
                  </div>
                  <div class="stats-count">
                    <span class="fs1 arrow text-info hidden-tablet" aria-hidden="true" data-icon="&#xe1c1;"></span> 
                    <h5 class="stat-value text-info">12%</h5>
                    <span class="stat-name">Safari Users</span>
                  </div>
                  <div class="stats-count">
                    <span class="fs1 arrow text-warning hidden-tablet" aria-hidden="true" data-icon="&#xe1bf;"></span> 
                    <h5 class="stat-value text-warning">5%</h5>
                    <span class="stat-name">IE Users</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row-fluid">
            <div class="span6">
              <div class="plain-header">
                <h4 class="title">
                  Current Sales Status
                </h4>
              </div>
              <div class="row-fluid">
                <div class="span6">
                  <div class="widget less-bottom-margin widget-border widget-border">
                    <div class="widget-body">
                      <div class="current-stats">
                        <h4 class="text-info">3207</h4>
                        <p>Recent Orders</p>
                        <div class="type">
                          <span class="fs1 arrow text-info" aria-hidden="true" data-icon="&#xe048;"></span> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="span6">
                  <div class="widget less-bottom-margin widget-border">
                    <div class="widget-body">
                      <div class="current-stats">
                        <h4 class="text-success">2231</h4>
                        <p>Shipped</p>
                        <div class="type">
                          <span class="fs1 arrow text-success" aria-hidden="true" data-icon="&#xe036;"></span> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row-fluid">
                <div class="span6">
                  <div class="widget widget-border">
                    <div class="widget-body">
                      <div class="current-stats">
                        <h4 class="text-warning">1198</h4>
                        <p>Processing</p>
                        <div class="type">
                          <span class="fs1 arrow text-warning" aria-hidden="true" data-icon="&#xe077;"></span> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="span6">
                  <div class="widget widget-border">
                    <div class="widget-body">
                      <div class="current-stats">
                        <h4>3</h4>
                        <p>Cancelled</p>
                        <div class="type">
                          <span class="fs1 arrow" aria-hidden="true" data-icon="&#xe0fa;"></span> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="span6">
              <div class="plain-header">
                <h4 class="title">
                  Site Visits
                </h4>
              </div>
              <div class="row-fluid">
                <div class="span6">
                  <div class="widget less-bottom-margin widget-border">
                    <div class="widget-body">
                      <div class="current-stats">
                        <h4 class="text-info">11890</h4>
                        <p>Total Visits</p>
                        <div class="type">
                          <span class="fs1 arrow text-info" aria-hidden="true" data-icon="&#xe071;"></span> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="span6">
                  <div class="widget less-bottom-margin widget-border">
                    <div class="widget-body">
                      <div class="current-stats">
                        <h4 class="text-error">32980</h4>
                        <p>Page Views</p>
                        <div class="type">
                          <span class="fs1 arrow text-error" aria-hidden="true" data-icon="&#xe0c6;"></span> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row-fluid">
                <div class="span6">
                  <div class="widget widget-border">
                    <div class="widget-body">
                      <div class="current-stats">
                        <h4 class="text-warning">19280</h4>
                        <p>Total Unique Visits</p>
                        <div class="type">
                          <span class="fs1 arrow text-warning" aria-hidden="true" data-icon="&#xe070;"></span> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="span6">
                  <div class="widget widget-border">
                    <div class="widget-body">
                      <div class="current-stats">
                        <h4 class="text-success">16:05:45</h4>
                        <p>Total Time Spend</p>
                        <div class="type">
                          <span class="fs1 arrow text-success" aria-hidden="true" data-icon="&#xe04d;"></span> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div><!-- dashboard-container -->
    </div><!-- container-fluid -->
    <footer>
      <p class="copyright">&copy; RecoveryHardrive {{date('Y')}}</p>
    </footer>
    <script src="{{asset('frontend/adminthemes/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/adminthemes/js/bootstrap.js')}}"></script>
    <script src="{{asset('frontend/adminthemes/js/jquery-ui-1.8.23.custom.min.js')}}"></script>
    <!-- morris charts -->
    <script src="{{asset('frontend/adminthemes/js/morris/morris.js')}}"></script>
    <script src="{{asset('frontend/adminthemes/js/morris/raphael-min.js')}}"></script>
    <!-- Flot charts -->
    <script src="{{asset('frontend/adminthemes/js/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('frontend/adminthemes/js/flot/jquery.flot.resize.min.js')}}"></script>
    <!-- Calendar Js -->
    <script src="{{asset('frontend/adminthemes/js/fullcalendar.js')}}"></script>
    <!-- Tiny Scrollbar JS -->
    <script src="{{asset('frontend/adminthemes/js/tiny-scrollbar.js')}}"></script>
    <!-- custom Js -->
    <script src="{{asset('frontend/adminthemes/js/custom-index.js')}}"></script>
    <script src="{{asset('frontend/adminthemes/js/custom.js')}}"></script>
  </body>
</html>