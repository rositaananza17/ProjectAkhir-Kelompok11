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
                            <li class="nav-item "><a class="nav-link" href="index">Home</a></li> 
                            <li class="nav-item active "><a class="nav-link" href="konser">Konser</a></li> 
                            <li class="nav-item"><a class="nav-link" href="gallery">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="transaction">Transaction</a></li>
                            <li class="nav-item"><a class="nav-link" href="about">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact">contact</a></li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="detail">Detail</a></li>
                                        <li class="nav-item bg-danger"><a class="nav-link" href="blog-single.html">Log Out</a></li>
                                    </ul>
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
                    <h2 class="page-cover-tittle"> Konser</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Konser</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================ About History Area  =================-->
        <div class="container mt-5">
            <a href="{{ route('konser.create') }}" class="btn btn-sm btn-primary mb-3">Tambah</a>
        
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Event</th>
                        <th scope="col">Artis</th>
                        <th scope="col">Venue</th> 
                        <th scope="col">Date</th> 
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($konser as $key => $item)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $item->event }}</td>
                        <td>{{ $item->artis }}</td>
                        <td>{{ $item->venue }}</td>
                        <td>{{ $item->date }}</td>
                        <td>
                            <a href="{{ route('konser.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('konser.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('konser.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
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