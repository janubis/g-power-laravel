@extends('layout.app')

@section('externalcss')
    @parent
@endsection

@section('content')
		    
		<!-- Slider / Hero
		============================================= -->
		<div id="slider" class="slider-element dark py-0" style="background-size: cover; background-image: url('/storage/{!! $contactInfo->cover !!}'); background-position: center center; background-repeat: no-repeat;">

			<div class="container">
				<div class="row text-center py-5 min-vh-md-25 justify-content-center align-items-center">
					<div class="col-lg-6">
						@if(Session::has('success'))
              <div class="alert alert-success">
        	    {{ Session::get('success') }}
               </div>
           @endif
					</div>
				</div>
			</div>
		</div>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">

				<div class="container clearfix">

					<div class="row justify-content-around">
						<div class="col-lg-5">
							<?php if ($_COOKIE['language'] == 'mon'){?>
								<h1 class="color mb-3">Холбоо барих</h1>

								<p class="mb-5">{!! $contactInfo->desc_mn !!}</p>

								<div class="clear"></div>

								<div class="feature-box fbox-sm mb-3">
									<div class="fbox-icon">
										<i class="bg-color-50 color icon-building2"></i>
									</div>
									<div class="fbox-content">
										<p class="mb-2">
											<span class="mb-2 h6 d-block text-dark">Хаяг:</span>
											{{ $contactInfo->address_mn }}
										</p>
									</div>
								</div>
								<div class="feature-box fbox-sm mb-3">
									<div class="fbox-icon">
										<i class="bg-color-50 color icon-call"></i>
									</div>
									<div class="fbox-content">
										<p class="mb-2">
											<span class="mb-2 h6 d-block text-dark">Утас:</span>
											{{ $contactInfo->phone }}
										</p>
									</div>
								</div>
								<div class="feature-box fbox-sm mb-5">
									<div class="fbox-icon">
										<i class="bg-color-50 color icon-email3"></i>
									</div>
									<div class="fbox-content">
										<p class="mb-2">
											<span class="mb-2 h6 d-block text-dark">И-Мэйл:</span>
											{{ $contactInfo->email }}
										</p>
									</div>
								</div>
							<?php } else { ?>
								<h1 class="color mb-3">Contact Us</h1>

								<p class="mb-5">{!! $contactInfo->desc !!}</p>

								<div class="clear"></div>

								<div class="feature-box fbox-sm mb-3">
									<div class="fbox-icon">
										<i class="bg-color-50 color icon-building2"></i>
									</div>
									<div class="fbox-content">
										<p class="mb-2">
											<span class="mb-2 h6 d-block text-dark">Address:</span>
											{{ $contactInfo->address }}
										</p>
									</div>
								</div>
								<div class="feature-box fbox-sm mb-3">
									<div class="fbox-icon">
										<i class="bg-color-50 color icon-call"></i>
									</div>
									<div class="fbox-content">
										<p class="mb-2">
											<span class="mb-2 h6 d-block text-dark">Phone:</span>
											{{ $contactInfo->phone }}
										</p>
									</div>
								</div>
								<div class="feature-box fbox-sm mb-5">
									<div class="fbox-icon">
										<i class="bg-color-50 color icon-email3"></i>
									</div>
									<div class="fbox-content">
										<p class="mb-2">
											<span class="mb-2 h6 d-block text-dark">Email:</span>
											{{ $contactInfo->email }}
										</p>
									</div>
								</div>
							<?php } ?>
							

						</div>

						<div class="col-lg-5">
							<div>

								

								<form class="mb-0" action="/contact" method="post">
									@csrf
									

									<div class="row">
										<div class="col-md-12 form-group">
											<label for="template-contactform-name">Name<small class="text-danger">*</small></label>
											<input type="text" id="template-contactform-name" name="name" value="" class="form-control required" />
										</div>

										<div class="col-md-12 form-group">
											<label for="template-contactform-email">Email<small class="text-danger">*</small></label>
											<input type="email" id="template-contactform-email" name="email" value="" class="required email form-control" />
										</div>

										<div class="col-md-12 form-group">
											<label for="template-contactform-phone">Phone<small class="text-danger">*</small></label>
											<input type="text" id="template-contactform-phone" name="phone_number" value="" class="required form-control" />
										</div>


										<div class="col-12 form-group">
											<label for="template-contactform-message">Message<small class="text-danger">*</small></label>
											<textarea class="required form-control" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>
										</div>

										<div class="col-12 form-group">
											<button class="button button-rounded button-xlarge m-0 center font-weight-medium nott ls0 font-weight-normal" type="submit" value="submit">Send Message</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>


				</div>

			</div>
		</section><!-- #content end -->

@endsection
@section('pagejavascript')
    @parent
@endsection