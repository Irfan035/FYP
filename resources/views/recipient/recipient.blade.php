@extends('layouts.appUser')

@section('content')

        <div class="container ">
            <div class="row  ">
                <div class=" col-md-12 mt-5 col-md-offset-2">
                    <h2 class="text-center">Donation Receiver </h2>

                    <div class="card">
                        <div class="card-header bg-light text-bold">Recipient</div>

                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{ route('r_store') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                <div class="col-md-2 form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                        <label for="recipient_id" class=" control-label">Recipient Id</label>
                                        <input id="recipient_id" type="number" name="recipient_id" value="{{Auth::user()->id}}" readonly class="form-control" required autofocus>
                                    </div>
                                    <div class="col-md-3 form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                        <label for="category_id" class=" control-label">Categories</label>
                                        <select name="category_id" id="category_id" class="form-control" onchange="getSubCat(event)" onclick="getSubCat(event)" required>
                                            <option value="">Select Item</option>
                                            @foreach($var as $r)
                                                <option value="{{$r->id}}">{{$r->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="subCategory_id" class=" control-label">Sub Categories</label>
                                        <select name="subCategory_id" id="subCategory_id" class="form-control" required>
                                            <option value="">Select Item</option>
                                           {{-- @foreach($s as $sub)
                                                <option value="{{$sub->id}}">{{$sub->sub}}</option>
                                            @endforeach--}}
                                        </select>
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="value" class=" control-label">Value</label>
                                        <input id="value" type="number" class="form-control" name="value"  required autofocus>


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
                                        <label for="message" class=" control-label">Reason</label> <br>
                                        <textarea id="message" name="message" rows="1" cols="50" class="form-control"> </textarea>
                                    </div>
                                    <div class="col-md-3 form-group">

                                            <label class=" control-label">Electricity Bill</label>
                                            <input type="file" name="bill" value="" class="form-control">

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


@endsection
@section('script')
    <script>
        function getSubCat(event){
            console.log(event.target.value);
            // alert(event.value);
            $.ajax({
                url : "{{route('find_sub_cat')}}",
                type:'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                data:{id:event.target.value},
                success: function(response) {
                    $("#subCategory_id").empty();
                    var data = $.parseJSON(response);
                    for(var i = 0; i < data.length ; i++){
                        var option = "<option value='"+data[i]['id']+"'>"+data[i]['value']+"</option>";

                        $("#subCategory_id").append(option);
                    }
                }
            });
        }
    </script>
@endsection
