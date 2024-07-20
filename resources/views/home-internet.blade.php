@extends('layouts.main')
{{-- put inside container --}}

@section('content')

<section class="slider-two" id="home">
    <div class="swiper_carousel swiper-container" data-swiper='{"spaceBetween":0,"slidesPerView":1,"navigation":{"nextEl":".slider-two_button-next","prevEl":".slider-two_button-prev","clickable":"true"},"pagination":{"el":".slider-two_pagination","clickable":"true"},"autoplay":{"delay":"6000"},"breakpoints":{"320":{"slidesPerView":1,"spaceBetween":0},"480":{"slidesPerView":1,"spaceBetween":0},"640":{"slidesPerView":1,"spaceBetween":0}}}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slider-two_image" style="background-image: url(images/main-slider/1.jpg)"></div>
                <div class="slider-two_pattern" style="background-image: url(images/main-slider/slider-two_pattern.png)"></div>
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="slider-two_content-column">
                        <div class="slider-two_content-inner">
                            <div class="slider-two_price">KES 1999 <span>Per Month</span></div>
                            <div class="slider-two_title">Welcome to Veenet's Home Internet</div>
                            <h1 class="slider-two_heading">
                                Best Internet <br> Service in Your <br> Region
                            </h1>
                            <!-- Button Box -->
                            <div class="slider-two_button-box">
                                <a class="btn-style-one theme-btn" href="https://api.whatsapp.com/send/?phone=254722684751&text=Hi+Veenet%2C+I+am+Interested+in+Internet+plan%3A+Home+Plan">
                                    <div class="btn-wrap">
                                        <span class="text-one">Check Availibility</span>
                                        <span class="text-two">Check Availibility</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Slider One -->

<!-- About Two -->
<section class="about-two" id="about">
    <div class="about-two_curve" style="background-image: url(images/background/about-two_pattern-1.png)"></div>
    <div class="about-two_curve-two" style="background-image: url(images/background/about-two_pattern-2.png)"></div>
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Image Column -->
            <div class="about-two_image-column col-lg-6 col-md-12 col-sm-12">
                <div class="about-two_image-outer">
                    <div class="about-two_pattern" style="background-image: url(images/background/about-two_pattern.png)"></div>
                    <div class="about-two_image">
                        <img src="images/resource/happy-user.jpg" alt="" />
                    </div>
                    <div class="about-two_icon flaticon-wifi-router"></div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="about-two_content-column col-lg-6 col-md-12 col-sm-12">
                <div class="about-two_content-outer">
                    <div class="sec-title">
                        <div class="sec-title_title tx-split-text split-in-right">about us</div>
                        <h2 class="sec-title_heading tx-split-text split-in-right">
                         Reliable Internet Provider
                            <br> For Your Home</h2>
                    </div>
                    <div class="about-two_bold-text">
                        Veenet Africa delivers high-speed home internet services designed to enrich the digital lifestyles of residential customers. With flexible packages and reliable connections, we ensure seamless browsing, streaming, and communication experiences                    </div>
                    <div class="row clearfix">
                        <div class="column col-lg-6 col-md-6 col-sm-6">
                            <ul class="about-two_list">
                                <li><i class="fa-solid fa-bolt fa-fw"></i> Home Broadband</li>
                                <li><i class="fa-solid fa-bolt fa-fw"></i> 99% Internet Uptime</li>
                                <li><i class="fa-solid fa-bolt fa-fw"></i> Low latency</li>
                            </ul>
                        </div>
                        <div class="column col-lg-6 col-md-6 col-sm-6">
                            <ul class="about-two_list">
                                <li><i class="fa-solid fa-bolt fa-fw"></i> Friendly Support</li>
                                <li><i class="fa-solid fa-bolt fa-fw"></i> 24/7 Online Support</li>
                                <li><i class="fa-solid fa-bolt fa-fw"></i> Speed Up to 100 Mbps</li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        While we boast ourselves on our service, we also have a team of experts who are always ready to help and improve where we can.
                    </p>
                    <div class="about-two_lower-box">
                        <div class="d-flex align-items-center flex-wrap">
                            <!-- Button Box -->
                            <div class="about-two_button">
                                <a class="btn-style-two theme-btn" href="#pricing">
                                    <div class="btn-wrap">
                                        <span class="text-one">Discover More</span>
                                        <span class="text-two">Discover More</span>
                                    </div>
                                </a>
                            </div>
                            <div class="about-two_price">
                                <sub>Kes</sub>1999<sub>/  month</sub>
                                <span> Subscribed & get Free router </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End About Two -->

<!-- Facility One -->
<section class="facility-one">
    <span class="facility-one_circle-one"></span>
    <span class="facility-one_circle-two"></span>
    <div class="facility-one_pattern" style="background-image: url(images/background/facility-pattern.png)"></div>
    <div class="auto-container">
        <div class="row clearfix">
            
            <!-- Content Column -->
            <div class="facility-one_content-column col-lg-6 col-md-12 col-sm-12">
                <div class="facility-one_content-outer">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="sec-title_title tx-split-text split-in-up">OUR FACILITY</div>
                        <h2 class="sec-title_heading tx-split-text split-in-up">Few great reasons make <br> you choice us</h2>
                        <div class="sec-title_text tx-split-text split-in-up">

                        </div>
                    </div>
                    <!-- Facility Block One -->
                    <div class="facility-block_one">
                        <div class="facility-block_one-inner">
                            <div class="facility-block_one-icon flaticon-call"></div>
                            <h4 class="facility-block_one-heading">24/7 Support</h4>
                            <div class="facility-block_one-text">ocuses on providing reliable connectivity and excellent customer
                                support for a seamless internet experience at home.</div>
                        </div>
                    </div>

                    <!-- Facility Block One -->
                    <div class="facility-block_one">
                        <div class="facility-block_one-inner">
                            <div class="facility-block_one-icon flaticon-money-bag"></div>
                            <h4 class="facility-block_one-heading">Competitive pricing </h4>
                            <div class="facility-block_one-text">Offers competitive pricing and flexible packages to meet various usage
                                needs.</div>
                        </div>
                    </div>

                    <!-- Facility Block One -->
                    <div class="facility-block_one">
                        <div class="facility-block_one-inner">
                            <div class="facility-block_one-icon flaticon-wifi-router"></div>
                            <h4 class="facility-block_one-heading">Quality Connection</h4>
                            <div class="facility-block_one-text">Veenet Africa delivers high-speed broadband internet services directly
                                to residential customers</div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Image Column -->
            <div class="facility-one_image-column col-lg-6 col-md-12 col-sm-12">
                <div class="facility-one_image-outer">
                    <span class="facility-one_circle-three"></span>
                    <div class="facility-one_image">
                        <img src="images/resource/us-tab.png"
                        
                        alt="" />
                    </div>
                    <div class="facility-one_package">
                        <img src="images/resource/package.png" 
                        style="width:220px!important"
                        alt="" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Facility One -->

<!-- Price Two -->
@include('include.packages')
<!-- End Price Two -->

@endsection