<!DOCTYPE html>
<html lang="eng">
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
    	@yield('content')
    </div>
	  <!-- Footer -->
    <footer>
        @include('includes.footer')
    </footer>
  </body>
</html>
