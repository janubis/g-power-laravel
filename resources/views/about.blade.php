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
		<?php if ($_COOKIE['language'] == 'mon'){?>
			<div class="container clearfix">
				<h1>Компаний тухай</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Нүүр хуудас</a></li>
					<li class="breadcrumb-item active" aria-current="page">Компаний тухай</li>
				</ol>
			</div>
		<?php } else { ?>
			<div class="container clearfix">
				<h1>About Company</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">About Company</li>
				</ol>
			</div>
		<?php } ?>
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
								<?php if ($_COOKIE['language'] == 'mon'){?>
									<div class="col-md-8">
										<h2 class="display-4 text-dark font-weight-semibold ls--2">
			 							<span>Сэргээгдэх эрчим</span> бол ирээдүй.</h2>
										<p class="text-dark mb-0">Бид сүлжээний болон гадна сүлжээний PV систем, үйлдвэрүүдийн инженерийн, хангамж, барилга угсралт, ашиглалт, засвар  үйлчилгээг санал болгодог.</p>
									</div>
									<div class="col-md-3 text-md-right">
										<a href="/gpower/g-power-brochure.pdf" target="_blank" class="button button-rounded button-large m-0 center font-weight-medium nott ls0 font-weight-normal">Танилцуулга үзэх</a>
									</div>
								<?php } else { ?>
									<div class="col-md-8">
										<h2 class="display-4 text-dark font-weight-semibold ls--2">
			 							<span>Renewal energy</span> is the future.</h2>
										<p class="text-dark mb-0">We offer engineering, procurement, construction, commissioning, operation and maintenance services for on- and off-grid PV systems and plants of any scale.</p>
									</div>
									<div class="col-md-3 text-md-right">
										<a href="/gpower/g-power-brochure.pdf" target="_blank" class="button button-rounded button-large m-0 center font-weight-medium nott ls0 font-weight-normal">View Prochure</a>
									</div>
								<?php } ?>

							</div>
							<?php if ($_COOKIE['language'] == 'mon'){?>
								<div class="row justify-content-between align-items-end" style="margin-top: 50px">
									<div class="col-12">
										<video width="100%" height="500" controls poster="{{$generalmn->about_picture}}">
											<source src="{{$generalmn->about_video}}" type="video/mp4">
											Вэб хөтөч, video tag-г дэмжихгүй байна. Та вэб хөтөчөө шинэчилнэ үү.
										</video>
									</div>
								</div>
							<?php } else { ?>
								<div class="row justify-content-between align-items-end" style="margin-top: 50px">
									<div class="col-12">
										<video width="100%" height="500" controls poster="{{$general->about_picture}}">
											<source src="{{$general->about_video}}" type="video/mp4">
											Your browser does not support the video tag.
										</video>
									</div>
								</div>
							<?php } ?>
						</div>

						<div class="container">
							<div class="row topmargin bottommargin gutter-lg-50 align-items-center">

								<div class="col-md-12 pr-5">
									<?php if ($_COOKIE['language'] == 'mon'){?>
							
										<div class="row">
											<div class="col-4 col-sm-4 mb-4 text-align-center">
												<div class="counter color font-weight-semibold"><span data-from="0" data-to="{{$sumprojepc}}" data-refresh-interval="2" data-speed="600"></span></div>
												<h5 class="mt-0 font-weight-medium">Угсралт болон Засвар Үйлчилгээний Төслүүд</h5>
											</div>

											<div class="col-4 col-sm-4 mb-4 text-align-center">
												<div class="counter color font-weight-semibold"><span data-from="0" data-to="{{$sumprojconsult}}" data-refresh-interval="2" data-speed="600"></span></div>
												<h5 class="mt-0 font-weight-medium">Зөвлөх Үйлчилгээ</h5>
											</div>

											<div class="col-4 col-sm-4 mb-4 text-align-center">
												<div class="counter color font-weight-semibold"><span data-from="0" data-to="{{$sumprojresearch}}" data-refresh-interval="2" data-speed="600"></span></div>
												<h5 class="mt-0 font-weight-medium">Судалгаа хөгжүүлэлт</h5>
											</div>

											<div class="col-3 col-sm-3 mb-4 text-align-center">
												<div class="counter color font-weight-semibold"><span data-from="1" data-to="{{$sumcapacity/2}}" data-refresh-interval="3" data-speed="1000" id="totalCurrent"></span> кВт</div>
												<h5 class="mt-0 font-weight-medium">Үйлдвэрлэж буй чадал</h5>
											</div>

											<div class="col-3 col-sm-3 mb-4 text-align-center">
												<div class="counter color font-weight-semibold"><span data-from="1" data-to="{{$sumcapacity}}" data-refresh-interval="11" data-speed="900"></span>кВт</div>
												<h5 class="mt-0 font-weight-medium">Суурилуулсан хүчин чадал</h5>
											</div>

											<div class="col-3 col-sm-3 mb-4 text-align-center">
												<div class="counter color font-weight-semibold"><span data-from="1" data-to="{{$sumyield/2}}" data-refresh-interval="11" data-speed="900" id="totalOverall"></span>МВт.ц</div>
												<h5 class="mt-0 font-weight-medium">Нийт үйлдвэрлэсэн эрчим хүч</h5>
											</div>

											<div class="col-3 col-sm-3 mb-4 text-align-center">
												<div class="counter color font-weight-semibold"><span data-from="100" data-to="{{$sumyield}}" data-refresh-interval="100" data-speed="1500"></span>МВт.ц</div>
												<h5 class="mt-0 font-weight-medium">Жилд үйлдвэрлэх боломжит эрчим хүч</h5>
											</div>
										</div>
										
									<?php } else { ?>
										
										<div class="row">
											<div class="col-4 col-sm-4 mb-4">
												<div class="counter color font-weight-semibold"><span data-from="0" data-to="{{$sumprojepc}}" data-refresh-interval="2" data-speed="600"></span></div>
												<h5 class="mt-0 font-weight-medium">EPC and Operation Maintenance Projects</h5>
											</div>

											<div class="col-4 col-sm-4 mb-4">
												<div class="counter color font-weight-semibold"><span data-from="0" data-to="{{$sumprojconsult}}" data-refresh-interval="2" data-speed="600"></span></div>
												<h5 class="mt-0 font-weight-medium">Consulting Service</h5>
											</div>

											<div class="col-4 col-sm-4 mb-4">
												<div class="counter color font-weight-semibold"><span data-from="0" data-to="{{$sumprojresearch}}" data-refresh-interval="2" data-speed="600"></span></div>
												<h5 class="mt-0 font-weight-medium">Research and Development</h5>
											</div>

											<div class="col-3 col-sm-3 mb-4">
												<div class="counter color font-weight-semibold"><span data-from="1" data-to="{{$sumcapacity/2}}" data-refresh-interval="3" data-speed="1000" id="totalCurrent"></span> kW</div>
												<h5 class="mt-0 font-weight-medium">Current Power</h5>
											</div>

											<div class="col-3 col-sm-3 mb-4">
												<div class="counter color font-weight-semibold"><span data-from="1" data-to="{{$sumcapacity}}" data-refresh-interval="11" data-speed="900"></span>kW</div>
												<h5 class="mt-0 font-weight-medium">Installed Capacity</h5>
											</div>

											<div class="col-3 col-sm-3 mb-4">
												<div class="counter color font-weight-semibold"><span data-from="100" data-to="{{$sumyield/2}}" data-refresh-interval="100" data-speed="1500" id="totalOverall"></span>MWh</div>
												<h5 class="mt-0 font-weight-medium">Total Energy Generated by Systems</h5>
											</div>

											<div class="col-3 col-sm-3 mb-4">
												<div class="counter color font-weight-semibold"><span data-from="100" data-to="{{$sumyield}}" data-refresh-interval="100" data-speed="1500"></span>MWh</div>
												<h5 class="mt-0 font-weight-medium">Annual Yield Energy</h5>
											</div>
										</div>
										
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="section p-0 testimonials clearfix">
							<div class="container" style="padding: 120px 0">
								<div class="heading-block border-bottom-0 center">
									<?php if ($_COOKIE['language'] == 'mon'){?>
										<div class="before-heading">Манай чанарыг хэрэглэгчдээс маань асуу</div>
										<h2 class="nott font-weight-semibold">Үйлчлүүлэгчдийн сэтгэгдэл</h2>
									<?php } else { ?>
										<div class="before-heading">What our Cleints Say</div>
										<h2 class="nott font-weight-semibold">Testimonials</h2>
									<?php } ?>
								</div>

								<div id="testimonials-carousel" class="owl-carousel carousel-widget testimonial testimonial-full bg-transparent border-0 shadow-none p-0 mx-auto text-left clearfix" data-animate-in="fadeIn" data-animate-out="fadeOut" data-margin="24" data-nav="false" data-pagi="true" data-items="1" style="max-width: 740px">
									@foreach ($testimonials as $testimonial)
									
									<?php if ($_COOKIE['language'] == 'mon'){?>
										<div class="slide">
											<div class="testi-content">
												
												<p>{!! $testimonial->content_mon !!}</p>
												<div class="testi-meta mt-4">
													{{$testimonial->name_mon}}
													<span class="ls0">{{$testimonial->company_mon}}</span>
												</div>
											</div>
										</div>
									<?php } else { ?>
										<div class="slide">
											<div class="testi-content">
												
												<p>{!! $testimonial->content_eng !!}</p>
												<div class="testi-meta mt-4">
													{{$testimonial->name_eng}}
													<span class="ls0">{{$testimonial->company_eng}}</span>
												</div>
											</div>
										</div>
									<?php } ?>
									
									@endforeach
									
								</div>
							</div>

						</div>

						<div class="container">

							<div class="row flex-row-reverse mb-5 gutter-lg-50 align-items-center">
								<div class="col-lg-6 p-lg-5">
									<div class="heading-block border-bottom-0 mb-0">
										<?php if ($_COOKIE['language'] == 'mon'){?>
											<div class="before-heading">Илүү мэдээллийг</div>
											<h2 class="nott font-weight-semibold mb-4">Брошур</h2>
											<p>Компани нь гадаадад үйл ажиллагаа явуулдаг компаниудын дэмжлэгтэйгээр мэдлэгийн бааз төслийг хэрэгжүүлэхээр зорьж байна.</p>
											<a href="{{$generalmn->about_brochure}}" class="text-dark"><i class="icon-file-pdf1"></i> <u>Брошур татаж авах</u> <i class="icon-line-arrow-right"></i></a>
										<?php } else { ?>
											<div class="before-heading">Know More</div>
											<h2 class="nott font-weight-semibold mb-4">Brochure</h2>
											<p>Company aims to take knowledge base project supported by companies specially from overseas.</p>
											<a href="{{$general->about_brochure}}" class="text-dark"><i class="icon-file-pdf1"></i> <u>Download Our Poster</u> <i class="icon-line-arrow-right"></i></a>
										<?php } ?>
										
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
					<div class="sidebar-widgets-wrap" style="margin-top: 80px;">

						<div class="widget widget_links clearfix">

							<ul>
								<?php if ($_COOKIE['language'] == 'mon'){?>
									<li class="active"><a href="/about/info"><div>Компанийн тухай</div></a></li>
									<li><a href="/about/teams"><div>Манай баг</div></a></li>
								<?php } else { ?>
									<li class="active"><a href="/about/info"><div>About Us</div></a></li>
									<li><a href="/about/teams"><div>Our Team</div></a></li>
								<?php } ?>
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
		</div>
	</section><!-- #content end -->

@endsection
@section('pagejavascript')
    @parent
	<script src="https://maps.google.com/maps/api/js?key={{env('GOOGLE_KEY')}}"></script>
	<script src="/gpower/js/serverHook.js"></script>
@endsection