@extends('layouts.front')

@section('title')
 Checkout
@endsection




@section('content')
    <div class="contianer mt-5">
        <div class="row">
            <div class="col-md-7" style="padding-left: 40px;">
                <div class="card">
                    <div class="card-body">
                        <h6> Basic Details</h6>
                        <hr>
                        <div class="row chechout-form">
                            <div class="col-md-6">
                                <label for="firstName"> First Name</label>
                                <input type="text" class="form-control" placeholder="Enter Firat Name">
                            </div>
                            <div class="col-md-6">
                                <label for="lastName"> Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter Last Name">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for=""> Email </label>
                                <input type="text" class="form-control" placeholder="Enter Email">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for=""> Phone Number</label>
                                <input type="text" class="form-control" placeholder="Enter Phone Number">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Address </label>
                                <input type="text" class="form-control" placeholder="Enter Address">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for=""> City</label>
                                <input type="text" class="form-control" placeholder="Enter City">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for=""> State</label>
                                <input type="text" class="form-control" placeholder="Enter State">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for=""> Conutry</label>
                                <input type="text" class="form-control" placeholder="Enter Country">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for=""> Pin Code</label>
                                <input type="text" class="form-control" placeholder="Enter Pin Code">
                            </div>
                        </div>

                     </div>
                </div>
            </div>
 {{-- add the product in cart to the checkout page  --}}
            <div class="col-md-5"  style="padding-right: 20px;">
                <div class="card">
                    <div class="card-body">
                       <h6>  Oreder Details </h6>
                       <hr>
                       <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Quentity</th>
                                <th>Price</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartitem as $item)
                            <tr>  
                                <td>{{$item->products->name}}</td>
                                <td>{{$item->Prod_qty}}</td>
                                <td>{{$item->products->selling_price}}</td>

                            </tr>
                            @endforeach
                        </tbody>
                       </table>
                       <hr>
                     <button class="btn btn-primary float-end">
                        place order 
                     </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection