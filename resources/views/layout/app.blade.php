<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Javkhlan Rentsendorj" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/gpower/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="/gpower/style.css" type="text/css" />
	<link rel="stylesheet" href="/gpower/css/dark.css" type="text/css" />

	<link rel="stylesheet" href="/gpower/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="/gpower/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="/gpower/css/magnific-popup.css" type="text/css" />

	
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Workspace Demo Specific Stylesheet -->
	<link rel="stylesheet" href="/gpower/css/colors.php?color=198E0E" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="/gpower/demos/gpower/css/fonts.css" type="text/css" /> <!-- Theme Font -->
	<link rel="stylesheet" href="/gpower/demos/gpower/gpower.css" type="text/css" /> <!-- Theme CSS -->

	<link rel="stylesheet" href="/gpower/css/custom.css" type="text/css" />
	<!-- / -->
	<!-- FAVICON -->
	<link rel="apple-touch-icon" sizes="57x57" href="/gpower/assets/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/gpower/assets/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/gpower/assets/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/gpower/assets/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/gpower/assets/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/gpower/assets/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/gpower/assets/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/gpower/assets/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/gpower/assets/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/gpower/assets/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/gpower/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/gpower/assets/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/gpower/assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="/gpower/assets/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/gpower/assets/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta name="description" content="Contribute to Mongolian energy development through localization of high tech, installation and construction with global standard, excellent consulting service.">

	<meta property="og:url"           content="http://g-power.mn" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="G-Power | Energy is future, make it bright" />
	<meta property="og:description"   content="Contribute to Mongolian energy development through localization of high tech, installation and construction with global standard, excellent consulting service." />
	<meta property="og:image"         content="http://g-power.mn/gpower/assets/cover-2.jpg" />

	@section('externalcss')
    @show

	<!-- Document Title
	============================================= -->
	<title>G-Power | Energy is Future, Make It Bright</title>

</head>

<body class="stretched">
	<?php
	if(!isset($_COOKIE['language'])) {
	    setcookie('language', 'eng', 30);
	}
	?>
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="border-bottom-0" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="/" class="standard-logo" data-sticky-logo="\storage\{{$general->header_logo}}"><img src="\storage\{{$general->header_logo}}" alt="G-Power Logo"></a>
							<a href="/" class="retina-logo" data-sticky-logo="\storage\{{$general->header_logo}}"><img src="\storage\{{$general->header_logo}}" alt="G-Power Logo"></a>
						</div><!-- #logo end -->
						
						<div class="header-misc top-links">
							<ul class="top-links-container language-changer">
								<li class="top-links-item"><a href="#"><?php if ($_COOKIE['language'] == 'mon'){ ?>
							<img src="/gpower/demos/gpower/flags/mon.png" alt="Lang">Mn</a>
						<?php } else { ?>
							<img src="/gpower/demos/gpower/flags/eng.png" alt="Lang">Eng</a>
						<?php } ?>
									<ul class="top-links-sub-menu">
										<li class="top-links-item"><a href="#" onclick="setCookie('language', 'eng', 30)"><img src="/gpower/demos/gpower/flags/eng.png" alt="Lang">English</a></li>
										<li class="top-links-item"><a href="#" onclick="setCookie('language', 'mon', 30)"><img src="/gpower/demos/gpower/flags/mon.png" alt="Lang">Монгол</a></li>
									</ul>
								</li>
							</ul>
							<a class="top-phone" href="http://api.g-power.mn"><i class="icon-solar-panel"></i> <span class="d-none d-md-inline-block"><?php if ($_COOKIE['language'] == 'mon'){ ?>{{$generalmn->menu_dashboard}}<?php } else { ?>{{$general->menu_dashboard}}<?php } ?></span></a>
						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container">
								<li class="menu-item"><a class="menu-link" href="/about/info"><div><?php if ($_COOKIE['language'] == 'mon'){ ?>{{$generalmn->menu_about}}<?php } else { ?>{{$general->menu_about}}<?php } ?></div></a></li>
								<li class="menu-item"><a class="menu-link" href="/projects"><div><?php if ($_COOKIE['language'] == 'mon'){ ?>{{$generalmn->menu_projects}}<?php } else { ?>{{$general->menu_projects}}<?php } ?></div></a></li>
								<li class="menu-item"><a class="menu-link" href="/news"><div><?php if ($_COOKIE['language'] == 'mon'){ ?>{{$generalmn->menu_news}}<?php } else { ?>{{$general->menu_news}}<?php } ?></div></a></li>
								<li class="menu-item"><a class="menu-link" href="/contact"><div><?php if ($_COOKIE['language'] == 'mon'){ ?>{{$generalmn->menu_contact}}<?php } else { ?>{{$general->menu_contact}}<?php } ?></div></a></li> 
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		@yield('content')

		<!-- Footer
		============================================= -->
		<footer id="footer" class="border-0" style="background-color: #0f6108; padding-top: 80px">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap dark pb-5 clearfix">

					<div class="row">

						<div class="row">
							<div class="col-sm-3">
								<a href="#"><img src="\storage\{{$general->footer_logo}}" alt="Logo Footer" class="mb-4" height="50"></a><br>
								
								<a href="{{$general->facebook}}" class="social-icon si-small si-light si-facebook" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<a href="{{$general->twitter}}" class="social-icon si-small si-light si-twitter" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
								<a href="{{$general->youtube}}" class="social-icon si-small si-light si-youtube" title="Youtube">
									<i class="icon-youtube"></i>
									<i class="icon-youtube"></i>
								</a>
								<!-- <a href="#" class="social-icon si-small si-light si-instagram" title="instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a> -->
								
							</div>
							<div class="col-sm-9">
								<?php if ($_COOKIE['language'] == 'mon'){?>{!! $generalmn->footer_description !!}<?php } else { ?>{!! $general->footer_description !!}<?php } ?>
							</div>
						</div>

					</div>

				</div>

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="bg-transparent dark pt-0">

				<div class="line mt-0"></div>

				<div class="container clearfix">

					<div class="row">
						<div class="col-8">

							<p class="mb-2 text-white-50"><?php if ($_COOKIE['language'] == 'mon'){?>{!! $generalmn->copyright !!}<?php } else { ?>{!! $general->copyright !!}<?php } ?></p>
							<!-- <div class="copyright-links text-white-50">
								<a href="#" class="text-white-50">Terms of Use</a> / <a href="#" class="text-white-50">Privacy Policy</a>
							</div> -->
						</div>
						<div class="col-4">
							<p class="mb-2 text-white-50  page-title-right">Created by <a href="https://ocurus.com" class="text-white">JAB Solutions</a></p>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="/gpower/js/jquery.js"></script>
	<script src="/gpower/js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="/gpower/js/functions.js"></script>
	<script>
		function setCookie(cname, cvalue, exdays) {
	        var d = new Date();
	        d.setTime(d.getTime() + (exdays*24*60*60*1000));
	        var expires = "expires="+d.toUTCString();
	        document.cookie = cname + "=" + cvalue + "; " + expires;
	        location.reload();
	    }

		function showCookie(){
		    //document.write(document.cookie);
		    alert(document.cookie);
		}
	</script>
	@section('pagejavascript')
    @show
</body>
</html>