@extends('web.layouts.app')

@section('styles')

@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Add New Category</h1> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New Category</h6>
        </div>
        <div class="card-body">
            <form action="{{url('category')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <label for="name">Name</label>
                  <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="Name of Category"/>
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  </div>

                  <div class="row mt-2">
                    <label for="heading">Heading</label>
                    <input class="form-control @error('heading') is-invalid @enderror" type="text" name="heading" id="heading" placeholder="Heading"/>
                    @error('heading')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="row mt-2">
                        <label for="content">Content</label>


                            <textarea id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" placeholder="Content"></textarea>

                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>

                    <div class="row mt-2">
                        <label for="sort">Sort Number</label>
                        <input class="form-control @error('sort_col') is-invalid @enderror" type="text" name="sort_col" id="sort_col" placeholder="Sort Number"/>
                        @error('sort_col')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>

                    <div class="row mt-2">
                        <label for="banner">Banner</label>
                        <input type="file" name="banner" id="banner" class="form-control-file @error('banner') is-invalid @enderror ">
        
                            @error('banner')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                            </span>
                            @enderror  
                    </div>

                  <div class="row mt-2">
                      <label for="image">Image</label>
                      <input type="file" name="image" id="image" class="form-control-file @error('image') is-invalid @enderror ">
      
                          @error('image')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                          </span>
                          @enderror  
                  </div>
      
                  <div class="mt-2">
                      <button type="submit" class="btn btn-success" value="Save">Submit</button>
                      
                  </div>
              </form>
    </div>

</div>
</div>
@endsection  
