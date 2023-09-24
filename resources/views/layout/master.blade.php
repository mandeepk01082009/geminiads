<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->

    <link rel="icon" type="image/png" href="{{ asset('assets') }}/images/favicon.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>@yield('title')</title>

    <meta name="description" content="@yield('desc')">

    <meta name="keywords" content="@yield('keywords')">



    <!-- BEGIN: CSS -->

    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/fontawesome-all.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/orbito-icons.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/orientate-font.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/lightslider.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/lightcase.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/settings.css">



    <link rel="stylesheet" href="{{ asset('assets') }}/css/ignore_for_wp.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/preset.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/theme.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

    <!-- END: CSS -->



</head>

<body>

    <!-- BEGIN: Preloader -->

    <div id="preloader">

        <div class="la-ball-scale-multiple la-2x">

            <div></div>

            <div></div>

            <div></div>

        </div>

    </div>

    <!-- END: Preloader -->



    <!-- BEGIN: Header Section -->

    <header class="header01 isSticky">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="headerInner">

                        <div class="logo">

                            <a href="{{ url('/') }}"><img src="{{ asset('assets') }}/images/logo.png"
                                    alt="" /></a>

                        </div>

                        <a href="javascript:void(0)" class="menu_btn02"><i class="twi-bars2"></i><span>Menu</span></a>

                        <nav class="mainMenu">

                            <ul>

                                <li class="{{ request()->is('/') ? 'active' : '' }}"><a
                                        href="{{ url('/') }}">Home</a></li>

                                <li class="{{ request()->is('about-us') ? 'active' : '' }}"><a
                                        href="{{ url('/about-us') }}">About Us</a></li>

                                <li class="menu-item-has-children {{ request()->is('services') ? 'active' : '' }}">

                                    <a href="javascript:void(0)">Services</a>

                                    <ul class="sub-menu">

                                        <li class="{{ request()->is('services') ? 'active' : '' }}"><a
                                                href="{{ url('/services/newspaper-advertising-agency') }}">Advertising
                                                Solutions</a></li>

                                        <li class="{{ request()->is('services') ? 'active' : '' }}"><a
                                                href="{{ url('/services/newspaper-classified-advertising-agency') }}">Classified
                                                Advertising</a></li>

                                        <li class="{{ request()->is('services') ? 'active' : '' }}"><a
                                                href="{{ url('/services/print-advertising-agency') }}">Desinging
                                                Solutions</a></li>

                                        <li class="{{ request()->is('services') ? 'active' : '' }}"><a
                                                href="{{ url('/services/tv-radio-advertising-agency') }}">Radio/TV
                                                Advertising</a></li>

                                        <li class="{{ request()->is('services') ? 'active' : '' }}"><a
                                                href="{{ url('/services/digital-marketing-company') }}">Digital
                                                Marketing</a></li>

                                        <li class="{{ request()->is('services') ? 'active' : '' }}"><a
                                                href="{{ url('/services/website-design-and-development-company') }}">Website
                                                Development</a></li>

                                        <!-- <li class="{{ request()->is('services') ? 'active' : '' }}"><a href="{{ url('/services/mobile-app-development-company') }}">App Development</a></li> -->

                                    </ul>

                                </li>

                                <li class="{{ request()->is('portfolio') ? 'active' : '' }}"><a
                                        href="{{ url('/portfolio') }}">Portfolio</a></li>

                                <li class="{{ request()->is('blog') ? 'active' : '' }}"><a
                                        href="{{ url('/blog') }}">Blog</a></li>

                                <li class="{{ request()->is('contact-us') ? 'active' : '' }}"><a
                                        href="{{ url('/contact-us') }}">Contact</a></li>





                            </ul>

                        </nav>

                        <a class="orbBtn01" href="{{ url('/contact-us') }}">

                            <span class="bp-shape"></span>

                            <span class="bp-shape"></span>

                            <span class="bp-shape"></span>

                            <span class="bp-shape"></span>

                            <span class="bp-text">Get A Quote</span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </header>



    <!-- END: Header Section -->



    @yield('content')

    <!-- BEGIN: CTA Section -->

    <section class="ctaSection">

        <div class="container">

            <div class="row">

                <div class="col-lg-7 col-md-9">

                    <div class="ctaLeft">

                        <h3 class="secSubTitle text-uppercase">We Love What We do</h3>

                        <h2 class="secTitle stWhite">Let's Create Something Together</h2>

                        <p class="secDesc">Our advertising agency is always up to date and the best in the business.
                            You can relax without having to do anything.</p>

                    </div>

                </div>

                <div class="col-lg-5  col-md-3">

                    <div class="ctaRight justify-content-end">

                        <a class="orbBtn01 hoverBlue" href="{{ url('/contact-us') }}">

                            <span class="bp-shape"></span>

                            <span class="bp-shape"></span>

                            <span class="bp-shape"></span>

                            <span class="bp-shape"></span>

                            <span class="bp-text">Contact Us</span>

                        </a>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-lg-12">

                    <div class="ctaBorder"></div>

                </div>

            </div>

        </div>

    </section>

    <!-- END: CTA Section -->

    <!-- BEGIN: Footer Section -->

    <footer class="footer">

        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-6">

                    <aside class="widget about_widget">

                        <div class="aboutWidgetContent">

                            <a href="{{ url('/') }}"><img src="{{ asset('assets') }}/images/logo-white.png"
                                    alt="Gemini" /></a>

                            <p>

                                As the <strong>Best Advertising Agency in Mohali</strong>, enabling businesses of all
                                sizes to achieve their marketing goals through cutting-edge and efficient advertising
                                strategies.

                            </p>



                        </div>

                    </aside>

                </div>

                <div class="col-lg-2 col-md-6">

                    <aside class="widget">

                        <h3 class="widgetTitle">Services</h3>

                        <ul>

                            <li><a href="{{ url('/services/newspaper-advertising-agency') }}">Advertising
                                    Solutions</a></li>

                            <li><a href="{{ url('/services/newspaper-classified-advertising-agency') }}">Classified
                                    Advertising</a></li>

                            <li><a href="{{ url('/services/print-advertising-agency') }}">Designing Solutions</a></li>

                            <li><a href="{{ url('/services/tv-radio-advertising-agency') }}">Radio/TV Advertising</a>
                            </li>

                            <li><a href="{{ url('/services/digital-marketing-company') }}">Digital Marketing</a></li>

                            <li><a href="{{ url('/services/website-design-and-development-company') }}">Website
                                    Development</a></li>

                            <!-- <li><a href="{{ url('/services/mobile-app-development-company') }}">App Development</a></li> -->

                        </ul>

                    </aside>

                </div>

                <div class="col-lg-3 col-md-6 pdl124">

                    <aside class="widget">

                        <h3 class="widgetTitle">Useful Links</h3>

                        <ul>

                            <li><a href="{{ url('/') }}">Home</a></li>

                            <li><a href="{{ url('/about-us') }}">About Us</a></li>

                            <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>

                            <li><a href="{{ url('/blog') }}">Blog</a></li>

                            <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>

                        </ul>

                    </aside>

                </div>

                <div class="col-lg-4 col-md-6">

                    <aside class="widget">

                        <h3 class="widgetTitle">Reach Us</h3>

                        <div class="newsletterContent">

                            <div class="contactInfo">

                                <span><i class="fa-solid fa-location-dot"></i>SCO 35, 1st Floor, Sector 71, Mohali,
                                    Punjab</span>

                                <span><i class="fa fa-mobile-alt"></i><a
                                        href="tel:09814472045">+919814472045</a></span>

                                <span><i class="fas fa-phone"></i><a href="tel:011725095151">+91172-5095151</a>, <a
                                        href="tel:01724444404">+91172-4444404</a></span>

                                <span><i class="fa-solid fa-envelope"></i><a
                                        href="mailto:geminiadvt@gmail.com">geminiadvt@gmail.com</a>, <a
                                        href="mailto:geminicanadaltd@gmail.com">geminicanadaltd@gmail.com</a></span>

                            </div>

                        </div>

                    </aside>

                </div>

            </div>

            <div class="row">

                <div class="col-lg-12">

                    <div class="footerBorder"></div>

                </div>

            </div>

        </div>

    </footer>

    <!-- END: Footer Section -->



    <!-- BEGIN: Copyright Section -->

    <section class="siteInfoSection">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <div class="siteInfo">

                        All rights reserved <a href="{{ url('/') }}">Gemini Advertising</a> &COPY;
                        {{ now()->year }}

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="footerSocial">

                        <a class="fac" href="https://www.facebook.com/GeminiAdvertising/" rel="nofollow"
                            target="_blank"><i class="fa-brands fa-facebook-f"></i></a>

                        <a class="ins" href="https://www.instagram.com/geminiadvt/" rel="nofollow"
                            target="_blank"><i class="fa-brands fa-instagram"></i></a>

                        <a class="twi" href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>

                        <a class="lin" href="javascript:void(0);"><i class="fa-brands fa-linkedin-in"></i></a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- END: Copyright Section -->



    <!-- BEGIN: Back To Top -->

    <a href="javascript:void(0);" id="backtotop"><i class="fa-solid fa-arrow-up"></i></a>

    <!-- END: Back To Top -->



    <!-- BEGIN: JS -->

    <script src="{{ asset('assets') }}/js/jquery.js"></script>

    <script src="{{ asset('assets') }}/js/popper.min.js"></script>

    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>

    <script src="{{ asset('assets') }}/js/shuffle.min.js"></script>

    <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>

    <script src="{{ asset('assets') }}/js/owl.carousel.filter.js"></script>

    <script src="{{ asset('assets') }}/js/jquery.appear.js"></script>

    <script src="{{ asset('assets') }}/js/lightcase.js"></script>

    <script src="{{ asset('assets') }}/js/lightslider.min.js"></script>

    <script src="{{ asset('assets') }}/js/circle-progress.js"></script>

    <script src="{{ asset('assets') }}/js/mixer.js"></script>

    <script src="{{ asset('assets') }}/js/parallax.js"></script>

    <script src="{{ asset('assets') }}/js/gmaps.js"></script>

    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCA_EDGVQleQtHIp2fZ-V56QFRbRL8cXT8"></script>



    <script src="{{ asset('assets') }}/js/jquery.themepunch.tools.min.js"></script>

    <script src="{{ asset('assets') }}/js/jquery.themepunch.revolution.min.js"></script>



    <script src="{{ asset('assets') }}/js/extensions/revolution.extension.actions.min.js"></script>

    <script src="{{ asset('assets') }}/js/extensions/revolution.extension.carousel.min.js"></script>

    <script src="{{ asset('assets') }}/js/extensions/revolution.extension.kenburn.min.js"></script>

    <script src="{{ asset('assets') }}/js/extensions/revolution.extension.layeranimation.min.js"></script>

    <script src="{{ asset('assets') }}/js/extensions/revolution.extension.migration.min.js"></script>

    <script src="{{ asset('assets') }}/js/extensions/revolution.extension.navigation.min.js"></script>

    <script src="{{ asset('assets') }}/js/extensions/revolution.extension.parallax.min.js"></script>

    <script src="{{ asset('assets') }}/js/extensions/revolution.extension.slideanims.min.js"></script>

    <script src="{{ asset('assets') }}/js/extensions/revolution.extension.video.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>



    <script src="{{ asset('assets') }}/js/theme.js"></script>

    <!-- END: JS -->

</body>

</html>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
