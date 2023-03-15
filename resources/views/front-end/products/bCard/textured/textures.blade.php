<!DOCTYPE html>
<html lang="en">
    
    <head>
        @include('front-end.section.styles')
		<style>
			#priceCard {
				top: 12%;
				z-index: 1000;
			}
			#details_form {
			    height: auto;
			    overflow: unset;
			}
		</style>
    </head>
    <body>
        
        @include('front-end.section.header')

<!-- main body - start
		================================================== -->
		<main>
			<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section d-flex align-items-center clearfix" data-background="/assets/images/breadcrumb/bg_01.jpg">
				<div class="container">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay=".1s">
							<h1 class="page_title mb-0">Shop Details</h1>
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay=".1s">
							<ul class="breadcrumb_nav ul_li_right clearfix">
								<li><a href="/">Home</a></li>
								<li class="text-capitalize">{{$product}}</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->

			<!-- shop_section - start
				================================================== -->
				<section class="shop_section sec_ptb_130 bg_gray clearfix pt-5">
					<div class="container-fluid">
						<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
	
							<div class="col-lg-10 col-md-12 order-last">
								<div class="product_selection_bar wow fadeInUp2 clearfix" data-wow-delay=".1s">
									<div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
										<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
											<div class="select_option mb-0">
												<select>
													<option>Select Category</option>
													<option value="1">Business Cards</option>
													<option value="2">Banners</option>
													<option value="3">Office Stationary</option>
													<option value="4">Marketing Essentials</option>
													<option value="4">Sticker / Labels</option>
													<option value="4">Home Decore</option>
													<option value="4">Accessories</option>
												</select>
											</div>
										</div>
	
										<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 order-last">
											<div class="select_option float_right mb-0">
												<select>
													<option data-display="Short By">Select A Option</option>
													<option value="Name" selected>Name</option>
													<option value="Price">Price</option>
													<option value="Size">Size</option>
												</select>
											</div>
										</div>
	
										<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
											<p class="result_text">Showing 1–9 of 17 results</p>
										</div>
									</div>
								</div>
	
								<div class="row justify-content-center">
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
										<div class="product_card text-center">
											<a class="item_image" target="_blank" href="/business-cards/textured-business-cards/linen-business-card">
												<img src="/assets/images/details/shop/bCards/linen_business_card.jpg" alt="image_not_found">
											</a>
											<div class="item_content">
												<h3 class="item_title">Linen Business Card</h3>
												<span class="item_price"></span>
											</div>
										</div>
									</div>
	
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
										<div class="product_card text-center">
											<a class="item_image" target="_blank" href="/business-cards/textured-business-cards/cotton-business-card">
												<img src="/assets/images/details/shop/bCards/cotton_business_card.jpg" alt="image_not_found">
											</a>
											<div class="item_content">
												<h3 class="item_title">Cotton Business Card</h3>
												<span class="item_price"></span>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
										<div class="product_card text-center">
											<a class="item_image" target="_blank" href="/business-cards/textured-business-cards/rendezvous-business-card">
												<img src="/assets/images/details/shop/bCards/Rendezvous-Business-Card.jpg" alt="image_not_found">
											</a>
											<div class="item_content">
												<h3 class="item_title">Rendezvous Business Card</h3>
												<span class="item_price"></span>
											</div>
										</div>
									</div>
	
								</div>
							</div>
	
							<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
								<aside class="sidebar_section clearfix">
	
									<div class="widget wow fadeInUp2 sb_search_box_2 p-0" data-wow-delay=".1s">
										<form action="#">
											<div class="form_item mb-0">
												<input id="sb_search" type="search" name="search" placeholder="Search Keywords">
												<button type="submit" class="submit_btn bg_default_orange"><i class="fal fa-search"></i></button>
											</div>
										</form>
									</div>
	
									<div class="widget wow fadeInUp2 sb_category_list" data-wow-delay=".3s">
										<h3 class="sb_widget_title bottom_line">Search Here</h3>
										<ul class="ul_li_block clearfix">
											<li><a href="#!">Business Cards</a></li>
											<li><a href="#!">Banners</a></li>
											<li><a href="#!">Office Stationery</a></li>
											<li><a href="#!">Marketing Essentials</a></li>
											<li><a href="#!">Sticker / Labels</a></li>
											<li><a href="#!">Home Decore</a></li>
											<li><a href="#!">Accessories</a></li>
										</ul>
									</div>
	
									<div class="widget wow fadeInUp2 sb_tag_list_2" data-wow-delay=".5s">
										<h3 class="sb_widget_title bottom_line">Popular Tags</h3>
										<ul class="ul_li clearfix">
											<li><a href="#!">Trending</a></li>
											<li><a href="#!">Most Viewed</a></li>
											<li><a href="#!">Featured</a></li>
										</ul>
									</div>
	
									<div class="widget wow fadeInUp2 price-range" data-wow-delay=".7s">
										<h3 class="sb_widget_title bottom_line">Filer By Price</h3>
										<form action="#">
											<div class="price-range-area clearfix">
												<div id="slider-range" class="slider-range"></div>
												<div class="price-text d-flex align-items-center">
													<span>Price:</span>
													<input type="text" id="amount" readonly>
												</div>
											</div>
										</form>
									</div>
	
								</aside>
							</div>
	
						</div>
					</div>
				</section>
				<!-- shop_section - end
				================================================== -->
		</main>
		<!-- main body - end
		================================================== -->
@include('front-end.section.footer')
@include('front-end.section.scripts')
</body>
</html>