@extends('layouts.app')

@section('content')
  <div class="container ">
   <div class="table-responsive">
    <div class=" card">
     <h2 class="card-header text-bold">Recipient Details</h2>
     @if($s)
      @if(count($s)>0)
       <table class="table table-light table-hover">
       <thead>
       <tr>
        <th>Recipient Id</th>
        <th> Categories</th>
        <th>sub Categories</th>
        <th> Value</th>
        <th> Unit</th>
        <th>Reason</th>
        <th> Electricity Bill</th>
        <th> Actions</th>

       </tr>
       </thead>

        @foreach($s as $show )
         
         <tr>
          <td>{{$show['recipient_id']}}</td>
          <td>{{$show['name']}}</td>
             <td>{{$show['sub']}}</td>

          <td>{{$show['value']}}</td>
          <td>{{$show['unit']}}</td>
          <td>{{$show['message']}}</td>

          <td><img src="{{URL::asset($show['Ebill'])}}" alt="null" style="width: 40px; height: 50px"></td>
          <td><a href="{{route('r_edit',['id' => $show->rid])}}" class="btn btn-danger"><i class="fa fa-pencil fa-fw"></i> </a>
          <a href="{{route('r_destroy',['id' => $show->rid])}}" class="btn btn-danger"><i class="fa fa-trash-o fa-fw"></i></a></td>
         </tr>

        @endforeach
       </table>
      @endif
     @endif
    </div>
   </div>
  </div>

@endsection
