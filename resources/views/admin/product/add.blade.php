@extends('layouts.admin')


@section('content')
    <div class="card">
 
        <div class="card-header">
            <h4> Add Product</h4>
        </div>
        <div class="card-body">
        <form action={{ url('insert-product') }} method="POST" enctype="multipart/form-data" >
            @csrf
        <div class="row">
            <div class="col-md-12 mb-3">
              <div class="form-floating">
                <select class="form-select" name="cate_id">
                  <option value="">Select a Store </option> 
                  @foreach ($category as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
                <label class="bmd-label-floating">Name</label>
                <div class="form-group bmd-form-group">
                  <input type="text" class="form-control" name="name">
                </div>
              </div>

        
            <div class="col-md-6 mb-3">
                <label class="bmd-label-floating">Slug</label>
                <div class="form-group bmd-form-group">
                  <input type="text" class="form-control" name="slug">
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label class="bmd-label-floating">Small Description</label>
                <div class="form-group bmd-form-group">
                  <textarea class="form-control" rows="1" name="small_descriptuin"> </textarea>
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label class="bmd-label-floating">Description</label>
                <div class="form-group bmd-form-group">
                  <textarea class="form-control" rows="1" name="descriptuin"> </textarea>
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label class="bmd-label-floating">Original Price</label>
                  <input type="number" class="form-control"  name="original_price">
              </div>

              <div class="col-md-6 mb-3">
                <label class="bmd-label-floating">Selling Price</label>
                  <input type="number" class="form-control" name="selling_price">
              </div>

              <div class="col-md-6 mb-3">
                <label class="bmd-label-floating">Tax</label>
                  <input type="number" class="form-control" name="tax">
                
              </div>

              <div class="col-md-6 mb-3">
                <label class="bmd-label-floating">Quantity</label> 
                  <input type="number" class="form-control" name="quantity">
                </div>
              

            <div class="col-md-6 mb-3">
                <label for="">Status</label>
                <input type="checkbox"  name="status"> 
            </div>

            <div class="col-md-6 mb-3">
              <label for="">Trending</label>
              <input type="checkbox"  name="trending"> 
          </div>
           
            <div class="col-md-12 mb-3">
                <label class="bmd-label-floating">Meta Tittle</label>
                <div class="form-group bmd-form-group">
                  <input class="form-control" rows="1" name="meta_tittle">
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label class="bmd-label-floating">Meta keywords</label>
                <div class="form-group bmd-form-group">
                  <textarea class="form-control" name="meta_keywords"> </textarea>
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label class="bmd-label-floating">Meta Description</label>
                <div class="form-group bmd-form-group">
                  <textarea class="form-control" rows="1" name="meta_description"> </textarea>
                </div>
              </div>
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