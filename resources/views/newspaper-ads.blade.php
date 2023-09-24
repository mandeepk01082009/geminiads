@extends('layout.master')

@section('title', 'Advertising Agency in Mohali Chandigarh')

@section('desc', 'Advertising Agency in Mohali Chandigarh')

@section('keywords', 'gemini adertising')



@section('content')

@foreach($category as $value)
<section class="pageBanner " style="background: url('{{asset('storage/'.$value->banner)}}') no-repeat center center / cover #343c55;" id="scene_1">

    <div class="pageBannerOverlay pboDark4"></div>

        <div class="pageBannerContainer">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="pageBannerContent">

                            <div class="pageBannerContentInner">

                                <h2>{{ $value->name }}</h2>

                                <div class="orbitoBredcrumbs">

                                    <a href="{{url('/')}}">Home</a><i>></i><span>Portfolio</span><i>></i><span>{{ $value->name }}</span>

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
                    
                    <h2 class="secTitle mb-2">{{ $value->heading }}</h2>

                    <p class="secDesc mb-5">

                        {{-- Newspaper advertising has been a staple of marketing for centuries. It remains a popular choice for businesses, both big and small, because it is a cost-effective and efficient way to reach a wide audience. --}}
                        {{ $value->content }}

                    </p>
                   

                </div>
                

            </div>
            @endforeach
            

            <div class="row photos">

                
                @foreach ($newspaper as $item)
                <div class="col-sm-6 col-md-4 col-lg-4 item">

                    <a href="{{asset('assets')}}/images/portfolio/2.jpg" data-lightbox="photos">  

                        <img class="img-fluid border" src="{{asset('storage/'.$item->image)}}">   

                    </a>

                </div>
                @endforeach

                
            </div>

        </div>

    </div>

    <div class="container d-flex align-items-center justify-content-center">
        {{ $newspaper->links() }}
       
    </div>

    </div>

</section>



@stop