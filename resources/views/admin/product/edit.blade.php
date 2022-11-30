@extends('layouts.admin')


@section('content')
    <div class="card">
 
        <div class="card-header">
            <h4> Add Product</h4>
        </div>
        <div class="card-body">
        <form action="{{url('update-product/' .$products->id)}}" method="POST" enctype="multipart/form-data" >
          @method('PUT')
            @csrf
        <div class="row">
            <div class="col-md-12 mb-3">
              <div class="form-floating">
                <select class="form-select" >
                  <option value="">{{$products->category->name ?? 'non '}}</option> 
                 
                </select>
              </div>
            </div>
            <div class="col-md-6">
                <label class="bmd-label-floating">Name</label>
                <div class="form-group bmd-form-group">
                  <input type="text" class="form-control" value="{{$products->name}}" name="name">
                </div>
              </div>

        
            <div class="col-md-6 mb-3">
                <label class="bmd-label-floating">Slug</label>
                <div class="form-group bmd-form-group">
                  <input type="text" class="form-control" value="{{$products->slug}}" name="slug">
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label class="bmd-label-floating">Small Description</label>
                <div class="form-group bmd-form-group">
                  
                  <textarea class="form-control" rows="1" name="small_descriptuin">{{$products->small_descriptuin}}</textarea>
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label class="bmd-label-floating">Description</label>
                <div class="form-group bmd-form-group">
                  
                  <textarea class="form-control" rows="1"name="descriptuin">{{$products->descriptuin}}</textarea>
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label class="bmd-label-floating">Original Price</label>
                <input type="number" class="form-control" value="{{$products->selling_price}}" name="original_price">

              </div>

              <div class="col-md-6 mb-3">
                <label class="bmd-label-floating">Selling Price</label>
                  <input type="number" class="form-control" value="{{$products->selling_price}}" name="selling_price">
              </div>

              <div class="col-md-6 mb-3">
                <label class="bmd-label-floating">Tax</label>
                  <input type="number" class="form-control" value="{{$products->tax}}"  name="tax">
                
              </div>

              <div class="col-md-6 mb-3">
                <label class="bmd-label-floating">Quantity</label> 
                  <input type="number" class="form-control"  value="{{$products->quantity}}" name="quantity">
                </div>
              

            <div class="col-md-6 mb-3">
                <label for="">Status</label>
                <input type="checkbox"  {{$products->status == 1 ? 'checked' : '' }} name="status"> 
            </div>

            <div class="col-md-6 mb-3">
              <label for="">Trending</label>
              <input type="checkbox"  {{$products->trending== 1 ? 'checked' : '' }}  name="trending"> 
          </div>
           
            <div class="col-md-12 mb-3">
                <label class="bmd-label-floating">Meta Tittle</label>
                <div class="form-group bmd-form-group">
                  <input class="form-control" rows="1" value="{{$products->meta_tittle}}"  name="meta_tittle">
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label class="bmd-label-floating">Meta keywords</label>
                <div class="form-group bmd-form-group">
                  <textarea class="form-control"  name="meta_keywords">{{$products->meta_keywords}} </textarea>
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label class="bmd-label-floating">Meta Description</label>
                <div class="form-group bmd-form-group">
                  <textarea class="form-control" rows="1"  name="meta_description">{{$products->meta_description}} </textarea>
                </div>
              </div>
              @if ($products->image)
                  <img src="{{asset('assets/uploads/products/' .$products->image)}}">
              @endif
            <div class="col-md-12">
                <input type="file"  name="image" class="form-grope"> 
                <br>
            </div>

            <div class="col-md-12">
                <br>
                <button type="submit"  class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
        </div>
        </div>
@endsection