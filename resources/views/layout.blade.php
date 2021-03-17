<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Holy Nazarene Christian School</title>
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- CSS -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/fancybox/jquery.fancybox.css') }}" rel="stylesheet">
	<!--<link href="{{ asset('css/jcarousel.css') }}" rel="stylesheet" />-->
	<link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" />
	<!--<link href="{{ asset('js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">-->
	<link href="{{ asset('css/style.css?v=').time() }}" rel="stylesheet" />
	<!-- Website Icon -->
	<link rel="icon" href="{{ asset('img/hncs-logo.jpg') }}">
	<!-- Fontawesome 4.7  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<!-- CSS Asset / Inline CSS -->
    @yield('css-asset')
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
	<div id="wrapper">
		<!-- start header -->
		<header>
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header tablet-0mrgn">
						<button type="button" class="navbar-toggle mobile-margins" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="logo-holder">
							<a href="/" class="" href="index.html"><!-- navbar-brand -->
								<img src="{{ asset('img/hncs-logo.png') }}" alt="logo"/>
							</a>
						</div>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li class="{{ Request::path() == '/' ? 'active' : ''}}">
								<a href="/">Home</a>
							</li>
							<li class="{{ Request::path() == 'news' ? 'active' : ''}}">
								<a href="/news">News & Events</a>
							</li>

							<li class="{{ Request::path() == 'admission' ? 'active' : ''}}">
								<a href="/admission">Admission</a>
							</li>
							<li class="{{ Request::path() == 'about' ? 'active' : ''}}">
								<a href="/about">About Us</a>
							</li>
							<li class="{{ Request::path() == 'programs' ? 'active' : ''}}">
								<a href="/programs">Programs</a>
							</li>
							<li class="{{ Request::path() == 'enrollmentForm' ? 'active' : ''}}">
								<a href="/enrollmentForm">Enroll Now</a>
							</li>
							<li class="{{ Request::path() == 'contact' ? 'active' : ''}}">
								<a href="/contact">Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->
	</div>
	@yield('content')
	@include('footer')
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
	<script src="{{ asset('js/jquery.fancybox-media.js') }}"></script>
	<!--<script src="{{ asset('js/Gallery/jquery.quicksand.js') }}"></script>-->
	<!--<script src="{{ asset('js/Gallery/setting.js') }}"></script>-->
	<script src="{{ asset('js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('js/animate.js') }}"></script>
	<script src="{{ asset('js/custom.js?v=').time() }}"></script>
	<!--<script src="{{ asset('js/owl-carousel/owl.carousel.js') }}"></script>-->
</body>
</html>