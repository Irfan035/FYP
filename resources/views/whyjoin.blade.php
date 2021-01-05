

@extends('layouts.appUser')

@section('content')
    <head>
        <title> Hope | Why Join</title>
    </head>
    <body>
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

    <section style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 style="padding-top: 50px; color:#05659b;" class="text-center">YOU NEED, A TRUSTED
                        FUNDING PLATFORM</h1><br>
                    <h5 class="text-center font-weight-bold" style="color:#05659b">
                        <i class="fa fa-check"></i>
                        <i class="fa fa-check"></i>
                        <i class="fa fa-check"></i>
                    </h5>

                    <br>
                    <div class="text-center lead col-sm-6 offset-sm-2 offset-lg-3 offset-md-3">
                        <p class="h4"> Hope is the Pakistani crowdfunding community that connects nonprofits, donors, with poor or
                            needed people.
                        </p><br><br>
                        <a href="{{ route('volunteer') }}" class="  nav-item nav-link btn  navbtn colorbtn btn whyjoinbtn"
                           >Join Us Now</a>
                        <br><br><br><br>
                    </div>
                </div>
            </div>
        </div>

    </section>

    </body>

@endsection