<!DOCTYPE html>
<html lang="eng">
	<head>
		@include('includes.head')
	</head>
	<body>
		<div class="navbar-navigation">
			@include('layout.navbartop')
		</div><!--navbar -->

	   	<div class="content-apps">
	    	@yield('content')
	    </div><!-- content-->

		<!-- Footer -->
	    <footer>
	        @include('includes.footer')
	    </footer>
    </body>
</html>

