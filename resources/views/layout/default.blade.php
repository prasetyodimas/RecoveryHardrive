<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		@include('includes.head')
	</head>
	<body>
		<!-- navbar navigation -->
		<div class="navbar-navigation">
			@include('layout.navbartop')
		</div>
		<!-- content-->
	   	<div class="content-apps">
			<div id="app">
	    		@yield('content')
			</div>	
	    </div>
		  <!-- Footer -->
	    <footer>
	        @include('includes.footer')
	    </footer>
  </body>
</html>
