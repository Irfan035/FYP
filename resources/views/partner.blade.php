

@extends('layouts.appUser')

@section('content')
    <body >
    <section class="banner" style="background-image: url('img/partner-header.jpg'); height: 500px">

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="h1heading btn  text-light"> OUR PARTNERS</h1>

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
    <section style="background: white;">
        <div class="container">
            <div class="text-center">
                <br>
                <p class="h6 text-info extra">Complete List of Our Partners</p>
                <br>
                <h5 class="text-center font-weight-bold" style="color:#05659b">
                    <i class="fa fa-check"></i>
                    <i class="fa fa-check"></i>
                    <i class="fa fa-check"></i>
                </h5>
                <table class="table" style="border: transparent;">


                    <tr style="border-top: transparent;">

                        <td class="partner-log-size">  <a href="https://amiradnan.com/"><img class="img-fluid partner-log-size" src="img/partner/amir.png"></td></a>
                            <td class="partner-log-size">  <a href="https://www.arifhabibcorp.com/"><img class="img-fluid partner-log-size" src="img/partner/arif.png"></td></a>
                               <td class="partner-log-size">  <a href="https://www.airindus.com.pk/"><img class="img-fluid partner-log-size" src="img/partner/ari.png"></td></a>
                                   <td class="partner-log-size">  <a href="https://arynews.tv/en/"> <img class="img-fluid partner-log-size" src="img/partner/ary.png"></td></a>

                    </tr>
                    <tr style="border-top: transparent;">

                       <td class="partner-log-size">  <a href="https://www.adam.com/"><img class="img-fluid partner-log-size" src="img/partner/adam.png"></td></a>
                            <td class="partner-log-size"> <a href="http://airlines.ws/aero-asia/"><img class="img-fluid partner-log-size" src="img/partner/aero.png"></td></a>
                                <td class="partner-log-size"> <a href="http://www.akdtrade.com/"><img class="img-fluid partner-log-size" src="img/partner/akd.png"></td></a>
                                     <td class="partner-log-size"> <a href="https://amrelisteels.com/"><img class="img-fluid partner-log-size" src="img/partner/amerli.png"></td></a>

                    </tr>
                    <tr style="border-top: transparent;">

                      <td class="partner-log-size">   <a href="https://www.atlashonda.com.pk/"> <img class="img-fluid partner-log-size" src="img/partner/atlas.png"></td></a>
                             <td class="partner-log-size"><a href="https://www.albaraka.com.pk/"> <img class="img-fluid partner-log-size" src="img/partner/baraka.png"></td></a>
                               <td class="partner-log-size">  <a href="https://www.bata.com.pk/"><img class="img-fluid partner-log-size" src="img/partner/bata.png"></td></a>
                                   <td class="partner-log-size"> <a href="https://ferozsons-labs.com/">  <img class="img-fluid partner-log-size" src="img/partner/ferozsons.png"></td></a>

                    </tr>

                    <tr style="border-top: transparent;">

                          <td class="partner-log-size"><a href="https://www.ffc.com.pk/"><img class="img-fluid partner-log-size" src="img/partner/ffg.png"></td></a>
                            <td class="partner-log-size"> <a href="https://ghandharanissan.com.pk/"><img class="img-fluid partner-log-size" src="img/partner/gandhara.png"></td></a>
                                  <td class="partner-log-size"> <a href="https://www.alghazitractors.com/"><img class="img-fluid partner-log-size" src="img/partner/gazi.png"></td></a>
                                   <td class="partner-log-size">  <a href="https://www.haier.com/pk/"> <img class="img-fluid partner-log-size" src="img/partner/haier.png"></td></a>

                    </tr>
                    <tr style="border-top: transparent;">

                        <td class="partner-log-size"> <a href="https://dps.psx.com.pk/company/MTL"><img class="img-fluid partner-log-size" src="img/partner/millat.png"></td></a>
                             <td class="partner-log-size"><a href="http://www.pakoil.com.pk/"> <img class="img-fluid partner-log-size" src="img/partner/oilfield.png"></td></a>
                                <td class="partner-log-size"> <a href="https://dps.psx.com.pk/company/SEARL"> <img class="img-fluid partner-log-size" src="img/partner/seral.png"></td></a>
                                    <td class="partner-log-size"> <a href="https://paperads.com/company/aisha-steel-mills-limited_21113"> <img class="img-fluid partner-log-size" src="img/partner/steel.png"></td></a>

                    </tr>

                </table>
                <h5 class="text-center font-weight-bold" style="color:#05659b">
                    <i class="fa fa-check"></i>
                    <i class="fa fa-check"></i>
                    <i class="fa fa-check"></i>
                </h5>
            </div>
        </div>
    </section>
    </body>

@endsection