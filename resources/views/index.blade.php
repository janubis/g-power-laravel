@extends('layout.app')

@section('externalcss')
    @parent
@endsection

@section('content')
	<?php
	if(!isset($_COOKIE['language'])) {
	    setcookie('language', 'end', time() + (86400 * 30), "/"); // 86400 = 1 day
	}
	?>
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap pt-3 pb-0">

				<div class="section bg-transparent py-2">
					<div class="container">
						<div class="row">
							<?php if ($_COOKIE['language'] == 'mon'){?>
								<div class="col-md-7">
									<h2 class="display-4 font-weight-semibold ls--2">Бид <span class="text-rotater" data-separator="|" data-rotate="fadeIn" data-speed="2000">
										<span class="t-rotate">Ногоон|Сэргээгдэх|Нарны</span>
									</span> <br>эрчим хүчний шийдлийг цогцлооно.</h2>
								</div>
								<div class="col-md-5">
									<p class="lead text-muted">
										Өндөр технологи, суурилуулалт, барилгын ажлыг дэлхийн стандартад нийцсэн, маш сайн зөвлөх үйлчилгээнд нутагшуулах замаар Монголын эрчим хүчний хөгжилд хувь нэмэр оруулах.
									</p>
								</div>
							<?php } else { ?>
								<div class="col-md-7">
									<h2 class="display-4 font-weight-semibold ls--2">We are making  <br><span class="text-rotater" data-separator="|" data-rotate="fadeIn" data-speed="2000">
										<span class="t-rotate">Green|Renewal|Solar</span>
									</span>energy.</h2>
								</div>
								<div class="col-md-5">
									<p class="lead text-muted">
										Contribute to Mongolian energy development through localization of high tech, installation and construction with global standard, excellent consulting service.
									</p>
								</div>
							<?php } ?>
							
						</div>
					</div>
				</div>

				<div class="overflow-hidden parallax d-flex align-items-center" data-bottom-top="background-position:0px 200px;" data-top-bottom="background-position:0px -400px;" style="background-image: url('/gpower/assets/cover-2.jpg'); background-size: cover; height: 600px; width: 100%;">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<?php if ($_COOKIE['language'] == 'mon'){?>
									<h2 class="text-white">Компани нь гадаадад үйл ажиллагаа явуулдаг компаниудын дэмжлэгтэйгээр мэдлэгийн бааз төслийг хэрэгжүүлэхээр зорьж байна.</h2>
								<?php } else { ?>
									<h2 class="text-white">Company aims to take knowledge base project supported by companies specially from overseas.</h2>
								<?php } ?>
								
							</div>
						</div>
					</div>
				</div>

				<div class="bg-theme-light">
					<div class="shadow-sm hero-features bg-color dark shadow">
						<div class="row">
							<?php if ($_COOKIE['language'] == 'mon'){?>
								<div class="col-md-4 mt-3 mt-md-0">
									<div class="feature-box fbox-plain fbox-sm fbox-dark mb-0">
										<div class="fbox-icon">
											<i class="icon-line-circle-check"></i>
										</div>
										<div class="fbox-content">
											<h3 class="text-white">Статистик хяналт</h3>
											<p class="text-white mb-0">Зориулалтын мобайл болон вэб платформын тусламжтайгаар та цахилгаан хэрэглээгээ хянах боломжтой.</p>
										</div>
									</div>
								</div>

								<div class="col-md-4 mt-3 mt-md-0">
									<div class="feature-box fbox-plain fbox-sm fbox-dark mb-0">
										<div class="fbox-icon">
											<i class="icon-line-circle-check"></i>
										</div>
										<div class="fbox-content">
											<h3 class="text-white">24x7 Хянах боломж.</h3>
											<p class="text-white mb-0">Та өөрийн статистик мэдээллийг 24х7 хэзээ ч, хаана ч хянах боломжтой бөгөөд бид танд үргэлж бэлэн байдаг.</p>
										</div>
									</div>
								</div>

								<div class="col-md-4 mt-3 mt-md-0">
									<div class="feature-box fbox-plain fbox-sm fbox-dark mb-0">
										<div class="fbox-icon">
											<i class="icon-line-circle-check"></i>
										</div>
										<div class="fbox-content">
											<h3 class="text-white">Аюулгүй &amp; Хэрэглэхэд хялбар.</h3>
											<p class="text-white mb-0">Манай хяналтын програмыг SSL сертификатаар найдвартай хамгаалдаг.</p>
										</div>
									</div>
								</div>
							<?php } else { ?>
								<div class="col-md-4 mt-3 mt-md-0">
									<div class="feature-box fbox-plain fbox-sm fbox-dark mb-0">
										<div class="fbox-icon">
											<i class="icon-line-circle-check"></i>
										</div>
										<div class="fbox-content">
											<h3 class="text-white">Monitor Your Statistics</h3>
											<p class="text-white mb-0">With help of our dedicated mobile and web platform, you can monitor your electric usage.</p>
										</div>
									</div>
								</div>

								<div class="col-md-4 mt-3 mt-md-0">
									<div class="feature-box fbox-plain fbox-sm fbox-dark mb-0">
										<div class="fbox-icon">
											<i class="icon-line-circle-check"></i>
										</div>
										<div class="fbox-content">
											<h3 class="text-white">24x7 Access.</h3>
											<p class="text-white mb-0">You can monitor your statistics 24x7 available, anytime & anywhere, we're always available for you.</p>
										</div>
									</div>
								</div>

								<div class="col-md-4 mt-3 mt-md-0">
									<div class="feature-box fbox-plain fbox-sm fbox-dark mb-0">
										<div class="fbox-icon">
											<i class="icon-line-circle-check"></i>
										</div>
										<div class="fbox-content">
											<h3 class="text-white">Secured &amp; Friendly.</h3>
											<p class="text-white mb-0">Our monitoring application is securely protected with SSL certificate.</p>
										</div>
									</div>
								</div>
							<?php } ?>
							
						</div>
					</div>
				</div>

				<div class="section mt-0 pt-md-5 pt-0">
					<div class="container clearfix">
						<div class="row align-items-md-center mb-5">
							<div class="col-md-6 pr-5">
								<?php if ($_COOKIE['language'] == 'mon'){?>
										<div class="heading-block mb-4 border-bottom-0">
											<div class="before-heading">Компанийн тухай</div>
											<h2 class="nott font-weight-semibold">Хамтдаа ажилла, хамтдаа бүтээцгээе.</h2>
										</div>
										<div class="row">
											<div class="col-6 col-sm-6 mb-4">
												<div class="counter color font-weight-semibold"><span data-from="1" data-to="6" data-refresh-interval="2" data-speed="600"></span>+</div>
												<h5 class="mt-0 font-weight-medium">Төслүүд</h5>
											</div>

											<div class="col-6 col-sm-6 mb-4">
												<div class="counter color font-weight-semibold"><span data-from="1" data-to="370" data-refresh-interval="11" data-speed="900"></span>MW</div>
												<h5 class="mt-0 font-weight-medium">Суурилуулсан хүчин чадал</h5>
											</div>

											<div class="col-6 col-sm-6 mb-4">
												<div class="counter color font-weight-semibold"><span data-from="1" data-to="210" data-refresh-interval="3" data-speed="1000"></span>+</div>
												<h5 class="mt-0 font-weight-medium">Панелууд</h5>
											</div>

											<div class="col-6 col-sm-6 mb-4">
												<div class="counter color font-weight-semibold"><span data-from="100" data-to="4500" data-refresh-interval="100" data-speed="1500"></span>kWh</div>
												<h5 class="mt-0 font-weight-medium">Үйлдвэрлэсэн kWh</h5>
											</div>
										</div>
										<p class="text-muted">Бид сүлжээний болон гадна сүлжээний PV систем, үйлдвэрүүдийн инженерийн, хангамж, барилга угсралт, ашиглалт, засвар үйлчилгээний үйлчилгээг санал болгодог.</p>
									<?php } else { ?>
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
									<?php } ?>
							</div>
							<?php if ($_COOKIE['language'] == 'mon'){?>
								<div class="col-md-3 col-sm-6">
									<div class="card shadow-sm border-light">
										<img src="/gpower/assets/news-3-min.jpg" alt="Featured image 1" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title font-weight-semibold color">Угсралтын үйлчилгээ</h5>
											<p class="card-text">50 кВт-ын нарны систем. PV модулийн хэмжээ нь 50 кВт. Sunny Boy 11kW Inverter 5ш. Байршил Улаанбаатар хот.</p>
										</div>
									</div>
									<div class="card shadow-sm border-light mt-4">
										<img src="/gpower/assets/about-1.jpg" alt="Featured image 2" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title font-weight-semibold color">Зөвлөх үйлчилгээ</h5>
											<p class="card-text">Манай баг энергийг хадгалах систем дээр ажилладаг.</p>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6 pl-sm-3 mt-3 mt-sm-0">
									<div class="card shadow-sm border-light">
										<img src="/gpower/assets/about-2.jpg" alt="Featured image 3" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title font-weight-semibold color">Судалгаа болон хөгжүүлэлт</h5>
											<p class="card-text">Өмнөд Солонгосын хувийн компанитай хамтран Smart Line Conditioner-ийг боловсруулсан.</p>
										</div>
									</div>
								</div>
							<?php } else { ?>
								<div class="col-md-3 col-sm-6">
									<div class="card shadow-sm border-light">
										<img src="/gpower/assets/news-3-min.jpg" alt="Featured image 1" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title font-weight-semibold color">System construction</h5>
											<p class="card-text">50kW grid-tie solar system. PV module size is 50kW. Sunny Boy 11kW inverter 5pcs. Location is near Ulaanbaatar.</p>
										</div>
									</div>
									<div class="card shadow-sm border-light mt-4">
										<img src="/gpower/assets/about-1.jpg" alt="Featured image 2" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title font-weight-semibold color">Consulting Service</h5>
											<p class="card-text">Our team is working on Large Scale Energy Storage system.</p>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6 pl-sm-3 mt-3 mt-sm-0">
									<div class="card shadow-sm border-light">
										<img src="/gpower/assets/about-2.jpg" alt="Featured image 3" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title font-weight-semibold color">Research and Development</h5>
											<p class="card-text">Developed Smart Line Conditioner with South Korean Private company.</p>
										</div>
									</div>
								</div>
							<?php } ?>
							
						</div>
					</div>
				</div>


				<div class="section clearfix bg-transparent">
					<div class="container">
						<div class="heading-block border-bottom-0 center">
							<?php if ($_COOKIE['language'] == 'mon'){?>
								<div class="before-heading">Бидний бие даан гүйцэтгэсэн төслүүд</div>
								<h2 class="nott font-weight-semibold mb-0">Төслүүд</h2>
							<?php } else { ?>
								<div class="before-heading">Some of Our Dedicated Projects</div>
								<h2 class="nott font-weight-semibold mb-0">Projects</h2>
							<?php } ?>
							
						</div>
					</div>
					<div id="image-carousel" class="owl-carousel carousel-widget" data-margin="24" data-nav="true" data-pagi="true" data-items-xs="1" data-items-sm="1" data-items-md="1" data-items-lg="2" data-items-xl="2" style="padding: 0 20px" data-lightbox="gallery">
						<div class="slide slide--1">
							<div class="carousel-column-container">
								<ul class="carousel-column column-1">
									<li class="carousel-grid-item">
										<a href="/projects" class="item" style="background-image: url('/gpower/assets/project-1.jpg');"></a>
									</li>
									<li class="carousel-grid-item">
										<a href="/projects" class="item" style="background-image: url('/gpower/assets/project-2.jpg');"></a>
									</li>
								</ul>
								<ul class="carousel-column column-2">
									<li class="carousel-grid-item">
										<a href="/projects" class="item" style="background-image: url('/gpower/assets/project-3.jpg'); min-height: 300px"></a>
									</li>
									<li class="carousel-grid-item">
										<a href="/projects" class="item" style="background-image: url('/gpower/assets/project-4.jpg'); min-height: 280px"></a>
									</li>
									<li class="carousel-grid-item">
										<a href="/projects" class="item" style="background-image: url('/gpower/assets/project-5.jpg'); min-height: 200px"></a>
									</li>
								</ul>
							</div>
						</div>

						<div class="slide slide--2">
							<div class="carousel-column-container">
								<ul class="carousel-column column-1">
									<li class="carousel-grid-item">
										<a href="/projects" class="item" style="background-image: url('/gpower/assets/project-6.jpg'); min-height: 324px"></a>
									</li>
									<li class="carousel-grid-item">
										<div class="item bg-color d-flex align-items-center px-4" style="min-height: 480px">
											<blockquote class="blockquote border-0 mb-0">
												<p class="mb-3 text-white">"A transition to clean energy is about making an investment in our future."</p>
												<footer class="blockquote-footer text-white-50 font-italic">Gloria Reuben</footer>
											</blockquote>
										</div>
									</li>
								</ul>
								<ul class="carousel-column column-2">
									<li class="carousel-grid-item">
										<a href="/projects" class="item" style="background-image: url('/gpower/assets/project-8.jpg');"></a>
									</li>
									<li class="carousel-grid-item">
										<a href="/projects" class="item" style="background-image: url('/gpower/assets/project-9.jpg');"></a>
									</li>
									<li class="carousel-grid-item">
										<a href="/projects" class="item" style="background-image: url('/gpower/assets/project-10.jpg');"></a>
									</li>
								</ul>
							</div>
						</div>

						<div class="slide slide--3">
							<div class="carousel-column-container">
								<ul class="carousel-column column-1">
									<li class="carousel-grid-item">
										<a href="/projects" class="item bg-color d-flex align-items-center px-4 img-overlay" style="background-image: url('/gpower/assets/project-11.jpg'); min-height: 350px">
											<blockquote class="blockquote border-0 mb-0">
												<p class="mb-3 text-white">"The potential of renewable energy is immense."</p>
												<footer class="blockquote-footer text-white-50 font-italic">Tulsi Tanti</footer>
											</blockquote>
										</a>
									</li>
									<li class="carousel-grid-item">
										<a href="/projects" class="item" style="background-image: url('/gpower/assets/project-12.jpg'); min-height: 453px"></a>
									</li>
								</ul>
								<ul class="carousel-column column-2">
									<li class="carousel-grid-item">
										<a href="/projects" class="item" style="background-image: url('/gpower/assets/project-13.jpg');"></a>
									</li>
									<li class="carousel-grid-item">
										<a href="/projects" class="item" style="background-image: url('/gpower/assets/project-7.jpg');"></a>
									</li>
									<li class="carousel-grid-item">
										<a href="/projects" class="item" style="background-image: url('/gpower/assets/project-14.jpg');"></a>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="section p-0 testimonials clearfix">
					<div class="container-full" style="padding: 120px 0 0 0">
						<div class="heading-block border-bottom-0 center">
							<?php if ($_COOKIE['language'] == 'mon'){?>
								<div class="before-heading">Суурилуулсан нарны цахилгаан станцын  хүч</div>
								<h2 class="nott font-weight-semibold"> {{$summapdata}} МW</h2>
								<p class="mb-0 mt-1"><span class="font-weight-semibold">Хэрэгжүүлсэн төслүүд</span></p>
							<?php } else { ?>
								<div class="before-heading">installed power of built solar power station</div>
								<h2 class="nott font-weight-semibold"> {{$summapdata}} МW</h2>
								<p class="mb-0 mt-1"><span class="font-weight-semibold">Implemented projects</span></p>
							<?php } ?>
							
						</div>

						<div id="google-map4" style="height: 580px; margin-bottom: 20px;" class="gmap" data-maptype="TERRAIN" data-address="47.923287, 106.917476" data-zoom="14" data-markers='[
						@foreach ($mapdata as $singlepin)
						{address: "{{$singlepin->coordinate_lat}}, {{$singlepin->coordinate_long}}",html: "<h4><span>{{$singlepin->project_eng}}</span></h4><p><strong>Location:</strong> {{$singlepin->location_eng}}<br><strong>Installed capacity:</strong> {{$singlepin->capacity}}<br><strong>Year of comissioning:</strong> {{$singlepin->delivered_date}}</p>"},
						@endforeach
						]' data-icon='{image: "/gpower/assets/map-pin.png",iconsize: [32, 32],iconanchor: [14,44]}'></div>
					</div>
				</div>

				<div class="section bg-transparent clearfix">
					<div class="container">
						<div class="heading-block border-bottom-0 center">
							<?php if ($_COOKIE['language'] == 'mon'){?>
								<div class="before-heading">Сүүлийн үеийн бидний мэдээллийг хүлээн аваарай</div>
								<h2 class="nott font-weight-semibold">Мэдээ</h2>
							<?php } else { ?>
								<div class="before-heading">See What's Up in Latest</div>
								<h2 class="nott font-weight-semibold">News</h2>
							<?php } ?>
							
						</div>

						<div class="clear"></div>

						<div class="row col-mb-30 posts-md">
							<?php if ($_COOKIE['language'] == 'mon'){?>
								@foreach ($newsmn as $singlenews)
								<div class="entry col-md-4 col-sm-6 col-12">
									<div class="grid-inner">
										<div class="entry-image">
											<a href="\storage\{{$singlenews->cover}}" data-lightbox="image"><img src="\storage\{{$singlenews->cover}}" alt="{{$singlenews->title}}"></a>
										</div>
										<div class="entry-title title-xs nott">
											<h3><a href="/news/{{$singlenews->id}}">{{$singlenews->title}}</a></h3>
										</div>
										<div class="entry-meta">
											<p class="page-title-right text-black-50 mb-0"><i class="icon-calendar3"></i>{!! $singlenews->publish_date !!}</p>

										</div>
										<div class="entry-content">
											<p>{{\Illuminate\Support\Str::limit(strip_tags($singlenews->content),100,'...')}}</p>
										</div>
									</div>
								</div>
								@endforeach
							<?php } else { ?>
								@foreach ($news as $singlenews)
								<div class="entry col-md-4 col-sm-6 col-12">
									<div class="grid-inner">
										<div class="entry-image">
											<a href="\storage\{{$singlenews->cover}}" data-lightbox="image"><img src="\storage\{{$singlenews->cover}}" alt="{{$singlenews->title}}"></a>
										</div>
										<div class="entry-title title-xs nott">
											<h3><a href="/news/{{$singlenews->id}}">{{$singlenews->title}}</a></h3>
										</div>
										<div class="entry-meta">
											<p class="page-title-right text-black-50 mb-0"><i class="icon-calendar3"></i>{!! $singlenews->publish_date !!}</p>

										</div>
										<div class="entry-content">
											<p>{{\Illuminate\Support\Str::limit(strip_tags($singlenews->content),100,'...')}}</p>
										</div>
									</div>
								</div>
								@endforeach
							<?php } ?>
							
							
						</div>
					</div>
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
    
	<script src="https://maps.google.com/maps/api/js?key={{env('GOOGLE_KEY')}}"></script>
@endsection