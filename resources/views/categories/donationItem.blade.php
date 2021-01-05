@extends('layouts.app')

@section('content')
 <div class="adduser">
  <div class="container ">
   <div class="row  ">
    <div class=" col-md-10 col-md-offset-2">
     <h2 class="text-center mt-5 ">Donation Categories </h2>

     <div class="card">
      <div class="card-header bg-light text-bold">Add Items</div>

      <div class="card-body">
       <form class="form-horizontal" method="POST" action="{{ route('addItem') }}">
        {{ csrf_field() }}


        <div class="row">

         <div class="col-sm-6 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label for="name" class=" control-label">Name</label>
          <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

          @if ($errors->has('name'))
           <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
          @endif
         </div>
         <div class="col-sm-2">

         </div>

         <div class="col-sm-4" style="margin-top: 6px">
          <div class="form-group mt-4 ">
           <div class="col-sm-2 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
             Add_Category
            </button>
           </div>
          </div>
         </div>
        </div>


       </form>
      </div>
     </div>
     <div class="text-right"><a href="{{ route('manageItem') }}" >
       View All
      </a></div>
    </div>
    </div>
   </div>
  </div>


@endsection
