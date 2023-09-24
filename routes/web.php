<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Models\Slider;
use App\Models\Category;  
use App\Models\Portfolio;  

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $sliderdata = Slider::all();
    return view('welcome',compact('sliderdata'));    
});
// Route::get('/contact-us', function () {
//     return view('contact-us');
// });

Route::get('/contact-us', [SaveController::class, 'index'])->name('contact');
Route::post('/send-email', [SaveController::class, 'sendEmail'])->name('sendContactEmail');   
Route::get("/contact", [SaveController::class, 'view']);  
Route::get('/deletecontact/{id}',[SaveController::class, 'destroy'])->name('contact.delete');
// Route::post('/store',[SaveController::class, 'store'])->name('data');   

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog-detail', function () {
    return view('blog-detail');
});
Route::get('/portfolio', function () {
    $portfoliodata = Category::orderBy('sort_col', 'asc')->get();
    return view('portfolio',compact('portfoliodata'));
});
Route::get('/portfolio-detail', function () {
    return view('portfolio-detail');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/services/newspaper-advertising-agency', function () {
    return view('newspaper-advertising-agency');
});
Route::get('/services/newspaper-classified-advertising-agency', function () {
    return view('newspaper-classified-advertising-agency');
});
Route::get('/services/print-advertising-agency', function () {
    return view('print-advertising-agency');
});
Route::get('/services/tv-radio-advertising-agency', function () {
    return view('tv-radio-advertising-agency');
});
Route::get('/services/digital-marketing-company', function () {
    return view('digital-marketing-company');
});
Route::get('/services/website-design-and-development-company', function () {
    return view('website-design-and-development-company');
});
Route::get('/services/mobile-app-development-company', function () {
    return view('mobile-app-development-company');
});
Route::get('/services/tv-advertisement-agency', function () {
    return view('tv-advertisement-agency');
});

Route::get('/portfolio/{id}', [PortfolioController::class, 'display'])->name('display.portfolio');

// classified ads url
Route::get('/services/amar-ujala-classified-advertising-agency', function () {
    return view('amar-ujala-classified-advertising-agency');
});

// blogs url
Route::get('/blog/5-ways-to-create-effective-ads-for-your-brand', function () {
    return view('5-ways-to-create-effective-ads-for-your-brand');
});
Route::get('/blog/how-to-find-the-best-advertising-agency-for-your-business', function () {
    return view('how-to-find-the-best-advertising-agency-for-your-business');
});

// admin routings
// @include("web.admin.php");
Auth::routes();     

Route::get('/home', [HomeController::class, 'index'])->name('home');

//slider  
Route::get("slider/create", [SliderController::class, 'create'])->name('slider/create');
Route::post('slider', [SliderController::class, 'store']);
Route::get("/view", [SliderController::class, 'show']);
Route::get('/editslider/{id}', [SliderController::class, 'edit']);
Route::patch('/updateslider/{id}',[SliderController::class, 'update']);
Route::get('/deleteslider/{id}',[SliderController::class, 'destroy'])->name('slider.delete');
//category
Route::get("category/create", [CategoryController::class, 'create'])->name('slider/create');
Route::post('category', [CategoryController::class, 'store']);
Route::get("/categories", [CategoryController::class, 'show']);
Route::get('/editcategory/{id}', [CategoryController::class, 'edit']);
Route::patch('/updatecategory/{id}',[CategoryController::class, 'update']);
Route::get('/deletecategory/{id}',[CategoryController::class, 'destroy'])->name('category.delete');

//portfolio
Route::get("/createportfolio", [PortfolioController::class, 'create'])->name('portfolio.create');
Route::post('store', [PortfolioController::class, 'store']);   
Route::get("/covers", [PortfolioController::class, 'show']);
Route::get('/editportfolio/{id}', [PortfolioController::class, 'edit']);
Route::patch('/updateportfolio/{id}',[PortfolioController::class, 'update']);
Route::get('/deleteportfolio/{id}',[PortfolioController::class, 'destroy'])->name('portfolio.delete');




