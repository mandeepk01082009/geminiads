@extends('web.layouts.app')

@section('styles')

@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Slider Videos</h1> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Slider Videos</h6>
        </div>
        <div class="card-body">
            <form action="/updateslider/{{$slider->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                  <div class="row">
                      <input type="hidden" name="id" id="id" value="{{$slider->id}}">
                  </div>
                  <div class="row">
                      <label for="video" class="col-md-4 col-form-label">Upload Video</label>
                      <input type="file" name="video" id="video" class="form-control" value="{{$slider->video}}">
        
                  </div>
      
                  <div class="mt-2">
                      <button type="submit" class="btn btn-success" value="Save">Submit</button>
                      
                  </div>
              </form>
    </div>

</div>
</div>
@endsection
