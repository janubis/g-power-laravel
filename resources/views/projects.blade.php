@extends('layout.app')

@section('externalcss')
    @parent
@endsection

@section('content')

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
		============================================= -->
		<section id="content">
			<div class="content-wrap pb-0 pt-0">

				<div  class="portfolio portfolio-parallax row grid-container desc-lg">

					@foreach ($projects as $singleproject)
					<?php if ($_COOKIE['language'] == 'mon'){?>
					<article class="portfolio-item col-12 pf-media pf-icons">
						<div class="grid-inner">
							
							<div class="portfolio-image" style="background-image: url('/storage/{!! str_replace('\\', '/', $singleproject->cover) !!}');" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;"></div>
							<!-- Overlay: Start -->
							<div class="bg-overlay">
								<div class="bg-overlay-content dark flex-column" data-hover-animate="fadeIn">
									<!-- Decription: Start -->
									<div class="portfolio-desc pt-0 center" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">

										<h3><a href="/projects/{{$singleproject->id}}">{{$singleproject->title_mon}}</a></h3>
										<p>{{$singleproject->ordering_company_mon}}</p>
										<div class="row">
											<div class="col-4">
												<h2>{{$singleproject->capacity}}</h2>
												<p>Суурилуулсан хүчин чадал</p>
											</div>
											<div class="col-4">
												<h2>{{$singleproject->panel_count}}</h2>
												<p>Панелууд</p>
											</div>
											<div class="col-4">
												<h2>{{$singleproject->yield_forecast}}</h2>
												<p>Үйлдвэрлэсэн kWh</p>
											</div>

										</div>
									</div>
									<!-- Description: Start -->
									<div class="d-flex">
										<a href="/projects/{{$singleproject->id}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInUpSmall" data-hover-animate-out="fadeOutDownSmall" data-hover-speed="350"><i class="icon-line-arrow-right"></i></a>
									</div>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
							<!-- Overlay: End -->
						</div>
					</article>
					<?php } else { ?>
						<article class="portfolio-item col-12 pf-media pf-icons">
							<div class="grid-inner">
								
								<div class="portfolio-image" style="background-image: url('/storage/{!! str_replace('\\', '/', $singleproject->cover) !!}');" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;"></div>
								<!-- Overlay: Start -->
								<div class="bg-overlay">
									<div class="bg-overlay-content dark flex-column" data-hover-animate="fadeIn">
										<!-- Decription: Start -->
										<div class="portfolio-desc pt-0 center" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">

											<h3><a href="/projects/{{$singleproject->id}}">{{$singleproject->title}}</a></h3>
											<p>{{$singleproject->ordering_company}}</p>
											<?php if ($_COOKIE['language'] == 'mon'){?>
												<div class="row">
													<div class="col-4">
														<h2>{{$singleproject->capacity}}</h2>
														<p>Installed Capacity</p>
													</div>
													<div class="col-4">
														<h2>{{$singleproject->panel_count}}</h2>
														<p>Panel Count</p>
													</div>
													<div class="col-4">
														<h2>{{$singleproject->yield_forecast}}</h2>
														<p>Yield Forecast.kWh</p>
													</div>

												</div>
											<?php } else { ?>
												<div class="row">
													<div class="col-4">
														<h2>{{$singleproject->capacity}}</h2>
														<p>Installed Capacity</p>
													</div>
													<div class="col-4">
														<h2>{{$singleproject->panel_count}}</h2>
														<p>Panel Count</p>
													</div>
													<div class="col-4">
														<h2>{{$singleproject->yield_forecast}}</h2>
														<p>Yield Forecast.kWh</p>
													</div>

												</div>
											<?php } ?>
											
										</div>
										<!-- Description: Start -->
										<div class="d-flex">
											<a href="/projects/{{$singleproject->id}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInUpSmall" data-hover-animate-out="fadeOutDownSmall" data-hover-speed="350"><i class="icon-line-arrow-right"></i></a>
										</div>
									</div>
									<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
								</div>
								<!-- Overlay: End -->
							</div>
						</article>
					<?php } ?>
					@endforeach

				</div>

				<div class="section mb-0 pb-0 bg-theme-light clearfix" style="padding-top: 120px;">
					<div class="container">
						<div class="row">
							<div class="col-md-8 offset-1">
								<?php if ($_COOKIE['language'] == 'mon'){?>
									<div class="before-heading">Та хэзээд бидэнтэй холбогдох боломжтой</div>
									<h2 class="nott font-weight-semibold display-4">Бид таны асуудлыг шийдэхэд бэлэн.</h2>
									<h4 class="font-weight-light mb-4">Утас <a href="tel:+(976)91114025">+(976) 9111-4025</a></h4>
									<a href="/contact" class="button button-rounded button-xlarge m-0 nott font-weight-semibold ls0 px-5">Холбоо барих</a>
								<?php } else { ?>
									<div class="before-heading">Don't Hesitate to Reach out to Us</div>
									<h2 class="nott font-weight-semibold display-4">We are ready to solve your problem.</h2>
									<h4 class="font-weight-light mb-4">Call us at <a href="tel:+(976)91114025">+(976) 9111-4025</a></h4>
									<a href="/contact" class="button button-rounded button-xlarge m-0 nott font-weight-semibold ls0 px-5">Contact Us</a>
								<?php } ?>
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
@endsection