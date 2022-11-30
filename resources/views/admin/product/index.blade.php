@extends('layouts.admin')


@section('content')
    <div class="card">
        <div class="card-header">
            <hr>
            <h4> Product Page </h4>
        </div>
        <div class="card-body">
           <table class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        <th>Store Name </th>
                        <th>Name of product </th>
                        <th>Selling Price</th>
                        <th>Image</th>
                        <th >Action</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($products as $item)
                        <tr>
                        <td>{{$item->category->name ?? 'non'}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->selling_price}}</td>
                        <td><img src="{{asset('assets/uploads/products/' .$item->image)}}" class="category-image" alt="Image here "></td>
                        <td>
                            <a  href= "{{url('edit-product/' .$item->id)}}" class="btn btn-primary btn-center">Edit</a>
                            <a href= "{{URL('delete-product/' .$item->id)}}" class="btn btn-danger btn-center">Delete</a>
                        </td>

                    </tr>
                    @endforeach
                   
                </tbody>

           </table>
        </div>
    </div>
@endsection