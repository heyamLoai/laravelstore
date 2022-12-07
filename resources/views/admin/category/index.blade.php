@extends('layouts.admin')


@section('content')
    <div class="card">
        <div class="card-header">
            <hr>
            <h4> Category Page </h4>
        </div>
        <div class="card-body">
           <table class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        {{-- <th class="text-center" >ID</th> --}}
                        <th>Store Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($category as $item)
                    <tr>
                        {{-- <td>{{$item->id}}</td> --}}
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            <img src="{{asset('assets/uploads/category/' .$item->image)}}" class="category-image"   alt="Image here "></td>
                        <td>
                            <a  href= "{{url('edit-category/' .$item->id) }}" class="btn btn-primary btn-center">Edit</a>
                            <a href= "{{URL('delete-category/' .$item->id)}}" class="btn btn-danger btn-center">Delete</a>

                        </td>

                    </tr>
                    @endforeach
                   
                </tbody>

           </table>
        </div>
    </div>
@endsection