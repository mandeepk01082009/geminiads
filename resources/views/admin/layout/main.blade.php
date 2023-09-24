<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dashboard - Gemini Advertising</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Gemini advertising is a digital marketing agency in Chandigarh Mohali." name="description" />
        <meta content="gemini advertising, marketing agency, digital online advertisers, advertising agency mohali" name="keywords" />
        <meta content="Gemini Advertising Agency" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin_assets')}}/images/faviconn.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('admin_assets')}}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('admin_assets')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('admin_assets')}}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
		
		<!-- DataTables -->
        <link href="{{asset('admin_assets')}}/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin_assets')}}/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />


    </head>

    <body data-sidebar="dark" data-layout-mode="light">
        <!-- page wrapper-->
        <div id="layout-wrapper">
            <header id="page-topbar">
                @include('admin.layout.page-header')
            </header>

            <!-- Sidebar Start -->
            <div class="vertical-menu">
                @include('admin.layout.sidenav')
            </div>
            <!-- Sidebar End -->
            
            <!-- Page content -->
            <div class="main-content">

                @yield('maincontent') 

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                &copy; {{ now()->year }}
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Gemini Advertising
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->    		

        <!-- JAVASCRIPT -->
        <script src="{{asset('admin_assets')}}/libs/jquery/jquery.min.js"></script>
        <script src="{{asset('admin_assets')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('admin_assets')}}/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{asset('admin_assets')}}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('admin_assets')}}/libs/node-waves/waves.min.js"></script>

        <!-- Required datatable js -->
        <script src="{{asset('admin_assets')}}/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{asset('admin_assets')}}/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="{{asset('admin_assets')}}/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="{{asset('admin_assets')}}/js/app.js"></script>
    </body>
</html>