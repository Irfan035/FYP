@extends('layouts.app')

@section('content')
    <div class="adduser">
        <div class="container ">
            <div class="row  ">
                <div class=" col-md-10  col-md-offset-2">
                    <h2 class="text-center mt-5 ">Donation Receiver </h2>

                    <div class="card">
                        <div class="card-header bg-light text-bold">Recipient Details</div>

                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{ route('r_update') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                <div class="col-md-2 form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                        <label for="recipient_id" class=" control-label">Recipient Id</label>
                                        <input id="recipient_id" type="number" name="recipient_id" value="{{$show->recipient_id}}" class="form-control" required autofocus>
                                    </div>
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
                                        <label for="subCategory_id" class=" control-label">Sub Categories</label>
                                        <select name="subCategory_id" id="subCategory_id" class="form-control" required>
                                            <option value="">Select Item</option>
                                            @foreach($s as $sub)
                                                <option value="{{$r->id}}" {{$show->category_id == $r->id ? 'selected' : ''}}>{{$r->name}}</option>
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
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="message" class=" control-label">Discription</label>
                                        <textarea id="message" name="message" rows="4" cols="50" value="{{$show->message}}"> </textarea>
                                    </div>
                                    <div class="col-md-3 form-group">

                                            <label class=" control-label">Electricity Bill</label>
                                            <input type="file" name="bill" value="{{$show->bill}}" class="form-control">


                                    </div>
                                    <div class="col-md-3"  style="margin-top:8px">
                                        <div class=" mt-4">
                                            <div class="col-md-2 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Submit
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
