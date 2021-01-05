@extends('layouts.app')

@section('content')
    <div class="adduser">
        <div class="container ">
            <div class="row  ">
                <div class=" col-md-10  col-md-offset-2">
                    <h2 class="text-center mt-5 ">Edit User Details </h2>

                    <div class="card">
                        <div class="card-header bg-light text-bold">User Details</div>

                        <div class="card-body">
                            <form class="form-horizontal form-group" method="POST" action="{{route('updateUser',['id' => request()->id])}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class=" control-label">Name</label>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ $show->name }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class=" control-label">E-Mail Address</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ $show->email }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Password</label>
                                                <input id="password" type="password" class="form-control" name="password" value="{{ $show->password }}" required>

                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    <div class="col-md-6">
                                            <label  class=" control-label">Role</label>
                                            <select name="role" id="role" class="form-control" required>
                                                <option value="">Select Role</option>
                                                @foreach($role as $r)
                                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label"> phone</label>
                                        <input type="number" name="phone" class="form-control" value="{{ $show->phone }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">CNIC</label>
                                        <input type="number" name="cnic" class="form-control" value="{{ $show->cnic }}" required>
                                    </div>

                                </div>
                                <div class="row">
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label class=" control-label">Image</label>
                                        <input type="file" name="image" value="{{$show->image}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group mt-4 ml-5">
                                            <div class="col-md-6 col-md-offset-4  ml-5 mt-2">
                                                <button type="submit" class="btn btn-primary">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
