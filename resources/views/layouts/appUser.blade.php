<!DOCTYPE html>
<html lang="{{ app()->getLocale() }},en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} </title>

    <!-- Favicons -->
    <link href="{{URL::asset('user/img/favicon.png')}}" rel="icon">
    <link href="{{URL::asset('user/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/regular.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/solid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/brands.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap CSS File -->
    <link href="user/lib/bootstrap/css/bootstrap.min.css " rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{URL::asset('user/lib/font-awesome/css/font-awesome.min.css ')}}" rel="stylesheet">
    <link href="{{URL::asset('user/lib/animate/animate.min.css" rel="stylesheet ')}}">
    <link href="{{URL::asset('user/lib/ionicons/css/ionicons.min.css" rel="stylesheet')}}">
    <link href="{{URL::asset('user/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('user/lib/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{URL::asset('user/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->

    <link rel="stylesheet" href="{{URL::asset('user/css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{URL::asset('user/style.css')}}">
    <style>
        .donorbutton {
            position: relative;
            color: white;
            padding: 10px 10px;
            border-radius: 4px;

        }

        #mybutton {
            position: fixed;
            bottom: 20px;
            right: 0px;
            padding-bottom: 200px;
        }
    </style>
</head>
<body >
<div class="wrapper">

    <div id="body">

        <!-- Navbar -->
        <!--==========================
          Top Bar
        ============================-->
        <section id="topbar" class="d-none d-lg-block">
            <div class="container clearfix">
                <div class="contact-info float-left">
                    <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">hserve2savelife@gmail.com</a>
                    <i class="fa fa-phone"></i> 123-456-789
                </div>
                <div class="social-links float-right">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </section>

        <!--==========================
          Header
        ============================-->
        <header id="header">
            <div class="container">

                <div id="logo" class="pull-left">
                    <h1><a href="{{route('welcome')}}" class="scrollto"> <img src="img/logo.png"
                                                               style="height: 60px;width: 160px"></a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu ">
                        <li class="active"><a href="{{route('welcome')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About Us</a></li>

                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="{{route('Donation')}}">Donation <span class="caret"></span></a>
                            <ul class="dropdown-menu ">
                                <li ><a href="{{route('donor')}}">Donor</a></li>
                                <li><a href="{{route('recipient')}}">Recipient</a></li>
                                <li><a href="{{route('volunteer')}}">Volunteer</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('impact')}}">Impact</a></li>
                        <li><a href="{{route('partner')}}">Our Partner</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="{{route('cash')}}">Programs <span class="caret"></span></a>
                            <ul class="dropdown-menu ">
                                <li><a href="{{route('cash')}}">Cash</a></li>
                                <li><a href="{{route('clothes')}}">Clothes</a></li>
                                <li><a href="{{route('dowry')}}">Dowry</a></li>
                                <li><a href="{{route('food')}}">Food</a></li>
                                <li><a href="{{route('healthcare')}}">Health Care</a></li>
                                <li><a href="{{route('tents')}}">Tents</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>


                        <!-- Authentication Links -->
                        @guest
                            <li class="btn btn-sm btn-outline-primary  "> <a class=" p-1" href="{{ route('login') }}">Login</a></li>

                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                        {{ Auth::user()->first()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu active">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endguest
                                <li class="btn btn-sm btn-outline-success"><a class="p-1" href="{{route('donor')}}">Donate Now</a></li>
                    </ul>


                </nav><!-- #nav-menu-container -->
            </div>
        </header><!-- #header -->

        <!-- /.navbar -->

        <!-- Header Section end -->
      {{--  <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">


                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ route('Index') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('Index')}}">Home</a></li>

                        <li><a href="index.html#location">Location</a></li>

                        <li><a href="index.html#about">About</a></li>
                        <li><a href="{{ route('mydemo') }}">Demo</a></li>
                        <li>
                            <a rel="shadowbox[IOM]" href="https://www.itson.me/widget/carson_kitchen_menu" target="blank">Gift Cards</a>
                        </li>

                        <li><a href="menu.html">Menu</a></li>

                        <li><a href="las_vegas_group_dining.html">Group Dining</a></li>

                        <li><a href="reservations.html">Reservations</a></li>

                        <li><a href="https://www.facebook.com/CarsonKitchen/"><i class="ti-facebook"></i></a></li>

                        <li><a href="https://twitter.com/CarsonKitchen?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="ti-twitter-alt"></i></a></li>

                        <li><a href="https://www.instagram.com/carsonkitchen/?hl=en"><i class="ti-instagram"></i></a></li>
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('registration') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->roles()->first()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>--}}



      {{--      <section class="fullscreen image-bg overlay parallax">
                <!-- Image overlay opacity control is loacted on line 637 of the theme-gunmetal.css file - CW -->
                <div class="background-image-holder">
                    <img alt="las vegas food photography chris wessling" class="background-image" src="resources/Slider/carson_kitchen_main_dining.jpg"  style="height: 500px;width: 100%"/>
                </div>
                <div class="container v-align-transform">
                    <div class="row">

                        <!-- Logo comment out
                        <div class="col-sm-12 text-center">
                            <img alt="Logo" class="image-small" src="img/index/intro_logo_white.png" />
                        </div>
                        -->

                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
                <div class="align-bottom text-center">
                    <ul class="list-inline social-list mb24">
                        <li>
                            <a href="https://twitter.com/CarsonKitchen?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
                                <i class="ti-twitter-alt icon-sm"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/CarsonKitchen/">
                                <i class="ti-facebook icon-sm"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/carsonkitchen/?hl=en">
                                <i class="ti-instagram icon-sm"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>--}}
        <div class="main-container">
            <div id="mybutton">
                <a href="{{route('donor')}}" class="donorbutton btn btn-success">Donate Now</a>
            </div>
        @yield('content')
    </div>


    <!-- Footer Section -->
        <!-- Footer -->
        <br>
        <br>
        <br>

        <!-- /.content-wrapper -->

        <!--==========================
          Footer
        ============================-->
        <!--footer-->



    <footer  class="bg-dark">
            <div class="container">


                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-lg-3 col-ml-3 mt-4">

                            <a href="{{route('welcome')}}" class="scrollto"> <img src="img/logo.png"
                                                                                  style="height: 60px;width: 160px"></a>
                                    <p class="text-justify text-light"> The practice of charity means the voluntary giving of help to those
                                        in need, as a humanitarian act and HOPE is making charity process easy to do. </p>


                        </div>

                        <div class="col-md-3 col-sm-12 col-lg-3 col-ml-3 mt-4">

                                    <h4 class="card-title font-weight-bold text-success">Quick Links</h4>
                                    <nav clsas="nav">
                                        <a href="{{route('welcome')}}" class="nav-link text-light">HOME</a>

                                        <a href="{{route('Donation')}}" class="nav-link text-light ">DONATION</a>

                                        <a href="{{route('about')}}" class="nav-link text-light">ABOUT US</a>

                                        <a href="{{route('contact')}}" class="nav-link text-light">CONTACT US</a>

                                    </nav>

                        </div>
                        <div class="col-md-3 col-sm-12 col-lg-3 col-ml-3 mt-4">
                            <h4 class="card-title font-weight-bold text-success">Programs</h4>
                            <nav clsas="nav">

                                <a  class="nav-link text-light" href="{{route('clothes')}}">Clothes</a>
                                <a  class="nav-link text-light" href="{{route('dowry')}}">Dowry</a>
                                <a  class="nav-link text-light" href="{{route('food')}}">Food</a>
                                <a  class="nav-link text-light" href="{{route('healthcare')}}">Health Care</a>


                            </nav>

                        </div>

                        <div class="col-md-3 col-sm-12 col-lg-3 col-ml-3 mt-4">

                                    <h4 class="card-title  font-weight-bold text-success">Contact Us</h4><br>

                                    <p class="text-justify text-light"><span class="text-primary font-weight-bold"> Phone:</span>123-456-789</p>

                                    <p class="text-justify text-light"><span class="text-primary font-weight-bold">Mail:</span>  hserve2savelife@gmail.com</p>




                        </div>





                    </div>


                <div class="credits">
                    <!--
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
                    -->

                </div>
            </div>
        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
        <div class="copyright text-center bg-white">
            &copy; Copyright <strong>Hope</strong>. All Rights Reserved
        </div>

    </footer><!-- #footer -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <script>
            $(document).ready(function(){
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 50) {
                        $('#back-to-top').fadeIn();
                    } else {
                        $('#back-to-top').fadeOut();
                    }
                });
                // scroll body to 0px on click
                $('#back-to-top').click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 400);
                    return false;
                });
            });
        </script>

        <!-- JavaScript Libraries -->
        <script src="{{URL::asset('user/lib/jquery/jquery.min.js')}}"></script>
        <script src="{{URL::asset('user/lib/jquery/jquery-migrate.min.js')}}"></script>
        <script src="{{URL::asset('user/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{URL::asset('user/lib/easing/easing.min.js')}}"></script>
        <script src="{{URL::asset('user/lib/superfish/hoverIntent.js')}}"></script>
        <script src="{{URL::asset('user/lib/superfish/superfish.min.js')}}"></script>
        <script src="{{URL::asset('user/lib/wow/wow.min.js')}}"></script>
        <script src="{{URL::asset('user/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{URL::asset('user/lib/magnific-popup/magnific-popup.min.js')}}"></script>
        <script src="{{URL::asset('user/lib/sticky/sticky.js')}}"></script>

        <!-- Contact Form JavaScript File -->
        <script src="{{URL::asset('contactform/contactform.js')}}"></script>

        <!-- Template Main Javascript File -->
        <script src="{{URL::asset('js/main.js')}}"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </div>
    @yield('script')
</div>
</body>
</html>
