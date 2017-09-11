@extends('baseadmin::homeadmin')
@section('content')
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
@endsection