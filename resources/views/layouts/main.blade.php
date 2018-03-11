<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Xtreme Movie Theatres</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>
<div id="preloader"></div>

<!--==========================
  Header
============================-->
<header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <h1><a href="#intro" class="scrollto">XMT</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-has-children"><a href="#">See A Movie</a>
                    <ul>
                        @foreach($movies as $movie)
                        <li><a href="#">{{$movie->title}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="menu-has-children"><a href="#">Our Theatres</a>
                    <ul>
                        <li><a href="#">XMT Wheaton Mall 9</a></li>
                        <li><a href="#">XMT Mazza Gallerie</a></li>
                        <li><a href="#">XMT Academy 8</a></li>
                        <li><a href="#">XMT Center Park 8</a></li>
                    </ul>
                </li>
                <li class="menu-has-children"><a href="#">Food & Drinks</a>
                    <ul>
                        <li><a href="#">Snacks & Meals</a></li>
                        <li><a href="#">Coca-Cola Freestyle</a></li>
                    </ul>
                </li>
                <li class="menu-has-children"><a href="#">Gift Cards</a>
                    <ul>
                        <li><a href="#">Bulk Gift Cards</a></li>
                        <li><a href="#">E-Card Gift Cards</a></li>
                        <li><a href="#">Gold Gift Cards</a></li>
                    </ul>
                </li>
                <li><a href="#">
                        <span  class="fa-stack">
                    <i class="fa fa-search fa-stack-2x"></i>
                  </span>
                    </a>
                </li>
                <li><a href="#">|</a></li>
                <li><a href="#">
                        <span  class="fa-stack">
                    <i class="fa fa-film fa-stack-2x"></i>
                  </span>
                        Showtimes
                    </a>
                </li>


            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->
@yield('intro')

<!--==========================
    movie Section
  ============================-->
@yield('movie')


<main id="main">

    <!--==========================
      More at XMT Section
    ============================-->
@yield('info')

    <!--==========================
      Upcoming movies Section
    ============================-->
    @yield('upcoming')


</main>


<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>Xtreme Movie Theatres</h3>
                    <p>Xtreme Movie Theatres is a web app I (Samuel Essim) created  to exercise my web development skills.</p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">See a Movie</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Our Theatres</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Food & Drinks</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Gift Cards</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>About Me</h4>
                    <p>My name is Samuel Essim. I’m a freelance Full Stack developer. I build beautiful and usable web Applications using best practices and the latest W3C web standards. I specialize in front-end development, user experience using modern tools in the build process. I tasked myself to find a passion and that is how i got into Web Development. My goal is to work fully as a web developer in a team of amazing people who share the same passion, and work daily to fulfil it . I am ready to start working with you.</p>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Xtreme Movie Theatres</strong>. All Rights Reserved
        </div>
        <div class="credits mt-3">
            Made by Samuel Essim
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
<script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
<script src="{{asset('lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
