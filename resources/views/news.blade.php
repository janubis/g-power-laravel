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
					<h1>Мэдээ</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Нүүр хуудас</a></li>
						<li class="breadcrumb-item active" aria-current="page">Мэдээ</li>
					</ol>
				<?php } else { ?>
					<h1>News</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">News</li>
					</ol>
				<?php } ?>
				
			</div>

		</section><!-- #page-title end -->
		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap pb-0">

				<div class="container clearfix">

					<div class="row col-mb-30 posts-md">
						<?php if ($_COOKIE['language'] == 'mon'){?>
							@foreach ($newsmn as $singlenews)
							<div class="entry col-md-4 col-sm-6 col-12">
								<div class="grid-inner">
									<div class="entry-image">
										<a href="/news/{{$singlenews->id}}"><img src="\storage\{{$singlenews->cover}}" alt="{{$singlenews->title}}"></a>
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
										<a href="/news/{{$singlenews->id}}"><img src="\storage\{{$singlenews->cover}}" alt="{{$singlenews->title}}"></a>
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
						{!! $news->links() !!}
				</div>
			</div>
		</section><!-- #content end -->

@endsection
@section('pagejavascript')
    @parent
@endsection