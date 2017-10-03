<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand topnav" href="{{url('/')}}">DIMAS RECOVERY</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{Request::segment(1)=='' ? 'active':''}}"><a href="{{url('/')}}">Home</a></li>
                <li class="{{Request::segment(1)=='about' ? 'active':''}}"><a href="{{url('about')}}">About</a></li>
                <li class="{{Request::segment(1)=='service' ? 'active':''}}"><a href="{{url('service')}}">Services</a></li>
                <li class="{{Request::segment(1)=='contact' ? 'active':''}}"><a href="{{url('contact')}}">Contact</a></li>
                <li class="{{Request::segment(1)=='blog' ? 'active':''}}"><a href="https://dimasrecovery.wordpress.com/author/dimasrecovery/" target="_blank">Blog</a></li>
            </ul>
        </div> <!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
