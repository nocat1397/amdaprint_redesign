<!DOCTYPE html>
<html lang="en">

<head>
    @include('front-end.section.styles')
	<style>
		.fa fa-truck{
			content: "f48b";
		}
		@media (min-width: 992px) {
		  .col-md-3 { width: 20%!important; }
		  .col-md-3 { width: 40%!important; }
		  .col-md-3 { width: 60%!important; }
		  .col-md-3 { width: 80%!important; }
		  .col-md-3 { width: 100%!important;max-width: 20% }
		}

		@media (min-width: 1200px) {
		  .col-md-3 { width: 20%!important; }
		  .col-md-3 { width: 40%!important; }
		  .col-md-3 { width: 60%!important; }
		  .col-md-3 { width: 80%!important; }
		  .col-md-3 { width: 100%!important;max-width: 20% }
		}
		.sample-kit {
			/* margin-top: 5rem; */
			background-image: url('/assets/images/samplekit.jpg');
			border: double;
		}
		.rating {
  /* display: inline-block; */
  position: relative;
  height: 50px;
  margin-left: 5px;
  /* line-height: 33px; */
  font-size: 35px;
}
.rating label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}
.rating label:last-child {
  position: static;
}
.rating label:nth-child(1) {
  z-index: 5;
}
.rating label:nth-child(2) {
  z-index: 4;
}
.rating label:nth-child(3) {
  z-index: 3;
}
.rating label:nth-child(4) {
  z-index: 2;
}
.rating label:nth-child(5) {
  z-index: 1;
}
.rating label input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}
.rating label .icon {
  float: left;
  color: transparent;
}
.rating label:last-child .icon {
  color: #000;
}
.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: orange;
  
  }
.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: #000;
  
  text-shadow: 0 0 5px orange;
}

	</style>
</head>
<body>
    
    @include('front-end.section.header')

		<!-- main body - start
		================================================== -->
		<main>


			<!-- slider_section - start
			================================================== -->
			<section class="slider_section home_three_slider clearfix">
				<div class="container">
					<div class="main_slider owl-carousel owl-theme clearfix">
						{{--  @if($banners !== null)
						@foreach ($banners->header as $banner)
						<div class="item carouselBg" style="background-image: url('/img/banners/header/{{$banner}}')"></div>
						@endforeach
						@else 
						<div class="item carouselBg"></div>
						@endif  --}}
						<div class="item carouselBg" style="background-image: url('/assets/images/New/1.jpg')">
							<div class="owl-text-overlay pl-5">
								<p class="mb-1 text-light">For the Products You need Fast</p>
								<h1 class="owl-title text-uppercase text-light">Same Day Shipping</h1>
								<h4 class="text-light text-uppercase">On Best Selling Products</h4>
								<a href="" class="btn bg-light pr-4 pl-4 mt-3">Shop Now</a>
							  </div>
						</div>
						<div class="item carouselBg" style="background-image: url('/assets/images/New/2.jpg')">
							<div class="owl-text-overlay pl-5">
								<p class="mb-1 text-light">For the Products You need Fast</p>
								<h1 class="owl-title text-uppercase text-light">Same Day Shipping</h1>
								<h4 class="text-light text-uppercase">On Best Selling Products</h4>
								<a href="" class="btn bg-light pr-4 pl-4 mt-3">Shop Now</a>
							  </div>
						</div>
						<div class="item carouselBg" style="background-image: url('/assets/images/New/3.jpg')">
							<div class="owl-text-overlay pl-5">
								<p class="mb-1 text-light">For the Products You need Fast</p>
								<h1 class="owl-title text-uppercase text-light">Same Day Shipping</h1>
								<h4 class="text-light text-uppercase">On Best Selling Products</h4>
								<a href="" class="btn bg-light pr-4 pl-4 mt-3">Shop Now</a>
							  </div>
						</div>
						<div class="item carouselBg" style="background-image: url('/assets/images/New/4.jpg')">
							<div class="owl-text-overlay pl-5">
								<p class="mb-1 text-light">For the Products You need Fast</p>
								<h1 class="owl-title text-uppercase text-light">Same Day Shipping</h1>
								<h4 class="text-light text-uppercase">On Best Selling Products</h4>
								<a href="" class="btn bg-light pr-4 pl-4 mt-3">Shop Now</a>
							  </div>
						</div>
					
					</div>
				</div>
			</section>
			<!-- slider_section - end
			================================================== -->

			<!-- main_section - start
			================================================== -->
			<section class="py-0 py-xl-5 counter_section">
				<div class="container">
					<div class="row g-4">
						<!-- Counter item -->
						<div class="col-sm-6 col-xl-4">
							<div class="d-flex justify-content-evenly bg-whitesmoke counter_sec_img align-items-center p-4 bg-opacity-15 rounded-3" style="justify-content: space-evenly; border-radius:10px;">
								<span class="display-6 lh-1 text-primary mb-0" style="font-size: 35px;">
									<img src="/assets/images/New/icon1.png" class="">
								</span>
								<div class="ms-4 h6 fw-normal mb-0">
									<div class="d-flex">
										<h5 class="purecounter text-secondary mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="10" data-purecounter-delay="200" data-purecounter-duration="0">Same day shipping</h5>
										{{--  <span class="mb-0 h5">K</span>  --}}
									</div>
									<p class="mb-0">on selected products</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-4">
							<div class="d-flex justify-content-evenly bg-whitesmoke counter_sec_img align-items-center p-4  bg-opacity-15 rounded-3" style="justify-content: space-evenly; border-radius:10px;">
								<span class="display-6 lh-1 text-primary mb-0" style="font-size: 35px;">
									<img src="/assets/images/New/icon2.png" class="">
								</span>
								<div class="ms-4 h6 fw-normal mb-0">
									<div class="d-flex">
										<h5 class="purecounter text-secondary mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="10" data-purecounter-delay="200" data-purecounter-duration="0">Priority Shipping</h5>
										{{--  <span class="mb-0 h5">K</span>  --}}
									</div>
									<p class="mb-0">on selected products</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-4">
							<div class="d-flex justify-content-evenly bg-whitesmoke counter_sec_img align-items-center p-4  bg-opacity-15 rounded-3" style="justify-content: space-evenly; border-radius:10px;">
								<span class="display-6 lh-1 text-primary mb-0" style="font-size: 35px;">
									<img src="/assets/images/New/icon3.png" class="">
								</span>
								<div class="ms-4 h6 fw-normal mb-0">
									<div class="d-flex">
										<h5 class="purecounter text-secondary mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="10" data-purecounter-delay="200" data-purecounter-duration="0">Free Shipping</h5>
										{{--  <span class="mb-0 h5">K</span>  --}}
									</div>
									<p class="mb-0">on selected products</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- slider_section - end
			================================================== -->


			<section class="blog_section pt-3 clearfix">
				<div class="container">
					<div class="mt_20 mb_30 text-left">
						<h2 class="heading">Offering Custom Banners and Signs For Business/Home Needs</h2>
					</div>
					{{-- <div class="row mb_80">
						<div class="col-md-2 mb-3 align-self-center">
							<strong class="my-1 mr-2">Select Your Products</strong>
						</div>

						<div class="col-md-2 mb-3">
							<div class="nice-select mr-2 w-100" tabindex="0" style="border-radius:10px;">
								<span class="current">Banners</span>
								<ul class="list">
									<li data-value="6" class="option selected">3 x 2 Feet</li>
									<li data-value="8" class="option">2 x 4 Feet</li>
									<li data-value="15" class="option">3 x 5 Feet</li>
									<li data-value="12" class="option">3 x 4 Feet</li>
									<li data-value="30" class="option">5 x 6 Feet</li>
									<li data-value="42" class="option">6 x 7 Feet</li>
									<li data-value="10" class="option">5 x 2 Feet</li>
									<li data-value="45" class="option">15 x 3 Feet</li>
									<li data-value="0" class="option">Custom Size</li>
								</ul>
							</div>
							
						</div>
						<div class="col-md-2 mb-3">
							<div class="nice-select mr-2 w-100" tabindex="0" style="border-radius:10px;">
								<span class="current">Vinyl Banner</span>
								<ul class="list">
									<li data-value="6" class="option selected">3 x 2 Feet</li>
									<li data-value="8" class="option">2 x 4 Feet</li>
									<li data-value="15" class="option">3 x 5 Feet</li>
									<li data-value="12" class="option">3 x 4 Feet</li>
									<li data-value="30" class="option">5 x 6 Feet</li>
									<li data-value="42" class="option">6 x 7 Feet</li>
									<li data-value="10" class="option">5 x 2 Feet</li>
									<li data-value="45" class="option">15 x 3 Feet</li>
									<li data-value="0" class="option">Custom Size</li>
								</ul>
							</div>
							
						</div>

					</div> --}}
					@if ($sec1 !== null)
					<div class="row mt_50 mb_80 justify-content-center">
						@foreach ($sec1->product->name as $key=>$name)
						@if($key <= 3)	
						<div class="col-lg-3 col-md-5 col-sm-6 col-xs-12 col-6 wow fadeInUp2" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
							<div class="card bg-whitesmoke">
								<!-- Image -->
								@if(sizeof($sec1->product->productImages) && $image = $sec1->product->productImages->where('product_index',$key)->first())
								<img src="/products/{{$sec1->product->id}}/{{$key}}/{{$image->name}}" class="card-img-top" style="width: auto; height: 40vh;">
								@else 
								<img src="/noImg.jpg" alt="image_not_found" class="card-img-top" style="width: auto; height: 40vh; object-fit: cover">
								@endif
								<!-- Card body -->
								<div class="card-body">
									
									<!-- Title -->
									<h5 class="card-title fw-normal"><a href="/{{$sec1->product->category->name}}/{{$name}}" class="text-secondary">{{str_replace('-',' ',$name)}}</a></h5>
{{-- 									
	<!-- Rating star -->
									<ul class="list-inline mb-0">
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
										<li class="list-inline-item ms-2 h6 fw-light mb-0">(5,966)</li>
									</ul>
									<ul class="list-inline mb-0">
										<li class="list-inline-item  ms-2 h6">Starts at:</li>
								
										<li class="list-inline-item me-0  fw-light mb-0">$1.50</li>
									</ul> --}}
									<a href="/{{$sec1->product->category->name}}/{{$name}}" class="btn_2">View Details</a>
								</div>
								
							</div>
						</div>
						@endif
						@endforeach
						<div class="col-md-12 text-center mt-4">
							<a href="/product/{{$sec1->product->category->name}}" class="btn bg-purple pt-2 pb-2 text-light pr-5 pl-5">View all</a>
						</div>
						
					</div>
					@endif

					

				</div>
			</section>

			@if ($sec2 !== null)
			<section class="blog_section clearfix">
				<div class="container">
					<div class=" mt__20 mb_80 text-left">
						<h2 class="heading">Most Loved Products</h2>
					</div>
					<div class="product_slider owl-carousel owl-theme mb_80">
						@foreach ($sec2->product->name as $key=>$name)
						<div class="item wow fadeInUp2" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
							<div class="card bg-whitesmoke ">
								<!-- Image -->
								@if(sizeof($sec2->product->productImages) && $image = $sec2->product->productImages->where('product_index',$key)->first())
								<img src="/products/{{$sec2->product->id}}/{{$key}}/{{$image->name}}" class="card-img-top" style="width: auto; height: 40vh;">
								@else 
								<img src="/noImg.jpg" alt="image_not_found" class="card-img-top" style="width: auto; height: 40vh; object-fit: cover">
								@endif
								<!-- Card body -->
								<div class="card-body">
									
									<!-- Title -->
									<h5 class="card-title mb-1 fw-normal"><a href="/{{$sec2->product->category->name}}/{{$name}}" class="text-secondary">{{str_replace('-',' ',$name)}}</a></h5>
									
									<a href="/{{$sec2->product->category->name}}/{{$name}}" class="btn_2">View Details</a>
								</div>
								
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</section>
			@endif 

			<section class="bg_purple">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12 text-center">
							<h3 class="text-light mb-5">Ways to get the Right Print </h3>
						</div>
					</div>
					<div class="row ">
						<div class="col-md-4 item_content">
							<div class="icons">
								<img src="/assets/images/New/icon4.png" width="60" height="60" alt="">
							</div>
							<div class="text">
								<h4 class="text-light">Design Template</h4>
								<p class="text-light">Professionally Design</p>
							</div>
						</div>
						<div class="col-md-4 item_content">
							<div class="icons">
								<img src="/assets/images/New/icon5.png" width="60" height="60" alt="">
							</div>
							<div class="text">
								<h4 class="text-light">Upload Artwork</h4>
								<p class="text-light">Perfect Print</p>
							</div>
						</div>
						<div class="col-md-4 item_content">
							<div class="icons">
								<img src="/assets/images/New/icon6.png" width="60" height="60" alt="">
							</div>
							<div class="text">
								<h4 class="text-light">Hire a Designer</h4>
								<p class="text-light">Starts @ $9.99</p>
							</div>
						</div>
					</div>
				</div>
			</section>




							<!-- shop_section - start
			================================================== -->
			<section class="shop_section_first sec_ptb_130 clearfix pt-5">
				<div class="container">
					<div class=" mt__20 mb_30 text-left">
						<h2 class="heading">Our Best Sellers</h2>
						
						<p>Boost Sales with Top-Charting Categories</p>
					</div>
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-12 col-md-12 order-last">
							

							<div class="row justify-content-center">
								@foreach ($categories as $key=>$category)
								<div class="col-lg-3 col-md-5 col-sm-6 col-xs-12 col-6 business-card hide-content" data-wow-delay=".1s">
									<div class="product_card text-center">
										<a class="item_image" href="/product/{{strtolower($category->name)}}">
											@if (sizeof($category->product->productImages))
											<img src="/products/{{$category->product->id}}/0/{{$category->product->productImages[0]['name']}}">
											@else 
											<img src="/noImg.jpg" alt="image_not_found">
											@endif
										</a>
										<div class="item_content">
											<h3 class="item_title">{{str_replace('-',' ',$category->name)}}</h3>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</section>

			<section>
				<div class="container bg-purple" style="border-radius:10px;">
					<div class="row">
						<div class="col-md-6 pad">
							<h5 class="text-light mb-3">
								Fully customizable banners
							</h5>
							<h2 class="text-uppercase mb-3 text-light">Make Today a Banner Day</h2>
							<a href="/product/banners" class="btn bg-light pr-4 pl-4">Shop Now</a>
						</div>
						<div class="col-md-6 pr-0 pl-0">
							<img src="assets/images/New/banner4.png" class="img-corner" style="border-radius: 0 10px 10px 0;" alt="">
						</div>
					</div>
				</div>
			</section>
			@if ($sec3 !== null)
			<section class="shop_section sec_ptb_130 clearfix pt-5">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
						<div class="col-md-12">
							<h2 class="heading">Customers Picks</h2>
							<p>Explore Our Most Popular Products</p>
						</div>
						<div class="col-lg-12 col-md-12 order-last">
							

							<div class="product_slider owl-carousel owl-theme">
								@foreach ($sec3->product->name as $key=>$name)
								<div class="item business-card hide-content" data-wow-delay=".1s">
									<div class="product_card">
										<a class="item_image" href="/{{$sec3->product->category->name}}/{{$name}}">
											@if(sizeof($sec3->product->productImages) && $image = $sec3->product->productImages->where('product_index',$key)->first())
											<img src="/products/{{$sec3->product->id}}/{{$key}}/{{$image->name}}" class="card-img-top" style="width: auto; height: 40vh;">
											@else 
											<img src="/noImg.jpg" alt="image_not_found" class="card-img-top" style="width: auto; height: 40vh; object-fit: cover">
											@endif
										</a>
										{{--  <span class="span_size">10x10</span>  --}}
										<div class="item_content text-left">
											<h3 class="item_title">{{str_replace('-',' ',$name)}}</h3>
											<a href="/{{$sec3->product->category->name}}/{{$name}}" class="text-secondary">View Details</a>
										</div>
									</div>
								</div>
								@endforeach
								
							</div>
							<div class="col-md-12 text-center mt-4">
							   <a href="/product/{{$sec3->product->category->name}}" class="btn bg-purple pt-2 pb-2 text-light pr-5 pl-5">View all</a>
						   </div> 
						</div>
					</div>
				</div>
			</section>
			@endif
			@if ($sec4 !== null)
			<section class="shop_section sec_ptb_130 bg_grey clearfix pt-5">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
						<div class="col-md-12">
							<h2 class="heading">New Arrivals</h2>
							<p>Check Out Our Latest Products</p>
						</div>
						<div class="col-lg-12 col-md-12 order-last">
							

							<div class="product_slider2 owl-carousel owl-theme">
								@foreach ($sec4->product->name as $key=>$name)
								<div class="item business-card hide-content" data-wow-delay=".1s">
									<div class="product_card">
										<a class="item_image" target="_blank" href="#">
											@if(sizeof($sec4->product->productImages) && $image = $sec4->product->productImages->where('product_index',$key)->first())
											<img src="/products/{{$sec4->product->id}}/{{$key}}/{{$image->name}}" class="card-img-top" style="width: auto; height: 40vh;">
											@else 
											<img src="/noImg.jpg" alt="image_not_found" class="card-img-top" style="width: auto; height: 40vh; object-fit: cover">
											@endif
										</a>
										{{--  <span class="span_size">10x10</span>  --}}
										<div class="item_content text-left">
											<h3 class="item_title">{{str_replace('-',' ',$name)}}</h3>
											<a href="/{{$sec4->product->category->name}}/{{$name}}" class="text-secondary">View Details</a>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							 <div class="col-md-12 text-center mt-4">
								<a href="/product/{{$sec4->product->category->name}}" class="btn bg-purple pt-2 pb-2 text-light pr-5 pl-5">View all</a>
							</div> 
						</div>
					</div>
				</div>
			</section>
			@endif
			{{--  <section class="blog_section sec_ptb_130 clearfix">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-3 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp2;">
							<div class="blog_fullimage_2 text-white">
								<img src="assets/images/New/banner5.png" alt="image_not_found">
								<div class="item_content">
									
									<h4 class="item_title text-light">
										Banners Starting at
									</h4>
									<span class="h1">$2.25</span><br>
									<a href="#" class="btn btn-4 mt-3">Explore More</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp2;">
							<div class="blog_fullimage_2 text-white">
								<img src="assets/images/New/banner6.png" alt="image_not_found">
								<div class="item_content">
									
									<h4 class="item_title text-light">
										Backdrops Starting at
									</h4>
									<span class="h1">$2.25</span><br>
									<a href="#" class="btn btn-4 mt-3">Explore More</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp2;">
							<div class="blog_fullimage_2 text-white">
								<img src="assets/images/New/banner7.png" alt="image_not_found">
								<div class="item_content">
									
									<h4 class="item_title text-light">
										Signs And Decals Starting at
									</h4>
									<span class="h1">$2.25</span><br>
									<a href="#" class="btn btn-4 mt-3">Explore More</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp2;">
							<div class="blog_fullimage_2 text-white">
								<img src="assets/images/New/banner8.png" alt="image_not_found">
								<div class="item_content">
									
									<h4 class="item_title text-light">
										Custom Flags Starting at
									</h4>
									<span class="h1">$2.25</span><br>
									<a href="#" class="btn btn-4 mt-3">Explore More</a>
								</div>
							</div>
						</div>

						
					</div>
					
				</div>
			</section>  --}}

			<section class="cta_section deco_wrap clearfix" data-background="/assets/images/samplekit.jpg" style="background-image: url(&quot;/assets/images/samplekit.jpg&quot;);padding: 130px 0px;">
				<div class="container">
					<div class="row align-items-center justify-content-lg-start">
						<div class="col-lg-6 col-md-7 col-sm-9 col-xs-12">
							<div class="cta_content ml__30 text-white">
								<div class="section_title mb_30 wow fadeInUp2" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
									{{-- <h4 class="small_title">Needs Any Helps</h4> --}}
									<h2 class="big_title mb-0 text-light">
										Get a FREE Sample Kit
									</h2>
									<span class="biggest_title">Sample</span>
								</div>
								<p class="mb_30 border_left_orange text-white wow fadeInUp2" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp2;">
									We'd love to show you all of the great products that set us apart from the competition.
								</p>
								<a class="btn btn-4 pr-4 pt-3 pb-3 pl-4 mt-3 wow fadeInUp2" data-wow-delay=".3s" href="/sample-kit" target="_blank" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp2;">
									Order Now
									<span><i class="fal fa-arrow-right"></i></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="overlay_blue"></div>

				<div class="deco_image hand_image wow fadeInRight" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
					<img src="assets/images/cta/shape_02.png" alt="shape_not_found">
				</div>
			</section>

			<section class="testimonial_section sec_ptb_130 bg_gray clearfix">
				<div class="container">

					<div class="row justify-content-lg-start">
						<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
							{{--  <div class="section_title mb_30 wow fadeInUp2" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
								<h4 class="small_title">Clients Reviews</h4>
								<h2 class="big_title mb-0">
									What Our Clients Say About Our Works
								</h2>
								<span class="biggest_title">Says</span>
							</div>  --}}
							<h2 class="heading">Clients Reviews</h2>
							<p>What Our Clients Say About Our Works</p>
						</div>
					</div>

					<div class="row justify-content-lg-between align-items-center">
						
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<div class="testimonial_carousel column_2_carousel owl-carousel owl-theme wow fadeInUp2 owl-loaded owl-drag" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp2;">
							<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2400px, 0px, 0px); transition: all 1s ease 0s; width: 4800px;"><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><div class="item">
									<div class="testimonial_primary">
										<div class="content_wrap">
											<p>
												Sed ut perspiciatis unde omnis iste natus
												error sit voluptatem accusantium doloremq
												ue laudantium totam rem aperiam eaqupsa quae abillo inventore veritatis et quasi arch
												itecto beatae vitae dicta sunt
											</p>
											<span class="quote_icon">
												<img src="assets/images/testimonial/quote_01.png" alt="icon_not_found">
											</span>
										</div>
										<div class="hero_info_wrap">
											<div class="hero_thumbnail">
												{{-- <img src="assets/images/testimonial/img_01.png" alt="icon_not_found"> --}}
											</div>
											<div class="hero_info">
												<h3 class="hero_name">Casey M. Vargas</h3>
												{{-- <span class="hero_title">Web designer</span> --}}
											</div>
										</div>
									</div>
								</div></div><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><div class="item">
									<div class="testimonial_primary">
										<div class="content_wrap">
											<p>
												Sed ut perspiciatis unde omnis iste natus
												error sit voluptatem accusantium doloremq
												ue laudantium totam rem aperiam eaqupsa quae abillo inventore veritatis et quasi arch
												itecto beatae vitae dicta sunt
											</p>
											<span class="quote_icon">
												<img src="assets/images/testimonial/quote_01.png" alt="icon_not_found">
											</span>
										</div>
										<div class="hero_info_wrap">
											<div class="hero_thumbnail">
												{{-- <img src="assets/images/testimonial/img_02.png" alt="icon_not_found"> --}}
											</div>
											<div class="hero_info">
												<h3 class="hero_name">Westover Charles</h3>
												{{-- <span class="hero_title">Web designer</span> --}}
											</div>
										</div>
									</div>
								</div></div><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><div class="item">
									<div class="testimonial_primary">
										<div class="content_wrap">
											<p>
												Sed ut perspiciatis unde omnis iste natus
												error sit voluptatem accusantium doloremq
												ue laudantium totam rem aperiam eaqupsa quae abillo inventore veritatis et quasi arch
												itecto beatae vitae dicta sunt
											</p>
											<span class="quote_icon">
												<img src="assets/images/testimonial/quote_01.png" alt="icon_not_found">
											</span>
										</div>
										<div class="hero_info_wrap">
											<div class="hero_thumbnail">
												{{-- <img src="assets/images/testimonial/img_03.png" alt="icon_not_found"> --}}
											</div>
											<div class="hero_info">
												<h3 class="hero_name">Westover Charles</h3>
												{{-- <span class="hero_title">Web designer</span> --}}
											</div>
										</div>
									</div>
								</div></div><div class="owl-item" style="width: 370px; margin-right: 30px;"><div class="item">
									<div class="testimonial_primary">
										<div class="content_wrap">
											<p>
												Sed ut perspiciatis unde omnis iste natus
												error sit voluptatem accusantium doloremq
												ue laudantium totam rem aperiam eaqupsa quae abillo inventore veritatis et quasi arch
												itecto beatae vitae dicta sunt
											</p>
											<span class="quote_icon">
												<img src="assets/images/testimonial/quote_01.png" alt="icon_not_found">
											</span>
										</div>
										<div class="hero_info_wrap">
											<div class="hero_thumbnail">
												{{-- <img src="assets/images/testimonial/img_01.png" alt="icon_not_found"> --}}
											</div>
											<div class="hero_info">
												<h3 class="hero_name">Casey M. Vargas</h3>
												{{-- <span class="hero_title">Web designer</span> --}}
											</div>
										</div>
									</div>
								</div></div><div class="owl-item" style="width: 370px; margin-right: 30px;"><div class="item">
									<div class="testimonial_primary">
										<div class="content_wrap">
											<p>
												Sed ut perspiciatis unde omnis iste natus
												error sit voluptatem accusantium doloremq
												ue laudantium totam rem aperiam eaqupsa quae abillo inventore veritatis et quasi arch
												itecto beatae vitae dicta sunt
											</p>
											<span class="quote_icon">
												<img src="assets/images/testimonial/quote_01.png" alt="icon_not_found">
											</span>
										</div>
										<div class="hero_info_wrap">
											<div class="hero_thumbnail">
												{{-- <img src="assets/images/testimonial/img_02.png" alt="icon_not_found"> --}}
											</div>
											<div class="hero_info">
												<h3 class="hero_name">Westover Charles</h3>
												{{-- <span class="hero_title">Web designer</span> --}}
											</div>
										</div>
									</div>
								</div></div><div class="owl-item" style="width: 370px; margin-right: 30px;"><div class="item">
									<div class="testimonial_primary">
										<div class="content_wrap">
											<p>
												Sed ut perspiciatis unde omnis iste natus
												error sit voluptatem accusantium doloremq
												ue laudantium totam rem aperiam eaqupsa quae abillo inventore veritatis et quasi arch
												itecto beatae vitae dicta sunt
											</p>
											<span class="quote_icon">
												<img src="assets/images/testimonial/quote_01.png" alt="icon_not_found">
											</span>
										</div>
										<div class="hero_info_wrap">
											<div class="hero_thumbnail">
												{{-- <img src="assets/images/testimonial/img_03.png" alt="icon_not_found"> --}}
											</div>
											<div class="hero_info">
												<h3 class="hero_name">Westover Charles</h3>
												{{-- <span class="hero_title">Web designer</span> --}}
											</div>
										</div>
									</div>
								</div></div><div class="owl-item active" style="width: 370px; margin-right: 30px;"><div class="item">
									<div class="testimonial_primary">
										<div class="content_wrap">
											<p>
												Sed ut perspiciatis unde omnis iste natus
												error sit voluptatem accusantium doloremq
												ue laudantium totam rem aperiam eaqupsa quae abillo inventore veritatis et quasi arch
												itecto beatae vitae dicta sunt
											</p>
											<span class="quote_icon">
												<img src="assets/images/testimonial/quote_01.png" alt="icon_not_found">
											</span>
										</div>
										<div class="hero_info_wrap">
											<div class="hero_thumbnail">
												{{-- <img src="assets/images/testimonial/img_01.png" alt="icon_not_found"> --}}
											</div>
											<div class="hero_info">
												<h3 class="hero_name">Casey M. Vargas</h3>
												{{-- <span class="hero_title">Web designer</span> --}}
											</div>
										</div>
									</div>
								</div></div><div class="owl-item active" style="width: 370px; margin-right: 30px;"><div class="item">
									<div class="testimonial_primary">
										<div class="content_wrap">
											<p>
												Sed ut perspiciatis unde omnis iste natus
												error sit voluptatem accusantium doloremq
												ue laudantium totam rem aperiam eaqupsa quae abillo inventore veritatis et quasi arch
												itecto beatae vitae dicta sunt
											</p>
											<span class="quote_icon">
												<img src="assets/images/testimonial/quote_01.png" alt="icon_not_found">
											</span>
										</div>
										<div class="hero_info_wrap">
											<div class="hero_thumbnail">
												{{-- <img src="assets/images/testimonial/img_02.png" alt="icon_not_found"> --}}
											</div>
											<div class="hero_info">
												<h3 class="hero_name">Westover Charles</h3>
												{{-- <span class="hero_title">Web designer</span> --}}
											</div>
										</div>
									</div>
								</div></div><div class="owl-item" style="width: 370px; margin-right: 30px;"><div class="item">
									<div class="testimonial_primary">
										<div class="content_wrap">
											<p>
												Sed ut perspiciatis unde omnis iste natus
												error sit voluptatem accusantium doloremq
												ue laudantium totam rem aperiam eaqupsa quae abillo inventore veritatis et quasi arch
												itecto beatae vitae dicta sunt
											</p>
											<span class="quote_icon">
												<img src="assets/images/testimonial/quote_01.png" alt="icon_not_found">
											</span>
										</div>
										<div class="hero_info_wrap">
											<div class="hero_thumbnail">
												{{-- <img src="assets/images/testimonial/img_03.png" alt="icon_not_found"> --}}
											</div>
											<div class="hero_info">
												<h3 class="hero_name">Westover Charles</h3>
												{{-- <span class="hero_title">Web designer</span> --}}
											</div>
										</div>
									</div>
								</div></div><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><div class="item">
									<div class="testimonial_primary">
										<div class="content_wrap">
											<p>
												Sed ut perspiciatis unde omnis iste natus
												error sit voluptatem accusantium doloremq
												ue laudantium totam rem aperiam eaqupsa quae abillo inventore veritatis et quasi arch
												itecto beatae vitae dicta sunt
											</p>
											<span class="quote_icon">
												<img src="assets/images/testimonial/quote_01.png" alt="icon_not_found">
											</span>
										</div>
										<div class="hero_info_wrap">
											<div class="hero_thumbnail">
												{{-- <img src="assets/images/testimonial/img_01.png" alt="icon_not_found"> --}}
											</div>
											<div class="hero_info">
												<h3 class="hero_name">Casey M. Vargas</h3>
												{{-- <span class="hero_title">Web designer</span> --}}
											</div>
										</div>
									</div>
								</div></div><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><div class="item">
									<div class="testimonial_primary">
										<div class="content_wrap">
											<p>
												Sed ut perspiciatis unde omnis iste natus
												error sit voluptatem accusantium doloremq
												ue laudantium totam rem aperiam eaqupsa quae abillo inventore veritatis et quasi arch
												itecto beatae vitae dicta sunt
											</p>
											<span class="quote_icon">
												<img src="assets/images/testimonial/quote_01.png" alt="icon_not_found">
											</span>
										</div>
										<div class="hero_info_wrap">
											<div class="hero_thumbnail">
												{{-- <img src="assets/images/testimonial/img_02.png" alt="icon_not_found"> --}}
											</div>
											<div class="hero_info">
												<h3 class="hero_name">Westover Charles</h3>
												{{-- <span class="hero_title">Web designer</span> --}}
											</div>
										</div>
									</div>
								</div></div><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><div class="item">
									<div class="testimonial_primary">
										<div class="content_wrap">
											<p>
												Sed ut perspiciatis unde omnis iste natus
												error sit voluptatem accusantium doloremq
												ue laudantium totam rem aperiam eaqupsa quae abillo inventore veritatis et quasi arch
												itecto beatae vitae dicta sunt
											</p>
											<span class="quote_icon">
												<img src="assets/images/testimonial/quote_01.png" alt="icon_not_found">
											</span>
										</div>
										<div class="hero_info_wrap">
											<div class="hero_thumbnail">
												{{-- <img src="assets/images/testimonial/img_03.png" alt="icon_not_found"> --}}
											</div>
											<div class="hero_info">
												<h3 class="hero_name">Westover Charles</h3>
												{{-- <span class="hero_title">Web designer</span> --}}
											</div>
										</div>
									</div>
								</div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<div class="card border border-0 shadow">
								<div class="card-header text-center bg-danger">
									<h4 class="small_title text-white">Make a Review</h4>
								</div>
								<div class="card-body">
									<div class="comment_form wow fadeInUp2 clearfix" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
										{{-- <h3 class="title_title mb_30">Reply Comments</h3> --}}
										<form action="#">
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="form_item">
														<input id="name_input" type="text" name="name" placeholder="Full Name Here" required>
														<label class="input_icon" for="name_input"><i class="fal fa-user"></i></label>
													</div>
												</div>
	
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="form_item">
														<input id="email_input" type="email" name="email" placeholder="Email Here" required>
														<label class="input_icon" for="email_input"><i class="fal fa-envelope-open"></i></label>
													</div>
												</div>
											</div>
	
											<div class="form_item">
												<textarea name="message" placeholder="Type a Review...."></textarea>
											</div>
											<div class="form_item">
												<div class="rating float-left">
													<label>
														<input type="radio" name="rating" value="1" required/>
														<span class="icon">★</span>
													</label>
													<label>
														<input type="radio" name="rating" value="2" required/>
														<span class="icon">★</span>
														<span class="icon">★</span>
													</label>
													<label>
														<input type="radio" name="rating" value="3" required/>
														<span class="icon">★</span>
														<span class="icon">★</span>
														<span class="icon">★</span>   
													</label>
													<label>
														<input type="radio" name="rating" value="4" required/>
														<span class="icon">★</span>
														<span class="icon">★</span>
														<span class="icon">★</span>
														<span class="icon">★</span>
													</label>
													<label>
														<input type="radio" name="rating" value="5" required/>
														<span class="icon">★</span>
														<span class="icon">★</span>
														<span class="icon">★</span>
														<span class="icon">★</span>
														<span class="icon">★</span>
													</label>
												</div>
												<button type="submit" class="btn bg-purple pt-2 pb-2 text-light pr-4 pl-4 float-right">
													Send Message
													<span><i class="fal fa-arrow-right"></i></span>
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="decoration_images_1">
						<div class="deco_image deco_image_1 wow fadeInUp2" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
							<img src="assets/images/services/deco_01.png" alt="image_not_found">
						</div>
						<div class="deco_image deco_image_2 wow fadeInUp2" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp2;">
							<img src="assets/images/services/deco_02.png" alt="image_not_found">
						</div>
						<div class="deco_image deco_image_3 wow fadeInUp2" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp2;">
							<img src="assets/images/services/deco_03.png" alt="image_not_found">
						</div>
						<div class="deco_image deco_image_4 wow fadeInUp2" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp2;">
							<img src="assets/images/services/deco_04.png" alt="image_not_found">
						</div>

						<div class="deco_image shape_image_1 wow fadeInUp2" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp2;">
							<img src="assets/images/services/shape_01.png" alt="image_not_found">
						</div>
						<div class="deco_image shape_image_2 wow fadeInUp2" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp2;">
							<img src="assets/images/services/shape_02.png" alt="image_not_found">
						</div>
					</div>

				</div>
			</section>

			{{--  <section class="blog_section sec_ptb_130 clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center mb-4">
							<h2 class="heading-2">Reviews & Ratings</h2>
						</div>
						<div class="col-lg-4">
							<div class="card p-4 border">
								<h4 class="text-secondary">Total Reviews</h4>
								<h2 class="text-purple">100k</h2>
								<p class="mb-0">Growth in reviews on this Year</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card p-4 border">
								<h4 class="text-secondary">Average Ratings</h4>
								<ul class="list-inline mb-0">
									<li class="list-inline-item ms-2 h2 fw-light mb-0">4.0</li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
								</ul>
								<p class="mb-0">Average Rating on this Year</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card border">
								<img src="assets/images/New/rating.png" style="height: 10vw;" alt="">
								
							</div>
						</div>
					</div>
				</div>
			</section>  --}}

			<section class="bg_grey sec_ptb_130 blog_section">
				<div class="container">
					<div class=" mt__20 mb_30 text-left">
						<h2 class="heading">Our Blog</h2>
						
						<p>Check out our BlogFor Printing Tips & Suggestions</p>
					</div>
					<div class="row justify-content-center">
						
						 {{-- <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
							<div class="card ">
								<!-- Image -->
								<img src="assets/images/New/blog1.png" class="card-img-top" alt="course image">
								<!-- Card body -->
								<div class="card-body bg-light">
									
									<!-- Title -->
									<h5 class="card-title mb-1 fw-normal"><a href="#" class="text-secondary">7 Ways to keep Your Customers Cool This Summer</a></h5>
									<p>As the days get hotter, summers are turning progressively unbearable. As a result, businesses must seek out ways to make their workplaces cool and comfortable. A move in...</p>
									<a href="" class="btn_3">Read More >>> </a>
								</div>
								
							</div>
						</div>  --}}
						<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 business-card hide-content" data-wow-delay=".1s">
							<div class="product_card">
								<a class="item_image" target="_blank" href="#">
									<img src="assets/images/New/blog1.png" alt="image_not_found">
								</a>
								
								<div class="item_content text-left">
									<h5 class="card-title mb-1 fw-normal"><a href="#" class="text-secondary">7 Ways to keep Your Customers Cool This Summer</a></h5>
									<p>As the days get hotter, summers are turning progressively unbearable. As a result, businesses must seek out ways to make their workplaces cool and comfortable. A move in...</p>
									<a href="" class="btn-3">Read More >>> </a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 business-card hide-content" data-wow-delay=".1s">
							<div class="product_card">
								<a class="item_image" target="_blank" href="#">
									<img src="assets/images/New/blog2.png" alt="image_not_found">
								</a>
								
								<div class="item_content text-left">
									<h5 class="card-title mb-1 fw-normal"><a href="#" class="text-secondary">7 Ways to keep Your Customers Cool This Summer</a></h5>
									<p>As the days get hotter, summers are turning progressively unbearable. As a result, businesses must seek out ways to make their workplaces cool and comfortable. A move in...</p>
									<a href="" class="btn-3">Read More >>> </a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 business-card hide-content" data-wow-delay=".1s">
							<div class="product_card">
								<a class="item_image" target="_blank" href="#">
									<img src="assets/images/New/blog3.png" alt="image_not_found">
								</a>
								
								<div class="item_content text-left">
									<h5 class="card-title mb-1 fw-normal"><a href="#" class="text-secondary">7 Ways to keep Your Customers Cool This Summer</a></h5>
									<p>As the days get hotter, summers are turning progressively unbearable. As a result, businesses must seek out ways to make their workplaces cool and comfortable. A move in...</p>
									<a href="" class="btn-3">Read More >>> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		
			{{-- <section class="sec_ptb_130">
				<div class="container bg-purple p-5" style="border-radius:10px;">
					<div class="row">
						<div class="text-center">
							<h3 class="text-light mb-3">Customizable Signs/Banners, Free Design Templates & Support - We've Got It All!</h3>
							<p class="text-light">At Amda Prints, we are dedicated to making your brand/business visible with quality printed signage solutions. From custom banner printing,
								quality stands & displays, personalized table covers & throws, to printed Flags; name what your signage need is and we'll turn it into reality. The
								pride we take in designing and printing comes from our commitment to product quality, the best price guarantee, and print expertise. Our
								products will help set you uniquely apart from your competitors and help you achieve your marketing and advertising goals. Whether you're a...</p>
								<a href="#" class="btn btn-4 pr-4 pl-4 mt-3">View All</a>
						</div>
					</div>
				</div>
			</section> --}}

			<section class="sec_ptb_130 under_blog_section">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="text-center icon-box">
								<img src="assets/images/New/icon7.png" class="mb-3" width="80" height="80" alt="">
								<h4 class="text-secondary">Best Price</h4>
								<p>Amdaprints offers the industrys best prices while using the highest</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="text-center icon-box">
								<img src="assets/images/New/icon8.png" class="mb-3" width="70" height="70" alt="">
								<h4 class="text-secondary">Free Design Proof</h4>
								<p>Our industry-leading designers provide free proof so you can be sure</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="text-center icon-box">
								<img src="assets/images/New/icon9.png" class="mb-3" width="60" height="60" alt="">
								<h4 class="text-secondary">Best Quality</h4>
								<p>If You are not satisfied, we're not satisfied. We'll reprint or refund your order - guaranteed</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section class="sec_ptb_130 subscribe_section">
				<div class="container bg-purple p-5" style="border-radius:10px;">
					<div class="row justify-content-center">
						<div class="text-center">
							<h4 class="text-light mb-3">Get 20% OFF + FREE Shipping* on your FIRST Order.</h4>
							<p class="text-light">For more exciting offers, Sign Up With Us</p>
							<form action="#" class="col-md-8 mt-4 m-auto">
								<div class="form_item2">
									<input type="email" name="email" placeholder="Enter Your Email">
									<button type="submit" class="submit_btn  btn bg-purple pt-2 pb-2 text-light pr-5 pl-5">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>

			
			<!-- shop_section - end
			================================================== -->
			{{--  <div class="" style="background-image: url('/img/banners/footer/{{$banners->footer ?? ''}}');height:40vh;width:-webkit-fill-available;background-size:cover;background-position: center center"></div>  --}}
		</main>
		<!-- main body - end
			================================================== -->

@include('front-end.section.footer')
@include('front-end.section.scripts')
</body>

</html>