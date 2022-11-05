 <!doctype html>
 <html class="no-js" lang="en">

 <!-- Mirrored from staging2.webdesigntexas.us/dogmilo-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Nov 2022 22:34:54 GMT -->

 <head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>DogMilo HTML Template</title>
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

     <link rel="stylesheet" href="{{ @Vite::asset('resources/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ @Vite::asset('resources/css/animate.min.css') }}">
     <link rel="stylesheet" href="{{ @Vite::asset('resources/css/magnific-popup.css') }}">
     <link rel="stylesheet" href="{{ @Vite::asset('resources/css/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ @Vite::asset('resources/css/owl.carousel.min.css') }}">
     <link rel="stylesheet" href="{{ @Vite::asset('resources/css/swiper.min.css') }}">
     <link rel="stylesheet" href="{{ @Vite::asset('resources/css/default.css') }}">
     <link rel="stylesheet" href="{{ @Vite::asset('resources/css/style.css') }}">
     <link rel="stylesheet" href="{{ @Vite::asset('resources/css/responsive.css') }}">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 </head>

 <body>
     <!-- preloader -->
     <div id="preloader">
         <div id="loading-center">
             <div class="loader">
                 <div class="loader-outter"></div>
                 <div class="loader-inner"></div>
             </div>
         </div>
     </div>
     <!-- preloader-end -->
     <!--header-start-->
     <header class="top-header">
         <div class=container>
             <div class=row>
                 <div class="col-sm-6">
                     <div class="top-left">
                         <ul class="top">
                             <li><a href="#"><i class="fa fa-envelope"></i></a> <span>info@example.com</span></li>
                         </ul>
                         <ul class="top">
                             <li><a href="#"><i class="fa fa-phone"></i></a><span>+1(817)901 3377</span></li>
                         </ul>
                     </div>

                 </div>
                 <div class="col-sm-6">
                     <div class="social-icon">
                         <ul class="clearfix">
                             <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                             <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                             <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                             <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                             <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </header>
     <header class="header">
         <div class="container">
             <nav class="navbar navbar-expand-lg navbar-light bg-light">
                 <a class="navbar-brand" href="index-2.html"><img src="{{ @Vite::asset('resources/images/logo.png') }}"
                         alt=""></a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                     aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                         <li class="nav-item {{ Route::current()->getName() == '' ? 'active' : '' }}">
                             <a href="/">Inicio</a>
                         </li>
                         <li class="nav-item">
                             <a href="about-us.html">About</a>
                         </li>
                         <li class="nav-item {{ Route::current()->getName() == 'adoptar' ? 'active' : '' }}">
                             <a href="{{ route('adoptar') }}">Adopción</a>
                         </li>
                         @guest
                             <li class="nav-item">
                                 <a href="{{ route('register') }}">Registrar</a>
                             </li>
                         @endguest
                     </ul>
                     @guest
                         <a href="{{ route('login') }}" class="get-btn">Iniciar sesión</a>
                     @else
                         <a href="{{ route('login') }}" class="get-btn" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                     @endguest
                 </div>
             </nav>
         </div>
     </header>
     <!--header-end-->
     <!--minsection-start-->

     @yield('content')
     <section class="footer">
         <div class="container">
             <div class="row">
                 <div class="col-sm-3">
                     <div class="footer-one">
                         <h4>Get In Touch</h4>
                         <span>Have a Question for us?<br>we'll answer your problem here</span>
                         <div class="social-icon1">
                             <ul class="clearfix">
                                 <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                                 <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                 <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                 <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                 <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                             </ul>
                         </div>
                     </div>

                 </div>
                 <div class="col-sm-2">
                     <div class="footer-one">
                         <h4>Support</h4>
                         <ul class="footer-list">
                             <li><a href="#">Contact Us</a></li>
                             <li><a href="#">Online Chat</a></li>
                             <li><a href="#">Whatsapp</a></li>
                             <li><a href="#">Telegram</a></li>
                             <li><a href="#">Snapchat</a></li>

                         </ul>

                     </div>
                 </div>
                 <div class="col-sm-2">
                     <div class="footer-one">
                         <h4>About</h4>
                         <ul class="footer-list">
                             <li><a href="#">About Us</a></li>
                             <li><a href="#">Blog</a></li>
                             <li><a href="#">Career</a></li>
                             <li><a href="#">Job</a></li>
                             <li><a href="#">In press</a></li>

                         </ul>

                     </div>
                 </div>
                 <div class="col-sm-2">
                     <div class="footer-one">
                         <h4>Faq</h4>
                         <ul class="footer-list">
                             <li><a href="#">Account</a></li>
                             <li><a href="#">Order</a></li>
                             <li><a href="#">Delivery</a></li>
                             <li><a href="#">Payment</a></li>
                             <li><a href="#">Return</a></li>

                         </ul>

                     </div>
                 </div>
                 <div class="col-sm-3">
                     <div class="footer-one">
                         <h4>Contact Me</h4>

                         <div class="icon">
                             <i class="fa fa-location-arrow"></i>
                             <span>4500 Mercantile plaza,suite 300,fort worth,TX,76137,USA</span>
                         </div>
                         <div class="icon">
                             <i class="fa fa-phone"></i>
                             <span>+1(817)901 3377</span>
                         </div>
                         <div class="icon">
                             <i class="fa fa-envelope"></i>
                             <span>info@example.com</span>
                         </div>


                     </div>
                 </div>
             </div>
         </div>
         <hr>
         <div class="copy">
             <p>Copyright 2022 by<span> AttdogMilo.com</span></p>
         </div>
     </section>
     <!--footer-end-->
     <div id="myModal" class="modal fade" role="dialog">
         <div class="modal-dialog">

             <!-- Modal content-->
             <div class="modal-content">
                 <div class="modal-header">
                     <h4>Video</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                 </div>
                 <div class="modal-body">
                     <iframe height="315" src="https://www.youtube.com/embed/rgMRPqGa8aQ"
                         title="YouTube video player"
                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                         allowfullscreen></iframe>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 </div>
             </div>

         </div>
     </div>


     <!-- JS here -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
     </script>
     <script src="{{ @Vite::asset('resources/js/jquery-3.6.0.min.js') }}"></script>
     <script src="{{ @Vite::asset('resources/js/bootstrap.min.js') }}"></script>
     <script src="{{ @Vite::asset('resources/js/isotope.pkgd.min.js') }}"></script>
     <script src="{{ @Vite::asset('resources/js/jquery.magnific-popup.min.js') }}"></script>
     <script src="{{ @Vite::asset('resources/js/owl.carousel.min.js') }}"></script>
     <script src="{{ @Vite::asset('resources/js/swiper.min.js') }}"></script>
     <script src="{{ @Vite::asset('resources/js/main.js') }}"></script>
     @yield('scripts')

 </body>

 <!-- Mirrored from staging2.webdesigntexas.us/dogmilo-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Nov 2022 22:35:13 GMT -->

 </html>
