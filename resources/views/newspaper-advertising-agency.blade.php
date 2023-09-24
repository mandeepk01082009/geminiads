@extends('layout.master')

@section('title', 'Advertising Agency in Mohali Chandigarh')

@section('desc', 'Advertising Agency in Mohali Chandigarh')

@section('keywords', 'gemini adertising')



@section('content')

<section class="pageBanner pbBG12" id="scene_1">

    <div class="pageBannerOverlay pboDark4"></div>

    <div class="pageBannerContainer">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="pageBannerContent">

                        <div class="pageBannerContentInner">

                            <h2>Advertising Solutions</h2>

                            <div class="orbitoBredcrumbs">

                                <a href="{{url('/')}}">Home</a><i>></i><span>Advertising Solutions</span>

                            </div>

                        </div>

                        <div class="pageBannerShape01"><img src="{{asset('public/assets')}}/images/shapes/18.png" alt="" /></div>

                        <div class="pageBannerShape02"><img src="{{asset('public/assets')}}/images/shapes/19.png" alt="" /></div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="pageBannerShape03"><img src="{{asset('public/assets')}}/images/shapes/20.png" alt="" /></div>

</section>



<section class="serviceDetailsSection">

    <div class="container">

        <div class="row">
            <div class="col-lg-1">
            </div>

            <div class="col-lg-10">

                <h1 class="mb-4 text-center">Advertising Solutions</h1>

                <div class="serviceContent mb-5">

                    <p>

                        Are you struggling to reach your target audience and generate leads for your business? Look no further! Our advertising solution can help you boost your brand awareness and increase conversions. We use a variety of channels, including social media, display ads, search engine ads, and more to ensure your message reaches your desired audience.

                    </p>

                </div>

            </div>

        </div>

        <!-- Our team of experts will work closely with you to create customized advertising campaigns that align with your business goals and target audience. -->
        <!-- <p> 
                           

                    </p>    -->

        <!-- <p>

                        We understand the importance of ROI, which is why we monitor and track your campaigns to ensure they are delivering results. Our team provides regular reports and insights so you can see the impact of your advertising efforts.

                    </p>   -->

        <!-- <p>With our advertising solution, you can:</p>

                    <ul>

                        <li>Reach your target audience with precision</li>

                        <li>Increase brand awareness and visibility</li>

                        <li>Generate leads and increase conversions</li>

                        <li>Optimize your advertising budget for maximum ROI</li>

                        <li>Stay ahead of the competition</li>

                    </ul>    -->

        <!-- <p>

                        Don't let your competitors steal your customers. Let us help you grow your business with our advertising solution. Contact us today to learn more about how we can help you reach your business goals.

                    </p>             -->





        <!-- <div class="col-md-4 mb-4">

                        <div class="card h-100">

                            <img src="{{asset('public/assets')}}/images/services/12.jpg" class="card-img-top mb-3" alt=""/>

                            <div class="card-body">

                                <div class="serviceContent">

                                    <h3>Media Distribution</h3>

                                    <p>

                                        This refers to the geographical distribution for the adverts, i.e, deciding the locations where the adverts will be running. One has to define the boundaries while keeping in mind where the major target audience of the brand resides. 

                                    </p>                    

                                </div>

                            </div>

                        </div>

                    </div> -->


        <div class="col-lg-1">
        </div>

        <div class="row">

            <div class="col-md-1 mb-4">

            </div>


            <div class="col-md-5 mb-4">

                <div class="card h-100">

                    <img src="{{asset('public/assets')}}/images/services/1.jpg" class="card-img-top mb-3" alt="" />

                    <div class="card-body">

                        <div class="serviceContent">
                            <div class="">
                                <h3>Newspaper Advertising</h3>
                            </div>

                            <p>

                                Newspaper advertising has been a traditional marketing strategy for businesses for many years.
                            </p>
                            <!-- Advertisements in newspapers can target a specific geographical region, which is particularly useful for small businesses looking to connect with local customers. -->



                        </div>

                    </div>

                </div>

            </div>



            <div class="col-md-5 mb-4">

                <div class="card h-100">

                    <img src="{{asset('public/assets')}}/images/services/13a.jpg" class="card-img-top mb-3" alt="" />

                    <div class="card-body">

                        <div class="serviceContent">
                            <div class="">
                                <h3>Outdoor Advertisement</h3>
                            </div>
                            <p>

                                Outdoor advertising is highly visible and can reach consumers when they are on-the-go or in public spaces.
                            </p>
                            <!-- making it an effective way to generate brand awareness and drive traffic to a business. It can be a cost-effective way to reach a broad demographic and create a lasting impression. -->



                        </div>

                    </div>

                </div>

            </div>


            <div class="col-md-1 mb-4">

            </div>




        </div>


    </div>



</section>



@stop