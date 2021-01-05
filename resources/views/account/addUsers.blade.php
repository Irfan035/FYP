@extends('layouts.app')

@section('content')
    <div class="adduser">
        <div class="container ">
            <div class="row  ">
                <div class=" col-md-8  col-md-offset-2">


                    <div class="card">
                        <div class="card-header bg-light text-bold">Add User </div>

                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{ route('saveUser') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}


                                <div class="row">
                                    <div class="col-md-6 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class=" control-label">Name</label>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="email" class=" control-label">E-Mail Address</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class=" control-label">Password</label>
                                                <input id="password" type="password" class="form-control" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password-confirm" class=" control-label">Confirm Password</label>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label"> phone</label>
                                        <input type="number" name="phone" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">CNIC</label>
                                        <input type="number" name="cnic" class="form-control" required>
                                    </div>

                                </div>
                                <div class="row">
                                <div class="col col-md-6 form-group">
                                                <label for="password-confirm" class=" control-label">Role</label>
                                                             <select name="role" id="role" class="form-control" required>
                                                                <option value="">Select Role</option>

                                                                  @foreach($var as $r)

                                                                      <option value="{{$r->id}}">{{$r->name}}</option>
                                                                      @endforeach
                                                             </select>
                                                         </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label class=" control-label">Image</label>
                                                    <input type="file" name="image" class="form-control">
                                                </div>
                                        </div>
                                </div>
                                <div class="row">
                                <div class="form-group mt-2 ml-5">
                                    <button type="submit" class="btn btn-primary">
                                        Add User
                                    </button>
                                </div>
                        </div>
                            </form>
                        </div>
                    </div>
                    <div class="text-right"><a href="{{ route('manageUser') }}" >
                            View All
                        </a></div>
                </div>
            </div>
        </div>
    </div>

@endsection
