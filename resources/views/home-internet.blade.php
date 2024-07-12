@extends('layouts.main')
{{-- put inside container --}}

@section('content')
<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="close-button">
                <span class="far fa-times fa-fw"></span>
            </div>
            <div class="sidebar-textwidget">
                
                <!-- Sidebar Info Content -->
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                    
                        <!-- Title Box -->
                        <div class="title-box">
                            <h5>Broadband <span>connection</span></h5>
                            <div class="price">$15 from free economy shipping</div>
                        </div>
                        
                        <!-- Empty Cart Box -->
                        <div class="empty-cart-box">
                            <!-- No Product -->
                            <div class="no-cart">
                                <span class="icon far fa-cart-plus fa-fw"></span>
                                No products in cart.
                            </div>
                        </div>
                        
                        <!-- Lower Box -->
                        <div class="lower-box">
                            <h5>Popular <span>Suggestions</span></h5>
                                
                            <!-- Post Block -->
                            <div class="post-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="images/resource/post-thumb-1.jpg" alt="" />
                                    </div>
                                    <h6><a href="#">Free Installation</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="price-box">$125</div>
                                    <a class="theme-btn bag-btn" href="#">add to bag</a>
                                </div>
                            </div>
                            
                            <!-- Post Block -->
                            <div class="post-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="images/resource/post-thumb-2.jpg" alt="" />
                                    </div>
                                    <h6><a href="#">Ultra Fast Connect</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="price-box">$205</div>
                                    <a class="theme-btn bag-btn" href="#">add to bag</a>
                                </div>
                            </div>
                            
                            <!-- Post Block -->
                            <div class="post-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="images/resource/post-thumb-3.jpg" alt="" />
                                    </div>
                                    <h6><a href="#">4K and 8K Quality</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="price-box">$25</div>
                                    <a class="theme-btn bag-btn" href="#">add to bag</a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<!-- About Sidebar -->
<div class="about-sidebar">
    <div class="gradient-layer"></div>
    <!-- Close Button -->
    <div class="close-sidebar-widget close-button">
        <span class="flaticon-multiply"></span>
    </div>
    <div class="sidebar-inner">
        <div class="upper-box">
            <div class="image">
                <img src="images/resource/about-1.jpg" alt="" />
            </div>
            <div class="content-box">
                <h3>About <span>Monic</span></h3>
                <div class="text">Many desktop Wifi packages & web page editors now use Ipsum budgets dipiscing</div>
                <ul class="about-one_list">
                    <li>Internet with 50 Mbps</li>
                    <li>Night Turbo-Speed</li>
                    <li>WiFi router & prevention</li>
                    <li>Unlimited devices</li>
                </ul>
            </div>
        </div>
        <!-- Social Box -->
        <div class="social-box">
            <a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </div>
</div>
<!-- End About Sidebar -->

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
                            <div class="slider-two_price">KES 1999 <span>Per Month</span></div>
                            <div class="slider-two_title">Welcome to Veenet Home Internet</div>
                            <h1 class="slider-two_heading">
                                Best Internet <br> Service in Your <br> Region
                            </h1>
                            <!-- Button Box -->
                            <div class="slider-two_button-box">
                                <a class="btn-style-one theme-btn" href="about.html">
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
                        <img src="images/resource/about-3.png" alt="" />
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
                        We are a team of experienced internet providers with 15+ years of experience. Ready to connect your home to the world.
                    </div>
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
                                <a class="btn-style-two theme-btn" href="about.html">
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

<!-- Service Two -->
<section class="service-two" id="services">
    <div class="service-two_pattern" style="background-image: url(images/background/service-two_pattern.png)"></div>
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="sec-title_title tx-split-text split-in-up">our sERVICES</div>
            <h2 class="sec-title_heading tx-split-text split-in-up">Explore our services</h2>
        </div>
        
        <div class="swiper_carousel swiper-container" data-swiper='{"spaceBetween":25,"slidesPerView":4,"centeredSlides":false,"loop":true,"navigation":{"nextEl":".swiper-button-next","prevEl":".swiper-button-prev","clickable":"true"},"pagination":{"el":".service-two_pagination","clickable":"true"},"autoplay":{"delay":"6000"},"breakpoints":{"320":{"slidesPerView":1,"spaceBetween":0},"700":{"slidesPerView":1,"spaceBetween":0},"600":{"slidesPerView":2,"spaceBetween":15},"700":{"slidesPerView":2,"spaceBetween":25},"900":{"slidesPerView":2,"spaceBetween":25},"1000":{"slidesPerView":3,"spaceBetween":25},"1200":{"slidesPerView":4,"spaceBetween":25},"1500":{"slidesPerView":4,"spaceBetween":25}}}'>
            <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide">
                    <!-- Service Block Two -->
                    <div class="service-block_two">
                        <div class="service-block_two-inner">
                            <div class="service-block_two-pattern" style="background-image: url(images/background/service-block_two-pattern.png)"></div>
                            <div class="service-block_two-icon flaticon-wifi-1"></div>
                            <h4 class="service-block_two-heading"><a href="service-detail.html">Internet Service</a></h4>
                            <div class="service-block_two-text">Justo eleifend sociosqu quisque elementum suscipit purus natoque dolor</div>
                            <a class="service-block_two-arrow flaticon-right-arrow" href="service-detail.html"></a>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <!-- Service Block Two -->
                    <div class="service-block_two margin">
                        <div class="service-block_two-inner">
                            <div class="service-block_two-pattern" style="background-image: url(images/background/service-block_two-pattern.png)"></div>
                            <div class="service-block_two-icon flaticon-tv"></div>
                            <h4 class="service-block_two-heading"><a href="service-detail.html">Satellite TV</a></h4>
                            <div class="service-block_two-text">Justo eleifend sociosqu quisque elementum suscipit purus natoque dolor</div>
                            <a class="service-block_two-arrow flaticon-right-arrow" href="service-detail.html"></a>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <!-- Service Block Two -->
                    <div class="service-block_two">
                        <div class="service-block_two-inner">
                            <div class="service-block_two-pattern" style="background-image: url(images/background/service-block_two-pattern.png)"></div>
                            <div class="service-block_two-icon flaticon-telephone"></div>
                            <h4 class="service-block_two-heading"><a href="service-detail.html">VOIP</a></h4>
                            <div class="service-block_two-text">Justo eleifend sociosqu quisque elementum suscipit purus natoque dolor</div>
                            <a class="service-block_two-arrow flaticon-right-arrow" href="service-detail.html"></a>
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
                            <h4 class="service-block_two-heading"><a href="service-detail.html">VPN Services</a></h4>
                            <div class="service-block_two-text">Justo eleifend sociosqu quisque elementum suscipit purus natoque dolor</div>
                            <a class="service-block_two-arrow flaticon-right-arrow" href="service-detail.html"></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Service Two -->

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
                        <div class="sec-title_text tx-split-text split-in-up">Business is the activity of making one's living or making money by producing cumsociis natoque penatibus et magnis dis partu rient to montes. Aene an massa. cumsociis natoque penatibus.</div>
                    </div>
                    <!-- Facility Block One -->
                    <div class="facility-block_one">
                        <div class="facility-block_one-inner">
                            <div class="facility-block_one-icon flaticon-web-development"></div>
                            <h4 class="facility-block_one-heading">Free Installation</h4>
                            <div class="facility-block_one-text">Lorem ipsum dolor sit amet them consec tetur elit sed eiumod. Donec quam felis ies nec.</div>
                        </div>
                    </div>

                    <!-- Facility Block One -->
                    <div class="facility-block_one">
                        <div class="facility-block_one-inner">
                            <div class="facility-block_one-icon flaticon-wifi-router"></div>
                            <h4 class="facility-block_one-heading">Ultrafast Connect</h4>
                            <div class="facility-block_one-text">Lorem ipsum dolor sit amet them consec tetur elit sed eiumod. Donec quam felis ies nec.</div>
                        </div>
                    </div>

                    <!-- Facility Block One -->
                    <div class="facility-block_one">
                        <div class="facility-block_one-inner">
                            <div class="facility-block_one-icon flaticon-smart-tv"></div>
                            <h4 class="facility-block_one-heading">4K and 8K Quality</h4>
                            <div class="facility-block_one-text">Lorem ipsum dolor sit amet them consec tetur elit sed eiumod. Donec quam felis ies nec.</div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Image Column -->
            <div class="facility-one_image-column col-lg-6 col-md-12 col-sm-12">
                <div class="facility-one_image-outer">
                    <span class="facility-one_circle-three"></span>
                    <div class="facility-one_image">
                        <img src="images/resource/facility.png" alt="" />
                    </div>
                    <div class="facility-one_package">
                        <img src="images/resource/package.png" alt="" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Facility One -->

<!-- Price Two -->
<section class="price-two">
    <div class="price-two_pattern" style="background-image: url(images/background/pattern-2.png)"></div>
    <span class="price-two_circle-one"></span>
    <span class="price-two_circle-two"></span>
    <span class="price-two_circle-three"></span>
    <span class="price-two_circle-four"></span>
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title light centered">
            <div class="sec-title_title tx-split-text split-in-up">Our Pricing Plan For You</div>
            <h2 class="sec-title_heading tx-split-text split-in-up">No hidden charges! choose <br> your plan wisely.</h2>
        </div>
        <div class="row clearfix">

            <!-- Price Block Two -->
            <div class="price-block_two col-lg-4 col-md-6 col-sm-12">
                <div class="price-block_two-inner" style="background-image: url(images/background/price-pattern-1.png)">
                    <div class="price-block_two-tag">Internet</div>
                    <div class="icon-box">
                        <i class="flaticon-web-development"></i>
                    </div>
                    <div class="price-block_two-title">Internet</div>
                    <div class="price-block_two-price"><sub>$</sub>55<sup>.99</sup><span>/ Month</span></div>
                    <!-- Price Block Two List -->
                    <ul class="price-block_two-list">
                        <li><i class="icon fa-solid fa-check fa-fw"></i>Internet with 50 Mbps</li>
                        <li><i class="icon fa-solid fa-check fa-fw"></i>Night Turbo-Speed</li>
                        <li><i class="icon fa-solid fa-check fa-fw"></i>WiFi router & prevention</li>
                        <li><i class="icon fa-solid fa-check fa-fw"></i>Unlimited devices</li>
                    </ul>
                    <!-- Button Box -->
                    <div class="price-block_two-button">
                        <a class="btn-style-two theme-btn" href="price.html">
                            <div class="btn-wrap">
                                <span class="text-one">get started</span>
                                <span class="text-two">get started</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Price Block Two -->
            <div class="price-block_two col-lg-4 col-md-6 col-sm-12">
                <div class="price-block_two-inner" style="background-image: url(images/background/price-pattern-1.png)">
                    <div class="price-block_two-tag">TV + net</div>
                    <div class="icon-box">
                        <i class="flaticon-web-development"></i>
                        <i class="flaticon-world-grid"></i>
                    </div>
                    <div class="price-block_two-title">Comfort Zone</div>
                    <div class="price-block_two-price"><sub>$</sub>75<sup>.99</sup><span>/ Month</span></div>
                    <!-- Price Block Two List -->
                    <ul class="price-block_two-list">
                        <li><i class="icon fa-solid fa-check fa-fw"></i>Internet with 50 Mbps</li>
                        <li><i class="icon fa-solid fa-check fa-fw"></i>Night Turbo-Speed</li>
                        <li><i class="icon fa-solid fa-check fa-fw"></i>WiFi router & prevention</li>
                        <li><i class="icon fa-solid fa-check fa-fw"></i>Unlimited devices</li>
                    </ul>
                    <!-- Button Box -->
                    <div class="price-block_two-button">
                        <a class="btn-style-two theme-btn" href="price.html">
                            <div class="btn-wrap">
                                <span class="text-one">get started</span>
                                <span class="text-two">get started</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Price Block Two -->
            <div class="price-block_two col-lg-4 col-md-6 col-sm-12">
                <div class="price-block_two-inner" style="background-image: url(images/background/price-pattern-1.png)">
                    <div class="price-block_two-tag">TV + Net + Phone</div>
                    <div class="icon-box">
                        <i class="flaticon-web-development"></i>
                        <i class="flaticon-world-grid"></i>
                        <i class="flaticon-online"></i>
                    </div>
                    <div class="price-block_two-title">Full Package</div>
                    <div class="price-block_two-price"><sub>$</sub>95<sup>.99</sup><span>/ Month</span></div>
                    <!-- Price Block Two List -->
                    <ul class="price-block_two-list">
                        <li><i class="icon fa-solid fa-check fa-fw"></i>Internet with 50 Mbps</li>
                        <li><i class="icon fa-solid fa-check fa-fw"></i>Night Turbo-Speed</li>
                        <li><i class="icon fa-solid fa-check fa-fw"></i>WiFi router & prevention</li>
                        <li><i class="icon fa-solid fa-check fa-fw"></i>Unlimited devices</li>
                    </ul>
                    <!-- Button Box -->
                    <div class="price-block_two-button">
                        <a class="btn-style-two theme-btn" href="price.html">
                            <div class="btn-wrap">
                                <span class="text-one">get started</span>
                                <span class="text-two">get started</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Price Two -->

<!-- Gallery Two -->
<section class="gallery-two" id="gallery">
    <div class="gallery-two_pattern" style="background-image: url(images/background/gallery-two_pattern.png)"></div>
    <div class="gallery-two_pattern-two" style="background-image: url(images/background/gallery-two_pattern-1.png)"></div>
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <div class="sec-title_title tx-split-text split-in-up">streem with out stop</div>
            <h2 class="sec-title_heading tx-split-text split-in-up">Discover a world of <br> entertainment</h2>
        </div>
        <div class="inner-container">
            <div class="swiper_carousel" data-swiper='{"spaceBetween":30,"slidesPerView":3,"centeredSlides":false,"loop":true,"navigation":{"nextEl":".gallery-two_button-prev","prevEl":".gallery-two_button-next","clickable":"true"},"pagination":{"el":".gallery-two_pagination","clickable":"true"},"autoplay":{"delay":"6000"},"breakpoints":{"320":{"slidesPerView":1,"spaceBetween":20},"700":{"slidesPerView":2,"spaceBetween":20},"600":{"slidesPerView":2,"spaceBetween":15},"700":{"slidesPerView":2,"spaceBetween":25},"900":{"slidesPerView":2,"spaceBetween":25},"1000":{"slidesPerView":3,"spaceBetween":25},"1200":{"slidesPerView":3,"spaceBetween":30},"1500":{"slidesPerView":3,"spaceBetween":30}}}'>
                <div class="swiper-wrapper">
    
                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Gallery Block Two -->
                        <div class="gallery-block_two">
                            <div class="gallery-block_two-inner">
                                <div class="gallery-block_two-image">
                                    <img src="images/gallery/6.jpg" alt="" />
                                    <div class="gallery-block_two-overlay">
                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video gallery-block_two-play"><span class="fa-solid fa-play fa-fw"><i class="ripple"></i></span></a>
                                    </div>
                                </div>
                                <div class="gallery-block_two-content">
                                    <h4 class="gallery-block_two-heading"><a href="project-detail.html">We Count</a></h4>
                                    <div class="d-flex justify-content-between flex-wrap">
                                        <div class="gallery-block_two-released">2015 Released</div>
                                        <div class="right-box d-flex">
                                            <ul class="gallery-block_two-meta">
                                                <li><span class="icon fas fa-comments fa-fw"></span>35</li>
                                            </ul>
                                            <div class="gallery-block_two-rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Gallery Block Two -->
                        <div class="gallery-block_two">
                            <div class="gallery-block_two-inner">
                                <div class="gallery-block_two-image">
                                    <img src="images/gallery/7.jpg" alt="" />
                                    <div class="gallery-block_two-overlay">
                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video gallery-block_two-play"><span class="fa-solid fa-play fa-fw"><i class="ripple"></i></span></a>
                                    </div>
                                </div>
                                <div class="gallery-block_two-content">
                                    <h4 class="gallery-block_two-heading"><a href="project-detail.html">Jazz Concert</a></h4>
                                    <div class="d-flex justify-content-between flex-wrap">
                                        <div class="gallery-block_two-released">2015 Released</div>
                                        <div class="right-box d-flex">
                                            <ul class="gallery-block_two-meta">
                                                <li><span class="icon fas fa-comments fa-fw"></span>35</li>
                                            </ul>
                                            <div class="gallery-block_two-rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Gallery Block Two -->
                        <div class="gallery-block_two">
                            <div class="gallery-block_two-inner">
                                <div class="gallery-block_two-image">
                                    <img src="images/gallery/8.jpg" alt="" />
                                    <div class="gallery-block_two-overlay">
                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video gallery-block_two-play"><span class="fa-solid fa-play fa-fw"><i class="ripple"></i></span></a>
                                    </div>
                                </div>
                                <div class="gallery-block_two-content">
                                    <h4 class="gallery-block_two-heading"><a href="project-detail.html">Celebration of Freedom</a></h4>
                                    <div class="d-flex justify-content-between flex-wrap">
                                        <div class="gallery-block_two-released">2015 Released</div>
                                        <div class="right-box d-flex">
                                            <ul class="gallery-block_two-meta">
                                                <li><span class="icon fas fa-comments fa-fw"></span>35</li>
                                            </ul>
                                            <div class="gallery-block_two-rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Gallery Block Two -->
                        <div class="gallery-block_two">
                            <div class="gallery-block_two-inner">
                                <div class="gallery-block_two-image">
                                    <img src="images/gallery/9.jpg" alt="" />
                                    <div class="gallery-block_two-overlay">
                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video gallery-block_two-play"><span class="fa-solid fa-play fa-fw"><i class="ripple"></i></span></a>
                                    </div>
                                </div>
                                <div class="gallery-block_two-content">
                                    <h4 class="gallery-block_two-heading"><a href="project-detail.html">The Most Wanted</a></h4>
                                    <div class="d-flex justify-content-between flex-wrap">
                                        <div class="gallery-block_two-released">2015 Released</div>
                                        <div class="right-box d-flex">
                                            <ul class="gallery-block_two-meta">
                                                <li><span class="icon fas fa-comments fa-fw"></span>35</li>
                                            </ul>
                                            <div class="gallery-block_two-rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- If we need navigation buttons -->
                <div class="gallery-two_button-prev fas fa-arrow-left fa-fw"></div>
                <div class="gallery-two_button-next fas fa-arrow-right fa-fw"></div>

            </div>

        </div>
    </div>
</section>
<!-- End Gallery Two -->

<!-- Counter One -->
<section class="counter-one">
    <div class="auto-container">
        <div class="row clearfix">
    
            <!-- Counter Column -->
            <div class="counter-block_one col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="counter-block_one-inner wow flipInX" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <span class="counter-block_one-icon flaticon-handshake"></span>
                    <div class="counter-block_one-counter"><span class="odometer" data-count="25"></span>+</div>
                    <div class="counter-block_one-text">Years of Experience</div>
                </div>
            </div>

            <!-- Counter Column -->
            <div class="counter-block_one col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="counter-block_one-inner wow flipInX" data-wow-delay="150ms" data-wow-duration="1500ms">
                    <span class="counter-block_one-icon flaticon-experience"></span>
                    <div class="counter-block_one-counter"><span class="odometer" data-count="56"></span>k</div>
                    <div class="counter-block_one-text">Worlds Clients</div>
                </div>
            </div>

            <!-- Counter Column -->
            <div class="counter-block_one col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="counter-block_one-inner wow flipInX" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <span class="counter-block_one-icon flaticon-traffic-data"></span>
                    <div class="counter-block_one-counter"><span class="odometer" data-count="42"></span>K</div>
                    <div class="counter-block_one-text">Fiber Connection</div>
                </div>
            </div>

            <!-- Counter Column -->
            <div class="counter-block_one col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="counter-block_one-inner wow flipInX" data-wow-delay="450ms" data-wow-duration="1500ms">
                    <span class="counter-block_one-icon flaticon-internet-1"></span>
                    <div class="counter-block_one-counter"><span class="odometer" data-count="52"></span>k</div>
                    <div class="counter-block_one-text">Satellite Channel</div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Counter One -->

<!-- Testimonial Two -->
<section class="testimonial-two">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!-- Title Column -->
            <div class="testimonial-two_image-column col-lg-6 col-md-12 col-sm-12">
                <div class="testimonial-two_image-outer">
                    <div class="testimonial-two_color-layer"></div>
                    <div class="testimonial-two_image">
                        <img src="images/resource/testimonial-2.png" alt="" />
                    </div>
                    <div class="testimonial-two_customer">
                        happy <span>customer</span>
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="testimonial-two_carousel-column col-lg-6 col-md-12 col-sm-12">
                <div class="testimonial-two_carousel-outer">
                    <div class="sec-title">
                        <div class="sec-title_title tx-split-text split-in-left">OUR FEEDBACKS</div>
                        <h2 class="sec-title_heading tx-split-text split-in-left">What they’re talking <br> about Monic</h2>
                    </div>

                    <!-- Carousel Column -->
                    <div class="carousel-column">
                        <div class="testimonial__slider-wrap">
                            <div class="testimonial__active swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <!-- Testimonial Content -->
                                        <div class="testimonial-block_two">
                                            <div class="testimonial-block_two-inner">
                                                <div class="testimonial-block_two-image">
                                                    <img src="images/resource/author-7.jpg" alt="" />
                                                    <div class="testimonial-block_two-quote flaticon-quote"></div>
                                                </div>
                                                <div class="testimonial-two_text">Lorem ipsum dolor, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </div>
                                                <div class="d-flex justify-content-between flex-wrap">
                                                    <div class="testimonial-two_author">Thona Smith <span>// Customer</span></div>
                                                    <div class="testimonial-two_rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <!-- Testimonial Content -->
                                        <div class="testimonial-block_two">
                                            <div class="testimonial-block_two-inner">
                                                <div class="testimonial-block_two-image">
                                                    <img src="images/resource/author-7.jpg" alt="" />
                                                    <div class="testimonial-block_two-quote flaticon-quote"></div>
                                                </div>
                                                <div class="testimonial-two_text">Lorem ipsum dolor, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </div>
                                                <div class="d-flex justify-content-between flex-wrap">
                                                    <div class="testimonial-two_author">Thona Smith <span>// Customer</span></div>
                                                    <div class="testimonial-two_rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <!-- Testimonial Content -->
                                        <div class="testimonial-block_two">
                                            <div class="testimonial-block_two-inner">
                                                <div class="testimonial-block_two-image">
                                                    <img src="images/resource/author-7.jpg" alt="" />
                                                    <div class="testimonial-block_two-quote flaticon-quote"></div>
                                                </div>
                                                <div class="testimonial-two_text">Lorem ipsum dolor, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </div>
                                                <div class="d-flex justify-content-between flex-wrap">
                                                    <div class="testimonial-two_author">Thona Smith <span>// Customer</span></div>
                                                    <div class="testimonial-two_rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <!-- Testimonial Content -->
                                        <div class="testimonial-block_two">
                                            <div class="testimonial-block_two-inner">
                                                <div class="testimonial-block_two-image">
                                                    <img src="images/resource/author-7.jpg" alt="" />
                                                    <div class="testimonial-block_two-quote flaticon-quote"></div>
                                                </div>
                                                <div class="testimonial-two_text">Lorem ipsum dolor, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </div>
                                                <div class="d-flex justify-content-between flex-wrap">
                                                    <div class="testimonial-two_author">Thona Smith <span>// Customer</span></div>
                                                    <div class="testimonial-two_rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="tx-pagination swiper-pagination"></div> -->
                            </div>
                        </div>

                    </div>

                    <!-- Thumbs Column -->
                    <div class="thumbs-column">
                        
                        <div class="testimonial__nav swiper-container">
                            <div class="swiper-wrapper">
                                <div class="testimonial__nav-thumb swiper-slide">
                                    <img src="images/resource/author-3.jpg" alt="">
                                </div>
                                <div class="testimonial__nav-thumb swiper-slide">
                                    <img src="images/resource/author-4.jpg" alt="">
                                </div>
                                <div class="testimonial__nav-thumb swiper-slide">
                                    <img src="images/resource/author-5.jpg" alt="">
                                </div>
                                <div class="testimonial__nav-thumb swiper-slide">
                                    <img src="images/resource/author-6.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Testimonial Two -->

<!-- CTA Four -->
<section class="cta-four">
    <div class="auto-container">
        <div class="cta-four_inner-container wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="cta-four_pattern" style="background-image: url(images/background/cta-four_pattern.png)"></div>
            <div class="cta-four_pattern-two" style="background-image: url(images/background/cta-four_pattern-1.png)"></div>
            <div class="row clearfix">
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <div class="sec-title light">
                        <div class="sec-title_title tx-split-text split-in-left">OUR FEEDBACKS</div>
                        <h2 class="sec-title_heading tx-split-text split-in-left">Check ability to <br> connect our services <br> in your area</h2>
                    </div>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <div class="newsletter-box_three">
                        <form method="post" action="https://themerange.net/html/monic/contact.html">
                            <div class="form-group">
                                <input type="email" name="search-field" value="" placeholder="Enter your mail" required>
                                <button type="submit" class="theme-btn">submit now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('include.packages')
<!-- End of Packages Wrap -->

@endsection