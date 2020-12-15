@extends('layout.app')

@section('externalcss')
    @parent
@endsection

@section('content')
<?php
	if(!isset($_COOKIE['language'])) {
	    setcookie('language', 'eng', 30);
	    $_COOKIE['language'] = 'eng';
	}
	?>
		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<?php if ($_COOKIE['language'] == 'mon'){?>
					<h1>Төслүүд</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Нүүр хуудас</a></li>
						<li class="breadcrumb-item active" aria-current="page">Төслүүд</li>
					</ol>
				<?php } else { ?>
					<h1>Projects</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Projects</li>
					</ol>
				<?php } ?>
			</div>

		</section><!-- #page-title end -->
		<!-- Content


		<! -- Content ============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="grid-filter-wrap">

						<!-- Portfolio Filter
						============================================= -->
						<ul class="grid-filter" data-container="#portfolio">
							<?php if ($_COOKIE['language'] == 'mon'){?>
								<li class="activeFilter"><a href="#" data-filter="*">Бүх төслийг харуулах</a></li>
								<li><a href="#" data-filter=".operation">Угсралт болон засвар үйлчилгээ</a></li>
								<li><a href="#" data-filter=".consulting">Зөвлөх үйлчилгээ</a></li>
								<li><a href="#" data-filter=".research">Судалгаа хөгжүүлэлт</a></li>
							<?php } else { ?>
								<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
								<li><a href="#" data-filter=".operation">EPC and operation maintenance</a></li>
								<li><a href="#" data-filter=".consulting">Consulting Service</a></li>
								<li><a href="#" data-filter=".research">Research and Development</a></li>
							<?php } ?>
							
						</ul><!-- .grid-filter end -->

						<div class="grid-shuffle rounded" data-container="#portfolio">
							<i class="icon-random"></i>
						</div>

					</div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio row grid-container gutter-30" data-layout="fitRows">

						
						@foreach ($projects as $singleproject)
							<?php if ($_COOKIE['language'] == 'mon'){?>
								<article class="portfolio-item col-sm-6 col-12 pf-media {{$singleproject->category}}">
									<div class="grid-inner">
										<div class="portfolio-image">
											<a href="/projects/{{$singleproject->id}}">
												<img src="/storage/{!! str_replace('\\', '/', $singleproject->cover) !!}" alt="{{$singleproject->title}}">
											</a>
											<div class="bg-overlay">
												<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
													<a href="/projects/{{$singleproject->id}}" class="overlay-trigger-icon bg-light text-dark project-custom-sun" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-sun"></i></a>
												</div>
												<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
											</div>
										</div>
										<div class="portfolio-desc">
											<p><span>Project Name: </span>{{$singleproject->title_mon}}</p>
											<p><span>System Capacity: </span>{{$singleproject->capacity}}</p>
											<p><span>Ordered Company: </span>{{$singleproject->ordering_company_mon}}</p>
											<p><span>Yield Forecast: </span>{{$singleproject->yield_forecast}}</p>
											<p><span>Delivered Date: </span>{{$singleproject->delivered_date}}</p>
										</div>
									</div>
								</article>

							<?php } else { ?>
								<article class="portfolio-item col-sm-6 col-12 pf-media {{$singleproject->category}}">
									<div class="grid-inner">
										<div class="portfolio-image">
											<a href="/projects/{{$singleproject->id}}">
												<img src="/storage/{!! str_replace('\\', '/', $singleproject->cover) !!}" alt="{{$singleproject->title}}">
											</a>
											<div class="bg-overlay">
												<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
													<a href="/projects/{{$singleproject->id}}" class="overlay-trigger-icon bg-light text-dark project-custom-sun" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-sun"></i></a>
												</div>
												<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
											</div>
										</div>
										<div class="portfolio-desc">
											<p><span>Project Name: </span>{{$singleproject->title}}</p>
											<p><span>System Capacity: </span>{{$singleproject->capacity}}</p>
											<p><span>Ordered Company: </span>{{$singleproject->ordering_company}}</p>
											<p><span>Yield Forecast: </span>{{$singleproject->yield_forecast}}</p>
											<p><span>Delivered Date: </span>{{$singleproject->delivered_date}}</p>
										</div>
									</div>
								</article>

							<?php } ?>
						@endforeach
						
					</div><!-- #portfolio end -->

					
				</div>

			</div>
			<div class="section mb-0 pb-0 bg-theme-light clearfix" style="padding-top: 120px;">
						<div class="container">
							<div class="row">
								<div class="col-md-8 offset-1">
									<?php if ($_COOKIE['language'] == 'mon'){?>
										<div class="before-heading">Та хэзээд бидэнтэй холбогдох боломжтой</div>
										<h2 class="nott font-weight-semibold display-4">Бид таны асуудлыг шийдэхэд бэлэн.</h2>
										<h4 class="font-weight-light mb-4">Утас <a href="tel:+(976)91114025">+(976) – 7741-4025</a></h4>
										<a href="/contact" class="button button-rounded button-xlarge m-0 nott font-weight-semibold ls0 px-5">Холбоо барих</a>
									<?php } else { ?>
										<div class="before-heading">Don't Hesitate to Reach out to Us</div>
										<h2 class="nott font-weight-semibold display-4">We are ready to solve your problem.</h2>
										<h4 class="font-weight-light mb-4">Call us at <a href="tel:+(976)91114025">+(976) – 7741-4025</a></h4>
										<a href="/contact" class="button button-rounded button-xlarge m-0 nott font-weight-semibold ls0 px-5">Contact Us</a>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="footer-background-changed"></div>
					</div>
		</section><!-- #content end -->
@endsection
@section('pagejavascript')
    @parent
@endsection