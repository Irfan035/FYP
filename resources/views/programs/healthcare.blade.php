

@extends('layouts.appUser')

@section('content')
    <head>
        <title>Hope | HealthCare</title>
    </head>
    <body>

    <div class="healthbanner-outer">

        <div class="healthbanner-inner" style="background-color: rgba(2, 27, 2, 0.608) ;">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="h1heading text-center text-light"> HealthCare</h1>

                    <br>
                    <p class="font-weight-bold text-center text-light" style="font-size: large;">Let's with us to save life of other, with
                        trusted platform.
                        you need, A trusted funding platform</p>
                    <br>
                    <div class="row">

                        <div class="col-md-4"></div>
                        <div class="col-md-4 ml-lg-5">
                            <div class="input-group mb-3 ml-lg-3 m-auto">
                                <a class="btn btn-success ml-5 mr-3" href="{{route('recipient')}}">Recipient</a>
                                <div class="input-group-append">
                                    <span><a class=" btn btn-primary" href="{{route('donor')}}">Donate Now</a> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"></div>

                    </div>
                </div>

            </div>
        </div>
        </div>
    </div>

    <!--login model-->


    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div id="scroll" class="modal-fage" data-simplebar="">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title text-center " style="color:#05659b" id="staticBackdropLabel">LOGIN </h3>

                        <br>
                        <div class="text-center">
                            <p>New to Hope.?<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#exampleModal"
                                               style="color:#05659b;" class="font-weight-bold"> Create an Account</a></p>
                        </div>


                        <br>
                        <form>
                            <div class="form-group">

                                <label for="exampleInputEmail1" class="font-weight-bold" style="color:#05659b;"><i
                                            class="fa fa-envelope"></i>.Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                    else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold" style="color:#05659b;"><i
                                            class="fa fa-unlock-alt"></i>.Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember Password</label>
                                <div class="text-right" style="margin-top: -23px;"> <label
                                            class="form-check-label text-right font-weight-bold" for="exampleCheck1"><a href="#"> Forgot
                                            Password</a></label> </div>

                            </div>
                            <button type="button" class="btn btn-outline-light btn-lg btn-primary"
                                    style=" border-radius: 10%; background-color: #05659b;">Send</button>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>




    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <p class="p-5 text-justify">
                        Healthcare system of Pakistan consists of private and public sector.
                        The private sector serves nearly 70% of the population and 30% by the public sector.
                        As per Pakistan constitution provision of health is the responsibility of provincial governments except in federally administered areas.
                        Pakistan’s total health expenditures amounted to 3.9 per cent of gross domestic product (GDP) in 2005, and per capita health expenditures were 49.

                        The government provided 24.4 per cent of total health expenditures, with the remainder being entirely private, out of pocket expenses.
                        Millennium Development Goals are eight international development goals that all 192 United Nations member states and at least 23 international
                        organisations have agreed to achieve by the year 2015
                        Poverty is a curse. We all know that Pakistan is a developing country.
                        Most of our population is living their lives under the worst circumstances.
                        According to some reports more than 40% of the population of Pakistan lives below the poverty line, which means
                        that 4 out of 10 Pakistanis are living in acute poverty.

                    </p>

                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="p-5">
                        <img src="img/poor-healthcare.jpg" height="450" width="auto" alt="not found">
                    </div>


                </div>
            </div>





        </div>

    </section>

    <section class="bg-light">
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
    </section>
    </body>

@endsection