@extends('layout.master')
@section('title', 'Advertising Agency in Mohali Chandigarh')
@section('desc', 'Advertising Agency in Mohali Chandigarh')
@section('keywords', 'gemini adertising')

@section('content')
<section class="pageBanner pbBG8" id="scene_1">
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

<section class="blogPageSection">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blogItem03">
                    <div class="bi03Thumb">
                        <img src="{{asset('public/assets')}}/images/blog/21a.png" alt=""/>
                    </div>
                    <div class="bi03Details">
                        <div class="bi01Meta">
                            <span><a href="javascript:void();"><i class="fa-solid fa-folder-open"></i>&nbsp;&nbsp;Advertising</a></span>
                            <span><a href="javascript:void();"><i class="fa-solid fa-clock"></i>&nbsp;&nbsp;March 23, 2023</a></span>
                            <span><a href="javascript:void();"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Admin</a></span>
                            
                        </div>
                        <h2><a href="{{url('/blog/5-ways-to-create-effective-ads-for-your-brand')}}"> 5 Ways to Create Effective Ads for Your Brand</a></h2>
                        <div class="blogExcerpt">
                        In today's highly competitive business landscape, effective advertising is crucial for brand success. But with so many companies vying for consumers' attention, creating ads that stand out can be a challenge.
                        </div>
                        <a class="orbBtn01" href="{{url('/blog/5-ways-to-create-effective-ads-for-your-brand')}}">
                            <span class="bp-shape"></span>
                            <span class="bp-shape"></span>
                            <span class="bp-shape"></span>
                            <span class="bp-shape"></span>
                            <span class="bp-text">Read More</span>
                        </a>
                    </div>
                </div>

                <div class="blogItem03">
                    <div class="bi03Thumb">
                        <img src="{{asset('public/assets')}}/images/blog/7a.png" alt=""/>
                    </div>
                    <div class="bi03Details">
                        <div class="bi01Meta">
                            <span><a href="javascript:void();"><i class="fa-solid fa-folder-open"></i>&nbsp;&nbsp;Advertising</a></span>
                            <span><a href="javascript:void();"><i class="fa-solid fa-clock"></i>&nbsp;&nbsp;March 22, 2023</a></span>
                            <span><a href="javascript:void();"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Admin</a></span>
                            
                        </div>
                        <h2><a href="{{url('/blog/how-to-find-the-best-advertising-agency-for-your-business')}}"> How to Find the Best Advertising Agency for Your Business</a></h2>
                        <div class="blogExcerpt">
                            In today's competitive business world, it's essential to have a robust advertising strategy to promote your products or services. However, not every business owner has the knowledge or experience to create and implement an effective advertising campaign.
                        </div>
                        <a class="orbBtn01" href="{{url('/blog/how-to-find-the-best-advertising-agency-for-your-business')}}">
                            <span class="bp-shape"></span>
                            <span class="bp-shape"></span>
                            <span class="bp-shape"></span>
                            <span class="bp-shape"></span>
                            <span class="bp-text">Read More</span>
                        </a>
                    </div>
                </div>
               
                <div class="row blogPaginationRow">
                    <div class="col-lg-12">
                        <div class="orbitoPagination">
                            <a href="javascript:void();" class="opPrev"><i class="fa-solid fa-angle-left"></i></a>
                            <span class="current">1</span>
                            <a href="javascript:void();">2</a>
                            <a href="javascript:void();">3</a>
                            <a href="javascript:void();" class="opNext"><i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    @include ('layout.blogaside')
                </div>
            </div>
        </div>
    </div>
</section>

@stop