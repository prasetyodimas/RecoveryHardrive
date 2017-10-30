<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <title>{{Theme::titleApps()}}</title>
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="{{asset('frontend/img/favico/favicon-16.png')}}" rel="icon" type="image/png" sizes="16x16" >
    <!-- CSS -->
    <link href="{{asset('frontend/adminthemes/icomoon/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/adminthemes/css/main.css')}}" rel="stylesheet">
    <!--JS -->
    <script src="{{asset('frontend/adminthemes/js/html5-trunk.js')}}"></script>
    <script src="{{asset('frontend/adminthemes/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/adminthemes/js/bootstrap.js')}}"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span4 offset4">
          <div class="signin">
            <h1 class="center-align-text">Administrator Area</h1>
            @if (Session::has('message-failed'))
              <div class="alert alert-danger">{{ Session::get('message-failed')}}</div>
            @elseif(Session::has('message-success'))
              <div class="alert alert-success">{{ Session::get('message-success')}}</div>
            @endif
            <form action="{{url('baseadmin')}}" class="signin-wrapper" method="post">
              {{ csrf_field() }}
              <div class="content">
                <input class="input input-block-level" name="email" type="text" required="" placeholder="Username / Email">
                <input class="input input-block-level" name="password" type="password" required="" placeholder="Password">
              </div>
              <div class="actions">
                <input class="btn btn-info pull-right" type="submit" value="Login">
                <span class="checkbox-wrapper">
                  <a href="" class="pull-left">Forgot Password</a>
                </span>
                <div class="clearfix"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>