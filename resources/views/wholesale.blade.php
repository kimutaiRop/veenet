@extends('layouts.main')
{{-- put inside container --}}

@section('content')

<!-- Slider One -->
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
                            <div class="slider-two_title">Welcome to Veenet Africa Wholesale Internet</div>
                            <h1 class="slider-two_heading">
                                Treansforming <br> Internet <br> Supply Chain
                            </h1>
                            <!-- Button Box -->
                            <div class="slider-one_phone" style="margin-top: 30px;">
                                <div class="slider-one_phone-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                Give us a call <br>
                                <a href="tel:+254 722534635">(+254) 722534635</a>
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
                        <img src="images/resource/office-internet.jpg" alt="" />
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
                            We Provide Wholesale<br>
                            <br> Internet for your business</h2>
                    </div>
                    <div class="about-two_bold-text">
                        Veenet Africa offers robust wholesale internet solutions tailored for ISPs, telecommunications companies, and large enterprises. Our scalable bandwidth options ensure seamless connectivity and high performance for diverse network demands                    </div>
                    <div class="row clearfix">
                        <div class="column col-lg-6 col-md-6 col-sm-6">
                            <ul class="about-two_list">
                                <li><i class="fa-solid fa-bolt fa-fw"></i> Fast Internet</li>
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
                        We offer reliable internet for small and big businesses. as we try to cover the whole of africa with our services.
                    </p>
                    <div class="inverse-one_phone">
                        <div class="inverse-one_phone-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        Give us a call <br>
                        <a href="tel:+254 758353533">+254 758353533</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End About Two -->
<section class="fluid-two">
    <div class="outer-container clearfix">
        <!-- Left Box -->
        <div class="left-box clearfix">
            <div class="left-box_inner">
                <div class="fluid-one_color-layer"></div>
                <!-- Sec Title -->
                <div class="sec-title">
                    <div class="sec-title_title">Dedicated Inaternet</div>
                    <h2 class="sec-title_heading">We offer reliable<br> Dedicated Internet</h2>
                </div>
                <div class="fluid-two_feature">
                    <div class="fluid-two_feature-icon flaticon-wifi-router"></div>
                    Get conneted with <a href="#">Veenet Africa</a> that can provide your every technology need to connect the world.
                </div>
                <div class="fluid-two_text">
                    Tailored to meet the stringent requirements of businesses, our dedicated internet solutions provide guaranteed bandwidth, low latency, and exceptional reliability. Ideal for enterprises needing mission-critical connectivity
                </div>
                <!-- Button Box -->
                <div class="inverse-one_phone">
                    <div class="inverse-one_phone-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    Give us a call <br>
                    <a href="tel:+254 758353533">+254 758353533</a>
                </div>
            </div>
            <div class="fluid-two_router">
                <img src="images/icons/router.png" alt="" />
            </div>
        </div>
        <!-- Right Box -->
        <div class="right-box" style="background-image: url(images/resource/tele-communication.jpg)">
            <div class="right-box_inner">
                <div class="fluid-two_image">
                    <img src="images/resource/tele-communication.jpg" alt="" />
                </div>
            </div>
            <div class="fluid-two_experiance">
                <span class="fluid-two_experiance-icon flaticon-technical-support"></span>
                Experience <br> Best internet
            </div>
        </div>
    </div>
</section>
<!-- Service Two -->
<section class="service-two" id="services">
    <div class="service-two_pattern" style="background-image: url(images/background/service-two_pattern.png)"></div>
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="sec-title_title tx-split-text split-in-up">our stategies</div>
            <h2 class="sec-title_heading tx-split-text split-in-up">strategic superiority for your business</h2>
        </div>
        
        <div class="swiper_carousel swiper-container" data-swiper='{"spaceBetween":25,"slidesPerView":4,"centeredSlides":false,"loop":true,"navigation":{"nextEl":".swiper-button-next","prevEl":".swiper-button-prev","clickable":"true"},"pagination":{"el":".service-two_pagination","clickable":"true"},"autoplay":{"delay":"6000"},"breakpoints":{"320":{"slidesPerView":1,"spaceBetween":0},"700":{"slidesPerView":1,"spaceBetween":0},"600":{"slidesPerView":2,"spaceBetween":15},"700":{"slidesPerView":2,"spaceBetween":25},"900":{"slidesPerView":2,"spaceBetween":25},"1000":{"slidesPerView":3,"spaceBetween":25},"1200":{"slidesPerView":4,"spaceBetween":25},"1500":{"slidesPerView":4,"spaceBetween":25}}}'>
            <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide">
                    <!-- Service Block Two -->
                    <div class="service-block_two">
                        <div class="service-block_two-inner">
                            <div class="service-block_two-pattern" style="background-image: url(images/background/service-block_two-pattern.png)"></div>
                            <div class="service-block_two-icon flaticon-installation"></div>
                            <h4 class="service-block_two-heading"><a href="Veenet Africa Business Profile.pdf">Enhanced Reach and Coverage</a></h4>
                            <div class="service-block_two-text">Leasing infrastructure from well-established fiber network providers</div>
                            <a class="service-block_two-arrow flaticon-right-arrow" href="Veenet Africa Business Profile.pdf"></a>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <!-- Service Block Two -->
                    <div class="service-block_two margin">
                        <div class="service-block_two-inner">
                            <div class="service-block_two-pattern" style="background-image: url(images/background/service-block_two-pattern.png)"></div>
                            <div class="service-block_two-icon flaticon-installation"></div>
                            <h4 class="service-block_two-heading"><a href="Veenet Africa Business Profile.pdf">Reliability and Performance</a></h4>
                            <div class="service-block_two-text">Utilizing established fiber networks ensures high reliability and superior performance</div>
                            <a class="service-block_two-arrow flaticon-right-arrow" href="Veenet Africa Business Profile.pdf"></a>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <!-- Service Block Two -->
                    <div class="service-block_two">
                        <div class="service-block_two-inner">
                            <div class="service-block_two-pattern" style="background-image: url(images/background/service-block_two-pattern.png)"></div>
                            <div class="service-block_two-icon flaticon-installation"></div>
                            <h4 class="service-block_two-heading"><a href="Veenet Africa Business Profile.pdf">Scalability and Flexibility</a></h4>
                            <div class="service-block_two-text">Leasing infrastructure provides Veenet Africa with scalability options to meet growing demand.</div>
                            <a class="service-block_two-arrow flaticon-right-arrow" href="Veenet Africa Business Profile.pdf"></a>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <!-- Service Block Two -->
                    <div class="service-block_two margin">
                        <div class="service-block_two-inner">
                            <div class="service-block_two-pattern" style="background-image: url(images/background/service-block_two-pattern.png)"></div>
                            <div class="service-block_two-icon flaticon-installation"></div>
                            <h4 class="service-block_two-heading"><a href="Veenet Africa Business Profile.pdf">Cost Efficiency</a></h4>
                            <div class="service-block_two-text">Leasing infrastructure can be a cost-effective solution compared to building and maintaining proprietary network</div>
                            <a class="service-block_two-arrow flaticon-right-arrow" href="Veenet Africa Business Profile.pdf"></a>
                        </div>
                    </div>
                </div> <div class="swiper-slide">
                    <!-- Service Block Two -->
                    <div class="service-block_two ">
                        <div class="service-block_two-inner">
                            <div class="service-block_two-pattern" style="background-image: url(images/background/service-block_two-pattern.png)"></div>
                            <div class="service-block_two-icon flaticon-installation"></div>
                            <h4 class="service-block_two-heading"><a href="Veenet Africa Business Profile.pdf">Focus on Core Competencies</a></h4>
                            <div class="service-block_two-text">By outsourcing infrastructure leasing to specialized providers, Veenet Africa can focus more resources and efforts on its core competencies.</div>
                            <a class="service-block_two-arrow flaticon-right-arrow" href="Veenet Africa Business Profile.pdf"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <!-- Service Block Two -->
                    <div class="service-block_two margin">
                        <div class="service-block_two-inner">
                            <div class="service-block_two-pattern" style="background-image: url(images/background/service-block_two-pattern.png)"></div>
                            <div class="service-block_two-icon flaticon-installation"></div>
                            <h4 class="service-block_two-heading"><a href="Veenet Africa Business Profile.pdf">Regulatory Compliance</a></h4>
                            <div class="service-block_two-text">Partnering with established fiber network providers often ensures compliance with local regulations</div>
                            <a class="service-block_two-arrow flaticon-right-arrow" href="Veenet Africa Business Profile.pdf"></a>
                        </div>
                    </div>
                
            </div>
        </div>

    </div>
</section>

@endsection