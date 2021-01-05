@extends('layouts.app')

@section('content')
 <div class="ml-5">
 <div class=" ml-5">
  <div class="container ">
   <div class="row mt-5 ml-5">
    <div class="col-md-10 card">
     <h2 class="card-header text-bold">Stock Details</h2>
     @if($var)
      @if(count($var)>0)
       <table class="table table-light">
        <tr>
         <th>Id</th>
         <th> Categories</th>
         <th>Sub Categories</th>
         <th>Value</th>
         <th>Unit</th>
         <th>Date & time</th>

        </tr>

        @foreach($var as $show )
         
         <tr>
          <td>{{$show['id']}}</td>
          <td>{{$show['name']}}</td>
          <td>{{$show['sub']}}</td>
          <td>{{$show['value']}}</td>
          <td>{{$show['unit']}}</td>
          <td>{{$show['created_at']}}</td>

            </tr>

        @endforeach
       </table>
      @endif
     @endif
    </div>
   </div>
  </div>
 </div>
 </div>
@endsection
