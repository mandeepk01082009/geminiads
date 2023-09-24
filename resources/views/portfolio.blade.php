@extends('layout.master')

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

                            <div class="pageBannerShape01"><img src="{{asset('/assets')}}/images/shapes/18.png" alt=""/></div>

                            <div class="pageBannerShape02"><img src="{{asset('/assets')}}/images/shapes/19.png" alt=""/></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    <div class="pageBannerShape03"><img src="{{asset('/assets')}}/images/shapes/20.png" alt=""/></div>

</section>



<section class="portfolioPageSection">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-7 text-center">

                <h3 class="secSubTitle text-uppercase">Showcasing Creativity</h3>

                <h2 class="secTitle mb-2">Crafting Unique Stories through Design and Creativity</h2>

                <p class="secDesc mb-5">

                    At our agency, we believe in the power of creativity and strategic thinking to help our clients achieve their marketing goals. Our team of experts has years of experience in the industry, and we are always eager to take on new challenges and push the boundaries of what is possible.

                </p>

            </div>

        </div>

        

        <div class="row" id="mixGrid">

            <!-- <div class="col-xl-6 col-md-6 mix">

                <div class="folioItem01">

                    <img src="{{asset('/assets')}}/images/portfolio/port1.png" alt=""/>

                    

                    <div class="folioContent">

                        <h3><a href="#">Real Estate</a></h3>

                    </div>

                </div>

            </div> -->
            @foreach ($portfoliodata as $item)
            <div class="col-md-6 mix">
                <div class="folioItem01">
                    
                    <img src="{{asset('storage/'.$item->image)}}" alt=""/>
                    <div class="text-center mt-3">
                    <h3><a href="/portfolio/{{ $item->id }}">{{ $item->name }}</a></h3></div>
                        {{-- <h3><a href="{{url('/portfolio/newspaper-ads')}}">$item->name</a></h3> --}}
                    </div>                   
                </div>
            @endforeach
        </div>

            <!-- <div class="col-xl-6 col-md-6 mix">

                <div class="folioItem01">

                    <img src="{{asset('public/assets')}}/images/portfolio/port3.png" alt=""/>

                    

                    <div class="folioContent">

                        

                        <h3><a href="#">Outdoor</a></h3>

                    </div>

                </div>

            </div> -->

            <!-- <div class="col-xl-6 col-md-6 mix">

                <div class="folioItem01">

                    <img src="{{asset('public/assets')}}/images/portfolio/port4.png" alt=""/>

                    

                    <div class="folioContent">

                        

                        <h3><a href="#">Brochures & Collaterals</a></h3>

                    </div>

                </div>

            </div> -->

            {{-- <div class="col-xl-6 col-md-6 mix">

                <div class="folioItem01">

                    <img src="{{asset('assets')}}/images/portfolio/port5.png" alt=""/>
                    <div class="text-center mt-3">
                    <h3><a href="{{url('/portfolio/digital-promotion')}}">Digital Promotion</a></h3></div>

                    

                    <!-- <div class="folioContent">

                        

                        {{-- <h3><a href="   {{url('/portfolio/digital-promotion')}}">Digital Promotion</a></h3> --}}

                    {{-- </div> -->

                </div>

            </div> --}}

            

        </div>

        <!-- <div class="row">

            <div class="col-lg-12">

                <div class="orbitoPagination">

                    <a href="#" class="opPrev"><i class="fa-solid fa-angle-left"></i></a>

                    <span class="current">1</span>

                    <a href="#">2</a>

                    <a href="#">3</a>

                    <a href="#" class="opNext"><i class="fa-solid fa-angle-right"></i></a>

                </div>

            </div>

        </div> -->

    </div>

</section>



@stop