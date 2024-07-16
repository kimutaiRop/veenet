@extends('layouts.main')
{{-- put inside container --}}

@section('content')

	<section class="slider-one" id="home">
		<div class="swiper_carousel swiper-container" data-swiper='{"spaceBetween":0,"slidesPerView":1,"navigation":{"nextEl":".main-slider_button-next","prevEl":".main-slider_button-prev","clickable":"true"},"pagination":{"el":".main-slider_pagination","clickable":"true"},"autoplay":{"delay":"6000"},"breakpoints":{"320":{"slidesPerView":1,"spaceBetween":0},"480":{"slidesPerView":1,"spaceBetween":0},"640":{"slidesPerView":1,"spaceBetween":0}}}'>
			<div class="swiper-wrapper">

				<!-- Slide -->
				<div class="swiper-slide">
					<div class="slider-one_image" style="background-image: url(images/main-slider/1.jpg)"></div>
					<div class="auto-container">
						<!-- Content Column -->
						<div class="slider-one_content-column">
							<div class="slider-one_content-inner">
								<div class="slider-one_title">Home Internet</div>
								<h1 class="slider-one_heading">
									Do not suffer the buffer.
								</h1>
								<div class="slider-one_text">
                                    With our ultra fast internet connection
                                    <br> you can enjoy your streamings with no interruptions.</div>
								<!-- Button Box -->
								<div class="slider-one_button-box d-flex align-items-center flex-wrap">
									<a class="btn-style-one theme-btn" href="/home-internet">
										<div class="btn-wrap">
											<span class="text-one">Discover More</span>
											<span class="text-two">Discover More</span>
										</div>
									</a>
									<!-- Slider One Phone -->
									<div class="slider-one_phone">
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

				<!-- Slide -->
				<div class="swiper-slide">
					<div class="slider-one_image" style="background-image: url(images/main-slider/1.jpg)"></div>
					<div class="auto-container">
						<!-- Content Column -->
						<div class="slider-one_content-column">
							<div class="slider-one_content-inner">
								<div class="slider-one_title">Your Trusted Partner</div>
								<h1 class="slider-one_heading">
									Wholesale Internet for you to redistribute
								</h1>
								<div class="slider-one_text">
                                    Get fast, cheap internet connection for your business
                                    <br> To redistribute to your customers</div>
								<!-- Button Box -->
								<div class="slider-one_button-box d-flex align-items-center flex-wrap">
									<a class="btn-style-one theme-btn" href="/wholesale-internet">
										<div class="btn-wrap">
											<span class="text-one">Discover More</span>
											<span class="text-two">Discover More</span>
										</div>
									</a>
									<!-- Slider One Phone -->
									<div class="slider-one_phone">
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

				<!-- Slide -->
				<div class="swiper-slide">
					<div class="slider-one_image" style="background-image: url(images/main-slider/1.jpg)"></div>
					<div class="auto-container">
						<!-- Content Column -->
						<div class="slider-one_content-column">
							<div class="slider-one_content-inner">
								<div class="slider-one_title">Business communication</div>
								<h1 class="slider-one_heading">
									We are your trusted business communication partner
								</h1>
								<div class="slider-one_text">
                                    Communication is the first step to start business services
                                    <br> and we are here to help you master it!</div>
								<!-- Button Box -->
								<div class="slider-one_button-box d-flex align-items-center flex-wrap">
									<a class="btn-style-one theme-btn" href="/business-communication">
										<div class="btn-wrap">
											<span class="text-one">Discover More</span>
											<span class="text-two">Discover More</span>
										</div>
									</a>
									<!-- Slider One Phone -->
									<div class="slider-one_phone">
										<div class="slider-one_phone-icon">
											<i class="fa fa-phone"></i>
										</div>
										Give us a call <br>
										<a href="tel:+254 758353533">+254 758353533</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- If we need pagination -->
			<div class="swiper-pagination"></div>
    
			<!-- If we need navigation buttons -->
			<div class="main-slider_button-prev fas fa-arrow-left fa-fw"></div>
			<div class="main-slider_button-next fas fa-arrow-right fa-fw"></div>

		</div>
	</section>
	<!-- End Slider One -->

	<!-- Service One -->
	<section class="service-one">
		<div class="auto-container">
			<div class="row g-0">
				
				<!-- Service Block One -->
				<div class="service-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_one-inner">
						<div class="service-block_one-upper">
							<div class="service-block_one-icon flaticon-cinema"></div>
							<h4 class="service-block_one-heading"><a href="/home-internet">Home <br> Internet</a></h4>
						</div>
						<div class="service-block_one-text">
                            Fast Home internet connection for your home and business with minimal interruptions
                        </div>
						<a class="service-block_one-more" href="/home-internet">Get Service</a>
					</div>
				</div>

				<!-- Service Block One -->
				<div class="service-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_one-inner">
						<div class="service-block_one-upper">
							<div class="service-block_one-icon flaticon-wifi-router-1"></div>
							<h4 class="service-block_one-heading"><a href="/wholesale-internet">Wholesale <br> Internet </a></h4>
						</div>
						<div class="service-block_one-text">
                            Source fast reliable internet for your business from us and redistribute to your customers</div>
						<a class="service-block_one-more" href="/wholesale-internet">Get Service</a>
					</div>
				</div>

				<!-- Service Block One -->
				<div class="service-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_one-inner">
						<div class="service-block_one-upper">
							<div class="service-block_one-icon flaticon-smartphone"></div>
							<h4 class="service-block_one-heading"><a href="/business-communication">Business <br> Communication</a></h4>
						</div>
						<div class="service-block_one-text">
                        Provide reliable communication for your business for both your customers and  staff   
                        </div>
						<a class="service-block_one-more" href="/business-communication">Get Service</a>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Service One -->

	<!-- About One -->
	<section class="about-one" id="about">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="about-one_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-one_image-outer">
						<div class="about-one_pattern" style="background-image: url(images/background/pattern-1.png)"></div>
						<div class="about-one_image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="images/resource/about-1.jpg" alt="" />
							<div class="about-one_color-layer"></div>
							<div class="about-one_color-layer-two"></div>
						</div>
						<div class="about-one_image-two" data-parallax='{"y" : 60}'>
							<img src="images/ab-2.jpg" alt="" />
						</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="about-one_content-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-one_content-outer">
						<div class="sec-title">
							<div class="sec-title_title tx-split-text split-in-right">WHO WE ARE</div>
							<h2 class="sec-title_heading tx-split-text split-in-right">Get internet & communication <br> 
                                service from us
                            </h2>
						</div>
						<div class="about-one_bold-text">
                            We thrive to serve you with the best internet and communication service
                            both for your home and business
                        </div>
						<div class="about-one_feature">
							<div class="about-one_feature-icon flaticon-cyber-security"></div>
							<strong>24/7 Support</strong>
							We are committed to serving and supporting our customers 24/7
						</div>
						<ul class="about-one_lists">
							<li><i class="arrow fa fa-arrow-circle-right"></i> Home Internet Connection</li>
							<li><i class="arrow fa fa-arrow-circle-right"></i> Wholesale Internet Connection</li>
							<li><i class="arrow fa fa-arrow-circle-right"></i> Business Communication Service</li>
						</ul>
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
	<!-- End About One -->

	<!-- Benefit One -->
	<section class="benefit-one" style="background-image: url(images/background/benefit-pattern.png)">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="left-box">
						<div class="sec-title_title">OUR BENEFITS</div>
						<h2 class="sec-title_heading">A few great reasons make <br>veenet Africa you choice </h2>
					</div>
					<div class="right-box">
						<div class="sec-title_text">
                            We believe that the only way to best serve your customers is by providing value and service worth their money
                            and we try to help you achieve that in a spectacular way!
                        </div>
					</div>
				</div>
			</div>
			<div class="row clearfix">

				<!-- Benefit Block One -->
				<div class="benefit-block_one col-lg-3 col-md-6 col-sm-6">
					<div class="benefit-block_one-inner">
						 <div class="benefit-block_one-pattern" style="background-image: url(images/background/benefit-block_pattern.png)"></div>
						<div class="benefit-block_one-color"></div>
						<div class="benefit-block_one-icon flaticon-installation"></div>
						<h4 class="benefit-block_one-heading"><a href="/home-internet">Free <br> Installation</a></h4>
					</div>
				</div>

				<!-- Benefit Block One -->
				<div class="benefit-block_one col-lg-3 col-md-6 col-sm-6">
					<div class="benefit-block_one-inner">
						 <div class="benefit-block_one-pattern" style="background-image: url(images/background/benefit-block_pattern.png)"></div>
						<div class="benefit-block_one-color"></div>
						<div class="benefit-block_one-icon flaticon-high-speed"></div>
						<h4 class="benefit-block_one-heading"><a href="/wholesale-internet">Ultra Fast <br> Connect</a></h4>
					</div>
				</div>

				<!-- Benefit Block One -->
				<div class="benefit-block_one col-lg-3 col-md-6 col-sm-6">
					<div class="benefit-block_one-inner">
						 <div class="benefit-block_one-pattern" style="background-image: url(images/background/benefit-block_pattern.png)"></div>
						<div class="benefit-block_one-color"></div>
						<div class="benefit-block_one-icon flaticon-smart-tv"></div>
						<h4 class="benefit-block_one-heading"><a href="/business-communication">Easy efficient <br> communication</a></h4>
					</div>
				</div>

				<!-- Benefit Block One -->
				<div class="benefit-block_one col-lg-3 col-md-6 col-sm-6">
					<div class="benefit-block_one-inner">
						 <div class="benefit-block_one-pattern" style="background-image: url(images/background/benefit-block_pattern.png)"></div>
						<div class="benefit-block_one-color"></div>
						<div class="benefit-block_one-icon flaticon-technical-support"></div>
						<h4 class="benefit-block_one-heading"><a href="#footer">Great Fast <br> Support 24/7</a></h4>
					</div>
				</div>

			</div>
		</div>
	</section>
@endsection