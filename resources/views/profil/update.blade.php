<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>konser</title>
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
        
        <!--================Header Area =================-->
        
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Profile</h2>
                    <a class="navbar-brand logo_h" href="index">{{Auth::user()->profil->gender}}</a>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Profile</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================ About History Area  =================-->
        <div class="container mt-5">
            <h2>Halaman Update Profile</h2>
            <form method="POST" action="profile/{{$profil->id}}">
                @csrf
                @method('PUT')
                <p>Gender User : {{$profil->currentUser->gender}}</p>
                <p>Alamat User : {{$profil->currentUser->alamat}}</p>
                <div class="form-group">
                    <label for="ttl">Tempat Tanggal Lahir</label>
                    <input type="date" class="form-control" id="ttl" name="ttl" value="{{ $profil->ttl }}" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="text" class="form-control" id="gender" name="gender" value="{{ $profil->gender }}" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $profil->alamat }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
                        <!--================ About History Area  =================-->
                        
                        <!--================ Testimonial Area  =================-->
                        <section class="testimonial_area section_gap">
                            <div class="container">
                                <div class="section_title text-center">
                                    <h2 class="title_color">Testimoni dari Clients</h2>
                                    <p>Kumpulan Testimoni dari client yang pernah menggunakan jasa kami </p>
                                </div>
                                <div class="testimonial_slider owl-carousel">
                                    <div class="media testimonial_item">
                                        <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">
                                        <div class="media-body">
                                            <p>Sangat Terpercaya dan fasiitas lengkap pengalaman yang memuaskan</p>
                                            <a href="#"><h4 class="sec_h4">Muhammad Rama Putra</h4></a>
                                            <div class="star">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="media testimonial_item">
                                        <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">
                                        <div class="media-body">
                                            <p>Sangat Terpercaya dan fasiitas lengkap pengalaman yang memuaskan</p>
                                            <a href="#"><h4 class="sec_h4">Helvin Basama Tondang</h4></a>
                                            <div class="star">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media testimonial_item">
                                        <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">
                                        <div class="media-body">
                                            <p>Sangat Terpercaya dan fasiitas lengkap pengalaman yang memuaskan</p>
                                            <a href="#"><h4 class="sec_h4">Raikhan Wira Pramana</h4></a>
                                            <div class="star">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="media testimonial_item">
                                        <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">
                                        <div class="media-body">
                                            <p>Sangat Terpercaya dan fasiitas lengkap pengalaman yang memuaskan</p>
                                            <a href="#"><h4 class="sec_h4">Rosita Ananza</h4></a>
                                            <div class="star">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--================ Testimonial Area  =================-->
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
        <script src="{{asset('/template/js/popper.js')}}"></script>
        <script src="{{asset('/template/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/template/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('/template/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('/template/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{asset('/template/vendors/nice-select/js/jquery.nice-select.js')}}"></script>
        <script src="{{asset('/template/js/mail-script.js')}}"></script>
        <script src="{{asset('/template/js/stellar.js')}}"></script>
        <script src="{{asset('/template/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{asset('/template/js/custom.js')}}"></script>
    </body>
</html>