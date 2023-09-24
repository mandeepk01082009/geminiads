@extends('layout.master')

@section('title', 'Advertising Agency in Mohali Chandigarh')

@section('desc', 'Advertising Agency in Mohali Chandigarh')

@section('keywords', 'gemini adertising')



@section('content')

<section class="pageBanner pbBG19" id="scene_1">

    <div class="pageBannerOverlay pboDark4"></div>

        <div class="pageBannerContainer">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="pageBannerContent">

                            <div class="pageBannerContentInner">

                                <h2>Newspaper Ads</h2>

                                <div class="orbitoBredcrumbs">

                                    <a href="{{url('/')}}">Home</a><i>></i><span>Portfolio</span><i>></i><span>Newspaper Ads</span>

                                </div>

                            </div>

                            <div class="pageBannerShape01"><img src="{{asset('assets')}}/images/shapes/18.png" alt=""/></div>

                            <div class="pageBannerShape02"><img src="{{asset('assets')}}/images/shapes/19.png" alt=""/></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    <div class="pageBannerShape03"><img src="{{asset('assets')}}/images/shapes/20.png" alt=""/></div>

</section>



<section class="portfolioPageSection">

    <div class="container">

        

    <div class="photo-gallery">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-7 text-center">

                    <h2 class="secTitle mb-2">Newspaper Advertising</h2>

                    <p class="secDesc mb-5">

                        Newspaper advertising has been a staple of marketing for centuries. It remains a popular choice for businesses, both big and small, because it is a cost-effective and efficient way to reach a wide audience.

                    </p>

                </div>

            </div>

            <div class="row photos">

                @foreach ($add as $item)
                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('assets')}}/images/portfolio/18.jpg" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('storage/'.$item->image)}}">

                    </a>

                </div>
                @endforeach

                {{-- <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('assets')}}/images/portfolio/19.jpg" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('assets')}}/images/portfolio/19.jpg">

                    </a>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('assets')}}/images/portfolio/21.jpg" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('assets')}}/images/portfolio/21.jpg">

                    </a>

                </div>

                

                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('assets')}}/images/portfolio/23.jpg" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('assets')}}/images/portfolio/23.jpg">

                    </a>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('assets')}}/images/portfolio/24.jpg" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('assets')}}/images/portfolio/24.jpg">

                    </a>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('assets')}}/images/portfolio/25.jpg" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('assets')}}/images/portfolio/25.jpg">

                    </a>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('assets')}}/images/portfolio/26.jpg" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('assets')}}/images/portfolio/26.jpg">

                    </a>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('assets')}}/images/portfolio/27.jpg" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('assets')}}/images/portfolio/27.jpg">

                    </a>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('assets')}}/images/portfolio/20.jpg" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('assets')}}/images/portfolio/20.jpg">

                    </a>

                </div> --}}

            </div>

        </div>

    </div>

        <div class="row">

            <div class="col-lg-12">

                <div class="orbitoPagination">

                    <a href="{{url('/portfolio/newspaper-ads/newspaper-ads-2')}}" class="opPrev"><i class="fa-solid fa-angle-left"></i></a>

                    <a href="{{url('/portfolio/newspaper-ads')}}">1</a>

                    <a href="{{url('/portfolio/newspaper-ads/newspaper-ads-2')}}">2</a>

                    <span class="current">3</span>

                    <a href="javascript:void();" class="opNext"><i class="fa-solid fa-angle-right"></i></a>

                </div>

            </div>

        </div>

    </div>

</section>



@stop