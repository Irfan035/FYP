

@extends('layouts.appUser')

@section('content')
    <body>
    <section class="banner" style="background-image: url('img/donor-header.jpg');">

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="h1heading btn btn-light">Explore Projects. . .</h1>

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


    <section style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 style="padding-top: 50px; color:#05659b;" class="text-center">ALL PROJECTS</h1><br>
                    <h5 class="text-center font-weight-bold" style="color:#05659b">
                        <i class="fa fa-check"></i>
                        <i class="fa fa-check"></i>
                        <i class="fa fa-check"></i>
                    </h5>

                    <br>
                    <div class="card card-deck" style="border:transparent;">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="img/donor-card-1.jpg" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="h1heading">
                                            <p class="h5 card-title font-weight-bold">PREVENT COVID-19</p>
                                        </h5>
                                        <p class="card-text text-justify">"COVID-19 as the world's most dangerous threat" according to
                                            UNICEF (2020);
                                            It is affecting every field of life. we have to save life from covid-19</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <div class="input-group mb-3">
                                            <a class="btn btn-success ml-4 mr-1" href="{{route('recipient')}}">Recipient</a>
                                            <div class="input-group-append">
                                                <span class=" btn colorbtn" id="basic-addon2">Donate Now</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="img/donor-card-2.jpg" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="h1heading">
                                            <p class="h5 card-title font-weight-bold">GIFT AN EDUCATION </p>
                                        </h5>
                                        <p class="card-text text-justify">Your donation goes towards critical infrastructure like learning
                                            material classrooms, school bus, etc.
                                            for rural schools. Schools Support Program.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <div class="input-group mb-3">
                                            <a class="btn btn-success ml-4 mr-1" href="{{route('recipient')}}">Recipient</a>
                                            <div class="input-group-append">
                                                <span class=" btn colorbtn" id="basic-addon2">Donate Now</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <br>
                    <div class="card card-deck" style="border:transparent;">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="img/donor-card-3.jpg" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="h1heading">
                                            <p class="h5 card-title font-weight-bold">FAST EARNING SKILLS</p>
                                        </h5>
                                        <p class="card-text text-justify">Our aim to make poor people good at financial. we are providing
                                            skills to people to to earn their lives.</p>
                                        <br>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <div class="input-group mb-3">
                                            <a class="btn btn-success ml-4 mr-1" href="{{route('recipient')}}">Recipient</a>
                                            <div class="input-group-append">
                                                <span class=" btn colorbtn" id="basic-addon2">Donate Now</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="img/donor-card-4.jpg" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="h1heading">
                                            <p class="h5 card-title font-weight-bold">GIFT & FOOD STREET CHILDREN</p>
                                        </h5>
                                        <p class="card-text text-justify">street & poor slum children will be given Nutrition food, Gift,
                                            New Dress, Lunch/Dinner, Toys & Happiness.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <div class="input-group mb-3">
                                            <a class="btn btn-success ml-4 mr-1" href="{{route('recipient')}}">Recipient</a>
                                            <div class="input-group-append">
                                                <span class=" btn colorbtn" id="basic-addon2">Donate Now</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <p class="h5 text-center lead col-sm-6 offset-sm-2 offset-lg-3 offset-md-3">Become a member today, and your
                        donation will go to a different very deserving project each month.</p>

                    <br><br>
                    <div class="text-center">

                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </section>


    </body>

@endsection