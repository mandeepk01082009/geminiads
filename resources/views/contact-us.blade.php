@extends('layout.master')
@section('title', 'Advertising Agency in Mohali Chandigarh')
@section('desc', 'Advertising Agency in Mohali Chandigarh')
@section('keywords', 'gemini adertising')
@section('content')
<section class="pageBanner pbBG11" id="scene_1">
    <div class="pageBannerOverlay pboDark4"></div>
        <div class="pageBannerContainer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">    
                        <div class="pageBannerContent">
                            <div class="pageBannerContentInner">
                                <h2>Contact</h2>
                                <div class="orbitoBredcrumbs">
                                    <a href="{{url('/')}}">Home</a><i>></i><span>Contact</span>
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
<section class="contactPageSection">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h3 class="secSubTitle text-uppercase">Contact us</h3>
                <h2 class="secTitle">We Want to Hear from You</h2>
                <p class="secDesc">
                    We value your opinion! Share your thoughts and help us improve. 
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-5">
                <div class="contactInfoArea">
                    <div class="iconBox09">
                        <i class="fa-solid fa-location-dot"></i>
                        <h4>Location</h4>
                        <p>SCO-35, First Floor, Sector-71,<br>Near IVY Hospital, SAS Nagar, Mohali, Punjab</p>
                    </div>
                    <div class="iconBox09">
                        <i class="fa-solid fa-mobile-alt"></i>
                        <h4>Mobile</h4>
                        <p>+91 98144 72045</p>
                    </div>
                    <div class="iconBox09">
                        <i class="fa-solid fa-phone"></i>
                        <h4>Landline</h4>
                        <p>+91172-5095151, +91172-4444404</p>
                    </div>
                    <div class="iconBox09">
                        <i class="fa-solid fa-envelope"></i>
                        <h4>Email</h4>
                        <p><a href="mailto:geminiadvt@gmail.com">geminiadvt@gmail.com</a> <br><a href="mailto:geminicanadaltd@gmail.com">geminicanadaltd@gmail.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-7">
                 <div class="card-body">
                 @if(Session::has('success'))
                 <div class="alert alert-success">
                 {{ Session::get('success') }}
                 </div>
                 @endif   
                <div class="contactForm">
                    <form id="contactForm" method="post" action="{{url('send-email')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="Your name"/>
                               @error('name')
                               <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                               </span>  
                               @enderror
                            </div>
                            <div class="col-lg-6">
                                <input  class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" placeholder="Your email"/>
                                @error('email')
                               <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                               </span>
                               @enderror   
                            </div>
                            <div class="col-lg-6">
                                <input class="form-control @error('phone') is-invalid @enderror" type="text" id="phone" name="phone" placeholder="Your phone"/>
                                @error('phone')
                               <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                               </span>
                               @enderror
                            </div>
                            <div class="col-lg-6">
                                <input class="form-control @error('subject') is-invalid @enderror" type="text" name="subject" id="subject" placeholder="Your subject"/>
                                 @error('subject')
                               <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                               </span>
                               @enderror
                            </div>
                            <div class="col-lg-12">
                                <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="subject"  placeholder="Write your message here"></textarea>
                                @error('message')
                               <span class="invalid-feedback" role="alert">   
                               <strong>{{ $message }}</strong>
                               </span>
                               @enderror
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="orbBtn01">
                                    <span class="bp-shape"></span>
                                    <span class="bp-shape"></span>
                                    <span class="bp-shape"></span>
                                    <span class="bp-shape"></span>
                                <span class="bp-text">Submit Now</span>
                                </button>
                                <div class="con_message alert"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row pdt120">
            <div class="col-lg-12">
                <div class="googleMap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13721.998186836367!2d76.7088949!3d30.7043539!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fee8d2d230e01%3A0x3d2d953dad2beaf7!2sGemini%20Advertising!5e0!3m2!1sen!2sin!4v1676528881163!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@stop


