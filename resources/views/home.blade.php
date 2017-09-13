<!DOCTYPE html>
<html lang="eng">
	<head>
		@include('includes.head')
	</head>
	<body>
		<div class="navbar-navigation">
			@include('layout.navbartop')
		</div>
		<div class="header-main">
	   	 	@include('includes.header')
	    </div>
	    <!-- Page Content -->
		<a  name="services"></a>
		<div class="content-section-a">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-6 col-sm-6">
		                <hr class="section-heading-spacer">
		                <div class="clearfix"></div>
		                <h2 class="section-heading">Recovery Hardisk</h2>
		                <p class="lead">Kami Melayani Jasa Recovery Data / Backup Data mulai dari PC / 
		                	Komputer & Laptop, Baik Kerusakan Secara Logikal ataupun Fisikal.
		                </p>
						<div class="nav-linked">
		                	<a href="{{url('/baseadmin')}}" class="btn btn-lg btn-default">Selengkapnya..</a>
		                </div>		            	
		            </div>
		            <div class="col-lg-5 col-lg-offset-1 col-sm-6">
		                <img class="img-responsive" src="{{asset('frontend/img/images/hardrive.png')}}" alt="">
		            </div>
		        </div>
		    </div><!-- /.container -->
		</div><!-- /.content-section-a -->

		<div class="content-section-b">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-6 col-sm-push-6  col-sm-6">
		                <hr class="section-heading-spacer">
		                <div class="clearfix"></div>
		                <h2 class="section-heading">Recovery Flash Disk</h2>
		                <p class="lead">Kami Melayani Jasa Recovery Data / Backup Data mulai dari PC / 
		                	Komputer & Laptop, Baik Kerusakan Secara Logikal ataupun Fisikal.
		                </p>
		                <div class="nav-linked">
		                	<a href="{{url('')}}" class="btn btn-lg btn-default">Selengkapnya..</a>
		                </div>
		            </div>
		            <div class="col-lg-5 col-sm-pull-6 col-sm-6">
		                <img class="img-responsive" src="{{asset('frontend/img/images/flashdisk.png')}}" alt="">
		            </div>
		        </div>
		    </div><!-- /.container -->
		</div> <!-- /.content-section-b -->

		<div class="content-section-a">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-6 col-sm-6">
		                <hr class="section-heading-spacer">
		                <div class="clearfix"></div>
		                <h2 class="section-heading">Recovery CD / DVD </h2>
		                <p class="lead">Kami Melayani Jasa Recovery Data / Backup Data mulai dari PC / 
		                	Komputer & Laptop, Baik Kerusakan Secara Logikal ataupun Fisikal.
		                </p>
						<div class="nav-linked">
		                	<a href="{{url('')}}" class="btn btn-lg btn-default">Selengkapnya..</a>
		                </div>		            	
		            </div>
		            <div class="col-lg-5 col-sm-6">
		                <img class="img-responsive" src="{{asset('frontend/img/images/cd-drive.png')}}" alt="">
		            </div>
		        </div>
		    </div><!-- /.container -->
		</div><!-- /.content-section-a -->

		<div class="content-section-b">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-6 col-sm-push-6  col-sm-6">
		                <hr class="section-heading-spacer">
		                <div class="clearfix"></div>
		                <h2 class="section-heading">Recovery Handphone</h2>
		                <p class="lead">Kami Melayani Jasa Recovery Data / Backup Data mulai dari PC / 
		                	Komputer & Laptop, Baik Kerusakan Secara Logikal ataupun Fisikal.
		                </p>
		                <div class="nav-linked">
		                	<a href="{{url('')}}" class="btn btn-lg btn-default">Selengkapnya..</a>
		                </div>
		            </div>
		            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
		                <img class="img-responsive" src="{{asset('frontend/img/images/phones.png')}}" alt="">
		            </div>
		        </div>
		    </div><!-- /.container -->
		</div> <!-- /.content-section-b -->		
        
        <div class="content-section-a content-price-list">
            <div class="form-group">
                <h2 class="text-center text-uppercase header-list-service">Paket Servis / Harga layanan</h2>
            </div>
            <div class="container">
                <div class="col-md-4 text-center">
                    <div class="box">
                        <div class="box-content">
                            <h1 class="tag-title">Paket 1</h1>
                            <hr />
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis sit amet neque.</p>
                            <br />
                            <a href="{{url('')}}" class="btn btn-lg btn-block btn-default">Selengkapnya..</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="box">
                        <div class="box-content">
                            <h1 class="tag-title">Paket 2</h1>
                            <hr />
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis sit amet neque.</p>
                            <br />
                            <a href="{{url('')}}" class="btn btn-lg btn-block btn-default">Selengkapnya..</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="box">
                        <div class="box-content">
                            <h1 class="tag-title">Paket 3</h1>
                            <hr />
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis sit amet neque.</p>
                            <br />
                            <a href="{{url('')}}" class="btn btn-lg btn-block btn-default">Selengkapnya..</a>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
        
        <!-- Prosedur Layanan -->
        <section  class="section how-it-works" id="how-it-works">
            <div class="container">
                <div class="row text-center">
                    <div class="how-it-works-heading">
                        <h1 class="section-heading text-uppercase">Prosedur Recovery Data</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 board">
                        <div class="board-inner">
                            <ul class="nav nav-tabs" id="myTab">
                                <div class="liner"></div>
                                <li class="active">
                                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab" title="">
                                      <span class="round-tabs one">
                                          <i class="icon icon-profile-male"></i>
                                      </span>
                                    </a></li>
                                <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" title="">
                                     <span class="round-tabs two">
                                         <i class="icon icon-pencil"></i>
                                     </span>
                                    </a>
                                </li>
                                <li><a href="#prototyping" aria-controls="prototyping" role="tab" data-toggle="tab" title="">
                                     <span class="round-tabs three">
                                          <i class="icon icon-layers"></i>
                                     </span> 
                                    </a>
                                </li>
                                <li><a href="#uidesign" aria-controls="uidesign" role="tab" data-toggle="tab" title="">
                                     <span class="round-tabs four">
                                          <i class="icon icon-aperture"></i>
                                     </span>
                                    </a>
                                </li>
                                <li><a href="#doner" aria-controls="doner" role="tab" data-toggle="tab" title="">
                                     <span class="round-tabs five">
                                          <i class="icon icon-tools-2"></i>
                                     </span> 
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home">
                                <h3 class="head text-center text-capitalize">Problem / Masalah Anda </h3>
                                <p class="narrow text-center">
                                    Pelanggan membawa atau mengirimkan media simpannya yang bermasalah. Data barang beserta nama, alamat, informasi kontak, dan keluhan pelanggan akan dicatat.
                                </p>
                                <p class="text-center">
                                    <a href="" class="btn btn-success btn-outline-rounded green"> Get Quote <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <h3 class="head text-center"> Media Penyimpanan / Storage Media</h3>
                                <p class="narrow text-center">
                                    Media simpan akan diperiksa kondisinya kemudian pelanggan akan diberitahu ongkos perbaikan yang harus dibayar setelah pengerjaan selesai.
                                    Setelah ongkos perbaikan disetujui pelanggan, media simpan akan mulai dikerjakan.
                                </p>
                                <p class="text-center">
                                    <a href="" class="btn btn-success btn-outline-rounded green"> Get Quote <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                                </p>

                            </div>
                            <div class="tab-pane fade" id="prototyping">
                                <h3 class="head text-center"> Tindakan Recovery / Penyelamatan Data Berhasil</h3>
                                <p class="narrow text-center">
                                    Setelah media simpan selesai dikerjakan, pelanggan akan diberitahu daftar file yang dapat diselamatkan. Pelanggan juga dapat melihat langsung file-file yang diselamatkan di kantor kami atau melalui Internet.
                                </p>
                                <p class="text-center">
                                    <a href="" class="btn btn-success btn-outline-rounded green"> Get Quote <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="uidesign">
                                <h3 class="head text-center">UI Design</h3>
                                <p class="narrow text-center">
                                    Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                                </p>

                                <p class="text-center">
                                    <a href="" class="btn btn-success btn-outline-rounded green"> Get Quote <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="doner">
                                <div class="text-center">
                                    <i class="img-intro icon-checkmark-circle"></i>
                                </div>
                                <h3 class="head text-center">Development</h3>
                                <p class="narrow text-center">
                                    Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                                </p>
                                <p class="text-center">
                                    <a href="" class="btn btn-success btn-outline-rounded green"> Get Quote <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
             
		<!-- Footer -->
	    <footer>
	        @include('includes.footer')
	    </footer>
    </body>
</html>

