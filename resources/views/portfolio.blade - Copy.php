@extends('layout.masterinner')
@section('title', 'Advertising Agency in Mohali Chandigarh')
@section('desc', 'Advertising Agency in Mohali Chandigarh')
@section('keywords', 'gemini adertising')

@section('content')
<section class="pageBanner pbBG6" id="scene_1">
    <div class="pageBannerOverlay pboDark4"></div>
        <div class="pageBannerContainer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pageBannerContent">
                            <div class="pageBannerContentInner">
                                <h2>Portfolio</h2>
                                <div class="orbitoBredcrumbs">
                                    <a href="{{url('/')}}">Home</a><i>></i><span>Portfolio</span>
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

<section class="portfolioPageSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="filterUL">
                    <li class="filter active" data-filter="all">All</li>  
                    <li class="filter" data-filter="web-design">Web Design</li>         
                    <li class="filter" data-filter="development">Development</li>  
                    <li class="filter" data-filter="photographi">Photography</li>      
                    <li class="filter" data-filter="business">Business</li>
                </ul>
            </div>
        </div>
        <div class="row" id="mixGrid">
            <div class="col-xl-4 col-md-6 mix development">
                <div class="folioItem01">
                    <img src="{{asset('public/assets')}}/images/folio/1.jpg" alt="Orbito Portfolio"/>
                    <a href="{{url('/portfolio-detail')}}" class="folioLink"><i class="orbito-new-page"></i></a>
                    <div class="folioContent">
                        <div class="fcMeta">
                            <a href="portfolio4.html">Development</a>
                        </div>
                        <h3><a href="{{url('/portfolio-detail')}}">Website Development for ABC Corporation</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mix business">
                <div class="folioItem01">
                    <img src="{{asset('public/assets')}}/images/folio/2.jpg" alt="Orbito Portfolio"/>
                    <a href="{{url('/portfolio-detail')}}" class="folioLink"><i class="orbito-new-page"></i></a>
                    <div class="folioContent">
                        <div class="fcMeta">
                            <a href="portfolio4.html">Business</a>
                        </div>
                        <h3><a href="{{url('/portfolio-detail')}}">Website Development for ABC Corporation</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mix photographi">
                <div class="folioItem01">
                    <img src="{{asset('public/assets')}}/images/folio/3.jpg" alt="Orbito Portfolio"/>
                    <a href="{{url('/portfolio-detail')}}" class="folioLink"><i class="orbito-new-page"></i></a>
                    <div class="folioContent">
                        <div class="fcMeta">
                            <a href="portfolio4.html">Photography</a>
                        </div>
                        <h3><a href="{{url('/portfolio-detail')}}">Website Development for ABC Corporation</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mix development">
                <div class="folioItem01">
                    <img src="{{asset('public/assets')}}/images/folio/10.jpg" alt="Orbito Portfolio"/>
                    <a href="{{url('/portfolio-detail')}}" class="folioLink"><i class="orbito-new-page"></i></a>
                    <div class="folioContent">
                        <div class="fcMeta">
                            <a href="portfolio4.html">Development</a>
                        </div>
                        <h3><a href="{{url('/portfolio-detail')}}">Website Development for ABC Corporation</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mix web-design">
                <div class="folioItem01">
                    <img src="{{asset('public/assets')}}/images/folio/11.jpg" alt="Orbito Portfolio"/>
                    <a href="{{url('/portfolio-detail')}}" class="folioLink"><i class="orbito-new-page"></i></a>
                    <div class="folioContent">
                        <div class="fcMeta">
                            <a href="portfolio4.html">Web Design</a>
                        </div>
                        <h3><a href="{{url('/portfolio-detail')}}">Website Development for ABC Corporation</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mix business">
                <div class="folioItem01">
                    <img src="{{asset('public/assets')}}/images/folio/12.jpg" alt="Orbito Portfolio"/>
                    <a href="{{url('/portfolio-detail')}}" class="folioLink"><i class="orbito-new-page"></i></a>
                    <div class="folioContent">
                        <div class="fcMeta">
                            <a href="portfolio4.html">Business</a>
                        </div>
                        <h3><a href="{{url('/portfolio-detail')}}">Website Development for ABC Corporation</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mix photographi">
                <div class="folioItem01">
                    <img src="{{asset('public/assets')}}/images/folio/16.jpg" alt="Orbito Portfolio"/>
                    <a href="{{url('/portfolio-detail')}}" class="folioLink"><i class="orbito-new-page"></i></a>
                    <div class="folioContent">
                        <div class="fcMeta">
                            <a href="portfolio4.html">Photography</a>
                        </div>
                        <h3><a href="{{url('/portfolio-detail')}}">Website Development for ABC Corporation</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mix development">
                <div class="folioItem01">
                    <img src="{{asset('public/assets')}}/images/folio/17.jpg" alt="Orbito Portfolio"/>
                    <a href="{{url('/portfolio-detail')}}" class="folioLink"><i class="orbito-new-page"></i></a>
                    <div class="folioContent">
                        <div class="fcMeta">
                            <a href="portfolio4.html">Development</a>
                        </div>
                        <h3><a href="{{url('/portfolio-detail')}}">Website Development for ABC Corporation</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mix web-design">
                <div class="folioItem01">
                    <img src="{{asset('public/assets')}}/images/folio/18.jpg" alt="Orbito Portfolio"/>
                    <a href="{{url('/portfolio-detail')}}" class="folioLink"><i class="orbito-new-page"></i></a>
                    <div class="folioContent">
                        <div class="fcMeta">
                            <a href="portfolio4.html">Web Design</a>
                        </div>
                        <h3><a href="{{url('/portfolio-detail')}}">Website Development for ABC Corporation</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="orbitoPagination">
                    <a href="portfolio4.html" class="opPrev"><i class="fa-solid fa-angle-left"></i></a>
                    <span class="current">1</span>
                    <a href="portfolio4.html">2</a>
                    <a href="portfolio4.html">3</a>
                    <a href="portfolio4.html" class="opNext"><i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

@stop