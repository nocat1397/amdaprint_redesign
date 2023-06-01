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
				top: 14%;
			    z-index: 1000;
			    width: 300px;
			    right: 6%;
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


			<!-- details_section - start
			================================================== -->
			<section class="details_section shop_details sec_ptb_130 pt-0 bg_gray clearfix">
				<div class="shop_container">
					<div class="container-fluid">

						<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
							<div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
								<div class="details_image clearfix">
									<div class="tab-content">
										<div id="image_1" class="tab-pane active">
											<img src="/assets/images/details/shop/Banners/eco-friendly/1.jpg" alt="image_not_found">
										</div>
										<div id="image_2" class="tab-pane fade">
											<img src="/assets/images/details/shop/Banners/eco-friendly/2.jpg" alt="image_not_found">
										</div>
										<div id="image_3" class="tab-pane fade">
											<img src="/assets/images/details/shop/Banners/eco-friendly/3.jpg" alt="image_not_found">
										</div>
									</div>

									<ul class="nav ul_li_block clearfix float-left owl-carousel productImg_slider" role="tablist">
										<li>
											<a class="active" data-toggle="tab" href="#image_1">
												<img src="/assets/images/details/shop/Banners/eco-friendly/1.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_2">
												<img src="/assets/images/details/shop/Banners/eco-friendly/2.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_3">
												<img src="/assets/images/details/shop/Banners/eco-friendly/3.jpg" alt="image_not_found">
											</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-lg-5 col-md-6 col-sm-10 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
								<div class="details_content">
									<h2 class="item_title mb_15 text-capitalize">{{$product}}</h2>
									<ul class="rating_star ul_li mb-2 clearfix">
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star-half"></i></li>
									</ul>
									<div class="row mb-4">
										<div class="bg-lights p-3 col-md-6">
											<ul class="list-unstyled mb-0">
												<li><i class="fas fa-caret-right text-danger mr-2"></i>We offer grommets, strong adhesive tabs, & pole pockets as finishing options.</li>
												<li><i class="fas fa-caret-right text-danger mr-2"></i>The flex material is PVC-free.</li>											
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Priority shipping is available.</li>											
											</ul>
										</div>
										<div class="bg-lights p-3 col-md-6">
											<ul class="list-unstyled mb-0">
												<li><i class="fas fa-caret-right text-danger mr-2"></i>720DPI, full color, UV printing is used.</li>
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Bulk quantities are eligible for discounts.</li>											
											</ul>
										</div>
									</div>
									{{-- <span class="price_text mb_30"><strong>₹89.00</strong> <del>₹100.00</del></span> --}}
									<div id="details_form">
                                        <form action="" class="productForm">
                                            @csrf
                                            <div class="form-row mb-3">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2">Size (W x H)</label>
                                                </div>

                                                <div class="col form-inline">
                                                    <select class="mr-2 w-50" id="bannerSize">
                                                        <option selected value="6">3 x 2 Feet</option>
                                                        <option value="8">2 x 4 Feet</option>
                                                        <option value="15">3 x 5 Feet</option>
                                                        <option value="12">3 x 4 Feet</option>
                                                        <option value="30">5 x 6 Feet</option>
                                                        <option value="42">6 x 7 Feet</option>
                                                        <option value="10">5 x 2 Feet</option>
                                                        <option value="45">15 x 3 Feet</option>
                                                        
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2">Quantitiy</label>
                                                </div>

                                                <div class="col">
                                                    <input class="input_number w-50" type="number" value="1" id="mainQty" min="1">
                                                </div>
                                               
                                            </div>
                                            <hr class="mt-5 mb-5">
                                            <div class="form-row mb-3">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2">Hanging Options</label>
                                                </div>

                                                <div class="col">
													<select class="w-100" id="hanging">
                                                        <option selected value="0">No grommets</option>
                                                        <option value="1">Top and Bottom Pole Pocket</option>
                                                        <option value="1">Top Pole Pocket</option>
                                                        <option value="1">Left and Right Pole Pocket</option>
                                                        <option value="1">Metal grommets</option>
                                                        <option value="1">Ultra-strong Adhesive Tabs (Recommended)</option>
                                                    </select>
                                                </div>
                                               
                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2">Wind Flaps</label>
                                                </div>

                                                <div class="col-md-6">
                                                    <select class="w-100" id="wind">
                                                        <option selected value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select>
                                                </div>
												<div class="col-md-3">
													<label id="windAmount" class="text-danger font-weight-bold">$<span>8.99</span></label>
												</div>
												
                                            </div>
                                            
                                            <div class="form-row mb-3">
                                                <div class="col-md-3">
													<label class="my-1 mr-2">Upgrade To Premium</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="uvPrim">
														<option selected value="0">No</option>
                                                        <option value="1">16 oz with UV Print</option>
                                                    </select>
                                                </div>
												<div class="col-md-3">
												   <label id="uvPrimAmount" class="text-danger font-weight-bold">$<span></span></label>
												</div>
                                            </div>
                                            
											<hr class="mt-5 mb-5">
											<div class="form-row mb-3">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2">Add Accessories (optional)</label>
                                                </div>

                                                <div class="col">
                                                    <select class="w-50" id="accessories">
                                                        <option selected value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select>
                                                </div>
                                               
                                            </div>
											<div id="accSection" class="d-none">

											
											{{-- ---------------------------Hanging Clamp Start-------------------------------- --}}
											{{-- <div class="form-row mb-3">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2">Hanging Clamp Bar</label>
                                                </div>

                                                <div class="col">
                                                    <select class="w-50">
                                                        <option selected>No</option>
                                                        <option >Yes</option>
                                                    </select>
                                                </div>
                                               
                                            </div>
											<div class="form-row mb-3">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2"></label>
                                                </div>

                                                <div class="col">
													<div class="form-group mb-4">
														<label for="">Size (W x H)</label>
														<div class="form-group">
															<select class="">
																<option selected>3 Ft</option>
															</select>
														</div>
													</div>
													<br>
													<div class="form-group">
														<label for="">Quantity</label>
														<div class="form-group">
															<input class="input_number w-50" type="text" value="1">
														</div>
													</div>
                                                </div>
                                               
                                            </div> --}}
											{{-- ---------------------------Hanging Clamp End-------------------------------- --}}

											{{-- ---------------------------Zip Ties Start-------------------------------- --}}
											<div class="form-row mb-3">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2">Zip Ties</label>
                                                </div>

                                                <div class="col-md-6">
                                                    <select class="w-100" id="zip">
                                                        <option selected value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select>
                                                </div>
                                               <div class="col-md-3">
													<label id="zipAmount" class="text-danger font-weight-bold">$<span>1.89</span></label>
											   </div>
                                            </div>
											<div class="form-row mb-3" id="zipSection">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2"></label>
                                                </div>

                                                <div class="col">
													<div class="form-group mb-4">
														<label for="">Pack of</label>
														<div class="form-group">
															<input class="input_number w-50" type="number" value="4" disabled>
														</div>
													</div>
													
													{{-- <div class="form-group">
														<label for="">Quantity</label>
														<div class="form-group">
															<input class="input_number w-50" type="text" value="1">
														</div>
													</div> --}}
                                                </div>
                                               
                                            </div>
											{{-- ---------------------------Zip Ties End-------------------------------- --}}

											{{-- ---------------------------Bungees Start-------------------------------- --}}
											<div class="form-row mb-3">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2">Bungees</label>
                                                </div>

                                                <div class="col-md-6">
                                                    <select class="w-100" id="bungee">
                                                        <option selected value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select>
                                                </div>
                                               <div class="col-md-3">
													<label id="bungeeAmount" class="text-danger font-weight-bold">$<span>2.79</span></label>
											   </div>
                                            </div>
											<div class="form-row mb-3" id="bungeeSection">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2"></label>
                                                </div>

                                                <div class="col">
													<div class="form-group mb-4">
														<label for="">Size</label>
														<div class="form-group">
															<input class="input_number w-50" type="text" value="10 Inches" disabled>
														</div>
													</div>
													
													<div class="form-group mb-4">
														<label for="">Pack of</label>
														<div class="form-group">
															<input class="input_number w-50" type="number" value="2" disabled>
														</div>
													</div>
													
													{{-- <div class="form-group">
														<label for="">Quantity</label>
														<div class="form-group">
															<input class="input_number w-50" type="text" value="1">
														</div>
													</div> --}}
                                                </div>
                                               
                                            </div>
											{{-- ---------------------------Bungees End-------------------------------- --}}

											{{-- ---------------------------Nylon Rope Start-------------------------------- --}}
											<div class="form-row mb-3">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2">Nylon Rope</label>
                                                </div>

                                                <div class="col-md-6">
                                                    <select class="w-100" id="nylon">
                                                        <option selected value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select>
                                                </div>
                                               <div class="col-md-3">
													<label id="nylonAmount" class="text-danger font-weight-bold">$<span>0.80</span></label>
											   </div>
                                            </div>
											<div class="form-row mb-3" id="nylonSection">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2"></label>
                                                </div>

                                                <div class="col">
													<div class="form-group mb-4">
														<label for="">Size</label>
														<div class="form-group">
															<select class="w-50" id="nylonSize">
																@for ($i = 1; $i < 51; $i++)
																<option @if($i == 1) selected @endif value="{{$i}}">{{$i}} Meter</option>
																@endfor
															</select>
														</div>
													</div>
													<br>
													{{-- <div class="form-group">
														<label for="">Quantity</label>
														<div class="form-group">
															<input class="input_number w-50" type="text" value="1">
														</div>
													</div> --}}
                                                </div>
                                               
                                            </div>
											{{-- ---------------------------Nylon Rope End-------------------------------- --}}

											{{-- ---------------------------Glass Hooks Start-------------------------------- --}}
											<div class="form-row mb-3">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2">Glass Hooks</label>
                                                </div>

                                                <div class="col-md-6">
                                                    <select class="w-100" id="glass">
                                                        <option selected value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select>
                                                </div>
												<div class="col-md-3">
													<label id="glassAmount" class="text-danger font-weight-bold">$<span>2.49</span></label>
											   </div>
                                            </div>
											<div class="form-row mb-3" id="glassSection">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2"></label>
                                                </div>

                                                <div class="col">
													<div class="form-group mb-4">
														<label for="">Size</label>
														<div class="form-group">
															<input class="input_number w-50" type="text" value="2 Inches" disabled>
														</div>
													</div>
													
													<div class="form-group mb-4">
														<label for="">Pack of</label>
														<div class="form-group">
															<input class="input_number w-50" type="number" value="4" disabled>
														</div>
													</div>
													<br>
													{{-- <div class="form-group">
														<label for="">Quantity</label>
														<div class="form-group">
															<input class="input_number w-50" type="text" value="1">
														</div>
													</div> --}}
                                                </div>
                                               
                                            </div>
											{{-- ---------------------------Glass Hooks End-------------------------------- --}}

											{{-- ---------------------------Banner Clips Start-------------------------------- --}}
											<div class="form-row mb-3">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2">Banner Clips</label>
                                                </div>

                                                <div class="col-md-6">
                                                    <select class="w-100" id="clips">
                                                        <option selected value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select>
                                                </div>
												<div class="col-md-3">
													<label id="clipAmount" class="text-danger font-weight-bold">$<span>7.59</span></label>
											   </div>
                                            </div>
											<div class="form-row mb-3" id="clipSection">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2"></label>
                                                </div>

                                                <div class="col">
													<div class="form-group mb-4">
														<label for="">Pack of</label>
														<div class="form-group">
															<input class="input_number w-50" type="number" value="4" disabled>
														</div>
													</div>
													<br>
													{{-- <div class="form-group">
														<label for="">Quantity</label>
														<div class="form-group">
															<input class="input_number w-50" type="text" value="1">
														</div>
													</div> --}}
                                                </div>
                                               
                                            </div>
											{{-- ---------------------------Banner Clips End-------------------------------- --}}
										</div>
                                        </form>
                                    </div>
									{{-- <ul class="quantity_cart ul_li mb_30 clearfix">
										<li>
											<div class="quantity_input">
												<form action="#">
													<span class="input_number_decrement">–</span>
													<input class="input_number" type="text" value="1">
													<span class="input_number_increment">+</span>
												</form>
											</div>
										</li>
										<li><a href="#!" class="addtocart_btn custom_btn bg_default_orange">Add To Cart</a></li>
									</ul>
									<div class="share_links d-flex align-items-center clearfix">
										<span class="social_title">Shore Now</span>
										<ul class="primary_social_links ul_li clearfix">
											<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#!"><i class="fab fa-youtube"></i></a></li>
											<li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
										</ul>
									</div> --}}
								</div>
							</div>
                            <div class="col-md-2 col-lg-3">
								<div class="card shadow text-center border boder-0" id="priceCard">
									<div class="card-body">
										<h5 class="price_text mb_30"><strong class="text-danger">$<span id="total"></span></strong> <del>$<span id="finalTotal"></span> </del></h5>
										<form>
											<div class="text-left">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="route" value="0" id="route1" checked>
													<label class="form-check-label" for="route1">
														<strong class="text-dark">Upload Artwork</strong>
													</label>
													<p class="text-muted">Upload your designs and get the design proofing done</p>
												  </div>
												  <div class="form-check">
													<input class="form-check-input" type="radio" name="route" value="1" id="route2">
													<label class="form-check-label" for="route2">
														<strong class="text-dark">Hire a Designer @ $9.99</strong>
													</label>
													<p class="text-muted">Let a professional Designer create your design @ $9.99</p>
												  </div>
											</div>
										</form>
									</div>
									<div class="card-footer">
										{{-- @if(Auth::check())
										<a href="javascript:void(0)" class="addtocart_btn custom_btn bg_default_orange" onclick="addCart()">Checkout</a>
										@else 
										<a href="/user/login" target="_blank" class="addtocart_btn custom_btn bg_default_orange">Checkout</a>
										@endif --}}
										<a href="javascript:void(0)" class="addtocart_btn custom_btn bg_default_orange" onclick="addCart({{auth()->check() ? 1 : 0}})">Checkout</a>
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
										We print on the highest quality fabrics to create beautiful, eco-friendly banners for trade shows, events, meetings, corporate offices, and street banners for outdoor use, Basically anywhere our customers want to display their brand.Eco Banner Printing products are PVC free and 100% recyclable, providing an environmentally responsible alternative to traditional PVC Banners.
									</p>
									
										<strong>Our Eco-Friendly Banners Are PVC-Free</strong>
										
										<p>If you own a business, are a retailer, or even a frequent exhibitor- you sure need a banner to promote your services and products. But the question is, with so many choices of banners available, which one should you opt for? Take a look at our eco-friendly banners. They are not just affordable but completely recyclable too. Our premium PVC banners are durable, long-lasting, and can be customized easily.</p>
										
										<p>Our custom banners are made using sustainable PVC-free material. These environmentally responsible banners are high in quality and functionality. Due to their versatile nature, these banners work great for trade shows, retail signages, business marketing campaigns, and more.</p>
										
										<p>The graphic weight of our banners is 5OZ. The graphic size variance of these custom banners up to 5 ft is +/- 0.5 inches, and more than 5 ft is +/- 1 inch. You can install the custom banners using grommets, strong adhesive tabs (which we highly recommend), and pole pockets.</p>
										
										<p>We use full color, 720DPI, UV-printing technology for a highly attractive and vibrant-looking banner. Our high-definition print quality can withstand multiple external elements like UV rays.</p>
										
										<strong>Customize Your own Eco-Friendly Banner</strong>
										
										<p>To help you achieve your unique advertising/promotional goals, you have the option of customizing your banners. You can use our free design tools for quick personalization and custom designing. You can also choose from a variety of unique banner templates to kickstart your design.</p>
										
										<p>You can take our expert designers’ assistance to fulfill your particular needs. Our team will help you achieve your unique idea, logo, or message at a nominal price and a quick turnaround time.</p>
										
										<strong>Our Eco-Friendly Banners are Available at a Special Discount</strong>
										
										<p>Get a significant discount on all bulk orders for your custom banners. We offer a special discount on any quantities ranging from 2 and above. Place a bulk order today and enjoy good value for money.</p>
										
								</div>
								<div id="additionalinfo_tab" class="tab-pane fade">
									<ul class="list-unstyled">
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Our Eco-Friendly Banners print superbly at high resolution.</li>
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Eco Mesh Banner is printed using eco-solvent inks, while Eco Banner 300 and Eco Banner 220 are printed using safe Latex inks.</li>
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Recyclable banners are now very much in demand and avoid users from having to send their marketing to landfill.</li>
									</ul>
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
			<!-- details_section - end
			================================================== -->


		</main>
		<!-- main body - end
		================================================== -->
@include('front-end.section.footer')
@include('front-end.section.scripts')
<script>
	$('#bannerSize').on('change',function(){
		
		// $('#wind').prop('selectedIndex', 0);
		$('#wind,#uvPrim,#zip,#bungee,#nylon,#glass,#clips,#accessories').val('0');
      	$('#wind,#uvPrim,#zip,#bungee,#nylon,#glass,#clips,#accessories').niceSelect('update');
		$('#zipSection,#bungeeSection,#nylonSection,#glassSection,#clipSection,#windAmount,#uvPrimAmount,#zipAmount,#bungeeAmount,#nylonAmount,#glassAmount,#clipAmount,#accSection').fadeOut().hide();
		$('#mainQty').val(1);
		if($('#bannerSize').val() == 0)
		{
		
			var bannerSize = $('#customOne').val()*$('#customTwo').val();
		
		} else {
		
			var bannerSize = $('#bannerSize').val();
		
		}
		if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
		$('#total').html(bannerRate.toFixed(2));
		var finalTotal = (bannerRate*100)/50;
		$('#finalTotal').html(finalTotal.toFixed(2));
	});
	$('#mainQty').on('change',function(){
		
		// $('#wind').prop('selectedIndex', 0);
		$('#wind,#uvPrim,#zip,#bungee,#nylon,#glass,#clips,#accessories').val('0');
      	$('#wind,#uvPrim,#zip,#bungee,#nylon,#glass,#clips,#accessories').niceSelect('update');
		$('#zipSection,#bungeeSection,#nylonSection,#glassSection,#clipSection,#windAmount,#uvPrimAmount,#zipAmount,#bungeeAmount,#nylonAmount,#glassAmount,#clipAmount,#accSection').fadeOut().hide();
		// $('#bannerSize').val(5).niceSelect('update');

		if($('#bannerSize').val() == 0)
		{
		
			var bannerSize = $('#customOne').val()*$('#customTwo').val();
		
		} else {
		
			var bannerSize = $('#bannerSize').val();
		
		}
		if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
		$('#total').html(bannerRate.toFixed(2));
		var finalTotal = (bannerRate*100)/50;
		$('#finalTotal').html(finalTotal.toFixed(2));
	});
</script>
<script>
	function addCart(loginStatus)
	{
		var loginStatus = loginStatus;
		// alert(loginStatus);
		if (loginStatus > 0) {
		if($('#bannerSize').val() == 0)
		{
			var bannerSize = $('#customOne').val()+' x '+$('#customTwo').val()+' Feet';
		} else {
			var bannerSize = $('#bannerSize').find(":selected").text();
		}
		var category = 'Banners';
		var route = $('input[name="route"]:checked').val();
		var name = '<?php echo $product ?>';
		var total = $('#total').html();
		var size = bannerSize;
		var qty = $('#mainQty').val();
		var hanging = $('#hanging').find(":selected").text();
		var wind = $('#wind').find(":selected").text();
		var UVprime = $('#uvPrim').find(":selected").text();
		var img = $('#image_1').find('img').attr('src');

		if ($('#accessories').val() > 0) {
			// alert($('#accessories').val());
			// return false;
			if($('#zip') > 0)
			{
				var zip = 'Pack of 4';
			} else {
				var zip = 'No'
			}
			if($('#bungee').val() > 0)
			{
				var bungee = '10 inches (Pack of 4)';
			} else {
				var bungee = 'No'
			}
			if($('#nylon').val() > 0)
			{
				var nylon = $('#nylonSize').find(":selected").text();
			} else {
				var nylon = 'No'
			}
			if($('#glass').val() > 0)
			{
				var glass = '2 inches (Pack of 4)';
			} else {
				var glass = 'No'
			}
			if($('#clips').val() > 0)
			{
				var clips = 'Pack of 4';
			} else {
				var clips = 'No'
			}

			$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
              	type: "POST",
              	url: "/cart-add",
              	data: {category:category,name:name,amount:total,size:size,qty:qty,img:img,hanging:hanging,windFlaps:wind,
						premium:UVprime,zip:zip,bungees:bungee,
						nylonRope:nylon,glassHooks:glass,bannerClips:clips,route:route},
				
              	success:function(response) {
					if(route > 0)
					{
						location.replace('/designer/'+response.id);
					} else {
						location.replace('/uploadfile/'+response.id);
					}
              	},
              	error: function(error){
              	  console.log(error)
              	}
        	});
		} else {
			$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
              	type: "POST",
              	url: "/cart-add",
              	data: {category:category,name:name,amount:total,size:size,qty:qty,img:img,hanging:hanging,windFlaps:wind,
						premium:UVprime,route:route},
				
              	success:function(response) {
					if(route > 0)
					{
						location.replace('/designer/'+response.id);
					} else {
						location.replace('/uploadfile/'+response.id);
					}
              	},
              	error: function(error){
              	  console.log(error)
              	}
        	});
		}
	} else {
		$('#loginModal').modal('show');
	}
	}
</script>
<script>
    $(document).ready(function(){
		$('#zipSection').hide();
		$('#bungeeSection').hide();
		$('#nylonSection').hide();
		$('#glassSection').hide();
		$('#clipSection').hide();
		$('#windAmount').hide();
		$('#uvPrimAmount').hide();
		$('#zipAmount').hide();
		$('#bungeeAmount').hide();
		$('#nylonAmount').hide();
		$('#glassAmount').hide();
		$('#clipAmount').hide();
		// for accessories
		$('#accessories').change(function(){
			var value = $(this).val();
			if(value == 1)
			{
				$('#accSection').fadeIn().removeClass('d-none');
			} else {
				$('#accSection').fadeOut().addClass('d-none');
			}
		});
		
	});
	</script>

	<script>
		$(document).ready(function(){
			if($('#bannerSize').val() == 0)
		{
		
			var bannerSize = $('#customOne').val()*$('#customTwo').val();
		
		} else {
		
			var bannerSize = $('#bannerSize').val();
		
		}
		if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
			$('#total').html(bannerRate.toFixed(2));
			var finalTotal = (bannerRate*100)/50;
		$('#finalTotal').html(finalTotal.toFixed(2));
			// main qty
			$('#mainQty').change(function(){
				var qty = $(this).val();
				var bannerSize = $('#bannerSize').val();
				if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
				var final = bannerRate*qty;
				
				$('#total').html(final.toFixed(2));
				var finalTotal = (final*100)/50;
		$('#finalTotal').html(finalTotal.toFixed(2));
			});
			// wind flaps
			$('#wind').change(function(){
				var value = $(this).val();
				if(value == 1)
				{
					$('#windAmount').fadeIn().show();
					var qty = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
					if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
					var qtyRate = bannerRate*qty;
					var wind = $('#windAmount span').html();
					var final = parseFloat($('#total').html())+parseFloat(wind);
					
					$('#total').html(final.toFixed(2));
					var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));

				} else {
					$('#windAmount').fadeOut().hide();
					var qty = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
					if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
					var qtyRate = bannerRate*qty;
					var wind = $('#windAmount span').html();
					var final = parseFloat($('#total').html())-parseFloat(wind);
					$('#total').html(final.toFixed(2));
					var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
				}
			});
			
			// UV premium
			$('#uvPrim').change(function(){
				var value = $(this).val();
				if(value == 1)
				{
					var qty = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
					if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
					var qtyRate = bannerRate*qty;
					var bannerSize = $('#bannerSize').val();
					if(bannerSize < 21)
					{
						$('#uvPrimAmount span').html('9.20');
						$('#uvPrimAmount').fadeIn().show();
						var final = parseFloat($('#total').html())+parseFloat('9.20');
					
						$('#total').html(final.toFixed(2));
						var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
					} else {
						var bannerSize = $('#bannerSize').val();
						if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
						var primVal = (qtyRate*30)/100;
						$('#uvPrimAmount span').html(primVal.toFixed(2));
						$('#uvPrimAmount').fadeIn().show();
						var final = parseFloat($('#total').html())+parseFloat(primVal.toFixed(2));
					
						$('#total').html(final.toFixed(2));
						var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
					}

				} else {
					$('#uvPrimAmount').fadeIn().hide();
					var qty = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
					if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
					var qtyRate = bannerRate*qty;
					var bannerSize = $('#bannerSize').val();
					if(bannerSize < 21)
					{
						var final = parseFloat($('#total').html())-parseFloat('9.20');
						$('#total').html(final.toFixed(2));
						var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
					} else {
						var bannerSize = $('#bannerSize').val();
						if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
						var primVal = (qtyRate*30)/100;
						var final = parseFloat($('#total').html())-parseFloat(primVal.toFixed(2));
						$('#total').html(final.toFixed(2));
						var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
					}
				}
			});
			// for Nylon Rope
			$('#nylonSize').change(function(){
				var value = $(this).val();
				
					var size = $('#nylonSize').val();
					var qty = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
					if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
					var qtyRate = bannerRate*qty;
					var sizeRate = parseFloat(0.80)*size;
					var nylon = $('#nylonAmount span').html(sizeRate);
					$('#total').html(qtyRate.toFixed(2));
					var final = parseFloat($('#total').html())+parseFloat(sizeRate);
					// alert($('#total').html());
					$('#nylonAmount').fadeIn().show();
					$('#nylonSection').fadeIn().show();
					
					$('#total').html(final.toFixed(2));
					var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
				
			});
			
			// for zip ties
			$('#zip').change(function(){
				var value = $(this).val();
				if(value == 1)
				{
					$('#zipSection').fadeIn().show();
					var qty = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
					if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
					var qtyRate = bannerRate*qty;
					var zip = $('#zipAmount span').html();
					var final = parseFloat($('#total').html())+parseFloat(zip);
					$('#zipAmount').fadeIn().show();
					
					$('#total').html(final.toFixed(2));
					var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
				} else {
					$('#zipAmount').fadeOut().hide();
					$('#zipSection').fadeOut().hide();
					var qty = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
					if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
					var qtyRate = bannerRate*qty;
					var zip = $('#zipAmount span').html();
					var final = parseFloat($('#total').html())-parseFloat(zip);
					
					$('#total').html(final.toFixed(2));
					var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
				}
			});
			// for bungees
			$('#bungee').change(function(){
				var value = $(this).val();
				if(value == 1)
				{
					$('#bungeeSection').fadeIn().show();
					var qty = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
						if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
					var qtyRate = bannerRate*qty;
					var bungee = $('#bungeeAmount span').html();
					var final = parseFloat($('#total').html())+parseFloat(bungee);
					$('#bungeeAmount').fadeIn().show();
					
					$('#total').html(final.toFixed(2));
					var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
				} else {
					$('#bungeeSection').fadeOut().hide();
					var qty = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
						if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
					var qtyRate = bannerRate*qty;
					var bungee = $('#bungeeAmount span').html();
					var final = parseFloat($('#total').html())-parseFloat(bungee);
					$('#bungeeAmount').fadeIn().hide();
					
					$('#total').html(final.toFixed(2));
					var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
				}
			});
			// for nylon
			$('#nylon').change(function(){
				var value = $(this).val();
				if(value == 1)
				{
					$('#nylonSection').fadeIn().show();
					var qty = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
						if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
					var qtyRate = bannerRate*qty;
					var nylon = $('#nylonAmount span').html();
					var final = parseFloat($('#total').html())+parseFloat(nylon);
					$('#nylonAmount').fadeIn().show();
					
					$('#total').html(final.toFixed(2));
					var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
				} else {
					$('#nylonSection').fadeOut().hide();
					var qty = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
						if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
					var qtyRate = bannerRate*qty;
					var nylon = $('#nylonAmount span').html();
					var final = parseFloat($('#total').html())-parseFloat(nylon);
					$('#nylonAmount').fadeIn().hide();
					
					$('#total').html(final.toFixed(2));
					var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
				}
			});
			// for glass
			$('#glass').change(function(){
				var value = $(this).val();
				if(value == 1)
				{
					$('#glassSection').fadeIn().show();
					var qty = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
						if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
					var qtyRate = bannerRate*qty;
					var glass = $('#glassAmount span').html();
					var final = parseFloat($('#total').html())+parseFloat(glass);
					$('#glassAmount').fadeIn().show();
					
					$('#total').html(final.toFixed(2));
					var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
				} else {
					$('#glassSection').fadeOut().hide();
					var qty = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
						if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
					var qtyRate = bannerRate*qty;
					var glass = $('#glassAmount span').html();
					var final = parseFloat($('#total').html())-parseFloat(glass);
					$('#glassAmount').fadeIn().hide();
					
					$('#total').html(final.toFixed(2));
					var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
				}
			});
			// for clip
			$('#clips').change(function(){
				var value = $(this).val();
				if(value == 1)
				{
					$('#clipSection').fadeIn().show();
					var qty = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
						if (bannerSize < 100) {
            var bannerRate = bannerSize*2.99;
        } 
        if (bannerSize > 99 && bannerSize < 150) {
            var bannerRate = bannerSize*2.72;
        } 
        if (bannerSize > 149 && bannerSize < 200) {
            var bannerRate = bannerSize*2.45;
        }
        if (bannerSize > 199) {
            var bannerRate = bannerSize*2.18;
        }
					var qtyRate = bannerRate*qty;
					var clip = $('#clipAmount span').html();
					var final = parseFloat($('#total').html())+parseFloat(clip);
					$('#clipAmount').fadeIn().show();
					
					$('#total').html(final.toFixed(2));
					var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
				} else {
					$('#clipSection').fadeOut().hide();
					var qty = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
						if (bannerSize < 100) {
        				    var bannerRate = bannerSize*2.99;
        				} 
        				if (bannerSize > 99 && bannerSize < 150) {
        				    var bannerRate = bannerSize*2.72;
        				} 
        				if (bannerSize > 149 && bannerSize < 200) {
        				    var bannerRate = bannerSize*2.45;
        				}
        				if (bannerSize > 199) {
        				    var bannerRate = bannerSize*2.18;
        				}
					var qtyRate = bannerRate*qty;
					var clip = $('#clipAmount span').html();
					var final = parseFloat($('#total').html())-parseFloat(clip);
					$('#clipAmount').fadeIn().hide();
					
					$('#total').html(final.toFixed(2));
					var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
				}
			});
		});
	</script>

</body>


</html>