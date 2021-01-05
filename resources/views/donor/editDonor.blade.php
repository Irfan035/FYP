@extends('layouts.app')

@section('content')
    <div class="adduser">
        <div class="container ">
            <div class="row  ">
                <div class=" col-md-10  col-md-offset-2">
                    <h2 class="text-center mt-5 ">Donation Donor </h2>

                    <div class="card">
                        <div class="card-header bg-light text-bold">Donor Details</div>

                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{ route('d_update') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-2 form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                        <label for="donor_id" class=" control-label">Donor Id</label>
                                        <input id="donor_id" type="number" name="donor_id" class="form-control" required autofocus>
                                    </div>

                                    <div class="col-md-2 form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                        <input type="hidden" name="id" value="{{request()->id}}">
                                        <label for="category_id" class=" control-label">Categories</label>
                                        <select name="category_id" id="category_id" class="form-control" required>
                                            <option value="">Select Item</option>
                                            @foreach($cat as $r)
                                                <option value="{{$r->id}}" {{$show->categor_id == $r->id ? 'selected' : ''}}>{{$r->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="subCategory_id" class=" control-label">Sub Category</label>
                                        <select name="subCategory_id" id="subCategory_id" class="form-control" required>
                                            <option value="">Select Item</option>
                                            @foreach($s as $sub)
                                                <option value="{{$sub->id}}" {{$show->categor_id == $sub->id ? 'selected' : ''}}>{{$sub->sub}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-2 form-group">
                                        <label for="value" class=" control-label">Value</label>
                                        <input id="value" type="number" class="form-control" name="value"  value="{{$show->value}}" required autofocus>


                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="unit" class=" control-label">Unit</label>
                                        <select name="unit" id="unit" class="form-control" required>
                                            <option value="">Select Unit</option>
                                            <option>Rupees </option>
                                            <option>kilogram  </option>
                                            <option>Leter </option>
                                            <option>Quantity</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2" style="margin-top: 6px">
                                        <div class="form-group mt-4 ">

                                                <button type="submit" class="btn btn-primary">
                                                  Update
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
