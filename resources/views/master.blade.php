
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!--
    //////////////////////////////////////////////////////

FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FreeHTML5.co

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.css">

	<!-- Modernizr JS -->
	<script src="{{asset('frontend')}}/assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{asset('frontend')}}/assets/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="{{route('home')}}">Law<span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="{{route('home')}}">Blog</a></li>
							<li><a href="{{route('practice')}}">Consultation</a></li>
{{--							<li><a href="won.html">Won Cases</a></li>--}}
{{--							<li class="has-dropdown">--}}
{{--								<a href="blog.html">Blog</a>--}}
{{--								<ul class="dropdown">--}}
{{--									<li><a href="#">Web Design</a></li>--}}
{{--									<li><a href="#">eCommerce</a></li>--}}
{{--									<li><a href="#">Branding</a></li>--}}
{{--									<li><a href="#">API</a></li>--}}
{{--								</ul>--}}
{{--							</li>--}}
{{--							<li><a href="about.html">About</a></li>--}}
{{--							<li><a href="contact.html">Contact</a></li>--}}
{{--							<li class="btn-cta"><a href="#"><span>Login</span></a></li>--}}
{{--							<li class="btn-cta"><a href="#"><span>Sign Up</span></a></li>--}}
						</ul>
					</div>
				</div>

			</div>
		</div>
	</nav>

@yield('content')
	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h4>Attorney's Law</h4>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h4>Navigation</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Home</a></li>
						<li><a href="#">Practice Areas</a></li>
						<li><a href="#">Won Cases</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">About us</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
						<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
						<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
						<li><a href="http://gettemplates.co">gettemplates.co</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Opening Hours</h4>
					<ul class="fh5co-footer-links">
						<li>Mon - Thu: 9:00 - 21 00</li>
						<li>Fri 8:00 - 21 00</li>
						<li>Sat 9:30 - 15: 00</li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="{{asset('frontend')}}/assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('frontend')}}/assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="{{asset('frontend')}}/assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="{{asset('frontend')}}/assets/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('frontend')}}/assets/js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="{{asset('frontend')}}/assets/js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="{{asset('frontend')}}/assets/js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="{{asset('frontend')}}/assets/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('frontend')}}/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="{{asset('frontend')}}/assets/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="{{asset('frontend')}}/assets/js/main.js"></script>

	</body>
</html>

