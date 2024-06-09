<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/favicon.png" type="image/png">
    <title>Konser</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/template/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/template/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('/template/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/template/vendors/owl-carousel/owl.carousel.min.css')}}">
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
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="index">Home</a></li> 
                        @auth
                        <li class="nav-item "><a class="nav-link" href="konser">Konser</a></li>
                        @endauth
                        <li class="nav-item"><a class="nav-link" href="gallery">Gallery</a></li>
                        @auth
                            
                        <li class="nav-item"><a class="nav-link" href="transaksi">Transaction</a></li>
                        @endauth
                        <li class="nav-item"><a class="nav-link" href="about">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact">contact</a></li>
                        @auth
                            
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="profile">Update Profile</a></li>
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
                        @endauth
                        @guest
                                <li class="nav-item"><a class="nav-link" href="/">Login</a></li>
                                @endguest
                    </ul>
                        </li> 
                        
                    </ul>
                </div> 
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->
    
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax"  data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h6>Thanks</h6>
                    <h2>Enjoy The Concert</h2>
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the<br> difference in price. You may see some for as low as $.17 each.</p>
                    <a href="#" class="btn theme_btn button_hover">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!--================Banner Area =================-->
    
    <!--================ Accomodation Area  =================-->
    @auth
        
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Buy Ticket</h2>
                <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/logo3.jpeg" alt="">
                            <a href="tiket" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="tiket"><h4 class="sec_h4">Konser Indie</h4></a>
                        <h5>$250<small>/show</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/logo3.jpeg" alt="">
                            <a href="tiket" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="tiket"><h4 class="sec_h4">Konser Rock</h4></a>
                        <h5>$200<small>/show</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/logo3.jpeg" alt="">
                            <a href="tiket" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="tiket"><h4 class="sec_h4">Konser Dangdut</h4></a>
                        <h5>$750<small>/show</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/logo3.jpeg" alt="">
                            <a href="tiket" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="tiket"><h4 class="sec_h4">Konser Pop</h4></a>
                        <h5>$200<small>/show</small></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endauth
    <!--================ Accomodation Area  =================-->
    
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
    
    <!--================ Booking Area  =================-->
    
    <!--================ Booking Area  =================-->
    
    <!--================ About History Area  =================-->
    
    <!--================ About History Area  =================-->
    
    <!--================ Testimonial Area  =================-->
   
    <!--================ Testimonial Area  =================-->
        
        <!--================ Testimonial Area  =================-->
        
        <!--================ Latest Blog Area  =================-->
        
        <!--================ Recent Area  =================-->
        
       
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('/template/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('/template/js/popper.js')}}"></script>
        <script src="{{asset('/template/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/template/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('/template/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('/template/js/mail-script.js')}}"></script>
        <script src="{{asset('/template/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{asset('/template/vendors/nice-select/js/jquery.nice-select.js')}}"></script>
        <script src="{{asset('/template/js/mail-script.js')}}"></script>
        <script src="{{asset('/template/js/stellar.js')}}"></script>
        <script src="{{asset('/template/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{asset('/template/js/custom.js')}}"></script>
    </body>
</html>