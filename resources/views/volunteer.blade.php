

@extends('layouts.appUser')

@section('content')
    <head>
        <title>Hope | Volunteer</title>
    </head>
    <body>
 <section>
      <div>
          <h1 class="p-5 text-center text-bold h1heading text-white btn-success">
              Get Involved
          </h1>
      </div>
     <div class="container p-5">
         <form class="form-horizontal" method="POST"  onsubmit="return validate(this);" action="{{ route('volunteerform') }}" enctype="multipart/form-data">
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

                         <input type="number" name="phone" class="form-control" placeholder="Phone" aria-label="phone"
                                aria-describedby="basic-addon1" required>
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
                         <select id="province" name="province" class="form-control" >
                             <option value="">Select province</option>
                             <option value="Punjab">Punjab</option>
                             <option value="Sindh">Sindh</option>
                             <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
                             <option value=" Balochistan"> Balochistan</option>
                         </select>

                     </div>
                 </div>
             </div>

             <div class="row" style="padding-top:10px;">
                 <div class="col-sm-12 col-md-12 col-lg-6">
                     <div class="input-group mb-3">
                         <textarea class="form-control" name="skill" placeholder="Skills" aria-label="With textarea" required></textarea>

                     </div>

                 </div>
                 <div class="col-sm-12 col-md-12 col-lg-6">
                     <div class="input-group mb-3">

                         <textarea class="form-control" name="message" placeholder="Why join us" aria-label="With textarea"></textarea>
                     </div>

                 </div>
                 <div class="pl-lg-3">
                     <button type="submit" class="btn btn-outline-success btn-lg">Submit</button>
                 </div>

             </div>
         </form>
     </div>
 </section>


<section class="bg-light">
    <div class="container p-5">
        <h2 class="text-primary h1heading">How can you volunteer?</h2>
        <li> Help fulfilling our mission.</li>
        <li>Help create social change in your spheres of power and influence.</li>
        <li>Share your Expertise.</li>
        <li>Increase credibility, particularly in campaign work.</li>
        <li>Act as a catalyst to change the attitudes and beliefs in your communities.</li>
        <li>Build sustainability of work and increase diverse perspectives in the organization.</li>
        <li>Help raise money and stimulate interest of donors</li>
        <li>Increase credibility, particularly in campaign work.</li>


    </div>


</section>




    </body>
    <script>
        function validate(form) {

            // validation code here ...


            if(!valid) {
                alert('Please correct the errors in the form!');
                return false;
            }
            else {
                return confirm('Do you really want to submit the form?');
            }
        }
    </script>
@endsection