@extends('layout.app')

@section('externalcss')
    @parent
@endsection

@section('content')

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>News</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">News</li>
				</ol>
			</div>

		</section><!-- #page-title end -->
		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap pb-0">

				<div class="container clearfix">

					<div class="row col-mb-30 posts-md">
							<div class="entry col-md-4 col-sm-6 col-12">
								<div class="grid-inner">
									<div class="entry-image">
										<a href="images/blog/full/1.jpg" data-lightbox="image"><img src="assets/news-1-min.jpg" alt="Standard Post with Image"></a>
									</div>
									<div class="entry-title title-xs nott">
										<h3><a href="news-single.html">Installation of the rooftop PV system for MUST is done and handed</a></h3>
									</div>
									<div class="entry-meta">
										<p class="page-title-right text-black-50 mb-0"><i class="icon-calendar3"></i> 1th May 2020</p>

									</div>
									<div class="entry-content">
										<p>We have successfully completed the construction of a 16kWdc/15kWac PV system on the roof of the 8th building of the MUST, such as funded by the UNDP and NAMA Project at the Ministry of Construction and Urban Development, and handed it over to MUST.</p>
									</div>
								</div>
							</div>
							
							<div class="entry col-md-4 col-sm-6 col-12">
								<div class="grid-inner">
									<div class="entry-image">
										<a href="images/blog/full/1.jpg" data-lightbox="image"><img src="assets/news-2-min.jpg" alt="Standard Post with Image"></a>
									</div>
									<div class="entry-title title-xs nott">
										<h3><a href="#">Contribute to Mongolian energy development through</a></h3>
									</div>
									<div class="entry-meta">
										<p class="page-title-right text-black-50 mb-0"><i class="icon-calendar3"></i> 12th December 2019</p>

									</div>
									<div class="entry-content">
										<p>Quickly get a project started with any of our examples ranging from using parts of the framework to custom components and layouts.</p>
									</div>
								</div>
							</div>

							<div class="entry col-md-4 col-sm-6 col-12">
								<div class="grid-inner">
									<div class="entry-image">
										<a href="images/blog/full/1.jpg" data-lightbox="image"><img src="assets/news-3-min.jpg" alt="Standard Post with Image"></a>
									</div>
									<div class="entry-title title-xs nott">
										<h3><a href="#">G-Power LLC has a proven reputation and track record of working with clients</a></h3>
									</div>
									<div class="entry-meta">
										<p class="page-title-right text-black-50 mb-0"><i class="icon-calendar3"></i> 15th July 2019</p>

									</div>
									<div class="entry-content">
										<p>Quickly get a project started with any of our examples ranging from using parts of the framework to custom components and layouts.</p>
									</div>
								</div>
							</div>

							<div class="entry col-md-4 col-sm-6 col-12">
								<div class="grid-inner">
									<div class="entry-image">
										<a href="images/blog/full/1.jpg" data-lightbox="image"><img src="assets/news-3-min.jpg" alt="Standard Post with Image"></a>
									</div>
									<div class="entry-title title-xs nott">
										<h3><a href="#">G-Power LLC has a proven reputation and track record of working with clients</a></h3>
									</div>
									<div class="entry-meta">
										<p class="page-title-right text-black-50 mb-0"><i class="icon-calendar3"></i> 15th July 2019</p>

									</div>
									<div class="entry-content">
										<p>Quickly get a project started with any of our examples ranging from using parts of the framework to custom components and layouts.</p>
									</div>
								</div>
							</div>

						</div>

					<!-- Pagination
					============================================= -->
					<ul class="pagination mt-5 pagination-circle justify-content-center">
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#"><i class="icon-angle-right"></i></a></li>
					</ul>

				</div>

				
			</div>
		</section><!-- #content end -->

@endsection
@section('pagejavascript')
    @parent
@endsection