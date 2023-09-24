@extends('web.layouts.app')

@section('styles')
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Images of Portfolio</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Portfolio</h6>
            </div>
            <div class="card-body">
                <a href="{{ route('portfolio.create') }}"><i class="fa fa-plus-square"
                        style="font-size: 40px; float: right;"></i></a>
                <div class="table-responsive">
                    <table class="table table-bordered text-center" width="100%" style="color:black;">
                        <thead>
                            <tr>
                                <th>Sr.</th>
                                <th>Category Name</th>
                                <th>Image</th>
                                <th colspan="2">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($portfolio as $key => $product)
                                <tr>
                                    <td>{{ $product->sort_col }}</td>
                                    <td>{{ $product->category->name ?? '-' }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $product->image) }}" width="70px" height="70px">
                                    </td>
                                    <td>
                                        <a href="/editportfolio/{{ $product->id }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="/deleteportfolio/{{ $product->id }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @php
                                    $i++;  
                                @endphp
                            @endforeach
                        </tbody>
                    </table>

                </div>

                <div class="container d-flex align-items-center justify-content-center">
                    {{ $portfolio->links() }}
                   
                </div>
                
            </div>
            

        </div>
    @endsection
