

@extends('layouts.appUser')

@section('content')
    <head>
        <title>Hope | Contact Us</title>

    </head>

    <body>

    <section class="banner" style="background-image: url('img/contactus-header.jpg');">
    </section>





    <!--sign up -model ends -->


    <br><br>

        <div class="container">
            <section>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 contactus-col1">
                    <br>
                    <p class=" h3 text-light  " style="padding-left: 30px;"> Quick Contact </p>
                    <br>
                    <p class="h1 lead contactus-heading"><i class="fa fa-map-marker"></i>..LOCATION</p>
                    <p class="h3 lead contactus-heading2">Lahore,Punjab, Pakistan</p>

                    <br>
                    <p class="h1 lead contactus-heading"><i class="fa fa-mobile"></i>..CALL</p>
                    <p class="h3 lead contactus-heading2">+92000000000</p>

                    <br>
                    <p class="h1 lead contactus-heading"><i class="fa fa-envelope"></i>..EMAIL</p>
                    <p class="h3 lead contactus-heading2">hope@gmail.com</p>

                </div>

                <div class="col-sm-6 col-md-6 col-lg-8 " style="padding-left: 50px;">
                    <br>
                    <p class="h1   font-weight-bold" style="color:#074366;"> </i>Contact </p>
                    <p class="h5 lead   text-justify" style="color:#074366"> Don't feel hesitate to contact us for any question or
                        suggestion or other purpose</p>

                    <form class="form-horizontal" method="POST" action="{{ route('contactForm') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row" style="padding-top:10px;">


                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="input-group mb-3">

                                    <input type="text" class="form-control" name="name" placeholder="Name"
                                           aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="input-group mb-3">

                                    <input type="text" name="company" class="form-control" placeholder="Company(Optional)" aria-label="Company"
                                           aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>



                        <div class="row" style="padding-top:10px;">


                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="input-group mb-3">

                                    <input type="text" class="form-control" placeholder="Email" name="email" aria-label="Email"
                                           aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="input-group mb-3">

                                    <input type="number" name="phone" class="form-control" placeholder="Phone" aria-label="Phone"
                                           aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="padding-top:10px;">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="input-group mb-3">

                                    <textarea class="form-control" name="message" placeholder="Type Message. . ." aria-label="With textarea"></textarea>
                                </div>
                                <button type="submit" class="btn btn-outline-primary btn-lg">Send</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>

    </section>
    <br>
    <br>
    <h5 class="text-center font-weight-bold" style="color:#05659b">
        <i class="fa fa-check"></i>
        <i class="fa fa-check"></i>
        <i class="fa fa-check"></i>
    </h5>
    <br>
    <section class="text-center" style="background: #e3dede;">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d435521.40803140594!2d74.05418953973114!3d31.48263520766896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1594885984437!5m2!1sen!2s"
                            width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>

        </div>

    </body>

@endsection