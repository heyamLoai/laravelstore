@extends('layouts.front')

@section('title')
 Checkout
@endsection




@section('content')
<br>

<div class="div" class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container ">
        <h6 class="mb-0" >
         <a href="{{url('/')}}">  
            Home  
         </a> /
         <a href="{{ url('checkout' )}}">  
            Chechout
        </a> 
        </h6>
    </div>
</div>

    <div class="contianer mt-3">
        <form action="{{ url('place-oreder' )}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-7" style="padding-left: 40px;">
                    <div class="card">
                        <div class="card-body">
                            <h6> Basic Details</h6>
                            <hr>
                            <div class="row chechout-form">
                                <div class="col-md-6">
                                    <label for="firstName"> First Name</label>
                                    <input type="text"  name="fname" value="{{ Auth::user()->name}}" class="form-control" placeholder="Enter Firat Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName"> Last Name</label>
                                    <input type="text" name="lname" value="{{ Auth::user()->lname}}" class="form-control" placeholder="Enter Last Name">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""> Email </label>
                                    <input type="text" name="email" value="{{ Auth::user()->email}}" class="form-control" placeholder="Enter Email">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""> Phone Number</label>
                                    <input type="text" name="phone" value="{{ Auth::user()->phone}}" class="form-control" placeholder="Enter Phone Number">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Address </label>
                                    <input type="text" name="address" value="{{ Auth::user()->address}}" class="form-control" placeholder="Enter Address">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""> City</label>
                                    <input type="text" name="city" value="{{ Auth::user()->city}}" class="form-control" placeholder="Enter City">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""> State</label>
                                    <input type="text" name="state" value="{{ Auth::user()->state}}" class="form-control" placeholder="Enter State">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""> Conutry</label>
                                    <input type="text" name="country" value="{{ Auth::user()->country}}" class="form-control" placeholder="Enter Country">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for=""> Pin Code</label>
                                    <input type="text" name="pincode" value="{{ Auth::user()->pincode}}" class="form-control" placeholder="Enter Pin Code">
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
                                @foreach ($cartitems as $item)
                                <tr>  
                                    <td>{{$item->products->name}}</td>
                                    <td>{{$item->prod_qty}}</td>
                                    <td>{{$item->products->selling_price}}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <button type="submit" class="btn btn-primary w-100"> place order </button>
                        </div>
                    </div>
                </div>

            </div>
        </form>    
    </div>
@endsection