<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Royal Hotel</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('/template/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('/template/vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{asset('/template/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('/template/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css')}}">
        <link rel="stylesheet" href="{{asset('/template/vendors/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('/template/vendors/owl-carousel/owl.carousel.min.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('/template/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('/template/css/responsive.css')}}">
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index"><img src="image/logo1.jpg" alt="Konser" width="80" height="80"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span cx`lass="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="gallery">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="transaction">Transaction</a></li>
                            <li class="nav-item"><a class="nav-link" href="about">About us</a></li>
                            <li class="nav-item active"><a class="nav-link" href="contact">contact</a></li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="blog.html">Detail</a></li>
                                        <li class="nav-item bg-danger">
                                            <a class="nav-link" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li> 
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
        
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Kontak Kami</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Contact</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area section_gap">
            <div class="container">
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.616612347297!2d101.41963196996998!3d0.576135262314809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ab596fa51bf9%3A0x9512f788d72fc31b!2sLancang%20Kuning%20University!5e0!3m2!1sen!2sid!4v1717913802293!5m2!1sen!2sid" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                
                <div class="row">
                    <div class="col-md-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Indonesia, Pekanbaru </h6>
                                <p>Unilak</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">00 (440) 9865 562</a></h6>
                                <p>Nomor</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">unilak@gmail.com</a></h6>
                                <p>Alamat Email</p>
                            </div>
                        </div>
                    </div>
                  
        </section>
        <!--================Contact Area =================-->
        
       <!--================ Facilities Area  =================-->
       <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
        </div>
<div class="container">
<div class="section_title text-center">
<h2 class="title_w">Fasilitas Konser</h2>
<p>Who are in extremely love with eco friendly system.</p>
</div>
<div class="row mb_30">
<div class="col-lg-4 col-md-6">
    <div class="facilities_item">
        <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
    </div>
</div>
<div class="col-lg-4 col-md-6">
    <div class="facilities_item">
        <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Kendaraan</h4>
        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
    </div>
</div>
<div class="col-lg-4 col-md-6">
    <div class="facilities_item">
        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Merch</h4>
        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
    </div>
</div>
<div class="col-lg-4 col-md-6">
    <div class="facilities_item">
        <h4 class="sec_h4"><i class="lnr lnr-car"></i>Ambulance</h4>
        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
    </div>
</div>
<div class="col-lg-4 col-md-6">
    <div class="facilities_item">
        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Security</h4>
        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
    </div>
</div>
<div class="col-lg-4 col-md-6">
    <div class="facilities_item">
        <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
    </div>
</div>
</div>
</div>
</section>
<!--================ Facilities Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('/template/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('/tenplate/js/popper.js')}}"></script>
        <script src="{{asset('/template/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/template/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('/template/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('/template/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{asset('/template/vendors/nice-select/js/jquery.nice-select.js')}}"></script>
        <script src="{{asset('/template/js/mail-script.js')}}"></script>
        <script src="{{asset('/template/js/stellar.js')}}"></script>
        <script src="{{asset('/template/vendors/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('/template/vendors/isotope/isotope-min.js')}}"></script>
        <script src="{{asset('/template/js/stellar.js')}}"></script>
        <script src="{{asset('/template/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <!--gmaps Js-->
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="{{asset('/template/js/gmaps.min.js')}}"></script>
        <!-- contact js -->
        <script src="{{asset('/template/js/jquery.form.js')}}"></script>
        <script src="{{asset('/template/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('/template/js/contact.js')}}"></script>
        <script src="{{asset('/template/js/custom.js')}}"></script>
    </body>
</html>