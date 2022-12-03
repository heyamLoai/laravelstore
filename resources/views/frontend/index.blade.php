@extends('layouts.front')

@section('title')
 welcom to our store 
@endsection

@section('content')
@include('layouts.includes.slider')

<div class="py-5">
    <div class="container">
        <div class="row">
            <h3>Featured products</h3>

            @foreach ($featured_products as $prod )
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="{{asset('assets/uploads/products/' .$prod->image)}}" height="230px" width="260px" alt="Product image">
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


<div class="py-5">
    <div class="container">
        <div class="row">
            <h3>Trending Stores</h3>
            @foreach ($trending_category as $tcategory )
            <div class="col-md-3 mt=3">
                <a  href="{{ url('view-category/' .$tcategory->slug )}}" >
                <div class="card">
                    <img src="{{asset('assets/uploads/category/' .$tcategory->image)}}" height="230px" width="260px" alt="Product image">
                    <div class="card-body">
                        <h5>{{$tcategory->name}}</h5>
                        <p> 
                            {{ $tcategory->description}}
                        </p>
                    </div>
                </div>
            </a>
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


{{-- 
@section('content')
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
@endsection --}}
