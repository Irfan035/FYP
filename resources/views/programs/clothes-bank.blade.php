

@extends('layouts.appUser')

@section('content')
    <head>
        <title>Hope | Cloths</title>
    </head>
    <body>

    <div class="clothbanner-outer">

        <div class="clothbanner-inner" style="background-color: rgba(2, 27, 2, 0.608) ;">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="h1heading text-center text-light "> Cloth Bank</h1>

                    <br>
                    <p class=" text-light font-weight-bold text-center  " style="font-size: large;">  Clothes are also distributed by a dedicated staff to orphanages,</p>
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
                        Clothes are also distributed by a dedicated staff to orphanages, old homes, schools and institutions for special children, other marginalized communities and low income neighborhoods.
                        The clothes are collected from families, they are repaired, washed / dry cleaned and packed. All these tasks are carried out by members of organization packed clothes are then given as gifts to the needy.

                        important aspect of Clothes Bank is the engagement of trans-genders in the processing of clothes collected from the donors. Clothes collected from the donors are sorted, repaired, stitched and packed by the employed at the organization.


                    </p>

                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="p-5">
                        <img src="img/poor-cloth.jpg" alt="not found">
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