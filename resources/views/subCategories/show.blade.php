@extends('layouts.app')

@section('content')
 <div class="ml-5">
 <div class=" ml-5">
  <div class="container ">
   <div class="row mt-5 ml-5">
    <div class="col-md-10 card">
     <h2 class="card-header text-bold">Sub-Categories Details</h2>
     @if($var)
      @if(count($var)>0)
       <table class="table table-light">
        <tr>
         <th>Id</th>
         <th> Categories</th>
         <th>Sub-Categories</th>
         <th> Value</th>
         <th> Actions</th>

        </tr>

        @foreach($var as $show )
         
         <tr>
          <td>{{$show['id']}}</td>
          <td>{{$show['name']}}</td>

          <td>{{$show['sub']}}</td>
          <td>{{$show['value']}}</td>
          <td><a href="{{route('edit',['id' => $show->sid])}}" class="btn btn-danger"><i class="fa fa-pencil fa-fw"></i> Edit</a>
          <a href="{{route('destroy',['id' => $show->sid])}}" class="btn btn-danger"><i class="fa fa-trash-o fa-fw"></i>Delete</a></td>
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
