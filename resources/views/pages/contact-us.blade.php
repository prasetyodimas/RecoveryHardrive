@extends('layout.default')
@section('content')
<h4>Contact</h4>
<div class="row">
    <div class="container content-section-a animated fadeIn">
            <h1 class="header-title section-heading"> Contact </h1>
                <hr>
                <div class="col-sm-12" id="parent">
                    <div class="col-sm-6">
                        <iframe width="100%" height="320px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJaY32Qm3KWTkRuOnKfoIVZws&key=AIzaSyAf64FepFyUGZd3WFWhZzisswVx2K37RFY" allowfullscreen></iframe>
                    </div>
                    <div class="col-sm-6">
                        <form action="form.php" class="contact-form" method="post">
                            <div class="form-group">
                              <input type="text" class="form-control" id="name" name="nm" placeholder="Name" required="" autofocus="">
                            </div>
                            <div class="form-group form_left">
                              <input type="email" class="form-control" id="email" name="em" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" id="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Mobile No." required="">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Type Your Message/Feedback here..." required=""></textarea>
                                <br>
                                <button class="btn btn-default btn-send"> <span class="glyphicon glyphicon-send"></span> Send </button>
                              </div>
                        </form>
                    </div>
                </div>
            <div class="container second-portion">
                <div class="row">
                <!-- Boxes de Acoes -->
                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="box">							
                        <div class="icon">
                            <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <div class="info">
                                <h3 class="title">MAIL & WEBSITE</h3>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp info@hardik.com
                                    <br>
                                    <br>
                                    <i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.gondhiya.com
                                </p>

                            </div>
                        </div>
                        <div class="space"></div>
                    </div> 
                </div>

                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="box">							
                        <div class="icon">
                            <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                            <div class="info">
                                <h3 class="title">CONTACT</h3>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+91)-97120 20865
                                    <br>
                                    <br>
                                    <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  (+91)-7567065254 
                                </p>

                            </div>
                        </div>
                        <div class="space"></div>
                    </div> 
                </div>

                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="box">							
                        <div class="icon">
                            <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <div class="info">
                                <h3 class="title">ADDRESS</h3>
                                <p>
                                     <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp Office no.33 , 2nd floor , Akshay  Commercial Complex,, Near Swaminarayan Gurukul, Gondal Rd,, Rajkot-360004
                                </p>
                            </div>
                        </div>
                        <div class="space"></div>
                    </div> 
                </div>		    
           </div>
        </div>
    </div>
</div>
@endsection

