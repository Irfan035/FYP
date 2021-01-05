@extends('layouts.app')

@section('content')

        <div class="container ">
            <div class="row  ">
                <div class=" col-md-12  col-md-offset-2">
                    <h2 class="text-center mt-5 ">Sub Categories</h2>

                    <div class="card">
                        <div class="card-header bg-light text-bold"> Add Sub-Categories</div>

                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{ route('store') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-3 form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                        <label for="category_id" class=" control-label">Categories</label>
                                        <select name="category_id" id="category_id" class="form-control" required>
                                            <option value="">Select Item</option>
                                            @foreach($var as $r)
                                                <option value="{{$r->id}}">{{$r->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-3 form-group">
                                        <label for="sub" class=" control-label">Sub Categories</label>
                                        <input id="sub" type="string" class="form-control" name="sub"  required autofocus>


                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="value" class=" control-label">Value</label>
                                        <input id="value" type="number" class="form-control" name="value" autofocus>


                                    </div>

                                    <div class="col-md-3"  style="margin-top:8px">
                                        <div class=" mt-4">
                                            <div class="col-md-2 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="text-right"><a href="{{ route('show') }}" >
                            View All
                        </a></div>

                </div>
            </div>
        </div>


@endsection
