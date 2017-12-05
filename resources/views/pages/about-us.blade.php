@extends('layout.default')
@section('content')
 <!-- Page Content -->
<a  name="services"></a>
<div class="content-section-a">
    <div class="container">
        <div class="row container-about-us">
            <div class="col-lg-7 col-sm-6 about-us-description">
                <div class="clearfix"></div>
                <h2 class="section-heading">About Us</h2>
                <p class="lead">
                    {{Theme::titleApps()}} adalah jasa penyelamatan data (data recovery service) yang berbasis di Yogyakarta. Kami menangani kasus-kasus
                    kehilangan data (data loss) dengan teknologi penyelamatan data terkini. Kami dapat menyelamatkan data dari berbagai jenis media simpan dengan harga terjangkau.
                    Layanan kami terjamin. Kami memberikan garansi atas perbaikan yang kami lakukan. Kerahasiaan data
                    Anda selalu kami jamin. Apabila data Anda tidak terselamatkan, Anda tidak perlu membayar biaya apapun.
                    Selain itu, data Anda kami simpan selama seminggu sekiranya terjadi sesuatu pada data Anda yang baru
                    saja terselamatkan.
                    Apabila Anda sedang mengalami kehilangan data, jangan ragu-ragu, segeralah menghubungi kami. Kami tidak mengenakan biaya pemeriksaan, dan setiap biaya dan tindakan selalu kami konfirmasikan terlebih dahulu. Mengoperasikan atau "mencoba memperbaiki" media simpan yang mengalami kehilangan data dapat memperparah kerusakannya, atau bahkan membuat datanya tidak dapat diselamatkan lagi.
                <a target="_blank" href=""></a></p>
            </div>
            <div class="wrraper-about__brand col-lg-4 col-lg-offset-1 col-sm-6">
                <img class="img-responsive img-thumbnail brand-img__about" src="{{asset('frontend/fronthemes/asset-images/logo/about-ico.png')}}" alt="">
            </div>
        </div>
    </div><!-- /.container -->
</div><!-- /.content-section-a -->
@endsection
