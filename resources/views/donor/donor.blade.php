@extends('layouts.appUser')

@section('content')

        <div class="container ">
            <div class="row  ">
                <div class=" col-md-12  col-md-offset-2">
                    <h2 class="text-center mt-5 ">Donation </h2>

                    <div class="card">
                        <div class="card-header bg-light text-bold">Donor</div>

                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{ route('d_store') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-2 form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                        <label for="donor_id" class=" control-label">Donor Id</label>
                                        <input id="donor_id" value="{{Auth::user()->id}}" readonly type="number" name="donor_id" class="form-control" required autofocus>
                                    </div>

                                    <div class="col-md-2 form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                        <label for="category_id" class=" control-label">Categories</label>
                                        <select name="category_id" id="category_id" onchange="getSubCat(event)" onclick="getSubCat(event)" class="form-control" required>
                                            <option value="">Select Item</option>
                                            @foreach($var as $r)
                                                <option value="{{$r->id}}">{{$r->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="subCategory_id" class=" control-label">Sub Categories</label>
                                        <select name="subCategory_id" id="subCategory_id" class="form-control" required>
                                            <option value="">Select Item</option>
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

                                    <div class="col-md-2"  style="margin-top:8px">
                                        <div class=" mt-4">
                                            <div class="col-md-2 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Donate
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
