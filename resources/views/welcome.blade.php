@extends('layouts.appUser')

@section('content')


    <!--add here slider-->
    <div class="">

        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/b1.jpg" alt="Los Angeles" width="1400" height="500">
                </div>
                <div class="carousel-item">
                    <img src="img/b2.jpg" alt="Chicago" width="1400" height="500">
                </div>
                <div class="carousel-item">
                    <img src="img/b3.jpg" alt="New York" width="1400" height="500">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

    </div>
    <!--slider end-->

    <!--our project-->
    <div class="project">
        <div class="ourpro-div-inner bg-light">
            <br>
            <h1 class="text-center text-success    h1heading">OUR PROJECT</h1>
            <h4 class="text-center lead text-dark">Some latest projects </h4>
            <br>




            <div class="container">


                <div class="card-deck lg">


                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="p-2  bg-white text-left shadow " >
                                <div class="">
                                    <i class="fas fa-money-bill-alt fa-2x"></i>

                                    <h5 class="card-title pt-2 text-primary text-bold">CASH</h5>
                                    <span class=" text-justify lead ">cash will distribute among the needy families in the form of a
Monthly income Support for those people  widows and orphans...</span>
                                    <span>
                                    <a href="{{route('cash')}}"> Read More  </a>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="p-2 bg-white text-left shadow">
                                <i class="fab fa-buy-n-large fa-2x"></i>
                                <h5 class="card-title pt-2 text-primary text-bold" >DOWERY</h5>
                                <span class="card-text text-justify lead ">Dowry deaths are deaths of married women who are murdered or driven to suicide by continuous harassment and torture...</span>
                                <span>
                                    <a href="{{route('dowry')}}"> Read More  </a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4  col-sm-12">
                            <div class="p-2 bg-white text-left shadow">

                                <i class="fas fa-briefcase-medical fa-2x"></i>
                                <h5 class="card-title pt-2 text-primary text-bold">HEALTH CARE</h5>
                                <span class="card-text text-justify lead ">
                                  Healthcare system of Pakistan consists of private and public sector.
The private sector serves nearly 70% of the population and 30% ...   </span>

                                <span>
                                    <a href="{{route('healthcare')}}"> Read More  </a>
                                </span>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="mt-4 card-deck lg">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="p-2  bg-white text-left shadow " >
                                <div class="">
                                    <i class="fas fa-cloud-meatball fa-2x"></i>

                                    <h5 class="card-title pt-2 text-primary">FOOD</h5>
                                    <span class=" text-justify lead ">The World Food Program states that 43 percent of the country’s population remains food insecure, , and out of that, 18 percent of people... </span>
                                    <span>
                                    <a href="{{route('food')}}"> Read More  </a>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="p-2 bg-white text-left shadow">
                                <i class="fab fa-creative-commons-by fa-2x"></i>
                                <h5 class="card-title pt-2 text-bold text-primary">CLOTH BANK</h5>
                                <span class="card-text text-justify lead ">Clothes are also distributed by a dedicated staff to orphanages, old homes, schools and institutions for special children, other ...</span>
                                <span>
                                    <a href="{{route('clothes')}}"> Read More  </a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="p-2 bg-white text-left shadow">
                                <i class="fas fa-campground fa-2x"></i>

                                <h5 class="card-title pt-2 text-bold text-primary">TENTS</h5>
                                <span class="card-text text-justify lead ">tents needed during emergency like Flood, earth quake like On October 8, 2005, at 8:50 a.m. local time, a magnitude </span>
                                <span>
                                    <a href="{{route('tents')}}"> Read More  </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            <br>
            <div class="row">

                <div class="col-md-4"></div>
                <div class="col-md-4 ml-lg-5">
                    <div class="input-group mb-3 ml-lg-3 m-auto">
                        <a class="btn btn-outline-success ml-3 mr-3" href="{{route('recipient')}}">Recipient</a>
                        <div class="input-group-append">
                            <span><a class=" btn btn-outline-primary" href="{{route('donor')}}">Donate Now</a> </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>

            </div>

            </div>
            <br>
        </div>





    </div>
    <!--our partner-->
    <div class="ourprat-div-up">
        <div class="ourprat-div-inner" style="background-color: rgba(2, 27, 2, 0.808) ;">
            <br>
            <h3 class="text-light text-center">Our Corporate Partners</h3>
            <p class="text-center text-light lead  h6">More then 20 compnies that are supporting <span
                        style="color:red;">HOPE</span> for poor or needed peoples benifits.</p>
            <br>
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="img-area"><img src="img/bata.png" class=" img-fluid  d-block w-100" alt="...">
                        </div>

                        <div class="carousel-caption">
                            <br>
                            <h5 class="lead">Bata Shoes Compeny</h5>

                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="img-area"><img src="img/haier.png" class="img-fluid   d-block w-100" alt="..."></div>
                        <div class="carousel-caption">
                            <br>
                            <h5 class="lead">
                                Brands of the World
                                Haier | Brands of the World</h5>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="img-area"><img src="img/lucky.png" class="img-fluid   d-block w-100" alt="..."></div>
                        <div class="carousel-caption">
                            <br>
                            <h5 class="lead">Lucky Cement LTD</h5>

                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div><br>
            <div class="text-center"> <a href="{{route('partner')}}" class="">
                    <p class=" btn btn-light text-center font-weight-bold h5 ">View All <i class="fa fa-arrow-right"></i></p>
                </a></div>

            <br>
        </div>
    </div>
        <!--our partner ends-->
    {{--gallery--}}
 <div class=" container mt-5 mb-5">
     <h1 class="text-center text-success    h1heading">GALLERY</h1>
     <br>

    <div class="row blog">
        <div class="col-md-12">
            <div id="blogCarousel" class="carousel slide " data-ride="carousel">

                <ol class="carousel-indicators  ">


                     <li class=""data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#blogCarousel" data-slide-to="1"></li>
                    <li data-target="#blogCarousel" data-slide-to="2"></li>

                </ol>

                <!-- Carousel items -->
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3">

                                    <img src="img\f (2).jpg" width="250" height="220" alt="Image" style="max-width:100%;">

                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="img\f (4).jpg" width="250" height="220" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="img\f (5).jpg" width="250" height="220" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="img\f (6).jpg" width="250" height="220" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="img\t1.jpg" width="250" height="220" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="img\t2.jpg" width="250" height="220" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="img\t3.jpg" width="250" height="220" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="img\t4.jpg" width="250" height="220" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="img\m (6).jpg" width="250" height="220" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="img\m (1).jpg" width="250" height="220" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="img\m (5).jpg" width="250" height="220" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="img\m (9).jpg" width="250" height="220" alt="Image" style="max-width:100%;">
                                </a>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->


                </div>
                <!--.carousel-inner-->
            </div>
            <!--.Carousel-->

        </div>
    </div>
    </div>
        <!--banner-->

        <div style="  background-image: url('img/banner.jpg'); background-repeat: no-repeat;background-size: cover;">
            <div style="background-color:   #44474b; opacity: 0.8">

                <div class="container">
                    <br><br>
                    <div class="card" style="width: 50rem; background:transparent">
                        <div class="card-body">
                            <h5 class="card-title text-success font-weight-bold" style="font-size: 40px;">FIGHT AGAINST POVERTY</h5>
                            <p class="card-text text-light" style="font-size: 30px;">We make it easy, quick, and safe to support
                                people on the ground who understand needs in their communities better than anyone else.</p>
                            <br><a href="{{route('donor')}}" class="btn btn-success text-light font-weight-bold ">DONATE NOW <i
                                        class="fa fa-gift"></i></a>
                        </div>
                    </div>
                    <br><br>
                </div>


            </div>
        </div>

        <!--how we work-->

        <div class="howwework-div-up bg-light ">
            <div class="howweork-div-inner">
                <br>
                <h1 class="text-center text-primary font-weight-bold h1heading">HOW WE WORK</h1>
                <br>



                <div class="container">


                    <div class="card-deck lg">


                        <div class="row mb-4">
                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <div class="card card-back-image" style="background-image: url('img/howwework1.jpg');">
                                    <div class="howwework-inner">
                                        <div class="card-body ">

                                            <h5 class="card-title text-success font-weight-bold">NONPROFITS <i class="fa fa-check"></i></h5>

                                            <p class="card-text text-light text-justify" style="font-family: sans-serif;"><br>Nonprofits
                                                around the world apply and join GlobalGiving to access more funding, to build new skills, and to
                                                make important connections.</p>
                                            <br>
                                            <a href=" {{route('whyjoin')}}" class="btn colorbtn">NONPROFITS</a> <br><br>

                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <div class="card card-back-image" style="background-image: url('img/howwework2.jpg');">
                                    <div class="howwework-inner">
                                        <div class="card-body">

                                            <h5 class="card-title text-success font-weight-bold">DONATION <i class="fa fa-gift"></i></h5>
                                            <br>
                                            <p class="card-text text-light" style="font-family:sans-serif">People like you give what you can
                                                to your favorite projects; you feel great when you get updates about how your money is put to
                                                work by trust.</p>
                                            <br> <a href="{{route('Donation')}}" class="btn colorbtn">DONATION</a>

                                            <br><br>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <div class="card card-back-image" style="background-image: url('img/howwework3.jpg');">
                                    <div class="howwework-inner">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold text-success">OUR IMPACT<i
                                                        class="fas fa-globe-americas"></i></h5>
                                            <br>
                                            <p class="card-text text-justify text-light " style="font-family: sans-serif;">Nonprofits have the
                                                funding they need to listen to feedback and try out new ways to work; communities all over the
                                                globe get more awesome!</p>
                                            <br><a href="{{route('impact')}}" class="btn colorbtn">Our Impact</a>
                                            <br><br>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>





        </div>



    </body>

@endsection