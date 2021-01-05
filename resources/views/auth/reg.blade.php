@extends('layouts.appUser')

@section('content')
<div class="container register">
    <div class="row ">
        <div class="col-md-8 col-md-offset-2 m-5">
            <h2 class="text-bold text-center">Sign up</h2>
            <div class="card">

                <div class="card-header">Register</div>

                <div class="card-body">
                    <form class="form-horizontal form-group" method="POST" action="{{ route('reg') }}">
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="col-md-6">
                            <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class=" control-label">Name</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block alert alert-danger">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="col-md-6">
                                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="control-label">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block alert alert-danger">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="danger  {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class=" control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block alert alert-danger">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="col-md-6">

                                    <label for="password-confirm" class="control-label">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                        </div>
                            </div>
                        <div class="row">
                             <div class="col-md-6 {{ $errors->has('number') ? ' has-error' : '' }}">
                                <label class="control-label"> phone</label>
                                <input type="number" name="phone" value="old{{'phone'}}" class="form-control" required>
                                @if ($errors->has('number'))
                                    <span class="help-block">
                                        {{ $errors->first('number') }}
                                    </span>
                                @endif
                            </div>
                                <div class="col-md-6 {{ $errors->has('cnic') ? ' has-error' : '' }}">
                                    <label class="control-label">CNIC</label>
                                    <input type="number" name="cnic" value="{{'cnic'}}" class="form-control" required>
                                    @if ($errors->has('cnic'))
                                        <span class="help-block">
                                        {{ $errors->first('cnic') }}
                                    </span>
                                    @endif
                                </div>

                        </div>

                        <div class="row">
                        <div class="col-md-6 {{ $errors->has('role') ? ' has-error' : '' }}">
                            <label  class=" control-label">Role</label>
                            <select name="role" id="role" class="form-control" required>
                                <option value="">Select Role</option>
                                {{--@foreach( as $r)--}}
                                    <option value="{{$var->id=2}}">Donor</option>
                                    <option value="{{$var->id=3}}">Recipient</option>
                              {{--  @endforeach--}}
                            </select>
                            @if ($errors->has('role'))
                                <span class="help-block">
                                        {{ $errors->first('role') }}
                                    </span>
                            @endif
                        </div>

                            <div class="col-md-6 col-md-offset-4">
                                <div class="form-group m-4">
                                <button type="submit" class="btn btn-primary ml-5">
                                    Sign up
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
@endsection
