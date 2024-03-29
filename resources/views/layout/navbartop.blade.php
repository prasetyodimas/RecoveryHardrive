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
            <span class="branding-logo">
                <a class="navbar-brand topnav text-uppercase" href="{{url('/')}}"> <img src="{{asset('frontend/fronthemes/asset-images/logo/logo-brands.png')}}" class="img-responsive img-circle"> {{Theme::titleApps()}}</a>
            </span>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{Request::segment(1)=='' ? 'active':''}}"><a href="{{url('/')}}">Home</a></li>
                <li class="{{Request::segment(1)=='about' ? 'active':''}}"><a href="{{url('about')}}">About</a></li>
                {{-- <li class="{{Request::segment(1)=='service' ? 'active':''}}"><a href="{{url('service')}}">Consultation</a></li> --}}
                <li class="{{Request::segment(1)=='contact' ? 'active':''}}"><a href="{{url('contact')}}">Contact</a></li>
                <li class="{{Request::segment(1)=='blog' ? 'active':''}}"><a href="https://dimasrecovery.wordpress.com" target="_blank">Blog</a></li>
                <li class="{{Request::segment(1)=='faq' ? 'active':''}}"><a href="{{url('faq')}}">Faq</a></li>
            </ul>
        </div> <!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
