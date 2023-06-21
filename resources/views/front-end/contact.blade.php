<!DOCTYPE html>
<html lang="en">

<head>
    @include('front-end.section.styles')
</head>
<body>
    
    @include('front-end.section.header')

<!-- main body - start
		================================================== -->
		<main>


			<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section d-flex align-items-center clearfix" data-background="assets/images/breadcrumb/bg_01.jpg">
				<div class="container">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay=".1s">
							<h1 class="page_title mb-0">Contact Us</h1>
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay=".1s">
							<ul class="breadcrumb_nav ul_li_right clearfix">
								<li><a href="/">Home</a></li>
								<li>Contact Us</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- contact_section - start
			================================================== -->
			<section class="contact_section sec_ptb_130 clearfix">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="contact_content">
								<div class="section_title mb_30 wow fadeInUp2" data-wow-delay=".1s">
									<h4 class="small_title">Contact Us</h4>
									<h2 class="big_title mb-0">
										Every Single Update To Contact Us
									</h2>
									<span class="biggest_title">Contact</span>
								</div>
								<p class="mb_30 wow fadeInUp2" data-wow-delay=".2s">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan
									tium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dict
								</p>
								<ul class="contact_information_list ul_li_block clearfix">
									<li class="wow fadeInUp2" data-wow-delay=".3s">
										<div class="item_icon bg_default_orange"><i class="fal fa-map-marker-alt"></i></div>
										<div class="item_content" style="text-align: left!important">
											<h4>Location</h4>
											<p>United States</p>
										</div>
									</li>
									<li class="wow fadeInUp2" data-wow-delay=".4s">
										<div class="item_icon bg_default_yellow"><i class="fal fa-envelope"></i></div>
										<div class="item_content" style="text-align: left!important">
											<h4>Email Us</h4>
											<p><a href="mail:info@amdaprints.com" class="text-dark">info@amdaprints.com</a></p>
										</div>
									</li>
									<li class="wow fadeInUp2" data-wow-delay=".5s">
										<div class="item_icon bg_default_lightblue"><i class="fal fa-phone"></i></div>
										<div class="item_content" style="text-align: left!important">
											<h4>Phone Us</h4>
											<p>+00 (000) 000 00</p>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="contact_form">
								<form id="contact-form" action="/make-enquiry" method="POST">
									@csrf
									<div class="form_item wow fadeInUp2" data-wow-delay=".1s">
										<span class="input_title">Full Name</span>
										<div class="position-relative">
											<input id="input_user" type="text" name="name" placeholder="Write Your Name">
											<label class="input_icon" for="input_user"><i class="fal fa-user"></i></label>
										</div>
									</div>

									<div class="form_item wow fadeInUp2" data-wow-delay=".2s">
										<span class="input_title">Email Address</span>
										<div class="position-relative">
											<input id="input_email" type="email" name="email" placeholder="Write Your Email">
											<label class="input_icon" for="input_email"><i class="fal fa-envelope"></i></label>
										</div>
									</div>

									<div class="form_item wow fadeInUp2" data-wow-delay=".3s">
										<span class="input_title">Phone Number</span>
										<div class="position-relative">
											<input id="input_phone" type="tel" name="mobile" placeholder="Write Your Phone Number">
											<label class="input_icon" for="input_phone"><i class="fal fa-phone"></i></label>
										</div>
									</div>

									<div class="form_item wow fadeInUp2" data-wow-delay=".4s">
										<span class="input_title">Leave A Message</span>
										<textarea name="message" placeholder="Write Your Message"></textarea>
									</div>

									<button type="submit" class="custom_btn bg_default_orange wow fadeInUp2" data-wow-delay=".5s">
										send message 
										<span><i class="fal fa-arrow-right"></i></span>
									</button>
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- contact_section - end
			================================================== -->


			<!-- google map - start
			================================================== -->
			<div class="map_section wow fadeIn clearfix" data-wow-delay=".1s">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16114353.307926444!2d-105.6329332429746!3d34.912136172979395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1687326866934!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			<!-- google map - end
			================================================== -->


		</main>
		<!-- main body - end
		================================================== -->

    @include('front-end.section.footer')
@include('front-end.section.scripts')
@if (session('enquiry'))
<script>
	swal({
      title: "Thank You",
    //   text: "{{session('message')}}",
      type: "success",  
      timer: 3000,
      showCancelButton: false,
      showConfirmButton: false,
      buttons: false,
    });
</script>
@endif
</body>
</html>