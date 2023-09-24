@extends('layout.masterinner')
@section('title', 'Advertising Agency in Mohali Chandigarh')
@section('desc', 'Advertising Agency in Mohali Chandigarh')
@section('keywords', 'gemini adertising')

@section('content')
<section class="pageBanner pbBG10" id="scene_1">
    <div class="pageBannerOverlay pboDark4"></div>
        <div class="pageBannerContainer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pageBannerContent">
                            <div class="pageBannerContentInner">
                                <h2>Our Blog</h2>
                                <div class="orbitoBredcrumbs">
                                    <a href="{{url('/')}}">Home</a><i>></i><span>Blog</span>
                                </div>
                            </div>
                            <div class="pageBannerShape01"><img src="{{asset('public/assets')}}/images/shapes/18.png" alt=""/></div>
                            <div class="pageBannerShape02"><img src="{{asset('public/assets')}}/images/shapes/19.png" alt=""/></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="pageBannerShape03"><img src="{{asset('public/assets')}}/images/shapes/20.png" alt=""/></div>
</section>

<section class="blogDetailsPageSection">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blogDetailsThumb">
                    <img src="{{asset('public/assets')}}/images/blog/21.jpg" alt="Blog Details"/>
                </div>
                <div class="blogDetailsArea">
                    <div class="bi01Meta">
                        <span><a href="#"><i class="fa-solid fa-folder-open"></i>&nbsp;&nbsp;Web Design</a></span>
                        <span><a href="{{url('/blog-detail')}}"><i class="fa-solid fa-clock"></i>&nbsp;&nbsp;May 9, 2022</a></span>
                        <span><a href="#"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Admin</a></span>
                    </div>
                    <h2 class="blogHeading">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                    <p>
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Excepteur sint occaecat lp ao qui officia de 
                        serunt mollit anim id est labo rum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accntium, 
                        totam rem aperiam, eaque ipsa quae.
                    </p>
                    <p class="mb43">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute 
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sentium, totam rem aperiam, eaque 
                        ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem 
                        quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni do lores eos qui ratione voluptatem sequi nesciunt. 
                    </p>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau dantium, totam rem aperiam, eaque 
                        ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia 
                        voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciu 
                        ctetur adipisicing elit, sed do eiusmod tempor incion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    </p>
                    <p>
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis 
                        unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aper erat voluptatem.
                    </p>
                    <div class="clearfix"></div>
                    <div class="row postMetaRow">
                        <div class="col-md-7">
                            <div class="postTags clearfix">
                                <a href="#">Design</a>
                                <a href="#">Web</a>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="postShare">
                                <h3>Share</h3>
                                <a class="fac" href="javascript:void(0);"><i class="fa-brands fa-facebook-f"></i></a>
                                <a class="twi" href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>
                                <a class="lin" href="javascript:void(0);"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <aside class="widget searchWidget">
                        <h3 class="widgetTitle">Search</h3>
                        <form method="get" action="#" class="searchForm">
                            <input type="search" name="s" id="s" placeholder="Seach your keyword"/>
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </aside>
                    <aside class="widget">
                        <h3 class="widgetTitle">Recent Posts</h3>
                        <div class="widgetPostItems">
                            <div class="widgetPostItem2">
                                <a href="#" class="wpiCat">Web Design</a>
                                <img src="{{asset('public/assets')}}/images/widgets/3.jpg" alt="Orbito Widgets Image">
                                <h3><a href="{{url('/blog-detail')}}">When the musics over turn off the light</a></h3>
                                <span>May 02, 2022</span>
                            </div>
                            <div class="widgetPostItem2">
                                <a href="#" class="wpiCat">Web Design</a>
                                <img src="{{asset('public/assets')}}/images/widgets/4.jpg" alt="Orbito Widgets Image">
                                <h3><a href="{{url('/blog-detail')}}">When the musics over turn off the light</a></h3>
                                <span>May 02, 2022</span>
                            </div>
                            <div class="widgetPostItem2">
                                <a href="#" class="wpiCat">Web Design</a>
                                <img src="{{asset('public/assets')}}/images/widgets/5.jpg" alt="Orbito Widgets Image">
                                <h3><a href="{{url('/blog-detail')}}">When the musics over turn off the light</a></h3>
                                <span>May 02, 2022</span>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget">
                        <h3 class="widgetTitle">Categories</h3>
                        <ul>
                            <li><a href="#">Web Development</a>(32)</li>
                            <li><a href="#">Business Management</a>(25)</li>
                            <li><a href="#">Critical Analysis</a>(92)</li>
                            <li><a href="#">Digital Marketing</a>(220)</li>
                            <li><a href="#">Report & Management</a>(124)</li>
                            <li><a href="#">Search Engine Optimizaiton</a>(602)</li>
                            <li><a href="#">Software Development</a>(72)</li>
                        </ul>
                    </aside>
                    
                    <aside class="widget">
                        <h3 class="widgetTitle">Follow Us</h3>
                        <div class="orbitoSocials clearfix">
                            <a class="fac" href="javascript:void(0);"><i class="fa-brands fa-facebook-f"></i></a>
                            <a class="twi" href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>
                            <a class="lin" href="javascript:void(0);"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a class="you" href="javascript:void(0);"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

@stop