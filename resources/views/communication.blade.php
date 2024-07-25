@extends('layouts.main')
{{-- put inside container --}}
@section("title")
<title>Veenet Africa | Business Communication Solutions </title>
@endsection

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
                            <div class="slider-two_title"> Veenet Africa Business Communications Solutions</div>
                            <h1 class="slider-two_heading">
                                Treansforming <br> Business Communications 
                            </h1>
                            <!-- Button Box -->
                            <div class="slider-one_phone" style="margin-top: 30px;">
                                <div class="slider-one_phone-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                Give us a call <br>
                                <a href="tel:+254 758353533">(+254) 758353533</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="category-one">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Column -->
            <div class="category-one_content-column col-lg-6 col-md-12 col-sm-12">
                <div class="category-one_content-outer">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="sec-title_title tx-split-text split-in-up">Business Communications Solutions</div>
                        <h2 class="sec-title_heading tx-split-text split-in-up"> Business Communications <br> made easy</h2>
                        <div class="sec-title_text tx-split-text ">
                            Our comprehensive suite of business communications solutions includes VoIP services, cloud-based collaboration tools,
                             and secure data transmission solutions. 
                            We empower businesses to optimize productivity and streamline operations
                        </div>
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
            </div>

            <!-- Feature Column -->
            <div class="category-one_feature-column col-lg-6 col-md-12 col-sm-12">
                <div class="category-one_feature-outer">
                    <div class="row clearfix">

                        <!-- Category One Feature -->
                        <div class="category-one_feature col-lg-4 col-md-6 col-sm-6">
                            <div class="category-one_feature-inner hide">
                                
                            </div>
                        </div>

                        <!-- Category One Feature -->
                        <div class="category-one_feature col-lg-4 col-md-6 col-sm-6">
                            <div class="category-one_feature-inner">
                                <a href="#" class="category-one_feature-link"></a>
                                <div class="category-one_feature-icon flaticon-phone-call"></div>
                                <h6 class="category-one_feature-heading">VoIP call services </h6>
                            </div>
                        </div>
                        <div class="category-one_feature col-lg-4 col-md-6 col-sm-6">
                            <div class="category-one_feature-inner">
                                <a href="#" class="category-one_feature-link"></a>
                                <div class="category-one_feature-icon flaticon-wifi-1"></div>
                                <h6 class="category-one_feature-heading">Private Branch Exchange</h6>
                            </div>
                        </div>

                        <!-- Category One Feature -->
                        <div class="category-one_feature col-lg-4 col-md-6 col-sm-6">
                            <div class="category-one_feature-inner">
                                <a href="#" class="category-one_feature-link"></a>
                                <div class="category-one_feature-icon flaticon-planet-earth"></div>
                                <h6 class="category-one_feature-heading">cloud collaboration </h6>
                            </div>
                        </div>

                        <!-- Category One Feature -->
                        <div class="category-one_feature col-lg-4 col-md-6 col-sm-6">
                            <div class="category-one_feature-inner">
                                <a href="#" class="category-one_feature-link"></a>
                                <div class="category-one_feature-icon flaticon-security"></div>
                                <h6 class="category-one_feature-heading"> secure data transmission</h6>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection