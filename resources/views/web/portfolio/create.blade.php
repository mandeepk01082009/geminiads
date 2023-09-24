@extends('web.layouts.app')

@section('styles')

@endsection

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Add Slider Videos</h1> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Portfolio Images</h6>
        </div>
        <div class="card-body">
            <form action="{{url('store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <label>Category</label>
                    <select class="custom-select" name="category_id" >  
                        {{-- <option value="">Choose...</option> --}}
                        @foreach($category as $categories)
                        <option value="{{$categories->id}}">{{$categories->name}}</option>
                     @endforeach    
                           
                    </select>
                </div>

                <div class="row mt-2">
                    <label for="sort">Sort Number</label>
                    <input class="form-control @error('sort_col') is-invalid @enderror" type="text" name="sort_col" id="sort_col" placeholder="sort_col"/>
                    @error('sort_col')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>


                <div class="row mt-2">
                  <label for="image" class="col-md-4 col-form-label ">Add Image</label>
                  <input type="file" name="image" id="image" class="form-control">  
      
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