<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <title>{{Theme::titleApps()}}</title>
    <meta name="author" content="">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- CSS -->
    <link href="{{asset('frontend/adminthemes/icomoon/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/adminthemes/css/main.css')}}" rel="stylesheet">
    <!--JS -->
    <script src="{{asset('frontend/adminthemes/js/html5-trunk.js')}}"></script>
    <script src="{{asset('frontend/adminthemes/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/adminthemes/js/bootstrap.js')}}"></script>
    <script type="text/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-40301843-2', 'dimasrecovery.com');
      ga('send', 'pageview');
    </script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span4 offset4">
          <div class="signin">
            <h1 class="center-align-text">Login</h1>
            <form action="{{url('baseadmin')}}" class="signin-wrapper" method="post">
              <input type="hidden" name="_token" value="{!! csrf_token() !!}">
              <div class="content">
                <input class="input input-block-level" name="email" placeholder="Email" type="email" value="">
                <input class="input input-block-level" name="password" placeholder="Password" type="password">
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