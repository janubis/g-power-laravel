@extends('layout.app')

@section('externalcss')
    @parent
@endsection

@section('content')
	<!-- Page Title
	============================================= -->
	<section id="page-title">

		<div class="container clearfix">
			<h1>About Company</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">About Company</li>
			</ol>
		</div>

	</section><!-- #page-title end -->
	<!-- Content
	============================================= -->
	<section id="content">
		<div class="container clearfix">
			<div class="row gutter-40 col-mb-80 mt-5">
				<div class="postcontent col-lg-10 order-lg-last">
					<div class="content-wrap pb-0">

						<div class="container">
							<div class="row justify-content-between align-items-end">
								<div class="col-md-8">
									<h2 class="display-4 text-dark font-weight-semibold ls--2">
		 							<span>Renewal energy</span> is the future.</h2>
									<p class="text-dark mb-0">We offer engineering, procurement, construction, commissioning, operation and maintenance services for on- and off-grid PV systems and plants of any scale.</p>
								</div>
								<div class="col-md-3 text-md-right">
									<a href="/gpower/g-power-brochure.pdf" target="_blank" class="button button-rounded button-large m-0 center font-weight-medium nott ls0 font-weight-normal">View Prochure</a>
								</div>
							</div>

							<a href="https://www.youtube.com/watch?v=lgwt1jIaE9U" data-lightbox="iframe" class="play-video position-relative d-block"><img src="/gpower/assets/project-14.jpg" alt="Video Image" class="rounded-xl my-5">
								<i class="icon-play"></i>
							</a>
						</div>

						<div class="container">
							<div class="row topmargin bottommargin gutter-lg-50 align-items-center">

								<div class="col-md-6 pr-5">
									<div class="heading-block mb-4 border-bottom-0">
										<div class="before-heading">About Us</div>
										<h2 class="nott font-weight-semibold">Work Together, Build Together.</h2>
									</div>
									<div class="row">
										<div class="col-6 col-sm-6 mb-4">
											<div class="counter color font-weight-semibold"><span data-from="1" data-to="6" data-refresh-interval="2" data-speed="600"></span>+</div>
											<h5 class="mt-0 font-weight-medium">Projects</h5>
										</div>

										<div class="col-6 col-sm-6 mb-4">
											<div class="counter color font-weight-semibold"><span data-from="1" data-to="370" data-refresh-interval="11" data-speed="900"></span>MW</div>
											<h5 class="mt-0 font-weight-medium">Installed Capacity</h5>
										</div>

										<div class="col-6 col-sm-6 mb-4">
											<div class="counter color font-weight-semibold"><span data-from="1" data-to="210" data-refresh-interval="3" data-speed="1000"></span>+</div>
											<h5 class="mt-0 font-weight-medium">Panels</h5>
										</div>

										<div class="col-6 col-sm-6 mb-4">
											<div class="counter color font-weight-semibold"><span data-from="100" data-to="4500" data-refresh-interval="100" data-speed="1500"></span>kWh</div>
											<h5 class="mt-0 font-weight-medium">Generated kWh</h5>
										</div>
									</div>
									<p class="text-muted">We offer engineering, procurement, construction, commissioning, operation and maintenance services for on- and off-grid PV systems and plants of any scale.</p>
								</div>
								<div class="col-lg-6 p-lg-5">
									<img src="/gpower/assets/about-2.jpg" alt="Image">
								</div>
							</div>
						</div>

						<div class="section p-0 testimonials clearfix">
							<div class="container" style="padding: 120px 0">
								<div class="heading-block border-bottom-0 center">
									<div class="before-heading">What our Members Say</div>
									<h2 class="nott font-weight-semibold">Testimonials</h2>
									<p class="mb-0 mt-1"><span class="font-weight-semibold">Excellent, 9.6</span> out of 10 based on <span class="font-weight-semibold">2,118</span> reviews. </p>
								</div>

								<div id="testimonials-carousel" class="owl-carousel carousel-widget testimonial testimonial-full bg-transparent border-0 shadow-none p-0 mx-auto text-left clearfix" data-animate-in="fadeIn" data-animate-out="fadeOut" data-margin="24" data-nav="false" data-pagi="true" data-items="1" style="max-width: 740px">
									<div class="slide">
										<div class="testi-content">
											<div class="testi-stars mb-4">
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
											</div>
											<p>Collaboratively enhance intermandated innovation via cutting-edge core competencies. Professionally extend covalent e-markets and mission-critical communities. Dramatically communicate revolutionary web services for interactive synergy. Synergistically.</p>
											<div class="testi-meta mt-4">
												Steve Jobs
												<span class="ls0">Apple Inc.</span>
											</div>
										</div>
									</div>
									<div class="slide">
										<div class="testi-content">
											<div class="testi-stars mb-4">
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star-half2"></i>
											</div>
											<p>Intrinsicly synergize excellent content whereas user friendly action items. Rapidiously transition multimedia based information after top-line alignments. Authoritatively integrate accurate outsourcing vis-a-vis principle-centered systems energistically</p>
											<div class="testi-meta mt-4">
												Collis Ta'eed
												<span class="ls0">Envato Inc.</span>
											</div>
										</div>
									</div>
									<div class="slide">
										<div class="testi-content">
											<div class="testi-stars mb-4">
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
											</div>
											<p>Compellingly engage multimedia based niche markets via value-added manufactured products. Competently formulate goal-oriented content for installed base users. Uniquely leverage other's granular ROI without 24/365 collaboration and idea-sharing.</p>
											<div class="testi-meta mt-4">
												John Doe
												<span class="ls0">XYZ Inc.</span>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class="container">

							<div class="row flex-row-reverse mb-5 gutter-lg-50 align-items-center">
								<div class="col-lg-6 p-lg-5">
									<div class="heading-block border-bottom-0 mb-0">
										<div class="before-heading">Know More</div>
										<h2 class="nott font-weight-semibold mb-4">Brochure</h2>
										<p>Company aims to take knowledge base project supported by companies specially from overseas.</p>
										<a href="/gpower/g-power-poster.pdf" class="text-dark"><i class="icon-file-pdf1"></i> <u>Download Our Poster</u> <i class="icon-line-arrow-right"></i></a>
									</div>
								</div>
								<div class="col-lg-6 p-lg-5">
									<img src="/gpower/assets/project-10.jpg" alt="Image">
								</div>
							</div>

						</div>

						
					</div>
				</div>
				<div class="sidebar col-lg-2">
					<div class="sidebar-widgets-wrap">

						<div class="widget widget_links clearfix">

							<ul>
								<li class="active"><a href="/about/info"><div>About Us</div></a></li>
								<li><a href="/about/teams"><div>Our Team</div></a></li>
								
							</ul>

						</div>


					</div>
				</div><!-- .sidebar end -->
			</div>
		</div>
		<div class="content-wrap pb-0">
			<div class="section mb-0 pb-0 bg-theme-light clearfix" style="padding-top: 120px;">
				<div class="container">
					<div class="row">
						<div class="col-md-8 offset-1">
							<div class="before-heading">Don't Hesitate to Reach out to Us</div>
								<h2 class="nott font-weight-semibold display-4">We are ready to solve your problem.</h2>
							<h4 class="font-weight-light mb-4">Call us at <a href="tel:+(976)91114025">+(976) 9111-4025</a></h4>
							<a href="/contact" class="button button-rounded button-xlarge m-0 nott font-weight-semibold ls0 px-5">Contact Us</a>
						</div>
					</div>
				</div>
				<div class="footer-background-changed"></div>
			</div>
		</div>
	</section><!-- #content end -->

@endsection
@section('pagejavascript')
    @parent
    
	<script src="https://maps.google.com/maps/api/js?key={{env('GOOGLE_KEY')}}"></script>
@endsection