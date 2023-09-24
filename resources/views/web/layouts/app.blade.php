<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">      

    <title>SB Admin 2 - Dashboard</title> 
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



   
    <!-- Custom fonts for this template-->
    <link href="{{asset('/admin_panel')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">     
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('/admin_panel')}}/css/sb-admin-2.min.css" rel="stylesheet">
   

    @yield('styles')  
        


</head>

<body>

    {{-- MAIN NAVIGATION BAR --}}
    @include('web.layouts.partials.header')  

    {{-- MAIN CONTENT --}}
    <div class="main">
        @yield('content')
    </div>

    {{-- FOOTER --}}
    @include('web.layouts.partials.footer')   

     

    @yield('scripts')

</body>

</html>
