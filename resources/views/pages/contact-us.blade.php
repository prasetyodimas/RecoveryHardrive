@extends('layout.default')
@section('content')
<h4>Contact</h4>

<div class="row">
    <div class="container content-section-a animated fadeIn">
      <h1 class="header-title section-heading"> Contact </h1>
        <hr>
        <div class="col-sm-12" id="parent">
            <div class="col-sm-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8275110027053!2d110.26323751477817!3d-7.808077194373366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af9db893af5e3%3A0xf2dc2f4bdc064da6!2sPerum+Griya+Kencana+Permai!5e0!3m2!1sid!2sid!4v1505547182711" width="550" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-6">
                <form action="form.php" class="contact-form" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="nm" placeholder="Nama" required="" autofocus="">
                    </div>
                    <div class="form-group form_left">
                      <input type="email" class="form-control" id="email" name="em" placeholder="Email" required="">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="No telepon" required="">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Alamat" required=""></textarea>
                        <br>
                        <button class="btn btn-default btn-lg"> <span class="fa fa-send"></span> Kirim Pesan </button>
                      </div>
                </form>
            </div>
        </div>
        <div class="container second-portion">
            <div class="row">
            <!-- Boxes de Acoes -->
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">
                    <div class="icon col-sm-12">
                        <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="info">
                            <h3 class="title">MAIL</h3>
                            <p>
                                <i class="fa fa-2x fa-envelope" aria-hidden="true"></i> dimasrecovery@gmail.com
                                <br>
                            </p>
                        </div>
                    </div>
                    <div class="space"></div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">
                    <div class="icon col-sm-12">
                        <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                        <div class="info">
                            <h3 class="title">CONTACT</h3>
                            <p>
                                <i class="fa fa-2x fa-mobile" aria-hidden="true"></i> &nbsp (+62)85-803-256-647
                                <br>
                                <br>
                                <i class="fa fa-2x fa-mobile" aria-hidden="true"></i> &nbsp  (+62)-21-3602-1788
                            </p>
                        </div>
                    </div>
                    <div class="space"></div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">
                    <div class="icon col-sm-12">
                        <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="info">
                            <h3 class="title">ADDRESS</h3>
                            <p>
                               <i class="fa fa-2x fa-map-marker" aria-hidden="true"></i> &nbsp Office Perum Griya Kencana Permai Block C4 No 13 Argorejo Sedayu Bantul
                            </p>
                        </div>
                    </div>
                    <div class="space"></div>
                </div>
            </div>
          </div>
    </div>
</div>
@endsection
