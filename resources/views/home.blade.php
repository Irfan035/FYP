@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard</h2>
    <div class="row">
        <div class="col-md-5 col-md-offset-2">
            <div class="card card-info">
                <div class="card-header text-bold">Donor Request</div>
                <div class="card-body">
                    <table class="table table-hover table-responsive table-dark">
                        <tr>
                            <th>Donor Id</th>
                            <th>Value</th>
                            <th>Action</th>
                        </tr>
                        @foreach($donate as $p)
                        <tr>
                            <td>{{$p->donor_id}}</td>
                            <td>{{$p->value}}</td>
                            <td><a href="{{route('sum',['id' => $p->id])}}" class="btn btn-success"><i class="far fa-check-circle"></i></a>
                                <a href="{{route('delete',['id' => $p->id])}}" class="btn btn-danger"><i class="fa fa-trash-o fa-fw"></i></a></td>
                        </tr>
                            @endforeach
                    </table>




                </div>
            </div>
        </div>
        <div class="col-md-5 col-md-offset-2">
            <div class="card card-primary">
                <div class="card-header text-bold">Recipient Request</div>
                <div class="card-body">
                    <table class="table table-hover table-responsive table-dark">
                        <tr>
                            <th>Recipient Id</th>
                            <th>Value</th>
                            <th>Action</th>
                        </tr>
                        @foreach($recipient as $r)
                            <tr>

                                <td>{{$r->recipient_id}}</td>
                                <td>{{$r->value}}</td>
                                <td><a href="{{route('subtract',['id' => $r->id])}}" class="btn btn-success"><i class="far fa-check-circle"></i></a>
                                    <a href="{{route('R_delete',['id' => $r->id])}}" class="btn btn-danger"><i class="fa fa-trash-o fa-fw"></i></a></td>
                            </tr>
                        @endforeach
                    </table>




                </div>
            </div>
        </div>

    </div>


</div>
@endsection




