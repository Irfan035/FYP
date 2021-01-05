@extends('layouts.app')

@section('content')
    <div class="manageUser  card">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12 ">
                    <h2 class="card-header text-bold">User Details</h2>
                    @if($var)
                        @if(count($var)>0)
                            <table class="table table-light table-responsive-md table-responsive card-table">
                                <tr>
                                    <th>User Name</th>
                                    <th> Email</th>
                                    <th>Role</th>
                                    <th> Password</th>
                                    <th> Phone</th>
                                    <th> CNIC</th>
                                    <th>Image</th>
                                    <th> Action</th>
                                </tr>

                                @foreach($var as $show )

                                    <tr>
                                        <td>{{$show['name']}}</td>
                                        <td>{{$show['email']}}</td>
                                        <td> {{$show['rolename']}}</td>
                                        <td>{{$show['password']}}</td>
                                        <td>{{$show['phone']}}</td>
                                        <td>{{$show['cnic']}}</td>
                                        <td><img src="{{URL::asset($show['image'])}}" alt="null" style="width: 60px; height: 70px"></td>

                                        <td><a href="{{route('editUser',['id' => $show->uid])}}" class="btn btn-info"></a></td>
                                       <td> <a href="{{route('deleteUser',['id' => $show->uid])}}" class="btn btn-danger"></a></td>
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
