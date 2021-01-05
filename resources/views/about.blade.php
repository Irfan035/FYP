

@extends('layouts.appUser')

@section('content')
    <head>
        <title>Hope | About Us</title>
    </head>
    <body>

    <section class="banner" style="background-image: url('img/aboutus-header.jpg'); height: 500px;">

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="h1heading btn btn-light"> ABOUT US</h1>

                    <br>
                    <p class="font-weight-bold text-dark" style="font-size: large;">Let's with us to save life of other, with
                        trusted platform.
                        you need, A trusted funding platform</p>
                    <br>
                    <a href="{{route('volunteer')}}" class="nav-item nav-link btn  navbtn colorbtn  " >
                        Join Us
                    </a>
                </div>

            </div>
        </div>

    </section>

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





    <!-- login-model-end-->
    <!--sign up -model -->



    <!--sign up -model ends -->

    <section id="catagoryall" style="background-color: white;">
        <div class="container">
            <br>
            <div class="row">


                <div class="text-center font-weight-boldead col-sm-6 offset-sm-2 offset-lg-3 offset-md-3">
                    <br><br>
                    <p class="h4 lead"> Hope is a nonprofit that helps the poor and needy anywhere in Pakistan, while providing
                        local organizations the tools, training, and support they need to become more effective.
                    </p><br>
                    <h5 class="text-center font-weight-bold" style="color:#05659b">
                        <i class="fa fa-check"></i>
                        <i class="fa fa-check"></i>
                        <i class="fa fa-check"></i>
                    </h5>

                    <br>
                </div>
            </div>
        </div>
        </div>

    </section>



    <section style="background-color: rgb(249, 251, 252);">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 style="padding-top: 50px; color:#05659b;" class="text-center">DONATION IS EASY AND SAFE</h1><br>
                    <h5 class="text-center font-weight-bold" style="color:#05659b">
                        <i class="fa fa-check"></i>
                        <i class="fa fa-check"></i>
                        <i class="fa fa-check"></i>
                    </h5>

                    <br>
                    <div class="text-center lead col-sm-6 offset-sm-2 offset-lg-3 offset-md-3">
                        <p class="h4 lead">We help donors make safe and easy donation in pakistan.
                            Hope offer a donation satisfaction guarantee.
                        </p><br><br>
                        <a href="{{route('welcome')}}" class="  btn whyjoinbtn">Explor Projects. . .</a>
                        <br><br><br><br>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <section style="background-color: white">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1 style="padding-top: 50px; color:#05659b; margin-top: 10px;" class="text-center"> HOPE'S MISSION</h1><br>
                    <p class="h4 lead text-center"> Hope's mission , to help the poor and needy people all around the pakistan.
                        and ensuring that your charity is in safe hands, used for really needy or poor people
                    </p>
                </div>

                <div class="col-sm-6 ">
                    <img src="img/logo.png" style="height: 300px; width: 500px">


                </div>


            </div>
        </div>

    </section>



    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row" style="background-color: antiquewhite;">
                        <div class=" col-sm">
                            <br>
                            <h1 class="aboutus-slider">PREVENT COVID-19</h1>
                            <br>
                        </div>
                    </div>
                </div>
            </div>


            <div class="carousel-item  ">
                <div class="container">
                    <div class="row" style="background-color:aquamarine;">
                        <div class="col-sm">
                            <br>
                            <h1 class="aboutus-slider text-center">GIFT AN EDUCATION</h1>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item  ">
                <div class="container">
                    <div class="row" style="background-color :burlywood;">
                        <div class="col-sm">
                            <br>
                            <h1 class="aboutus-slider text-center">GIFT & FOOD STREET CHILDREN</h1>
                            <br>
                        </div>
                    </div>
                </div>
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


    <section style="background-color: rgb(249, 251, 252);">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 style="padding-top: 50px; color:#05659b;" class="text-center">LEARN MORE</h1><br>
                    <h5 class="text-center font-weight-bold" style="color:#05659b">
                        <i class="fa fa-check"></i>
                        <i class="fa fa-check"></i>
                        <i class="fa fa-check"></i>
                    </h5>


                </div>
            </div>


            <div class="card-deck lg">


                <div class="row">
                    <div class="col-md-6 col-lg-4 col-sm-12 cards">
                        <div class="card card-back-image"
                             style="border-radius: 0px 0px 100px 100px; background-image: url(img/how-its-work.jpg);">
                            <div class="howwework-inner" style="border-radius: 0px 0px 100px 100px;">
                                <div class="card-body " style="border-radius: 0px 0px 100px 100px;">

                                    <h5 class="card-title text-warning font-weight-bold">HOW ITS WORK <i class="fa fa-check"></i></h5><br>
                                    <p class="card-text text-light text-justify d-inline  " style="font-family: sans-serif;"><br>Hope's
                                        mission , to help the poor and needy people all around the pakistan... </p>

                                    <div class="text-center d-inline"><a href="#">
                                            <p class="h6">Read More</p>
                                        </a></div> <br>

                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4 col-sm-12 cards">
                        <div class="card card-back-image"
                             style="border-radius: 0px 0px 100px 100px; background-image: url(img/our-team.jpg);">
                            <div class="howwework-inner" style="border-radius: 0px 0px 100px 100px;">
                                <div class="card-body " style="border-radius: 0px 0px 100px 100px;">

                                    <h5 class="card-title text-warning font-weight-bold">OUR TEAM <i class="fa fa-check"></i></h5><br>
                                    <p class="card-text text-light text-justify d-inline" style="font-family: sans-serif;"><br>Hope has a
                                        casual work atmosphere where everyone's opinions and ideas are valued... </p>

                                    <div class="text-center d-inline"><a href="#">
                                            <p class="h6">Read More</p>
                                        </a></div> <br>

                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="col-md-6 col-lg-4 col-sm-12 cards">
                        <div class="card card-back-image"
                             style="border-radius: 0px 0px 100px 100px; background-image: url(img/explore-projects.jpg);">
                            <div class="howwework-inner" style="border-radius: 0px 0px 100px 100px;">
                                <div class="card-body " style="border-radius: 0px 0px 100px 100px;">

                                    <h5 class="card-title text-warning font-weight-bold">EXPLORE PROJECTS <i class="fa fa-check"></i></h5>
                                    <br>
                                    <p class="card-text text-light text-justify d-inline" style="font-family: sans-serif;"><br>You feel
                                        great when you get updates about how your money is put to work by trusted organizations...</p>

                                    <div class="text-center d-inline"><a href="#">
                                            <p class="h6">Read More</p>
                                        </a></div> <br>

                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>


        </div>
        <br><br><br>
    </section>




    </body>

@endsection