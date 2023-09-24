<?php
    Route::get('/admin', function () {    
        return view('admin.index');
    });
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/admin/clients', function () {
        return view('admin.clients');
    });
    Route::get('/admin/testimonials', function () {
        return view('admin.testimonials');
    });
    Route::get('/admin/category', function () {
        return view('admin.category');
    });
    Route::get('/admin/portfolio', function () {
        return view('admin.portfolio');
    });
    Route::get('/admin/metadetails', function () {
        return view('admin.metadetails');
    });
    Route::get('/admin/header-snippets', function () {
        return view('admin.header-snippets');
    });
    Route::get('/admin/footer-snippets', function () {
        return view('admin.footer-snippets');
    });
?>