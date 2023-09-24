@extends('web.layouts.app')

@section('styles')

@endsection

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Slider Videos</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Slider Videos</h6>
        </div>
        <div class="card-body">
            <!-- <a href="{{url('slider/create')}}" class="btn btn-success" style="float: right">Add New Image</a> -->
            <a href="{{url('slider/create')}}"><i class="fa fa-plus-square" style="font-size: 40px; float: right;"></i></a>
            <div class="table-responsive">
                <table class="table table-bordered text-center"  width="100%"  style="color:black;">
                    <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Video</th>
                            <th colspan="2" >Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                       @foreach($slider as $item)
                       <tr>
                           <td>{{$i}}</td>
                       <td>
                           <video controls src="{{asset('storage/'.$item->video)}}" width="70px" height="70px"></video>
                       </td>
                       <td>
                           <a href="/editslider/{{$item->id}}" class="btn btn-primary">Edit</a>
                       </td>
                       <td>
                           <a href="/deleteslider/{{$item->id}}" class="btn btn-danger">Delete</a>
                       </td>
                       </tr>
                       @php
                       $i++;
                  @endphp
                       @endforeach
                    </tbody> 
                </table>                                        
        </div>
    </div>

</div>

@endsection