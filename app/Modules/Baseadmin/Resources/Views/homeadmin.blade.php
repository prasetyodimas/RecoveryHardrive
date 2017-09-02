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
            <a href="{{url('baseadmin/charts')}}">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe097;"></span>
              </div>
              Charts
            </a>
          </li>
          <li>
            <a href="{{url('baseadmin/timeline')}}">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe047;"></span>
              </div>
              Timeline
            </a>
          </li>
          <li>
            <a href="{{url('baseadmin/tables')}}">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
              </div>
              Tables
            </a>
          </li>
          <li>
            <a href="{{url('baseadmin')}}">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></span>
              </div>
              Forms
            </a>
          </li>
          <li>
            <a href="{{url('baseadmin')}}">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0d2;"></span>
              </div>
              UI Elements
            </a>
          </li>
          <li>
            <a href="{{url('baseadmin')}}">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe14c;"></span>
              </div>
              Grid
            </a>
          </li>
          <li>
            <a href="{{url('baseadmin')}}">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe00d;"></span>
              </div>
              Gallery
            </a>
          </li>
          <li>
            <a href="{{url('baseadmin')}}">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe100;"></span>
              </div>
              Typography
            </a>
          </li>
          <li>
            <a href="{{url('baseadmin')}}">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0a9;"></span>
              </div>
              Icons
            </a>
          </li>
          <li>
            <a href="{{url('baseadmin')}}">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0f4;"></span>
              </div>
              404
            </a>
          </li>
          <li>
            <a href="{{url('baseadmin')}}">
              <div class="icon">
                <span class="fs1" aria-hidden="true" data-icon="&#xe088;"></span>
              </div>
              Login
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
                  <a href="#">Reports</a>
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

          <div class="row-fluid">
            <div class="span9">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe1cd;"></span> Auto Updating Chart
                  </div>
                  <div class="tools pull-right">
                  </div>
                </div>
                <div class="widget-body">
                  <div id="realtimechart" style="height:160px;"></div>
                </div>
              </div>
            </div>

            <div class="span3">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    Social Graph
                  </div>
                </div>
                <div class="widget-body">
                  <div id="socialGraph" style="height: 160px;"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="row-fluid">
            <div class="span12">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe07d;"></span> Latest Updates
                  </div>
                  <div class="tools">
                    <ul class="sliding-tags">
                      <li>
                        <a href="#">Recent<span>95</span></a>
                      </li>
                      <li>
                        <a href="#">Important<span>75</span></a>
                      </li>
                      <li>
                        <a href="#">View All<span>275</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="widget-body">
                  <div id="scrollbar-three">
                    <div class="scrollbar">
                      <div class="track">
                        <div class="thumb">
                          <div class="end"></div>
                        </div>
                      </div>
                    </div>
                    <div class="viewport">
                      <div class="overview">
                        <ul class="imp-messages">
                          <li>
                            <img src="{{asset('frontend/adminthemes/img/avatar-6.png')}}" class="avatar" alt="Avatar"/>
                            <div class="message-date">
                              <h3 class="date text-info">28</h3>
                              <p class="month">April</p>
                            </div>
                            <div class="message-wrapper">
                              <h4 class="message-heading">Vertical, systems networks utilize capture seize.</h4>
                              <p class="message">
                               Harness e-markets podcasts mindshare, exploit incentivize repurpose strategize, cross-media. 
                              </p>
                            </div>
                          </li>
                          <li>
                            <img src="{{asset('frontend/adminthemes/img/avatar-7.png')}}" class="avatar" alt="Avatar"/>
                            <div class="message-date">
                              <h3 class="date text-error">25</h3>
                              <p class="month">April</p>
                            </div>
                            <div class="message-wrapper">
                              <h4 class="message-heading">Value-added; enable enhance revolutionize.</h4>
                              <p class="message">
                                Seamless podcasts transform enable value best-of-breed, enable customized e-enable relationships integrate integrate magnetic authentic syndicate.
                              </p>
                            </div>
                          </li>
                          <li>
                            <img src="{{asset('frontend/adminthemes/img/avatar-4.png')}}" class="avatar" alt="Avatar"/>
                            <div class="message-date">
                              <h3 class="date text-success">19</h3>
                              <p class="month">April</p>
                            </div>
                            <div class="message-wrapper">
                              <h4 class="message-heading">IntegrateAJAX-enabled robust, "tagclouds utilize.</h4>
                              <p class="message">
                                You can win gift vouchers and your nominee stands to win a wardrobe makeover. Note that we do not store information ...
                              </p>
                            </div>
                          </li>
                          <li>
                            <img src="{{asset('frontend/adminthemes/img/avatar-1.png')}}" class="avatar" alt="Avatar"/>
                            <div class="message-date">
                              <h3 class="date text-warning">12</h3>
                              <p class="month">April</p>
                            </div>
                            <div class="message-wrapper">
                              <h4 class="message-heading">Extensible morph networks reintermediate capture.</h4>
                              <p class="message">
                                World-class. Interfaces benchmark target streamline eyeballs standards-compliant embrace ubiquitous streamline, enhance.
                              </p>
                            </div>
                          </li>
                          <li>
                            <img src="{{asset('frontend/adminthemes/img/avatar-8.png')}}" class="avatar" alt="Avatar"/>
                            <div class="message-date">
                              <h3 class="date text-success">10</h3>
                              <p class="month">April</p>
                            </div>
                            <div class="message-wrapper">
                              <h4 class="message-heading">Seamless podcasts transform enable value best-of-breed.</h4>
                              <p class="message">
                                Distributed granular schemas aggregate communities aggregate embrace systems end-to-end beta-test, rich-clientAPIs revolutionary.
                              </p>
                            </div>
                          </li>
                          <li>
                            <img src="{{asset('frontend/adminthemes/img/avatar-5.png')}}" class="avatar" alt="Avatar"/>
                            <div class="message-date">
                              <h3 class="date text-error">29</h3>
                              <p class="month">March</p>
                            </div>
                            <div class="message-wrapper">
                              <h4 class="message-heading">Post next-generation reinvent. World-class.</h4>
                              <p class="message">
                                Reinvent rich-clientAPIs frictionless scale front-end podcasts engage models disintermediate beta-test.
                              </p>
                            </div>
                          </li>
                          <li>
                            <img src="{{asset('frontend/adminthemes/img/avatar-6.png')}}" class="avatar" alt="Avatar"/>
                            <div class="message-date">
                              <h3 class="date text-info">22</h3>
                              <p class="month">March</p>
                            </div>
                            <div class="message-wrapper">
                              <h4 class="message-heading">Vertical, systems networks utilize capture seize.</h4>
                              <p class="message">
                                World-class. Interfaces benchmark target streamline eyeballs standards-compliant embrace ubiquitous streamline, enhance.
                              </p>
                            </div>
                          </li>
                          <li>
                            <img src="{{asset('frontend/adminthemes/img/avatar-7.png')}}" class="avatar" alt="Avatar"/>
                            <div class="message-date">
                              <h3 class="date text-warning">26</h3>
                              <p class="month">March</p>
                            </div>
                            <div class="message-wrapper">
                              <h4 class="message-heading">Vertical, systems networks utilize capture seize.</h4>
                              <p class="message">
                                Harness e-markets podcasts mindshare, exploit incentivize repurpose strategize, cross-media.
                              </p>
                            </div>
                          </li>
                          <li>
                            <img src="{{asset('frontend/adminthemes/img/avatar-1.png')}}" class="avatar" alt="Avatar"/>
                            <div class="message-date">
                              <h3 class="date text-success">13</h3>
                              <p class="month">March</p>
                            </div>
                            <div class="message-wrapper">
                              <h4 class="message-heading">Bricks-and-clicks engage value clicks-and-mortar.</h4>
                              <p class="message">
                                Scalable rss-capable "harness," bricks-and-clicks engage value clicks-and-mortar, reinvent.
                              </p>
                            </div>
                          </li>
                          <li>
                            <img src="{{asset('frontend/adminthemes/img/avatar-8.png')}}" class="avatar" alt="Avatar"/>
                            <div class="message-date">
                              <h3 class="date text-warning">09</h3>
                              <p class="month">March</p>
                            </div>
                            <div class="message-wrapper">
                              <h4 class="message-heading">Whiteboard "scalable rss-capable customized.</h4>
                              <p class="message">
                                Technologies incentivize virtual empower, bricks-and-clicks engage value clicks-and-mortar.
                              </p>
                            </div>
                          </li>
                          <li>
                            <img src="img/avatar-2.png" class="avatar" alt="Avatar"/>
                            <div class="message-date">
                              <h3 class="date text-success">01</h3>
                              <p class="month">March</p>
                            </div>
                            <div class="message-wrapper">
                              <h4 class="message-heading">Enable impactful niches engage integrate AJAX.</h4>
                              <p class="message">
                                Metrics; whiteboard standards-compliant architectures engage value. Mechnologies incentivize.
                              </p>
                            </div>
                          </li>
                          <li>
                            <img src="img/avatar-7.png" class="avatar" alt="Avatar"/>
                            <div class="message-date">
                              <h3 class="date text-info">28</h3>
                              <p class="month">Feb</p>
                            </div>
                            <div class="message-wrapper">
                              <h4 class="message-heading">Mechnologies incentivize virtual standards.</h4>
                              <p class="message">
                                Mesh efficient web-readiness reintermediate grow dot-com incentivize e-commerce aggregate target innovate.
                            </div>
                          </li>
                          <li>
                            <img src="img/avatar-3.png" class="avatar" alt="Avatar"/>
                            <div class="message-date">
                              <h3 class="date text-error">23</h3>
                              <p class="month">Feb</p>
                            </div>
                            <div class="message-wrapper">
                              <h4 class="message-heading">Reinvent user-centred authentic schemas initiatives.</h4>
                              <p class="message">
                                Distributed granular schemas aggregate communities aggregate embrace systems end-to-end beta-test, rich-clientAPIs revolutionary. 
                              </p>
                            </div>
                          </li>
                          <li>
                            <img src="img/avatar-6.png" class="avatar" alt="Avatar"/>
                            <div class="message-date">
                              <h3 class="date text-info">14</h3>
                              <p class="month">Feb</p>
                            </div>
                            <div class="message-wrapper">
                              <h4 class="message-heading">Interactive, wireless engage, capture, remix.</h4>
                              <p class="message">
                                Seamless podcasts transform enable value best-of-breed, enable customized e-enable relationships integrate integrate magnetic authentic syndicate.
                              </p>
                            </div>
                          </li>
                          <li>
                            <img src="img/avatar-4.png" class="avatar" alt="Avatar"/>
                            <div class="message-date">
                              <h3 class="date text-error">12</h3>
                              <p class="month">Feb</p>
                            </div>
                            <div class="message-wrapper">
                              <h4 class="message-heading">Enable impactful niches engage integrate AJAX.</h4>
                              <p class="message">
                                Infomediaries infomediaries synergistic models magnetic viral, integrated compelling! 
                              </p>
                            </div>
                          </li>
                          <li>
                            <img src="img/avatar-5.png" class="avatar" alt="Avatar"/>
                            <div class="message-date">
                              <h3 class="date text-success">04</h3>
                              <p class="month">Feb</p>
                            </div>
                            <div class="message-wrapper">
                              <h4 class="message-heading">Portals enterprise transition dynamic B2C transition.</h4>
                              <p class="message">
                                Seamless podcasts transform enable value best-of-breed, enable customized e-enable relationships integrate integrate magnetic authentic syndicate.
                              </p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row-fluid">
            <div class="span6">
              <div class="widget no-margin">
                <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe053;"></span> Upcoming Events
                  </div>
                  <div class="tools pull-right">
                  </div>
                </div>
                <div class="widget-body">
                  <div id='calendar'></div>
                </div>
              </div>
            </div>

            <div class="span6">
              <div class="widget no-margin">
                <div class="widget-header">
                  <div class="icontype">

                  </div>
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe0fe;"></span> Todo list
                  </div>
                </div>
                <div class="widget-body">
                  <div class="todo-container">
                    <ul class="todo-list">
                      <li>
                        <span class="new"></span>
                        <input type="checkbox" id="1"/>
                        <label for="1">
                          Climb Mount Everest
                        </label>
                        <span class="date">May 24th</span>
                      </li>
                      <li>
                        <span class="process"></span>
                        <input type="checkbox" id="2"/>
                        <label for="2">
                          Start Learn Ruby on Rails
                        </label>
                        <span class="date">May 19th</span>
                      </li>
                      <li>
                        <span class="completed"></span>
                        <input type="checkbox" id="3" checked/>
                        <label for="3">
                          Meet Mr. Been at 4:30 PM
                        </label>
                        <span class="date">May 29th</span>
                      </li>
                      <li>
                        <span class="process"></span>
                        <input type="checkbox" id="4"/>
                        <label for="4">
                          Order Biryani
                        </label>
                        <span class="date">Due Apr 27</span>
                      </li>
                      <li>
                        <span class="new"></span>
                        <input type="checkbox" id="5"/>
                        <label for="5">
                          Watched live Footall Match
                        </label>
                        <span class="date">Completed Apr 29</span>
                      </li>
                      <li>
                        <span class="completed"></span>
                        <input type="checkbox" id="6" checked/>
                        <label for="3">
                          Be Creative
                        </label>
                        <span class="date">Due Apr 02</span>
                      </li>
                      <li>
                        <span class="process"></span>
                        <input type="checkbox" id="7"/>
                        <label for="4">
                          Have Biryani with Sandy
                        </label>
                        <span class="date">May 27</span>
                      </li>
                      <li>
                        <span class="new"></span>
                        <input type="checkbox" id="8"/>
                        <label for="5">
                          Played Cricket Match
                        </label>
                        <span class="date">Completed Apr 29</span>
                      </li>
                      <li>
                        <span class="completed"></span>
                        <input type="checkbox" id="9" checked/>
                        <label for="3">
                          Be Creative
                        </label>
                        <span class="date">Due Apr 28</span>
                      </li>
                    </ul>
                    <form action="#" class="no-margin">
                      <div class="control-group">
                        <div class="controls">
                          <textarea class="input-block-level" placeholder="Add new task"></textarea>
                        </div>
                      </div>
                      <div class="control-group no-margin">
                        <div class="controls">
                          <button type="submit" class="btn btn-info pull-right">Create</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div><!-- dashboard-container -->
    </div><!-- container-fluid -->
    <footer>
      <p class="copyright">&copy; dimasrecovery {{date('Y')}}</p>
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