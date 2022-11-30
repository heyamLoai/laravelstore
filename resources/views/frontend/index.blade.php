@extends('layouts.front')

@section('title')
 welcom to our store 
@endsection

@section('content')
@include('layouts.includes.slider')

<div class="py-5">
    <div class="container">
        <div class="row">
            @foreach ($productdetails as $prod )
            <div class="col-md-3 mt=3">
                <div class="card">
                    <img src="{{asset('assets/uploads/products/' .$prod->image)}}" alt="Product image">
                    <div class="card-body">
                        <h5>{{$prod->name}}</h5>
                        <span class="float-start">{{$prod->selling_price}}</span>
                        <span class="float-end"><s>{{$prod->original_price}}</s></span>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script>
    $('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
</script>
@endsection



{{-- @section('content')
@include('layouts.includes.slider')

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme">
                    @foreach ($productdetails as $prod )
                    <div class="item">
                        <div class="card">
                            <img src="{{asset('assets/uploads/products/' .$prod->image)}}" alt="Product image">
                            <div class="card-body">
                                <h5>{{$prod->name}}</h5>
                                <span class="float-start">{{$prod->selling_price}}</span>
                                <span class="float-end"><s>{{$prod->original_price}}</s></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
           
           
        </div>
    </div>
</div>
@endsection
 --}}