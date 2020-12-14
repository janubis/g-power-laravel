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
				<h1><?php if ($_COOKIE['language'] == 'mon'){?>{{$currentproject->title_mon}}
				<?php } else { ?>{{$currentproject->title}}
				<?php } ?></h1>
				<div id="portfolio-navigation">
					<a href="/projects/{{$currentproject->id-1}}"><i class="icon-angle-left"></i></a>
					<a href="/projects"><i class="icon-line-grid"></i></a>
					<a href="/projects/{{$currentproject->id+1}}"><i class="icon-angle-right"></i></a>
				</div>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<!-- Portfolio Single Gallery Thumbs
					============================================= -->
					<div class="w-100 mb-5 portfolio-single-image masonry-thumbs grid-container grid-4" data-big="3" data-lightbox="gallery">
						@foreach ($gallery as $eachImages)
							<a class="grid-item" href="/storage/{!! str_replace('\\', '/', $eachImages) !!}" data-lightbox="gallery-item"><img src="/storage/{!! str_replace('\\', '/', $eachImages) !!}"></a>
						@endforeach
					</div><!-- .portfolio-single-image end -->

					<div class="row col-mb-50">
						<div class="col-md-5 col-lg-4">
							<!-- Portfolio Single - Meta
							============================================= -->
							<div class="card event-meta">
								<div class="card-body">
									<ul class="portfolio-meta mb-0">
										<?php if ($_COOKIE['language'] == 'mon'){?>
											<li><span><i class="icon-solar-panel"></i>Панелууд:</span> {{$currentproject->panel_count}}</li>
											<li><span><i class="icon-calendar3"></i>Хүлээлгэн өгсөн өдөр:</span> {{$currentproject->delivered_date}}</li>
											<li><span><i class="icon-lightbulb"></i>Суурилуулсан хүчин чадал:</span>{{$currentproject->capacity}}</li>
											<li><span><i class="icon-line-sun"></i>Үйлдвэрлэсэн kWh:</span> {{$currentproject->yield_forecast}}</li>
										<?php } else { ?>
											<li><span><i class="icon-solar-panel"></i>Panel Count:</span> {{$currentproject->panel_count}}</li>
											<li><span><i class="icon-calendar3"></i>Delivered Date:</span> {{$currentproject->delivered_date}}</li>
											<li><span><i class="icon-lightbulb"></i>Capacity:</span>{{$currentproject->capacity}}</li>
											<li><span><i class="icon-line-sun"></i>Yield Forecast Per Year mWh:</span> {{$currentproject->yield_forecast}}</li>
										<?php } ?>
										
									</ul>
								</div>
							</div>
							<!-- Portfolio Single - Meta End -->

							<!-- Portfolio Single - Share
							============================================= -->
							<div class="si-share border-0 d-flex justify-content-between align-items-center mt-4">
									<?php if ($_COOKIE['language'] == 'mon'){?>
										<span>Түгээх:</span>
									<?php } else { ?>
										<span>Share:</span>
									<?php } ?>
								<div>
									<a class="fb-share-button mb-1" data-href="http://g-power.mn/projects/{{$currentproject->id}}" data-layout="button_count"></a>
									<a class="twitter-share-button" href="https://twitter.com/intent/tweet?text={{$currentproject->title}}">Tweet</a>
									
								</div>
							</div>
							<!-- Portfolio Single - Share End -->
						</div>

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col-md-7 col-lg-8 portfolio-single-content">
							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-border">
								<?php if ($_COOKIE['language'] == 'mon'){?>
									<h2>Төслийн тухай:</h2>
								<?php } else { ?>
									<h2>Project Info:</h2>
								<?php } ?>

							</div>

							<div class="row col-mb-30">
								<div class="col-sm-12 col-md-12 col-lg-12">
									<?php if ($_COOKIE['language'] == 'mon'){?>
										{!! $currentproject->description_mon !!}
									<?php } else { ?>
										{!! $currentproject->description !!}
									<?php } ?>
									
								</div>

								
							</div>
							<!-- Portfolio Single - Description End -->
						</div><!-- .portfolio-single-content end -->
					</div>

					<div class="divider divider-center"><i class="icon-sun2 nice-single-project"></i></div>

					<!-- Load Facebook SDK for JavaScript -->
					<div id="fb-root"></div>

				</div>
			</div>
		</section><!-- #content end -->
@endsection
@section('pagejavascript')
    @parent
    <script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
    <script type="text/javascript" async src="https://platform.twitter.com/widgets.js"></script>
@endsection