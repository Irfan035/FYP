@extends('layouts.app')

@section('content')

  <div class="container ">
   <div class="row ">
    <div class="col-md-10 card">
     <h2 class="card-header text-bold">Donor Details</h2>
     @if($var)
      @if(count($var)>0)
       <table class="table table-light">
        <tr>

          <th>Donor Id</th>
         <th> Categories</th>
         <th>sub Categories</th>
         <th> Value</th>
         <th>Unit</th>
          <th> Actions</th>
        </tr>

        @foreach($var as $show)
         <tr>
            <td>{{$show['donor_id']}}</td>
            <td>{{$show['name']}}</td>
              <td>{{$show['sub']}}</td>
            <td>{{$show['value']}}</td>
            <td>{{$show['unit']}}</td>
            <td><a href="{{route('d_edit',['id' => $show->did])}}" class="btn btn-info"><i class="fa fa-pencil fa-fw"></i> </a>
             <a href="{{route('d_destroy',['id' => $show->did])}}" class="btn btn-danger"><i class="fa fa-trash-o fa-fw"></i></a></td>





         </tr>

        @endforeach
       </table>
      @endif
     @endif
    </div>
   </div>
  </div>
@endsection
