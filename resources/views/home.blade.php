<!DOCTYPE html>
<html lang="eng">
	<head>
		<title>Laravel Learning With Amtek.Lab</title>
		<meta name="csrf-token" content="{{csrf_token()}}">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/base.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/font-awesome-4.6.3/css/font-awesome.min.css')}}">
		<!-- JS -->
		<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	</head>
	<body id="app-style-body">
		<!-- ======================== NAVIGATION ====================-->
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-default" id="navi-subcustom">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Learning Laravel</a>
					</div>
					<ul class="nav navbar-nav" id="ul-subcustom">
						<li class="active" id="custom-active"><a href="#">Home</a></li>
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
		<section class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<form action="{{url('/simpan')}}" method="post">
						{{ csrf_field() }}
						<div class="col-md-4">
							<div class="panel panel-body custom-panel">
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="nama_user" class="form-control" required="">
								</div>
								<div class="form-group">
									<div class="row custom-radio">
										<div class="col-md-4">
											<label>Jenis Kelamin</label>
										</div>
										<div class="col-md-7">
											<label class="radio-inline">
												<div class="custom-area">
													<input class="custom-radiobtn" type="radio" name="jk" value="pria" required="">Laki-laki
												</div>
											</label>
											<label class="radio-inline">
												<div class="custom-area">
													<input class="custom-radiobtn" type="radio" name="jk" value="wanita" required="">Wanita
												</div>
											</label>
										</div>
									</div><!-- row-->
								</div>
								<div class="form-group">
									<label>No telp</label>
									<input type="number" name="no_telp" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Alamat</label>
									<textarea name="alamat_user" row="5" col="10" class="form-control" required=""></textarea>
								</div>
								<div class="button-navigation">
									<button class="btn btn-primary" type="submit">Registrasi</button>
								</div>
							</div>
						</div><!-- col-md-4 -->
					</form>
					<!-- sidebar right -->
					<div class="col-md-8">
						<h4>Data Member Amtek Lab</h4>
						<div class="table-responsive">
							<table class="table table-hover">
								<thead class="thead-inverse">
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Jenis Kelamin</th>
										<th>No telp</th>
										<th>Alamat</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php $no=0 ?>
									@foreach ($data as $users)
								<?php $no++ ?>
									<tr>
										<td>{{$no}}</td>
										<td>{{$users->nama_user}}</td>
										<td>{{$users->jenis_kelamin}}</td>
										<td>{{$users->alamat_user}}</td>
										<td>{{$users->notelp_user}}</td>
										<td><a href="">View</a> |
											<a href="">Delete</a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div><!-- table-responsive -->
					</div><!-- col-md-8 -->
				</div>
			</div>
		</section>
	</body>
	<footer class="footer-areas">
		<div class="container-fluid">
			<div class="footer-menu">
					<div class="col-md-3">
						<h4>From the BlogRd</h4>
						<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
							totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archi.
						</p>
					</div>
					<div class="col-md-3">
						<h4>From the BlogRd</h4>
						<p>It’s already been four years since we opened, so we decided 
						to make some updates to our branding, by rethinking</p>
					</div>
					<div class="col-md-4">
						<h4>From the BlogRd</h4>
						<p>It’s already been four years since we opened, so we decided 
						to make some updates to our branding, by rethinking</p>
					</div>
					<div class="col-md-2">
						<h4>From the BlogRd</h4>
						<img src="{{url('frontend/images/img.png')}}" style="width: 116px;height: auto;">
					</div>
			</div>
		</div>
	</footer>
</html>
