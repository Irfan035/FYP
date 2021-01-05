@extends('layouts.app')

@section('content')
    <div class="adduser">
        <div class="container ">
            <div class="row  ">
                <div class=" col-md-10  col-md-offset-2">
                    <h2 class="text-center mt-5 ">Sub Categories </h2>

                    <div class="card">
                        <div class="card-header bg-light text-bold">Details</div>

                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{ route('update') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <input type="hidden" name="id" value="{{request()->id}}">
                                    <div class="col-md-3 form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                        <label for="category_id" class=" control-label">Categories</label>
                                        <select name="category_id" id="category_id" class="form-control" required>
                                            <option value="">Select Item</option>
                                            @foreach($cat as $r)
                                                <option value="{{$r->id}}" {{$show->category_id == $r->id ? 'selected' : ''}}>{{$r->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="sub" class=" control-label"> Sub  Categories </label>
                                        <input id="sub" type="string" class="form-control" name="sub"  value="{{$show->sub}}" autofocus>


                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="value" class=" control-label">Value</label>
                                        <input id="value" type="number" class="form-control" name="value"  value="{{$show->value}}"  autofocus>


                                    </div>
                                    <div class="col-md-3" style="margin-top: 6px">
                                        <div class="form-group mt-4 ">
                                            <div class="col-md-2 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                  Update
                                                </button>
                                            </div>
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
