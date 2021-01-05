

@extends('layouts.appUser')

@section('content')
<head>
    <title>Hope | Our Impact</title>

</head>
<body>
<section class="banner" style="background-image: url('img/our-impact-header.jpg');">

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="h1heading btn btn-light"> OUR IMPACT</h1>

                <br>
                <p class="font-weight-bold text-light" style="font-size: large;">Let's with us to save life of other, with
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

<div class="modal fade scrolling" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title text-center " style="color:#05659b" id="staticBackdropLabel">Create an Account</h3>

                <div class="text-center">
                    <p>Already Have an Account?<a href="#" data-dismiss="modal" data-toggle="modal"
                                                  data-target="#staticBackdrop" style="color:#05659b;" class="font-weight-bold"> Login</a></p>
                </div>


                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4"> First Name</label>
                            <input type="text" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4"> Last Name</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress"><i class="fa fa-envelope"></i>. Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress"><i class="fa fa-unlock-alt"></i>. Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress"><i class="fa fa-unlock-alt"></i>. Confirm Password</label>
                        <input type="password" class="form-control">
                    </div>


            </div>
            <div class="form-group" style="padding-left: 20px;">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div style="padding-left: 20px;"><button type="button" class="  btn btn-outline-light btn-lg btn-primary"
                                                     style=" width:104px; border-radius: 10%; background-color: #05659b;">Sign Up</button>
                <br><br>
                </form>
            </div>


        </div>

    </div>
</div>
</div>

<!--sign up -model ends -->

<section class="bg-dark">
    <div class="container-fulid bg-dark">
        <div class="row">

            <div class="col-sm">
                <div class="card card-back-image" style="  background-image: url(img/our-impact-header2.jpg);">
                    <div class="ourimpact-inner">
                        <br><br><br><br><br>

                        <div class="card-body">
                            <div class="text-center text-light font-weight-bold">
                                <h1 style="margin-top: 30px; font-family:Segoe UI Black"><span
                                            style="color:red; font-size: 60px;">WHAT</span> YOU & HOPE
                                    <br>SYSTEM COMUNITY ACHIVED IN</h1>
                                <h1 class="font-weight-bold "
                                    style="font-family:Segoe UI Black;color:red; font-size: 60px;  text-decoration: underline; ">
                                    2019-2020 </h1>

                            </div>
                        </div>

                        <br><br><br><br><br>
                    </div>
                </div>
            </div>


        </div>
    </div>

</section>

<section>
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1 style="padding-top: 50px; color:#05659b;" class="text-center">IMPACT ON NEEDED SOCITY</h1><br>
                <h5 class="text-center font-weight-bold" style="color:#05659b">
                    <i class="fa fa-check"></i>
                    <i class="fa fa-check"></i>
                    <i class="fa fa-check"></i>
                </h5>

                <br>
            </div>
        </div>


        <div class="card card-deck" style="border:transparent;">
            <div class="card mb-3 " style=" border-radius: 0px 100px 0px 0px; max-width: 540px; background-color: #05659b;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="img/donor-card-1.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="h1heading">
                                <p class="h5 card-title font-weight-bold text-light text-center">IN CASE OF COVID-19</p>
                            </h5>
                            <p class="card-text text-justify text-light lead">"Hope System worked to save People form COVID-19.
                                we provided masks , gloves, sanitizer and other required thing to people.
                                Hope System provide medical facility to effacted peoples and food at door step to people in lockdown.
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                        </div>
                    </div>
                </div>
            </div>


            <div class="card mb-3" style=" background-color:#05659b;max-width: 540px; border-radius: 0px 100px 0px 0px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="img/donor-card-2.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="h1heading">
                                <p class="h5 card-title text-center font-weight-bold text-light">GIFT AN EDUCATION </p>
                            </h5>
                            <p class="card-text text-justify text-light lead">Hope System giving opportunity to study to needed or
                                poor peoples, 2019 - 2020 ,Two thousand (2000) poor childs are getting eduction under Hope System.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                        </div>
                    </div>
                </div>
            </div>


        </div>



        <div class="card card-deck" style="border:transparent;">
            <div class="card mb-3" style="max-width: 540px; background-color: #05659b; border-radius: 0px 100px 0px 0px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="img/donor-card-3.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="h1heading">
                                <p class="h5 text-center text-light card-title font-weight-bold">FAST EARNING SKILLS</p>
                            </h5>
                            <p class="card-text text-justify text-light lead">Hope System, remove
                                Poverty from society by providing fast earning skills.
                                5000+ people now learning skills under Hope System. and 2500 peoples are learned and earning lives
                                2019-2020</p>
                            <br>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                        </div>
                    </div>
                </div>
            </div>


            <div class="card mb-3" style="max-width: 540px; background-color: #05659b; border-radius: 0px 100px 0px 0px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="img/donor-card-4.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="h1heading">
                                <p class="h5 text-center text-light card-title font-weight-bold">GIFT & FOOD STREET CHILDREN</p>
                            </h5>
                            <p class="card-text text-justify text-light lead"> Hope system providing food or living requirments to
                                the bagers and street child or people.street & poor slum children will be given Nutrition food, Gift,
                                New Dress, Lunch/Dinner, Toys & Happiness.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                        </div>
                    </div>
                </div>
            </div>


        </div>

        <h5 class="text-center font-weight-bold" style="color:#05659b">
            <i class="fa fa-check"></i>
            <i class="fa fa-check"></i>
            <i class="fa fa-check"></i>
        </h5>
    </div>
</section>



</body>

@endsection