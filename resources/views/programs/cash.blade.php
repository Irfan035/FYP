

@extends('layouts.appUser')

@section('content')
    <head>
        <title>Hope | Cash</title>
    </head>
    <body>
    <div class="cashbanner-outer">

        <div class="cashbanner-inner" style="background-color: rgba(2, 27, 2, 0.608) ;">


        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="h1heading text-center text-light "> Cash</h1>

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
                        cash will distribute among the needy families in the form of a
                        Monthly income Support for those people  widows and orphans
                        education includes scholarships for the deserving kids who cannot support their study life .
                        loan of some thousand rupees without any interest for the sake of small business like  .

                    </p>

                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="p-5">
                        <img src="img/c.jpg" width="300"  alt="not found">
                    </div>


                </div>
            </div>

    </section>
        <section class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="p-1">
                            <h3 class="text-success">Education</h3>
                            <p class=" text-justify">
                                To say Education is important is an understatement. Education is a weapon to improve one’s life. It is probably the most important tool to change one’s life. Education for a child begins at home. It is a lifelong process that ends with death. Education certainly determines the quality of an individual’s life. Education improves one’s knowledge, skills and develops the personality and attitude. Most noteworthy, Education affects the chances of employment for people. Our mission to educate those children who cannot support their study life.

                            </p>
                        </div>


                    </div>
                    <div class="col-sm-12 col-md-6">


                        <div class="p-1">
                            <h3 class="text-success">Orphans</h3>
                            <p class="text-justify">
                                Where there is extreme poverty, there are always orphans and abandoned children. Political conflict, inefficient governance, corruption and poor access to care create an environment where children are most affected. Our goal is to provide sustainable and intensive support to the most marginalized and vulnerable children.
                                Give A New Life And Brighter Future For Children Who May Be Left Helpless And Alone.


                            </p>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="p-1">
                                <h3 class="text-success">Loan  </h3>
                                <p class="text-justify">
                                    People who want to start some sort of business but don’t have enough money can get loan for the business. Hope is providing loan of some thousand rupees (up to 25 thousand) without any interest for needy people those willing to start small business.

                                </p>
                            </div>


                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="p-1">
                                <h3 class="text-success">Monthly Income Support</h3>
                                <p class=" text-justify">
                                    You can support our cause with your fund or donation. Your gift will surely reduce, if not stop, the debilitating poverty among our less fortunate neighbors in the community by providing them food, safe water, quality health care, and educational achievement. Donate now!
                                </p>
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