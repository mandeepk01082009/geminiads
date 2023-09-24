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
            <form action="/updateportfolio/{{$portfolio->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                  <div class="row">
                      <input type="hidden" name="id" id="id" value="{{$portfolio->id}}">
                  </div>
                  <div class="row">
                    <label>Category</label>
                    <select class="custom-select" name="category_id" >  
                        @foreach($category as $categories)
                        <option value="{{$categories->id}}" @if($categories->id == $portfolio->category_id) selected @endif>{{$categories->name}}</option>
                     @endforeach
                        
                           
                    </select>
                </div>

                <div class="row mt-2">
                    <label>Sort Number</label>
                    <input type="number" name="sort_col" id="sort_col" class="form-control"  min="0"
                        value="{{$portfolio->sort_col }}">
                </div>

                <div class="row mt-2">
                      <label for="image" class="col-md-4 col-form-label">Upload Image</label>
                      <input type="file" name="image" id="image" class="form-control" value="{{$portfolio->image}}"><img class="mt-2" src="{{ asset('storage/' . $portfolio->image) }}" width="10%">

        
                  </div>
      
                  <div class="mt-2">
                      <button type="submit" class="btn btn-success" value="Save">Submit</button>
                      
                  </div>
              </form>
    </div>

</div>
</div>
@endsection
