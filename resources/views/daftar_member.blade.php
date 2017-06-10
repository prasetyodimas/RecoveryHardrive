<!DOCTYPE html>
<html lang="eng">
	<head>
		<title>Laravel Learning With Amtek.Lab</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/base.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/font-awesome-4.6.3/css/font-awesome.min.css')}}">
		<!-- JS -->
		<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	</head>
	<body>
		<!-- ======================== NAVIGATION ====================-->
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-default" id="navi-subcustom">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Laravel Learning</a>
					</div>
					<ul class="nav navbar-nav" id="ul-subcustom">
						<li class="active" id="custom-active"><a href="#">Home</a></li>
						<li><a href="#">Belajar Bareng Part 1</a></li>
						<li><a href="{{url('Welcome')}}">Resources</a></li>
						<li><a href="">Sinau Bareng AMTEK.Lab</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<p class="navbar-btn">
								<a href="{{url('Daftar')}}" class="btn  btn-primary"><span class="fa fa"></span> Sign Up</a>
							</p>
						</li>
						<li>
							<p class="navbar-btn navbar-login">
								<a href="{{url('Login_area')}}"><i class="fa fa-user-circle"></i> Login </a>
							</p>
						</li>
					</ul>
				</nav><!-- navbar navbar-default -->
			</div>
		</div>
		<!-- ======================== END NAVIGATION ====================-->
		<div class="container-fluid">
			<label>Testing</label>

		</div>
	</body>
</html>