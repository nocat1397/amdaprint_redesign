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
							<h1 class="page_title mb-0">Shop</h1>
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay=".1s">
							<ul class="breadcrumb_nav ul_li_right clearfix">
								<li><a href="/">Home</a></li>
								<li>Shop</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- shop_section - start
			================================================== -->
			<section class="shop_section sec_ptb_130 bg_gray clearfix">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-9 col-md-12 order-last">
							<div class="product_selection_bar wow fadeInUp2 clearfix" data-wow-delay=".1s">
								<div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="select_option mb-0">
											<select>
												<option data-display="Category">Select A Option</option>
												<option value="1" selected>Category 1</option>
												<option value="2">Category 2</option>
												<option value="3">Category 3</option>
												<option value="4">Category 4</option>
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
										<a class="item_image" target="_blank" href="/product-details">
											<img src="assets/images/shop/img_01.jpg" alt="image_not_found">
										</a>
										<div class="item_content">
											<h3 class="item_title">Business Card</h3>
											<span class="item_price">₹25.83</span>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
									<div class="product_card text-center">
										<a class="item_image" target="_blank" href="/product-details">
											<img src="assets/images/shop/img_02.jpg" alt="image_not_found">
										</a>
										<div class="item_content">
											<h3 class="item_title">Cover Letters</h3>
											<span class="item_price">₹25.83</span>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
									<div class="product_card text-center">
										<a class="item_image" target="_blank" href="/product-details">
											<img src="assets/images/shop/img_03.jpg" alt="image_not_found">
										</a>
										<div class="item_content">
											<h3 class="item_title">Invitation Card</h3>
											<span class="item_price">₹25.83</span>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
									<div class="product_card text-center">
										<a class="item_image" target="_blank" href="/product-details">
											<img src="assets/images/shop/img_04.jpg" alt="image_not_found">
										</a>
										<div class="item_content">
											<h3 class="item_title">CV/Resume Design</h3>
											<span class="item_price">₹25.83</span>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
									<div class="product_card text-center">
										<a class="item_image" target="_blank" href="/product-details">
											<img src="assets/images/shop/img_05.jpg" alt="image_not_found">
										</a>
										<div class="item_content">
											<h3 class="item_title">Design & Branding</h3>
											<span class="item_price">₹25.83</span>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
									<div class="product_card text-center">
										<a class="item_image" target="_blank" href="/product-details">
											<img src="assets/images/shop/img_06.jpg" alt="image_not_found">
										</a>
										<div class="item_content">
											<h3 class="item_title">Logo & Mockup</h3>
											<span class="item_price">₹25.83</span>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
									<div class="product_card text-center">
										<a class="item_image" target="_blank" href="/product-details">
											<img src="assets/images/shop/img_07.jpg" alt="image_not_found">
										</a>
										<div class="item_content">
											<h3 class="item_title">T - Shirt Design</h3>
											<span class="item_price">₹25.83</span>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
									<div class="product_card text-center">
										<a class="item_image" target="_blank" href="/product-details">
											<img src="assets/images/shop/img_08.jpg" alt="image_not_found">
										</a>
										<div class="item_content">
											<h3 class="item_title">Flyer & Banner</h3>
											<span class="item_price">₹25.83</span>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
									<div class="product_card text-center">
										<a class="item_image" target="_blank" href="/product-details">
											<img src="assets/images/shop/img_09.jpg" alt="image_not_found">
										</a>
										<div class="item_content">
											<h3 class="item_title">Business Card</h3>
											<span class="item_price">₹25.83</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
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
										<li><a href="#!">Accessories</a></li>
										<li><a href="#!">Clothing</a></li>
										<li><a href="#!">Decor</a></li>
										<li><a href="#!">Hoodies</a></li>
										<li><a href="#!">Music</a></li>
										<li><a href="#!">Tshirts</a></li>
										<li><a href="#!">Uncategorized</a></li>
									</ul>
								</div>

								<div class="widget wow fadeInUp2 sb_tag_list_2" data-wow-delay=".5s">
									<h3 class="sb_widget_title bottom_line">Popular Tags</h3>
									<ul class="ul_li clearfix">
										<li><a href="#!">Cleaning</a></li>
										<li><a href="#!">Business</a></li>
										<li><a href="#!">Car</a></li>
										<li><a href="#!">House</a></li>
										<li><a href="#!">Washing</a></li>
										<li><a href="#!">Agency</a></li>
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