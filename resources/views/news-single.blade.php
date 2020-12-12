@extends('layout.app')

@section('externalcss')
    @parent
@endsection

@section('content')

		
		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="single-post mb-0">

						<!-- Entry Image
						============================================= -->
						<div class="entry-image bottommargin">
							<a href="#"><img src="\storage\{{$currentnews->cover}}" alt="{{$currentnews->title}}"></a>
						</div><!-- .entry-image end -->

						<div class="row gutter-40 col-mb-80">
							<!-- Post Content
							============================================= -->
							<div class="postcontent col-lg-12">

								<!-- Single Post
								============================================= -->
								<div class="entry clearfix">

									<!-- Entry Title
									============================================= -->
									<div class="entry-title">
										<h2>{{$currentnews->title}}</h2>
									</div><!-- .entry-title end -->

									<!-- Entry Meta
									============================================= -->
									<div class="entry-meta">
										<ul>
											<li><i class="icon-calendar3"></i>{{$currentnews->publish_date}}</li>
										</ul>
									</div><!-- .entry-meta end -->

									<!-- Entry Content
									============================================= -->
									<div class="entry-content mt-0">

										<p>{!! $currentnews->content !!}</p>

										
										<div class="clear"></div>

										<!-- Post Single - Share
										============================================= -->
										<div class="si-share border-0 d-flex justify-content-between align-items-center">
											<?php if ($_COOKIE['language'] == 'mon'){?>
												<span>Мэдээг хуваалцах:</span>
											<?php } else { ?>
												<span>Share this Post:</span>
											<?php } ?>

											<!-- Your share button code -->

											<div>
												<a class="fb-share-button mb-1" data-href="http://g-power.mn/news/{{$currentnews->id}}" data-layout="button_count"></a>
												<a class="twitter-share-button" href="https://twitter.com/intent/tweet?text={{$currentnews->title}}">Tweet</a>
												
											</div>
										</div><!-- Post Single - Share End -->

									</div>
								</div><!-- .entry end -->

								<?php if ($_COOKIE['language'] == 'mon'){?>
									<h4>Холбоотой мэдээ:</h4>
								<?php } else { ?>
									<h4>Related Posts:</h4>
								<?php } ?>
								

								<div class="related-posts row posts-md col-mb-30">
									<?php if ($_COOKIE['language'] == 'mon'){?>
										@foreach ($othernewsmn as $singlenews)
										<div class="entry col-12 col-md-6">
											<div class="grid-inner row align-items-center gutter-20">
												<div class="col-4">
													<div class="entry-image">
														<a href="/news/{{$singlenews->id}}"><img src="\storage\{{$singlenews->cover}}" alt="Blog Single"></a>
													</div>
												</div>
												<div class="col-8">
													<div class="entry-title title-xs">
														<h3><a href="/news/{{$singlenews->id}}">{{$singlenews->title}}</a></h3>
													</div>
													<div class="entry-meta">
														<ul>
															<li><i class="icon-calendar3"></i>{!! $singlenews->publish_date !!}</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										@endforeach
									<?php } else { ?>
										@foreach ($othernews as $singlenews)
										<div class="entry col-12 col-md-6">
											<div class="grid-inner row align-items-center gutter-20">
												<div class="col-4">
													<div class="entry-image">
														<a href="/news/{{$singlenews->id}}"><img src="\storage\{{$singlenews->cover}}" alt="Blog Single"></a>
													</div>
												</div>
												<div class="col-8">
													<div class="entry-title title-xs">
														<h3><a href="/news/{{$singlenews->id}}">{{$singlenews->title}}</a></h3>
													</div>
													<div class="entry-meta">
														<ul>
															<li><i class="icon-calendar3"></i>{!! $singlenews->publish_date !!}</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										@endforeach
									<?php } ?>
									
									
								</div>
							</div><!-- .postcontent end -->
							<!-- Load Facebook SDK for JavaScript -->
							<div id="fb-root"></div>
							

						</div>
					</div>
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