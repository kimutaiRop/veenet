<!DOCTYPE html>
<html lang="en">

{{-- include heade --}}
<head>
@yield('title')
@include('include.head')
</head>

<body>
<div class="page-wrapper">
<div class="preloader"></div>
@include('include.header')
@yield('content')
@include("include.footer")
</div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/appear.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/parallax-scroll.js"></script>

<script src="js/gsap.min.js"></script>
<script src="js/SplitText.min.js"></script>
<script src="js/ScrollTrigger.min.js"></script>
<script src="js/ScrollToPlugin.min.js"></script>
<script src="js/ScrollSmoother.min.js"></script>

<script src="js/odometer.js"></script>
<script src="js/parallax-scroll.js"></script>
<script src="js/pagenav.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>
</html>

