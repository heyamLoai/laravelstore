@extends('layouts.front')

@section('title')
    My Cart
@endsection

@section('content')
<br>

<div class="div" class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container ">
        <h6 class="mb-0" >
         <a href="{{url('/')}}">  
            Home  
         </a> /
         <a href="{{url('cart')}}">  
            Cart
        </a> /
        </h6>
    </div>
</div>


<div class="container my-5">
    <div class="card shadow  ">
        <div class="card-body">
            @php $total = 0; @endphp
            @foreach ($cartItems as $item )
            <div class="row product_data">   
                 <div class="col-md-2 my-2">
                    <img src="{{asset('assets/uploads/products/' .$item->products->image )}}" height="75px" width="80px" alt="Image here">
                </div>
                <div class="col-md-3 my-auto">
                    <h6> {{$item->products->name}} </h6>
                </div>
                <div class="col-md-2 my-auto">
                    <h6> ${{$item->products->selling_price}} </h6>
                </div>
                <div class="col-md-3 my auto">
                        <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                        <label for="Quantity">Quantity</label>
                    <div class="input-group text-center mb-3" style="width:130px;">
                        <button class="input-group-text changeQuentity decrement-btn" >-</button>
                        <input type="text" name="quantity " class="form-control qtn-input text-center " value="{{$item ->prod_qty}}" >
                        <button class="input-group-text changeQuentity increment-btn" >+</button>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-danger delete-cart-item"> <i class="fa fa-trash"> </i> Remove</button>
                </div>
            </div>  
            @php $total += $item->products->selling_price * $item ->prod_qty ; @endphp
  
            @endforeach
        </div>
        <div class="card-footer">
            <h6>Total Price:${{$total}}   
            <button class="btn btn-outline-success float-end "> Proceed to checkout</button>
            </h6>
        </div>
    </div>
</div>

@endsection
