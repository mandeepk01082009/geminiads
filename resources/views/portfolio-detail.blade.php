@extends('layout.masterinner')
@section('title', 'Advertising Agency in Mohali Chandigarh')
@section('desc', 'Advertising Agency in Mohali Chandigarh')
@section('keywords', 'gemini adertising')

@section('content')
<section class="pageBanner pbBG7" id="scene_1">
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

<section class="portfolioDetailsSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="folioSlider">
                    <ul id="folioSlider">
                        <li data-thumb="{{asset('public/assets')}}/images/folio/22.jpg">
                            <img class="folioSliderImg" src="{{asset('public/assets')}}/images/folio/19.jpg" alt="folioSLider" />
                        </li>
                        <li data-thumb="{{asset('public/assets')}}/images/folio/23.jpg">
                            <img class="folioSliderImg" src="{{asset('public/assets')}}/images/folio/20.jpg" alt="folioSLider" />
                        </li>
                        <li data-thumb="{{asset('public/assets')}}/images/folio/24.jpg">
                            <img class="folioSliderImg" src="{{asset('public/assets')}}/images/folio/21.jpg" alt="folioSLider" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-7 col-md-7">
                <div class="folioDetails">
                    <h2>Project Description</h2>
                    <p class="orbitoLead">
                        Ket labore et dolore magna aliqua. Odiko khono bhulho yeja ytumi opora dhnio najanina konod inbether prodi pzele.
                    </p>
                    <p class="mb56">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris tetur adipisicing elit, sed do eiusmod tempor incididunt 
                        ut labore et dolore magna aliqu pteur sint occaecat cup idatat non proident, sunt in culpa qui officia deserunt mollit 
                        anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem 
                        aperiam, eaque ipsa quae ab illo inventore veritatis et qexpl abo. 
                    </p>
                    <h2 class="mb27">Problems</h2>
                    <p class="mb55">
                        Bonotuis nostrud exercitation ullamco laboris tetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et 
                        dolore magna aliqu pteur sint occaecat cupidatat non proident, sunt in culpa qui offictis unde.
                    </p>
                    <h2>Solutions</h2>
                    <div class="row mb43">
                        <div class="col-xl-6">
                            <ul class="orbList2">
                                <li>Full business control</li>
                                <li>User dashboard & analytics</li> 
                                <li>Custom reporting</li>
                                <li>Regular update monitoring</li> 
                                <li>24/7 priority support</li>
                            </ul>
                        </div>
                        <div class="col-xl-6">
                            <ul class="orbList2">
                                <li>Full business control</li>
                                <li>User dashboard & analytics</li> 
                                <li>Custom reporting</li>
                                <li>Regular update monitoring</li> 
                                <li>24/7 priority support</li>
                            </ul>
                        </div>
                    </div>
                    <h2 class="mb27">Results</h2>
                    <p class="mb55">
                        Haste inim veniam, quis nostrud exercitation ullamco laboris tetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
                        et dolore magna aliqu pteur sint occaecat cupidatat non proident, sunt in culpa qui offic dekho gaite.
                    </p>
                    <h2 class="mb35">Gallery</h2>
                    <div class="folioGallery">
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <a href="{{asset('public/assets')}}/images/folio/25h.jpg" class="fgItem imgPopup">
                                    <img src="{{asset('public/assets')}}/images/folio/25.jpg" alt="Folio Gallery"/>
                                </a>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <a href="{{asset('public/assets')}}/images/folio/26h.jpg" class="fgItem imgPopup">
                                    <img src="{{asset('public/assets')}}/images/folio/26.jpg" alt="Folio Gallery"/>
                                </a>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <a href="{{asset('public/assets')}}/images/folio/27h.jpg" class="fgItem imgPopup">
                                    <img src="{{asset('public/assets')}}/images/folio/27.jpg" alt="Folio Gallery"/>
                                </a>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <a href="{{asset('public/assets')}}/images/folio/28h.jpg" class="fgItem imgPopup">
                                    <img src="{{asset('public/assets')}}/images/folio/28.jpg" alt="Folio Gallery"/>
                                </a>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <a href="{{asset('public/assets')}}/images/folio/29h.jpg" class="fgItem imgPopup">
                                    <img src="{{asset('public/assets')}}/images/folio/29.jpg" alt="Folio Gallery"/>
                                </a>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <a href="{{asset('public/assets')}}/images/folio/30h.jpg" class="fgItem imgPopup">
                                    <img src="{{asset('public/assets')}}/images/folio/30.jpg" alt="Folio Gallery"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 offset-xl-1  col-md-5">
                <div class="folioMeta">
                    <div class="folioSingleMeta">
                        <h4>Project Type</h4>
                        <p>UI/UX Design</p>
                    </div>
                    <div class="folioSingleMeta">
                        <h4>Client</h4>
                        <p>ABC Corporation</p>
                    </div>
                    <div class="folioSingleMeta">
                        <h4>Duration</h4>
                        <p>3 months</p>
                    </div>
                    <div class="folioSingleMeta">
                        <h4>Task</h4>
                        <p>UI/UX Design, Branding</p>
                    </div>
                </div>
                <div class="folioShare">
                    <h3>Share</h3>
                    <a class="fac" href="javascript:void(0);"><i class="fa-brands fa-facebook-f"></i></a>
                    <a class="twi" href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>
                    <a class="lin" href="javascript:void(0);"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="row mt94">
            <div class="col-lg-12">
                <h2 class="relatedFolioTitle">You Also Might Like</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="folioItem02">
                    <img src="{{asset('public/assets')}}/images/folio/9.jpg" alt="Orbito Portfolio">
                    <a href="portfolio_details.html" class="folioLink"><i class="orbito-new-page"></i></a>
                    <div class="folioContent2">
                        <div class="fcMeta2">
                            <a href="portfolio.html">Business</a>
                        </div>
                        <h3><a href="portfolio_details.html">Website Development for ABC Corporation</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="folioItem02">
                    <img src="{{asset('public/assets')}}/images/folio/15.jpg" alt="Orbito Portfolio">
                    <a href="portfolio_details.html" class="folioLink"><i class="orbito-new-page"></i></a>
                    <div class="folioContent2">
                        <div class="fcMeta2">
                            <a href="portfolio.html">Web Design</a>
                        </div>
                        <h3><a href="portfolio_details.html">Website Development for ABC Corporation</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="folioItem02">
                    <img src="{{asset('public/assets')}}/images/folio/31.jpg" alt="Orbito Portfolio">
                    <a href="portfolio_details.html" class="folioLink"><i class="orbito-new-page"></i></a>
                    <div class="folioContent2">
                        <div class="fcMeta2">
                            <a href="portfolio.html">Development</a>
                        </div>
                        <h3><a href="portfolio_details.html">Website Development for ABC Corporation</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop