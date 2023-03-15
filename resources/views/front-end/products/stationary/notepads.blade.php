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


			<!-- details_section - start
			================================================== -->
			<section class="details_section shop_details sec_ptb_130 pt-0 bg_gray clearfix">
				<div class="shop_container">
					<div class="container-fluid">

						<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
							<div class="col-lg-5 col-md-6 col-sm-10 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
								<div class="details_image clearfix">
									<div class="tab-content">
										<div id="image_1" class="tab-pane active">
											<img src="/assets/images/details/shop/notepads/1.jpg" alt="image_not_found">
										</div>
										<div id="image_2" class="tab-pane fade">
											<img src="/assets/images/details/shop/notepads/2.jpg" alt="image_not_found">
										</div>
										<div id="image_3" class="tab-pane fade">
											<img src="/assets/images/details/shop/notepads/3.jpg" alt="image_not_found">
										</div>
										
									</div>

									<ul class="nav ul_li_block clearfix float-left owl-carousel productImg_slider" role="tablist">
										<li>
											<a class="active" data-toggle="tab" href="#image_1">
												<img src="/assets/images/details/shop/notepads/1.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_2">
												<img src="/assets/images/details/shop/notepads/2.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_3">
												<img src="/assets/images/details/shop/notepads/3.jpg" alt="image_not_found">
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
									<div class="row mb-4">
										<div class="bg-lights p-3 col-md-6">
											<ul class="list-unstyled mb-0">
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Using an existing template or your own graphics will allow you to customize.</li>
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Notepads that fit in your pocket are convenient and compact.</li>											
												<li><i class="fas fa-caret-right text-danger mr-2"></i>You can distribute plenty of them by ordering in bulk.</li>											
											</ul>
										</div>
										<div class="bg-lights p-3 col-md-6">
											<ul class="list-unstyled mb-0">
												<li><i class="fas fa-caret-right text-danger mr-2"></i>It is easy to write on the Writable Surface.</li>
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Notepads made from sustainable materials are eco-friendly.</li>											
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
                                                        <option selected value="10">2 x 5 Inch</option>
                                                        <option value="15">2.5 x 6 Inch</option>
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
                                            
                                            
                                            <div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Paper Type</label>
                                                </div>
												
                                                <div class="col-md-6">
													<input type="text" disabled class="w-100" value="70 lb. Paper Uncoated">
                                                </div>
												<div class="col-md-3">
													<label id="laminationAmount" class="text-danger font-weight-bold">$<span></span></label>
											   </div>
                                            </div>
                                            <div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Printed Side</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="bannerAdd">
														<option selected value="0">Front Only</option>
                                                        <option value="1">Front and Back</option>
                                                    </select>
                                                </div>
												<div class="col-md-3">
													<label id="bannerAddAmount" class="text-danger font-weight-bold">$<span></span></label>
											   </div>
                                            </div>
                                            <div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Padding</label>
                                                </div>
												
                                                <div class="col-md-6">
													<input type="text" disabled class="w-100" value="Padded With Cardboard Back">
                                                </div>
												<div class="col-md-3">
													<label id="laminationAmount" class="text-danger font-weight-bold">$<span></span></label>
											   </div>
                                            </div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Glued Edge</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="bannerAdd">
														<option selected value="0">Top</option>
                                                        <option value="1">Left</option>
                                                        <option value="1">Right</option>
                                                        <option value="1">Bottom</option>
                                                    </select>
                                                </div>
												<div class="col-md-3">
													<label id="bannerAddAmount" class="text-danger font-weight-bold">$<span></span></label>
											   </div>
                                            </div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Sheets Per Pad</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="bannerAdd">
														<option selected value="0">25</option>
                                                        <option value="1">50</option>
                                                        <option value="1">100</option>
                                                    </select>
                                                </div>
												<div class="col-md-3">
													<label id="bannerAddAmount" class="text-danger font-weight-bold">$<span></span></label>
											   </div>
                                            </div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Number of Pads</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="bannerAdd">
														<option selected value="0">10</option>
                                                        <option value="1">50</option>
                                                        <option value="1">100</option>
                                                        <option value="1">500</option>
                                                        <option value="1">1000</option>
                                                    </select>
                                                </div>
												<div class="col-md-3">
													<label id="bannerAddAmount" class="text-danger font-weight-bold">$<span></span></label>
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
									<p>
										These professional notepads can be used for a variety of purposes by anyone, including:
										<ul class="list-unstyled">
											<li><i class="fas fa-caret-right text-danger mr-2"></i>Personal use by entrepreneurs or individuals for self-branding.</li>										
											<li><i class="fas fa-caret-right text-danger mr-2"></i>Commercial use by firms, organizations, and other corporate entities.</li>										
											<li><i class="fas fa-caret-right text-danger mr-2"></i>Medical professionals, pharmacies etc.</li>										
											<li><i class="fas fa-caret-right text-danger mr-2"></i>Small shops, businesses etc.</li>										
										</ul>
									</p>
								
										<strong><strong>Advertise Your Brand and Make an Impression using Notepads</strong></strong>
										<strong>Personalized Notepads are Customizable, Writable, and Portable</strong>
										<p>Promoting your brand and your business requires being memorable and staying prominent in the minds of your potential customers. Achieving this goal requires marketing material that makes a lasting impression. Our custom printed notepads are an item featuring your logo and contact info that you can easily hand out to prospects. Notepads are items that people use every day, bringing your company to mind whenever they jot down a reminder.</p>
										<p>Our&nbsp;promotional notepads&nbsp;are customizable to fit your company's image. We offer different sizes and number of sheets for you to choose from. You can also add graphic prints to the front, back, or both. Select from a wide variety of design templates or make your own in the online tool. You can also arrange the look and layout of the pages, adding check boxes and other features.</p>
										<p>With uncoated paper, our custom printed notepads are easy to write on. Recipients are able to create important reminders or check tasks off their to-do lists. This feature also provides you with an opportunity to write contact information or another message before handing out the notepads.</p>
										<p>Our business notepads are convenient to use and small enough to fit inside a pocket or a purse. Their compact size allows users to take them almost anywhere. This way, your prospective customers will always have a reminder of your available services or products.</p>
										<strong>Custom Printed Notepads are Eco-Friendly and Available in Bulk</strong>
										<p>Our custom printed notepads come from sustainable sources and are recyclable to reduce waste. This makes them an effective marketing tool with a low environmental impact. Promoting your business in an eco-friendly manner also helps to boost your profile and reputations with prospective clients.</p>
										<p>A large amount of foot traffic means giving away a large quantity of promotional notepads. With bulk quantities available, we make it easy for you to get the amount needed for effective and far-reaching marketing. Choose as few as 10 or as many as 500 pieces.</p>
										<strong>Personalized Notepads are Easy to Order</strong>
										<p>Our online ordering process is simple and convenient, allowing you to procure business notepads for your next event. Choose from multiple delivery and shipping options, including doorstep delivery, that fit your budget and your timetable.</p>
										<p>Shop for&nbsp;Notepads for your business online at Amdaprints.</p>
										
								</div>
								<div id="additionalinfo_tab" class="tab-pane fade">
									<ul class="list-unstyled">
										<li><i class="fas fa-caret-right text-danger mr-2"></i>These custom notepads with logos elevate your writing to a whole new level, with their professional design, high quality paper, and eye-catching layouts.</li>										
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Now you don’t need to waste time including important information whenever you write a note, our personalized notepads for business doThese Banners stands are also called Roll up Banners. They can be set up with ease.</li>										
										<li><i class="fas fa-caret-right text-danger mr-2"></i>The stands just have to be placed on the ground and have to be rolled up. This feature makes it portable and they can be transferred from one place to another with ease. The printed graphics on the banners are rolled inside the stand towards the bottom side.</li>										
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Once they enter the place of exhibition or other shows, they have to roll it up and place it. The graphics of these banners are generally vibrant and soothing to the eyes. The body of the stand is made of metal just to have a grip when it is placed on the surface. that for you.</li>										
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
</body>
</html>