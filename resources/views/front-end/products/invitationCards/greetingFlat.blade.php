<!DOCTYPE html>
<html lang="en">
    
    <head>
        @include('front-end.section.styles')
		<style>
			#priceCard {
				top: 14%;
			    /* z-index: 1000; */
			    width: 300px;
			    right: 6%;
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
											<img src="/assets/images/details/shop/folders/key/1.jpg" alt="image_not_found">
										</div>
										<div id="image_2" class="tab-pane fade">
											<img src="/assets/images/details/shop/folders/key/2.jpg" alt="image_not_found">
										</div>
										<div id="image_3" class="tab-pane fade">
											<img src="/assets/images/details/shop/folders/key/3.jpg" alt="image_not_found">
										</div>
									</div>

									<ul class="nav ul_li_block clearfix float-left owl-carousel productImg_slider" role="tablist">
										<li>
											<a class="active" data-toggle="tab" href="#image_1">
												<img src="/assets/images/details/shop/folders/key/1.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_2">
												<img src="/assets/images/details/shop/folders/key/2.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_3">
												<img src="/assets/images/details/shop/folders/key/3.jpg" alt="image_not_found">
											</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-lg-5 col-md-6 col-sm-10 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
								<div class="details_content">
									<h2 class="item_title mb-2 text-capitalize">{{$product}}</h2>
									<ul class="rating_star ul_li mb-2 clearfix">
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star-half"></i></li>
									</ul>
									{{-- <div class="row mb-4">
										<div class="bg-lights p-3 col-md-6">
											<ul class="list-unstyled mb-0">
												<li><i class="fas fa-caret-right text-danger mr-2"></i>In order to leave a lasting impression, high-quality printed folders are a must.</li>
												<li><i class="fas fa-caret-right text-danger mr-2"></i>In order to accommodate different budgets and business needs, the folders can be customized.</li>											
											</ul>
										</div>
										<div class="bg-lights p-3 col-md-6">
											<ul class="list-unstyled mb-0">
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Durable paper construction facilitates long-lasting use.</li>											
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Additional storage for pocket use.</li>											
											</ul>
										</div>
									</div> --}}
									{{-- <span class="price_text mb_30"><strong>₹89.00</strong> <del>₹100.00</del></span> --}}
									<div id="details_form">
                                        <form action="" class="productForm">
                                            @csrf
                                            
                                            <hr class="mt-5 mb-5">
											<div class="form-row mb-3" id="folderSize">
												<div class="col-md-3">
													<label class="my-1 mr-2">Size</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100">
                                                        <option selected value="0">3.5 X 5 inch</option>
                                                        <option value="">4 X 6 Inch</option>    
                                                        <option value="">4.25 X 5.5 Inch</option>    
                                                        <option value="">4.25 X 6 Inch</option>    
                                                        <option value="">5 X 7 Inch</option>    
                                                    </select> 
												</div>
												
											</div>
                                            <div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Paper Type</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="paperType">
														<option selected value="0">14 Pt Card Stock Gloss / Matte</option>
														<option value="1">14 Pt Card Stock UV Full Gloss</option>  
														<option value="1">16 Pt Card Stock Gloss / Matte</option>  
														<option value="1">17 Pt Card Stock Uncoted</option>  
													</select>
												</div>
											</div>
                                            <div class="form-row mb-3">
												<div class="col-md-3">
													<label class="my-1 mr-2">Printing Side</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100">
                                                        <option value="" selected>Single Side</option>    
                                                        <option value="">Both Side</option>    
                                                    </select> 
												</div>
												
											</div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Quantity:</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="mainQty">
														<option selected value="">100</option>
														<option value="">150</option>
														<option value="">200</option>
														<option value="">250</option>
														<option value="">500</option>
														<option value="">1000</option>
														<option value="">2000</option>
														<option value="">3000</option>
														<option value="">4000</option>
														<option value="">5000</option>
														<option value="">7000</option>
														<option value="">10000</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Envelope Type</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="finishType">
														<option selected value="0">None</option>
														<option value="1">White</option>  
														<option value="1">Customized</option>  
													</select>
												</div>
											</div>
                                            <div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Envelope Size</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="finishType">
														<option selected value="0">4.25 X 6.25 Inch</option>
														<option value="1">4.40 X 5.75 Inch</option>  
														<option value="1">4.40 X 6.25 Inch</option>  
														<option value="1">5.25 X 7.25 Inch</option>  
													</select>
												</div>
											</div>
                                            <div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Velvet Finish</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="finishType">
														<option selected value="0">No</option>
														<option value="1">Yes</option>   
													</select>
												</div>
											</div>
                                            <div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Spot UV</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="finishType">
														<option selected value="0">No</option>
														<option value="1">Yes</option>   
													</select>
												</div>
											</div>
                                            <div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Raised Foils</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="finishType">
														<option selected value="0">No</option>
														<option value="1">Yes</option>   
													</select>
												</div>
											</div>
											
                                        </form>
                                    </div>
								</div>
							</div>
                            <div class="col-md-2 col-lg-3">
								<div class="card shadow text-center border boder-0" id="priceCard">
									<div class="card-body">
										<h5 class="price_text mb_30"><strong class="text-danger">$<span id="finalTotal"></span></strong> <del>$<span id="total"></span> </del></h5>
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
										A file folder (or simply folder) is a kind of folder that holds papers and money together for organization and protection. File folders usually consist of a sheet of heavy paper stock or other thin, but stiff, material which is folded in half, and are used to keep paper documents. Traditional folders are constructed from heavy stock and they are used to hold other printed materials or loose paper. For best results, we recommend that folders be printed on board stock rather than standard coated stock. Board stock has more body and reduces the chance of unsightly cracking on folds that run in different directions from the paper grain.
									</p>
								
								</div>
								<div id="additionalinfo_tab" class="tab-pane fade">
									<ul class="list-unstyled">
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Folders can be produced with either one or two pockets. Depending on your need, we can create pockets that go straight across or we can create them at an angle. We can also produce a “vertical pocket,” which is one that covers the entire area of a panel and gets glued at the top and bottom.</li>										
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Because we do custom folder printing, we can produce them in just about any color. We can also apply effects such as specialty finishes, coatings and embossing.</li>										
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Printing can be done on both the inside and outside of the folder and we can incorporate slits in the pockets to hold business cards.</li>										
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
	$(document).ready(function(){
		$('#windowAmount').hide();
	});
</script>
</body>
</html>
