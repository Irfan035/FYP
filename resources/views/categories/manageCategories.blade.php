@extends('layouts.app')

@section('content')
 <div class=" ">
  <div class="container ">
   <div class="row mt-5">
    <div class="col-md-8 card">
     <h2 class="card-header text-bold">Item Details</h2>
     @if($var)
      @if(count($var)>0)
       <table class="table table-info ">
        <tr>
         <th>Id</th>
         <th> Categories Name</th>

         <th> Action</th>

        </tr>

        @foreach($var as $show )

         <tr>
          <td>{{$show['id']}}</td>
          <td>{{$show['name']}}</td>

          <td><a href="{{route('editItem',['id' => $show->id])}}" class="btn btn-danger"><i class="fa fa-pencil fa-fw"></i> Edit</a>
          <a href="{{route('deleteItem',['id' => $show->id])}}" class="btn btn-danger"><i class="fa fa-trash-o fa-fw"></i>Delete</a></td>
         </tr>

        @endforeach
       </table>
      @endif
     @endif
    </div>
   </div>
  </div>
 </div>
@endsection
