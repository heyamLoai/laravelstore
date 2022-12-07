@extends('layouts.front')

@section('title')
 Category
@endsection

@section('content')
<div class="py-5">
     <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <h3>All Stores</h3> 
                <div class="row">
                    @foreach ($category as $categ)
                        <div class="col-md-3 mb=3">
                            <a href="{{ url('view-category/' .$categ->slug )}}" >
                            <div class="card">
                                <img src="{{asset('assets/uploads/category/' .$categ->image)}}" height="230px" width="304px" alt="Category image">
                                <div class="card-body">
                                    <h5>{{$categ->name}}</h5>
                                   <p> 
                                    {{ $categ->description}}
                                   </p>
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
               </div>
            </div>
        </div>
     </div>
</div>
@endsection