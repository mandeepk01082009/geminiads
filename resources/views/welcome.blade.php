@extends('layout.master')
@section('title', 'Advertising Agency in Mohali Chandigarh')
@section('desc', 'Advertising Agency in Mohali Chandigarh')
@section('keywords', 'gemini adertising')

@section('content')
    <!-- BEGIN: Slider Section -->
    <section class="slider02">

        <div id="carouselSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>

            <div class="carousel-inner">

                @foreach ($sliderdata as $key => $item)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        @if ($item->video)
                            {{-- <img class="img-fluid" width="100%" style="height:auto;"  autoPlay loop muted src="{{asset('storage/'.$item->image)}}"> --}}
                            <video width="100%" controls class="elVideo" autoPlay loop muted
                                src="{{ asset('storage/' . $item->video) }}">
                            </video>
                        @endif
                    </div>
                @endforeach
            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- END: Slider Section -->

    <!-- BEGIN: About2 Section -->
    <section class="aboutSection2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="aboutImage2 clearfix">
                        <img class="float-start" src="{{ asset('/assets') }}/images/home2/1.png" alt="Gemini About" />
                        <img class="float-end" src="{{ asset('/assets') }}/images/home2/2.png" alt="Gemini About" />
                        <div class="aiCounter2">
                            <h3>Trusted By</h3>
                            <h2><span class="timer" data-count="200">200</span>+</h2>
                            <h3>Clients</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="aboutContent2">
                        <h3 class="secSubTitle text-uppercase">About Gemini Advertising</h3>
                        <h2 class="secTitle">Building Your Advertisement Presence</h2>
                        <p>
                            At our advertising agency, we bring your brand's vision to life through strategic thinking,
                            innovative ideas, and creative execution. Let us help you stand out in a crowded market and
                            connect with your target audience like never before.
                        </p>
                        <p>
                            With a focus on innovation and strategic thinking, we deliver tailored solutions that meet your
                            unique needs and help you achieve your business goals. From brand identity and graphic design to
                            digital marketing and web development, our team of creative experts is dedicated to bringing
                            your vision to life.
                        </p>
                        <div class="row mb-5">
                            <div class="col-lg-4 col-md-4">
                                <a href="{{ url('/services/newspaper-advertising-agency') }}" class="iconBox04">
                                    <i class="fa-regular fa-newspaper"></i>
                                    <h3>Advertising</h3>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <a href="{{ url('/services/website-design-and-development-company') }}" class="iconBox04">
                                    <i class="fa-regular fa-file-code"></i>
                                    <h3>Development</h3>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <a href="{{ url('/services/digital-marketing-company') }}" class="iconBox04">
                                    <i class="fa-regular fa-lightbulb"></i>
                                    <h3>Digital Marketing</h3>
                                </a>
                            </div>
                        </div>
                        <div class="abcFooter">
                            <a class="orbBtn01" href="{{ url('services') }}">
                                <span class="bp-shape"></span>
                                <span class="bp-shape"></span>
                                <span class="bp-shape"></span>
                                <span class="bp-shape"></span>
                                <span class="bp-text">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: About2 Section -->

    <!-- BEGIN: Feature & Service Section -->
    <section class="featureSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="featureInner">
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="iconBox05 iB05Pdl91">
                                    <i class="orbito-image"></i>
                                    <h3>Creative Services</h3>
                                    <p>
                                        Our creative services are designed to help your brand stand out in a crowded market.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 hasBorderLeft">
                                <div class="iconBox05">
                                    <i class="orbito-target"></i>
                                    <h3>Our Mission</h3>
                                    <p>
                                        To give businesses of all sizes the resources they need to achieve their marketing
                                        goals through creative and successful advertising strategies.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 hasBorderLeft">
                                <div class="iconBox05">
                                    <i class="orbito-organization"></i>
                                    <h3>Public Relations</h3>
                                    <p>
                                        Let us help you tell your brand's story and connect with your target audience in a
                                        meaningful way.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pdt118 serviceRow">
                <div class="col-lg-6 text-center">
                    <h3 class="secSubTitle text-uppercase">Our Services</h3>
                    <h2 class="secTitle">Elevate Your Brand with Our Creative Solutions</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="serviceItem01">
                        <div class="siThumb">
                            <img src="{{ asset('/assets') }}/images/services/1a.png" alt="Gemini Service" />
                        </div>
                        <div class="siDetails">
                            <h3><a href="{{ url('/services/newspaper-advertising-agency') }}">Advertising
                                    <br />Solutions</a></h3>

                            <a href="{{ url('/services/newspaper-advertising-agency') }}" class="readMoreLink">View
                                Details<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="serviceItem01">
                        <div class="siThumb">
                            <img src="{{ asset('/assets') }}/images/services/2.jpg" alt="Gemini Service" />
                        </div>
                        <div class="siDetails">
                            <h3><a href="{{ url('/services/newspaper-classified-advertising-agency') }}">Classified
                                    <br />Advertising</a></h3>
                            <a href="{{ url('/services/newspaper-classified-advertising-agency') }}"
                                class="readMoreLink">View Details<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="serviceItem01">
                        <div class="siThumb">
                            <img src="{{ asset('/assets') }}/images/services/3.jpg" alt="Gemini Service" />
                        </div>
                        <div class="siDetails">
                            <h3><a href="{{ url('/services/print-advertising-agency') }}">Designing <br />Solutions</a>
                            </h3>
                            <a href="{{ url('/services/print-advertising-agency') }}" class="readMoreLink">View Details<i
                                    class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="serviceItem01">
                        <div class="siThumb">
                            <img src="{{ asset('/assets') }}/images/services/4aa.png" alt="Gemini Service" />
                        </div>
                        <div class="siDetails">
                            <h3><a href="{{ url('/services/tv-radio-advertising-agency') }}">Radio/TV
                                    <br />Advertising</a></h3>
                            <a href="{{ url('/services/tv-radio-advertising-agency') }}" class="readMoreLink">View
                                Details<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="serviceItem01">
                        <div class="siThumb">
                            <img src="{{ asset('/assets') }}/images/services/5a.png" alt="Gemini Service" />
                        </div>
                        <div class="siDetails">
                            <h3><a href="{{ url('/services/website-design-and-development-company') }}">Website Design
                                    <br />&amp; Development</a></h3>
                            <a href="{{ url('/services/website-design-and-development-company') }}"
                                class="readMoreLink">View Details<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="serviceItem01">
                        <div class="siThumb">
                            <img src="{{ asset('/assets') }}/images/services/6a.png" alt="Gemini Service" />
                        </div>
                        <div class="siDetails">
                            <h3><a href="{{ url('/services/digital-marketing-company') }}">Digital <br />Marketing</a>
                            </h3>
                            <a href="{{ url('/services/digital-marketing-company') }}" class="readMoreLink">View
                                Details<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="animTop"></div>
        <div class="animBottom"></div>
    </section>
    <!-- END: Feature Section -->

    <!-- BEGIN: Quick Result Section -->
    <section class="quickResultSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="counterArea caMode2">
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="singleCounter02">
                                    <h2><span class="timer" data-count="200">200</span><sup
                                            class="timerSuffixSmall">+</sup></h2>
                                    <h3>Happy <br>Customers</h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="singleCounter02">
                                    <h2><span class="timer" data-count="1500">1500</span><span
                                            class="timerSuffixSmall">+</span></h2>
                                    <h3>Project <br>Completed</h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="singleCounter02">
                                    <h2><span class="timer" data-count="20">20</span><span
                                            class="timerSuffixSmall">+</span></h2>
                                    <h3>Team <br>Members</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pdt118">
                <div class="col-xl-6 col-md-6">
                    <div class="qrLeft">
                        <h3 class="secSubTitle text-uppercase mb-3">We Make Quick Result</h3>
                        <h2 class="secTitle stWhite">We Focus on User Experience and Advertising Solutions</h2>
                        <p class="mb-5">
                            To create a great user experience, Advertisement solutions should be designed with the user in
                            mind, taking into account their needs, preferences, and behaviors. User research can help inform
                            design decisions and ensure that the solution meets user expectations.
                        </p>
                        <!-- <p>Some key elements of a great user experience include:</p>
                        <a href="#" class="orbVideoBtn videoPoppup"><i class="fas fa-play"></i></a> -->
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6 pdt2">
                    <div class="iconBox06">
                        <i class="orbito-users tm4"></i>
                        <h3>Usability</h3>
                        <p>
                            Usability refers to the ease of use and effectiveness of a product, interface, or system in
                            achieving its intended goals for the user.
                        </p>
                    </div>
                    <div class="iconBox06">
                        <i class="orbito-diary"></i>
                        <h3>Accessibility</h3>
                        <p>
                            Advertisement accessibility refers to designing advertisements in a way that makes them
                            inclusive and usable for people with disabilities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Quick Result Section -->

    <!-- BEGIN: Portfolio Section -->
    <section class="portfolioSection">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h3 class="secSubTitle text-uppercase">Our Clientage</h3>
                    <h2 class="secTitle">Trusted by Leading Brands</h2>
                    <p class="secDesc">
                        Join these satisfied clients who have partnered with us for their Advertising solutions needs and
                        achieved success together.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolioSlider owl-carousel">
                        <div class="#">
                            <img src="{{ asset('/assets') }}/images/clients/1.jpg" class="border rounded"
                                alt="#" />
                        </div>
                        <div class="#">
                            <img src="{{ asset('/assets') }}/images/clients/2.jpg" class="border rounded"
                                alt="#" />
                        </div>
                        <div class="#">
                            <img src="{{ asset('/assets') }}/images/clients/3.jpg" class="border rounded"
                                alt="#" />
                        </div>
                        <div class="#">
                            <img src="{{ asset('/assets') }}/images/clients/4.jpg" class="border rounded"
                                alt="#" />
                        </div>
                        <div class="#">
                            <img src="{{ asset('/assets') }}/images/clients/5.jpg" class="border rounded"
                                alt="#" />
                        </div>
                        <div class="#">
                            <img src="{{ asset('/assets') }}/images/clients/6.jpg" class="border rounded"
                                alt="#" />
                        </div>
                        <div class="#">
                            <img src="{{ asset('/assets') }}/images/clients/7.jpg" class="border rounded"
                                alt="#" />
                        </div>
                        <div class="#">
                            <img src="{{ asset('/assets') }}/images/clients/8.jpg" class="border rounded"
                                alt="#" />
                        </div>
                        <div class="#">
                            <img src="{{ asset('/assets') }}/images/clients/9.jpg" class="border rounded"
                                alt="#" />
                        </div>
                        <div class="#">
                            <img src="{{ asset('/assets') }}/images/clients/10.jpg" class="border rounded"
                                alt="#" />
                        </div>
                        <div class="#">
                            <img src="{{ asset('/assets') }}/images/clients/11.jpg" class="border rounded"
                                alt="#" />
                        </div>
                        <div class="#">
                            <img src="{{ asset('/assets') }}/images/clients/12.jpg" class="border rounded"
                                alt="#" />
                        </div>
                        <div class="#">
                            <img src="{{ asset('/assets') }}/images/clients/13.jpg" class="border rounded"
                                alt="#" />
                        </div>
                        <div class="#">
                            <img src="{{ asset('/assets') }}/images/clients/14.jpg" class="border rounded"
                                alt="#" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Portfolio Section -->

    <!-- BEGIN: Testimonial Section -->
    <section class="testimonialSection2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h3 class="secSubTitle text-uppercase text-white">Customer Stories</h3>
                    <h2 class="secTitle stWhite">Words From Our Clients</h2>
                    <p class="secDesc text-white">
                        See what our satisfied clients have to say about their experience working with us for thier digital
                        solutions.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonialSlider2 owl-carousel">
                        <div class="testimonialItem2">
                            <div class="ti02Inner">
                                <p>
                                    Our business has seen significant growth since partnering with this agency. Their
                                    marketing strategies and digital expertise have helped us reach new audiences and
                                    increase our revenue.
                                </p>
                                <div class="testimonialAuthor">
                                    <img src="{{ asset('public/assets') }}/images/no-user.png" alt="#" />
                                    <h4>Babu Jagdish Jewellers</h4>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonialItem2">
                            <div class="ti02Inner">
                                <p>
                                    The team at this agency is amazing! They are creative, professional, and always deliver
                                    exceptional results. We highly recommend their services to anyone looking for effective
                                    advertising solutions.
                                </p>
                                <div class="testimonialAuthor">
                                    <img src="{{ asset('public/assets') }}/images/no-user.png" alt="#" />
                                    <h4>RBP Group</h4>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonialItem2">
                            <div class="ti02Inner">
                                <p>
                                    Gemini Advertiting agency has helped us establish a strong brand identity and presence
                                    in our market. Their expertise in traditional and digital advertising has been
                                    invaluable to our success.
                                </p>
                                <div class="testimonialAuthor">
                                    <img src="{{ asset('public/assets') }}/images/no-user.png" alt="#" />
                                    <h4>Arvind Textiles</h4>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonialItem2">
                            <div class="ti02Inner">
                                <p>
                                    They took the time to understand our unique needs and created a customized plan that
                                    aligned perfectly with our vision. Highly recommended and highly appriciated!
                                </p>
                                <div class="testimonialAuthor">
                                    <img src="{{ asset('public/assets') }}/images/no-user.png" alt="#" />
                                    <h4>Vivek High School</h4>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonialItem2">
                            <div class="ti02Inner">
                                <p>
                                    The team of Gemini Advertising is highly skilled in all areas of Digital Marketing and
                                    has helped us drive more traffic to our website resulting in increased sales. We
                                    strongly recommend Gemini Advertising.
                                </p>
                                <div class="testimonialAuthor">
                                    <img src="{{ asset('public/assets') }}/images/no-user.png" alt="#" />
                                    <h4>Aspire Academy</h4>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Testimonial Section -->

    <!-- BEGIN: Client Section -->
    <section class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h3 class="secSubTitle text-uppercase">Our Partners</h3>
                    <h2 class="secTitle mb-3">Notable Print Media </h2>
                    <p class="secDesc">
                        We are proud to partner with these prestigious newspapers to deliver cutting-edge digital solutions
                        that enhance their readers' experience.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="clientLogoSlider owl-carousel">
                        <a class="clientLogo border m-2" href="javascript:void(0);">
                            <img src="{{ asset('/assets') }}/images/partner/ajit-hover.png" alt="Gemini Client" />
                            <img src="{{ asset('/assets') }}/images/partner/ajit.png" alt="Gemini Client" />
                        </a>
                        <a class="clientLogo border m-2" href="javascript:void(0);">
                            <img src="{{ asset('/assets') }}/images/partner/amar-ujala-hover.png" alt="Gemini Client" />
                            <img src="{{ asset('/assets') }}/images/partner/amar-ujala.png" alt="Gemini Client" />
                        </a>
                        <a class="clientLogo border m-2" href="javascript:void(0);">
                            <img src="{{ asset('/assets') }}/images/partner/dainik-bhaskar-hover.png"
                                alt="Gemini Client" />
                            <img src="{{ asset('/assets') }}/images/partner/dainik-bhaskar.png" alt="Gemini Client" />
                        </a>
                        <a class="clientLogo border m-2" href="javascript:void(0);">
                            <img src="{{ asset('/assets') }}/images/partner/tribune-hover.png" alt="Gemini Client" />
                            <img src="{{ asset('/assets') }}/images/partner/tribune.png" alt="Gemini Client" />
                        </a>
                        <a class="clientLogo border m-2" href="javascript:void(0);">
                            <img src="{{ asset('/assets') }}/images/partner/dainik-savera-hover.png"
                                alt="Gemini Client" />
                            <img src="{{ asset('/assets') }}/images/partner/dainik-savera.png" alt="Gemini Client" />
                        </a>
                        <a class="clientLogo border m-2" href="javascript:void(0);">
                            <img src="{{ asset('/assets') }}/images/partner/dainik-jagran-hover.png"
                                alt="Gemini Client" />
                            <img src="{{ asset('/assets') }}/images/partner/dainik-jagran.png" alt="Gemini Client" />
                        </a>
                        <a class="clientLogo border m-2" href="javascript:void(0);">
                            <img src="{{ asset('/assets') }}/images/partner/jagbani-hover.png" alt="Gemini Client" />
                            <img src="{{ asset('/assets') }}/images/partner/jagbani.png" alt="Gemini Client" />
                        </a>
                        <a class="clientLogo border m-2" href="javascript:void(0);">
                            <img src="{{ asset('/assets') }}/images/partner/ht-hover.png" alt="Gemini Client" />
                            <img src="{{ asset('/assets') }}/images/partner/ht.png" alt="Gemini Client" />
                        </a>
                        <a class="clientLogo border m-2" href="javascript:void(0);">
                            <img src="{{ asset('/assets') }}/images/partner/indian-express-hover.png"
                                alt="Gemini Client" />
                            <img src="{{ asset('/assets') }}/images/partner/indian-express.png" alt="Gemini Client" />
                        </a>
                        <a class="clientLogo border m-2" href="javascript:void(0);">
                            <img src="{{ asset('/assets') }}/images/partner/punjab-kesari-hover.png"
                                alt="Gemini Client" />
                            <img src="{{ asset('/assets') }}/images/partner/punjab-kesari.png" alt="Gemini Client" />
                        </a>
                        <a class="clientLogo border m-2" href="javascript:void(0);">
                            <img src="{{ asset('/assets') }}/images/partner/punjabi-tribune-hover.png"
                                alt="Gemini Client" />
                            <img src="{{ asset('/assets') }}/images/partner/punjabi-tribune.png" alt="Gemini Client" />
                        </a>
                        <a class="clientLogo border m-2" href="javascript:void(0);">
                            <img src="{{ asset('/assets') }}/images/partner/toi-png" alt="Gemini Client" />
                            <img src="{{ asset('/assets') }}/images/partner/toi.png" alt="Gemini Client" />
                        </a>
                        <a class="clientLogo border m-2" href="javascript:void(0);">
                            <img src="{{ asset('/assets') }}/images/partner/rozana-spokesman-hover.png"
                                alt="Gemini Client" />
                            <img src="{{ asset('/assets') }}/images/partner/rozana-spokesman.png" alt="Gemini Client" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Client Section -->

    <!-- <section class="blogSection">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h3 class="secSubTitle text-uppercase">From Our Blog</h3>
                    <h2 class="secTitle">Latest News & Updates</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="blogItem01">
                        <div class="bi01Thumb">
                            <img src="{{ asset('public/assets') }}/images/blog/1.jpg" alt=""/>
                            <div class="bi01Date">
                                <span>29</span>
                                <span>Apr</span>
                            </div>
                        </div>
                        <div class="bi01Details">
                            <div class="bi01Meta">
                                <span><a href="#"><i class="fa-solid fa-folder-open"></i>&nbsp;&nbsp;Web Design</a></span>
                                <span><a href="#"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Admin</a></span>
                                <span><a href="#"><i class="fa-solid fa-comments"></i>&nbsp;&nbsp;22</a></span>
                            </div>
                            <h3><a href="#">When the musics over turn off the light said by Jim</a></h3>
                            <a href="#" class="readMoreLink">Read More<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blogItem01">
                        <div class="bi01Thumb">
                            <img src="{{ asset('public/assets') }}/images/blog/20.jpg" alt=""/>
                            <div class="bi01Date">
                                <span>15</span>
                                <span>May</span>
                            </div>
                        </div>
                        <div class="bi01Details">
                            <div class="bi01Meta">
                                <span><a href="#"><i class="fa-solid fa-folder-open"></i>&nbsp;&nbsp;Web Design</a></span>
                                <span><a href="#"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Admin</a></span>
                                <span><a href="#"><i class="fa-solid fa-comments"></i>&nbsp;&nbsp;22</a></span>
                            </div>
                            <h3><a href="#">When the musics over turn off the light said by Jim</a></h3>
                            <a href="#" class="readMoreLink">Read More<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blogItem01">
                        <div class=humb">
                            <img src="{{ asset('public/assets') }}/images/blog/15.jpg" alt=""/>
                            <div class="bi01Date">
                                <span>19</span>
                                <span>May</span>
                            </div>
                        </div>
                        <div class="bi01Details">
                            <div class="bi01Meta">
                                <span><a href="#"><i class="fa-solid fa-folder-open"></i>&nbsp;&nbsp;Web Design</a></span>
                                <span><a href="#"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Admin</a></span>
                                <span><a href="#"><i class="fa-solid fa-comments"></i>&nbsp;&nbsp;22</a></span>
                            </div>
                            <h3><a href="#">When the musics over turn off the light said by Jim</a></h3>
                            <a href="#" class="readMoreLink">Read More<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END: Blog Section -->


@stop
