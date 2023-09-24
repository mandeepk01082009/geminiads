@extends('layout.master')

@section('title', 'Advertising Agency in Mohali Chandigarh')

@section('desc', 'Advertising Agency in Mohali Chandigarh')

@section('keywords', 'gemini adertising')



@section('content')

<section class="pageBanner pbBG20" id="scene_1">

    <div class="pageBannerOverlay pboDark4"></div>

        <div class="pageBannerContainer">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="pageBannerContent">

                            <div class="pageBannerContentInner">

                                <h2>Digital Promotion</h2>

                                <div class="orbitoBredcrumbs">

                                    <a href="{{url('/')}}">Home</a><i>></i><span>Portfolio</span><i>></i><span>Digital Promotion</span>

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

        

    <div class="photo-gallery">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-6 text-center">

                    <h2 class="secTitle mb-2">Digital Promotion</h2>

                    <p class="secDesc mb-5">

                        Digital promotion is a type of marketing that uses various online channels such as Google, Facebook, Instagram etc. and tactics to promote a business, product, or service.

                    </p>

                </div>

            </div>
            

            <div class="row photos">

                
                @foreach ($digital as $item)
                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('public/assets')}}/images/portfolio/digital/1.png" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('storage/'.$item->image)}}">

                    </a>

                </div>
                @endforeach

                {{-- <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('public/assets')}}/images/portfolio/digital/2.png" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('public/assets')}}/images/portfolio/digital/2.png">

                    </a>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('public/assets')}}/images/portfolio/digital/3.png" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('public/assets')}}/images/portfolio/digital/3.png">

                    </a>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('public/assets')}}/images/portfolio/digital/4.png" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('public/assets')}}/images/portfolio/digital/4.png">

                    </a>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('public/assets')}}/images/portfolio/digital/5.png" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('public/assets')}}/images/portfolio/digital/5.png">

                    </a>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('public/assets')}}/images/portfolio/digital/6.png" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('public/assets')}}/images/portfolio/digital/6.png">

                    </a>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('public/assets')}}/images/portfolio/digital/7.png" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('public/assets')}}/images/portfolio/digital/7.png">

                    </a>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('public/assets')}}/images/portfolio/digital/8.png" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('public/assets')}}/images/portfolio/digital/8.png">

                    </a>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('public/assets')}}/images/portfolio/digital/9.png" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('public/assets')}}/images/portfolio/digital/9.png">

                    </a>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('public/assets')}}/images/portfolio/digital/10.png" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('public/assets')}}/images/portfolio/digital/10.png">

                    </a>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('public/assets')}}/images/portfolio/digital/11.png" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('public/assets')}}/images/portfolio/digital/11.png">

                    </a>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('public/assets')}}/images/portfolio/digital/12.png" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('public/assets')}}/images/portfolio/digital/12.png">

                    </a>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('public/assets')}}/images/portfolio/digital/13.png" data-lightbox="photos">

                        <img class="img-fluid border" src="{{asset('public/assets')}}/images/portfolio/digital/13.png">

                    </a>

                </div> --}}

                

            </div>

        </div>

    </div>

        <!-- <div class="row">

            <div class="col-lg-12">

                <div class="orbitoPagination">

                    <a href="javascript:void();" class="opPrev"><i class="fa-solid fa-angle-left"></i></a>

                    <span class="current">1</span>

                    <a href="{{url('/portfolio/newspaper-ads/newspaper-ads-2')}}">2</a>

                    <a href="{{url('/portfolio/newspaper-ads/newspaper-ads-3')}}">3</a>

                    <a href="{{url('/portfolio/newspaper-ads/newspaper-ads-2')}}" class="opNext"><i class="fa-solid fa-angle-right"></i></a>

                </div>

            </div>

        </div> -->

    </div>

</section>



@stop