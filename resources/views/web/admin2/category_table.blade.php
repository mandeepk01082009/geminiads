@extends('web.layouts.app')

@section('styles')
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">List of Categories</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Category</h6>
            </div>
            <div class="card-body">
                <!-- <a href="{{ url('slider/create') }}" class="btn btn-success" style="float: right">Add New Image</a> -->
                <a href="{{ url('category/create') }}"><i class="fa fa-plus-square"
                        style="font-size: 40px; float: right;"></i></a>
                <div class="table-responsive">
                    <table class="table table-bordered text-center" width="100%" style="color:black;">
                        <thead>
                            <tr>
                                <th>Sr.</th>
                                <th>Category Name</th>
                                <th>Heading</th>
                                <th>Content</th>
                                <th>Banner</th>
                                <th>Image</th>
                                <th colspan="2">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $product)
                                <tr>
                                    <td>{{ $product->sort_col }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->heading }}</td>
                                    <td>{{ $product->content }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $product->banner) }}" width="70px" height="70px">
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/' . $product->image) }}" width="70px" height="70px">
                                    </td>
                                    <td>
                                        <a href="/editcategory/{{ $product->id }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="/deletecategory/{{ $product->id }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    @endsection
