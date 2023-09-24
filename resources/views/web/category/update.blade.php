@extends('web.layouts.app')

@section('styles')
@endsection

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        {{-- <h1 class="h3 mb-2 text-gray-800">Update Category Details</h1> --}}

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Update Category Details</h6>
            </div>
            <div class="card-body">
                <form action="/updatecategory/{{ $category->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <input type="hidden" name="id" id="id" value="{{ $category->id }}">
                    </div>
                    <div class="row">
                        <label>Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ $category->name }}">
                    </div>

                    <div class="row mt-2">
                        <label>Heading</label>
                        <input type="text" name="heading" id="heading" class="form-control"
                            value="{{ $category->heading }}">
                    </div>

                    <div class="row mt-2">
                        <label for="content">Content</label>

                        <textarea id="content" type="text" class="form-control" name="content" placeholder="Content">{{ $category->content }}</textarea>
                    </div>

                    <div class="row mt-2">
                        <label>Sort Number</label>
                        <input type="number" name="sort_col" id="sort_col" class="form-control"
                            value="{{ $category->sort_col }}">
                    </div>



                    <div class="row mt-2">
                        <label for="banner">Banner</label>
                        <input type="file" name="banner" id="banner" class="form-control"
                            value="{{ $category->banner }}"><img class="mt-2"
                            src="{{ asset('storage/' . $category->banner) }}" width="50%">

                    </div>


                    <div class="row mt-2">
                        <label for="image">Upload Image</label>
                        <input type="file" name="image" id="image" class="form-control"
                            value="{{ $category->image }}"><img class="mt-2"
                            src="{{ asset('storage/' . $category->image) }}" width="40%">
                    </div>


                    <div class="mt-2">
                        <button type="submit" class="btn btn-success" value="Save">Submit</button>

                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
