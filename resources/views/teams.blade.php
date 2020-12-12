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
				<h1>Манай баг</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Нүүр хуудас</a></li>
					<li class="breadcrumb-item active" aria-current="page">Манай баг</li>
				</ol>
			<?php } else { ?>
				<h1>Our Teams</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Our Teams</li>
				</ol>
			<?php } ?>
			
		</div>

	</section><!-- #page-title end -->
	<!-- Content
	============================================= -->
	<section id="content">
		<div class="container clearfix">
			<div class="row gutter-40 col-mb-80 mt-5">
				<div class="postcontent col-lg-10 order-lg-last">
					<div class="content-wrap">
						<div class="container clearfix">

							<div class="fancy-title title-border">
								<h3><?php if ($_COOKIE['language'] == 'mon'){?>
										Удирдлагын баг
									<?php } else { ?>
										Management Team
									<?php } ?></h3></h3>
							</div>

							<div class="row col-mb-50 mb-0">

								@foreach ($teams as $member)
									@if ($member->is_manager == 'manager')
										<?php if ($_COOKIE['language'] == 'mon'){?>
											<div class="col-lg-6">
												<div class="team team-list row align-items-center">
													<div class="team-image col-sm-6">
														<img src="\storage\{{$member->avatar}}" alt="{{$member->name_mon}}">
													</div>
													<div class="team-desc col-sm-6">
														<div class="team-title"><h4>{{$member->name_mon}}</h4><span>{{$member->title_mon}}</span></div>
														<div class="team-content">
															<p>{{$member->about_mon}}</p>
														</div>
														<a href="{{$member->facebook}}" class="social-icon si-rounded si-small si-facebook">
															<i class="icon-facebook"></i>
															<i class="icon-facebook"></i>
														</a>
														<a href="{{$member->twitter}}" class="social-icon si-rounded si-small si-twitter">
															<i class="icon-twitter"></i>
															<i class="icon-twitter"></i>
														</a>
													</div>
												</div>
											</div>
										<?php } else { ?>
											<div class="col-lg-6">
												<div class="team team-list row align-items-center">
													<div class="team-image col-sm-6">
														<img src="\storage\{{$member->avatar}}" alt="{{$member->name_eng}}">
													</div>
													<div class="team-desc col-sm-6">
														<div class="team-title"><h4>{{$member->name_eng}}</h4><span>{{$member->title_eng}}</span></div>
														<div class="team-content">
															<p>{{$member->about_eng}}</p>
														</div>
														<a href="{{$member->facebook}}" class="social-icon si-rounded si-small si-facebook">
															<i class="icon-facebook"></i>
															<i class="icon-facebook"></i>
														</a>
														<a href="{{$member->twitter}}" class="social-icon si-rounded si-small si-twitter">
															<i class="icon-twitter"></i>
															<i class="icon-twitter"></i>
														</a>
													</div>
												</div>
											</div>
										<?php } ?>
									@endif
								@endforeach

							</div>

							
							<div class="fancy-title title-border">
								<h3>
									<?php if ($_COOKIE['language'] == 'mon'){?>
										Боловсон хүчин
									<?php } else { ?>
										Front-Line Unit Team
									<?php } ?></h3>
							</div>

							<div class="row col-mb-50 mb-0">

								@foreach ($teams as $member)
									@if ($member->is_manager == 'staff')
										<?php if ($_COOKIE['language'] == 'mon'){?>
										    <div class="col-lg-3">
												<div class="team team-list row align-items-center">
													<div class="team-image col-sm-12">
														<img src="\storage\{{$member->avatar}}" alt="{{$member->name_mon}}">
													</div>
													<div class="team-desc col-sm-12">
														<div class="team-title"><h4>{{$member->name_mon}}</h4><span>{{$member->title_mon}}</span></div>
														<div class="team-content">
															<p>{{$member->about_mon}}</p>
														</div>
														<a href="{{$member->facebook}}" class="social-icon si-rounded si-small si-facebook">
															<i class="icon-facebook"></i>
															<i class="icon-facebook"></i>
														</a>
														<a href="{{$member->twitter}}" class="social-icon si-rounded si-small si-twitter">
															<i class="icon-twitter"></i>
															<i class="icon-twitter"></i>
														</a>
													</div>
												</div>
											</div>
										<?php } else { ?>
											<div class="col-lg-3">
												<div class="team team-list row align-items-center">
													<div class="team-image col-sm-12">
														<img src="\storage\{{$member->avatar}}" alt="{{$member->name_eng}}">
													</div>
													<div class="team-desc col-sm-12">
														<div class="team-title"><h4>{{$member->name_eng}}</h4><span>{{$member->title_eng}}</span></div>
														<div class="team-content">
															<p>{{$member->about_eng}}</p>
														</div>
														<a href="{{$member->facebook}}" class="social-icon si-rounded si-small si-facebook">
															<i class="icon-facebook"></i>
															<i class="icon-facebook"></i>
														</a>
														<a href="{{$member->twitter}}" class="social-icon si-rounded si-small si-twitter">
															<i class="icon-twitter"></i>
															<i class="icon-twitter"></i>
														</a>
													</div>
												</div>
											</div>
										<?php } ?>
									@endif
								@endforeach
							</div>
						</div>
					</div>
				</div>
				<div class="sidebar col-lg-2">
					<div class="sidebar-widgets-wrap" style="margin-top: 80px;">
						<div class="widget widget_links clearfix">
							<ul>
								<ul>
								<?php if ($_COOKIE['language'] == 'mon'){?>
									<li class="active"><a href="/about/info"><div>Компанийн тухай</div></a></li>
									<li><a href="/about/teams"><div>Манай баг</div></a></li>
								<?php } else { ?>
									<li class="active"><a href="/about/info"><div>About Us</div></a></li>
									<li><a href="/about/teams"><div>Our Team</div></a></li>
								<?php } ?>
							</ul>
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