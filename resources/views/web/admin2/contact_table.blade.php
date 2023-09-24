@extends('web.layouts.app')

@section('styles')

@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">View of Contact Users</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List of users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center"  width="100%"  style="color:black;">
                    <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date of Contact</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                       @foreach($contact as $item)
                       <tr>
                           <td>{{$i}}</td>
                       <td>{{$item->name}}</td>
                       <td>{{$item->email}}</td>
                       <td>{{$item->phone}}</td>
                       <td>{{$item->subject}}</td>
                       <td>{{$item->message}}</td>
                       <td>{{$item->created_at->format('d/m/Y H:i:s')}}</td>
                       <td>
                        <a href="/deletecontact/{{$item->id}}" class="btn btn-danger">Delete</a>
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

