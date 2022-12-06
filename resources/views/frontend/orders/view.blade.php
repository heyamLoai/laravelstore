@extends('layouts.front')

@section('title')
    My orders
@endsection

@section('content')
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header bg-primary">
                            <h4 class="text-white">Order View
                                <a href="{{ url('my-orders') }}" class="btn btn-warning text-white float-end"> Back </a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 order-details">
                                    <h4>Shipping Details</h4>
                                    <hr>
                                    <label for=""> First Name</label>
                                    <div class="border">{{ $orders->fname}}</div>
                                    <label for=""> Last Name</label>
                                    <div class="border">{{ $orders->lname}}</div>
                                    <label for=""> Email</label>
                                    <div class="border">{{ $orders->email}}</div>
                                    <label for=""> Contact number</label>
                                    <div class="border">{{ $orders->phone}}</div>

                                    <label for=""> Shopping address</label>
                                    <div class="border">{{ $orders->address}}, <br>
                                        {{ $orders->city}},<br>
                                        {{ $orders->state}},
                                        {{ $orders->country}},
                                    </div>

                                    <label for=""> Pin code</label>
                                    <div class="border">{{ $orders->pincode}}</div>
                                </div>
                                <div class="col-md-6">
                                    <h4>Order Details</h4>
                                    <hr>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Quentity</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders->orderitems as $item )
                                                <tr>
                                                    <td>{{ $item->products->name}}</td>
                                                    <td>{{ $item->quantity}}</td> 
                                                    <td>{{ $item->price}}</td>
                                                    <td>
                                                        <img src="{{asset('assets/uploads/products/' .$item->products->image)}}" width="100px" alt="Product Image">
                                                        
                                                    </td>


                                                </tr>
                                                
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <h4 class="px-2">Total $:<span  >{{$orders->total_price}}</span></h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
@endsection