<!DOCTYPE html>
<html lang="en">
    
    <head>
        @include('front-end.section.styles')
		<style>
			#priceCard {
				top: 0%;
			    width: 300px;
			    right: 0%;
			}
			#pccard{
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


			{{--  <!-- details_section - start
			================================================== -->
			<section class="details_section shop_details sec_ptb_130 pt-0 bg_gray clearfix">
				<div class="shop_container">
					<div class="container-fluid">

						<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
							<div class="col-lg-5 col-md-6 col-sm-10 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
								<div class="details_image clearfix">
									<div class="tab-content">
										<div id="image_1" class="tab-pane active">
											<img src="/assets/images/details/shop/bCards/die1.jpg" alt="image_not_found">
										</div>
										<div id="image_2" class="tab-pane fade">
											<img src="/assets/images/details/shop/bCards/die2.jpg" alt="image_not_found">
										</div>
										<div id="image_3" class="tab-pane fade">
											<img src="/assets/images/details/shop/bCards/die3.jpg" alt="image_not_found">
										</div>
										<div id="image_4" class="tab-pane fade">
											<img src="/assets/images/details/shop/bCards/die4.jpg" alt="image_not_found">
										</div>
										<div id="image_5" class="tab-pane fade">
											<img src="/assets/images/details/shop/bCards/die5.jpg" alt="image_not_found">
										</div>
									</div>

									<ul class="nav ul_li_block clearfix float-left owl-carousel productImg_slider" role="tablist">
										<li>
											<a class="active" data-toggle="tab" href="#image_1">
												<img src="/assets/images/details/shop/bCards/die1.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_2">
												<img src="/assets/images/details/shop/bCards/die2.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_3">
												<img src="/assets/images/details/shop/bCards/die3.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_4">
												<img src="/assets/images/details/shop/bCards/die4.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_5">
												<img src="/assets/images/details/shop/bCards/die5.jpg" alt="image_not_found">
											</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-lg-5 col-md-6 col-sm-10 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
								<div class="details_content">
									<h2 class="item_title mb_15 text-capitalize">{{$product}}</h2>
								
									{{-- <span class="price_text mb_30"><strong>₹89.00</strong> <del>₹100.00</del></span> --}}
									{{--  <div id="details_form">
                                        <form action="" class="productForm">
                                            @csrf
                                            <hr class="mt-5 mb-5">
                                            <div class="form-row mb-3">
												<div class="col-md-3">
													<label class="my-1 mr-2">Rounded Corners</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="w-100" id="stand">
                                                        <option selected value="10">2" x 3.5" (U.S. Standard)</option>
                                                        <option selected value="10">1.75" x 3.5" (slim)</option>
                                                        <option selected value="10">2" x 2" (Mini Square)</option>
                                                        <option selected value="10">2.125" x 3.375" (Euro)</option>
                                                        <option selected value="10">2.5" x 2.5" (Square)</option>
                                                        <option selected value="10">3" x 3" (Jumbo Square)</option>
                                                        <option value="15">Custom Size</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Rounded Corners</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="stand">
														<option selected value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select>
                                                </div>
												
                                            </div>
											
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Printed Side</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="lamination">
														<option selected value="0">Front Only</option>
                                                        <option value="1">Front and Back</option>
                                                    </select>
                                                </div>
												
                                            </div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Bundling</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="lamination">
														<option selected value="0">None</option>
                                                        <option value="1">Shrink Wrapping</option>
                                                    </select>
                                                </div>
												
                                            </div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Paper Type</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="bannerAdd">
														<option selected value="0">14 pt. Cardstock Gloss</option>
                                                        <option value="1">14 pt. Cardstock Matte</option>
                                                        <option value="1">14 pt. Cardstock High Gloss (UV)</option>
                                                        <option value="1">14 pt. Cardstock Uncoated</option>
                                                        <option value="1">16 pt. Cardstock Gloss</option>
                                                        <option value="1">16 pt. Cardstock Matte</option>
                                                        <option value="1">17 pt. Cardstock Uncoated</option>
                                                    </select>
                                                </div>
												
												
                                            </div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Quantity</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="stand">
														<option selected value="0">25</option>
														<option selected value="0">50</option>
														<option selected value="0">75</option>
														<option selected value="0">100</option>
														<option selected value="0">150</option>
														<option selected value="0">200</option>
														<option selected value="0">250</option>
														<option selected value="0">500</option>
														<option selected value="0">1,000</option>
														<option selected value="0">1,500</option>
														<option selected value="0">2,000</option>
														<option selected value="0">2,500</option>
														<option selected value="0">3,000</option>
														<option selected value="0">3,500</option>
														<option selected value="0">4000</option>
														<option selected value="0">4,500</option>
														<option selected value="0">5,000</option>
														<option selected value="0">6,000</option>
														<option selected value="0">7,000</option>
														<option selected value="0">8,000</option>
														<option selected value="0">9,000</option>
														<option selected value="0">10,000</option>
                                                    </select>
                                                </div>
												
												
                                            </div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Printing Time:</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="stand">
														<option selected value="0">6 Business Days</option>
														<option selected value="0">4 Business Days</option>
														<option selected value="0">2 Business Days</option>
                                                    </select>
                                                </div>
												
                                            </div>
											<hr>
											<div class="form-row mb-3" id="">
												<div class="col-md-4">
													<h5 class="my-1 mr-2">Printing Cost:</h5>
                                                </div>
												
                                                <div class="col-md-6">
													<h3 class="text-danger">$105.93</h3>
													<p>( $0.42 for each )</p>
                                                </div>
												
                                            </div>
                                        </form>
                                    </div>
								</div>
							</div>
                            <div class="col-md-2 col-lg-2">
								<div class="card shadow text-center border boder-0" id="priceCard">
									<div class="card-body">
										<span class="price_text mb_30"><strong class="text-danger">$<span id="finalTotal"></span></strong> <del>$<span id="total"></span> </del></span>
									</div>
									<div class="card-footer">
										<a href="#" class="addtocart_btn custom_btn bg_default_orange">Add To Cart</a>
									</div>
								</div>
							</div>
						</div>

						<hr>

						<div class="shop_description clearfix">
							<ul class="nav description_tabnav ul_li wow fadeInUp2 clearfix" data-wow-delay=".1s" role="tablist">
								<li>
									<a class="active" data-toggle="tab" href="#description_tab">Description</a>
								</li>
								<li>
									<a data-toggle="tab" href="#additionalinfo_tab">Additional information</a>
								</li>
								<li>
									<a data-toggle="tab" href="#reviews_tab">Reviews (1)</a>
								</li>
							</ul>

							<div class="tab-content wow fadeInUp2" data-wow-delay=".3s">
								<div id="description_tab" class="tab-pane active">
									<p class="mb_30">
										Sorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur xcepteur sint occaecat cupidatat non proident, sunt.
									</p>
									<p class="mb-0">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudinInteger in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, 
									</p>
								</div>
								<div id="additionalinfo_tab" class="tab-pane fade">
									<p class="mb_30">
										Sorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur xcepteur sint occaecat cupidatat non proident, sunt.
									</p>
									<p class="mb-0">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudinInteger in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, 
									</p>
								</div>
								<div id="reviews_tab" class="tab-pane fade">
									<p class="mb_30">
										Sorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur xcepteur sint occaecat cupidatat non proident, sunt.
									</p>
									<p class="mb-0">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudinInteger in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, 
									</p>
								</div>
							</div>
						</div>

						<hr>

						<div class="row mt__30 justify-content-center">
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
								<div class="product_card text-center bg_gray">
									<a class="item_image" target="_blank" href="shop_details.html">
										<img src="/assets/images/shop/img_01.jpg" alt="image_not_found">
									</a>
									<div class="item_content">
										<h3 class="item_title">Business Card</h3>
										<span class="item_price">₹25.83</span>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
								<div class="product_card text-center bg_gray">
									<a class="item_image" target="_blank" href="/products">
										<img src="/assets/images/shop/img_02.jpg" alt="image_not_found">
									</a>
									<div class="item_content">
										<h3 class="item_title">Cover Letters</h3>
										<span class="item_price">₹25.83</span>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
								<div class="product_card text-center bg_gray">
									<a class="item_image" target="_blank" href="/products">
										<img src="/assets/images/shop/img_03.jpg" alt="image_not_found">
									</a>
									<div class="item_content">
										<h3 class="item_title">Invitation Card</h3>
										<span class="item_price">₹25.83</span>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".7s">
								<div class="product_card text-center bg_gray">
									<a class="item_image" target="_blank" href="/products">
										<img src="/assets/images/shop/img_04.jpg" alt="image_not_found">
									</a>
									<div class="item_content">
										<h3 class="item_title">CV/Resume Design</h3>
										<span class="item_price">₹25.83</span>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- details_section - end  --}}
			{{--  ================================================== -->    --}}

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
											<a class="item_image" target="_blank" href="/business-cards/standard-business-cards/custom-business-card">
												<img src="/assets/images/details/shop/bCards/standard/custom/custom2.jpg" alt="image_not_found">
											</a>
											<div class="item_content">
												<h3 class="item_title">Custom Business Card</h3>
												<span class="item_price"></span>
											</div>
										</div>
									</div>
	
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
										<div class="product_card text-center">
											<a class="item_image" target="_blank" href="/business-cards/standard-business-cards/slim-business-card">
												<img src="/assets/images/details/shop/bCards/Slim_Business_Cards.jpg" alt="image_not_found">
											</a>
											<div class="item_content">
												<h3 class="item_title">Slim Business Card</h3>
												<span class="item_price"></span>
											</div>
										</div>
									</div>
	
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
										<div class="product_card text-center">
											<a class="item_image" target="_blank" href="/business-cards/standard-business-cards/square-business-card">
												<img src="/assets/images/details/shop/bCards/Square_Business_Cards.jpg" alt="image_not_found">
											</a>
											<div class="item_content">
												<h3 class="item_title">Square Business Card</h3>
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