<!DOCTYPE html>
<html lang="en">
    
    <head>
        @include('front-end.section.styles')
		<style>
			#priceCard {
				top: 14%;
			    z-index: 1000;
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
											<img src="/assets/images/details/shop/Banners/backlit/1.jpg" alt="image_not_found">
										</div>
										<div id="image_2" class="tab-pane fade">
											<img src="/assets/images/details/shop/Banners/backlit/2.jpg" alt="image_not_found">
										</div>
										<div id="image_3" class="tab-pane fade">
											<img src="/assets/images/details/shop/Banners/backlit/3.jpg" alt="image_not_found">
										</div>
									</div>

									<ul class="nav ul_li_block clearfix float-left owl-carousel productImg_slider" role="tablist">
										<li>
											<a class="active" data-toggle="tab" href="#image_1">
												<img src="/assets/images/details/shop/Banners/backlit/1.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_2">
												<img src="/assets/images/details/shop/Banners/backlit/2.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_3">
												<img src="/assets/images/details/shop/Banners/backlit/3.jpg" alt="image_not_found">
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
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Five Sizes with customization available.</li>
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Eco-solvent 720 DPI printing in full color.</li>											
											</ul>
										</div>
										<div class="bg-lights p-3 col-md-6">
											<ul class="list-unstyled mb-0">
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Specially Designed from premium quality backlit flex.</li>											
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Choose to laminate your backlit banner for outdoor use.</li>											
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
												  <div class="form-check">
													<button
    												  data-design-type="Poster"
    												  data-api-key="API KEY GOES HERE"
    												  class="canva-design-button"
    												  style="display: none;"
    												  >Design with Canva</button
    												>
    												<script>
    												  (function (c, a, n) {
    												    var w = c.createElement(a),
    												      s = c.getElementsByTagName(a)[0];
    												    w.src = n;
    												    s.parentNode.insertBefore(w, s);
    												  })(document, "script", "https://sdk.canva.com/designbutton/v2/api.js");
    												</script>
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
										The extreme backlight and backlighting fabrics allow light to pass through, creating crisp and bright colors when lit from behind. Perfect for advertising in urban settings at night, at stations or in commercial environments with no natural light. Nothing is better than advertising outdoors. The reason being lots of people pass by and the new products or advertisements gain popularity with ease. When the companies think of marketing their products, they always think that hundreds and thousands of people must see it. This is done so that the company's product can be popularized among the target audience.
									</p>
									
										<strong>Backlit Banners to Showcase Your Brand in a Whole New Light</strong>
										<p><strong>Backlit banners</strong> are an excellent way to advertise your brand even at night (or under low-light, low-visibility conditions). The translucent material allows light to pass through and acts as the background for your message to pop out.</p>
										<p>Our banners are printed on premium quality flex that is resistant to weather elements, and UV-safe, making them suitable for outdoor use. However, we recommend lamination to enhance its durability.</p>
										<p>The eco-solvent printing adds ink in high density, which makes the banner look darker under regular conditions. But once you have the lightbox in place, the banner will light up in the perfect colors.</p>
										<p>So come day or night, you can continue advertising your brand with <strong>backlit banners.</strong></p>
										<strong>High-Definition Vinyl Banners Available in Your Choice of Design</strong>
										<p>We offer a wide range of options when it comes to customizing the graphics on your banners. If you have a design ready, then you can upload the artwork and we will proof it before proceeding with the print. Or if you wish to try your hand at creating it, you can use our design tool to bring your vision to life. Alternatively, if you are creatively challenged, then you can pick from our pre-designed templates or hire a designer for the task.</p>
										<strong>Custom Banner for All Kinds of Requirements</strong>
										<p>In addition to the design customization, we also extend facilities to define your own size specifications. As such, you can get your <strong>custom banners</strong> in whatever size you prefer.</p>
										<p>Regardless of what you choose, the <strong>backlit vinyl banners</strong> will offer great visibility to your brand as the vinyl material allows maximum diffusion of light across the display.</p>
										
								</div>
								<div id="additionalinfo_tab" class="tab-pane fade">
									<ul class="list-unstyled">
										<li><i class="fas fa-caret-right text-danger mr-2"></i>We are happy to present our customers with Backlit Banners. These banners are designed for the purpose of outdoor marketing. These have become very famous among the companies, who want to advertise their products. They come with lights behind them which make them readable at night.</li>
										<li><i class="fas fa-caret-right text-danger mr-2"></i>This helps you to reach your potential customers 24/7 which is great for the advertisement campaign. Companies can use the custom template that is available at our website or the printing of the banners can be customized based on the requirements of the customers.</li>
										<li><i class="fas fa-caret-right text-danger mr-2"></i>The customers can also upload the design that they want on the banners or they can use the website's web application to design the banner.</li>
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
		$('#uvPrimAmount').hide();
	});
</script>
<script>
	$('#bannerSize').on('change',function(){
		
		// $('#wind').prop('selectedIndex', 0);
		$('#uvPrim').val('0').niceSelect('update');
		$('#uvPrimAmount').fadeOut().hide();
		$('#mainQty').val(1);
		if($('#bannerSize').val() == 0)
					{
					
						var bannerSize = $('#customOne').val()*$('#customTwo').val();
					
					} else {
					
						var bannerSize = $('#bannerSize').val();
					
					}
		if (bannerSize < 50) {
    	    var bannerRate = bannerSize*5.66;
    	} 
    	if (bannerSize > 49 && bannerSize < 100) {
    	    var bannerRate = bannerSize*5.15;
    	} 
    	if (bannerSize > 99 && bannerSize < 200) {
    	    var bannerRate = bannerSize*4.63;
    	}
    	if (bannerSize > 199) {
    	    var bannerRate = bannerSize*4.12;
    	}
		$('#total').html(bannerRate.toFixed(2));
		var finalTotal = (bannerRate*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
	});
	$('#mainQty').on('change',function(){
		
		// $('#wind').prop('selectedIndex', 0);
		$('#uvPrim').val('0').niceSelect('update');
		$('#uvPrimAmount').fadeOut().hide();

		if($('#bannerSize').val() == 0)
					{
					
						var bannerSize = $('#customOne').val()*$('#customTwo').val();
					
					} else {
					
						var bannerSize = $('#bannerSize').val();
					
					}
		if (bannerSize < 50) {
    	    var bannerRate = bannerSize*5.66;
    	} 
    	if (bannerSize > 49 && bannerSize < 100) {
    	    var bannerRate = bannerSize*5.15;
    	} 
    	if (bannerSize > 99 && bannerSize < 200) {
    	    var bannerRate = bannerSize*4.63;
    	}
    	if (bannerSize > 199) {
    	    var bannerRate = bannerSize*4.12;
    	}
		var qtyRate = bannerRate*$(this).val();
		$('#total').html(qtyRate.toFixed(2));
		var finalTotal = (qtyRate*100)/50;
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
		var UVprime = $('#uvPrim').find(":selected").text();
		var img = $('#image_1').find('img').attr('src');

			$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
              	type: "POST",
              	url: "/cart-add",
              	data: {category:category,name:name,amount:total,size:size,qty:qty,img:img,premium:UVprime,route:route},
				
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
			$('#loginModal').modal('show');
		}

	}
</script>
	<script>
		$(document).ready(function(){
			if($('#bannerSize').val() == 0)
					{
					
						var bannerSize = $('#customOne').val()*$('#customTwo').val();
					
					} else {
					
						var bannerSize = $('#bannerSize').val();
					
					}
			if (bannerSize < 50) {
    	    var bannerRate = bannerSize*5.66;
    	} 
    	if (bannerSize > 49 && bannerSize < 100) {
    	    var bannerRate = bannerSize*5.15;
    	} 
    	if (bannerSize > 99 && bannerSize < 200) {
    	    var bannerRate = bannerSize*4.63;
    	}
    	if (bannerSize > 199) {
    	    var bannerRate = bannerSize*4.12;
    	}
			$('#total').html(bannerRate.toFixed(2));
			var finalTotal = (bannerRate*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
			// main qty
			$('#mainQty').change(function(){
				var qty = $(this).val();
				if($('#bannerSize').val() == 0)
					{
					
						var bannerSize = $('#customOne').val()*$('#customTwo').val();
					
					} else {
					
						var bannerSize = $('#bannerSize').val();
					
					}
				if (bannerSize < 50) {
    	    var bannerRate = bannerSize*5.66;
    	} 
    	if (bannerSize > 49 && bannerSize < 100) {
    	    var bannerRate = bannerSize*5.15;
    	} 
    	if (bannerSize > 99 && bannerSize < 200) {
    	    var bannerRate = bannerSize*4.63;
    	}
    	if (bannerSize > 199) {
    	    var bannerRate = bannerSize*4.12;
    	}
				var final = bannerRate*qty;
				
				$('#total').html(final.toFixed(2));
				var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
			});

			// UV premium
			$('#uvPrim').change(function(){
				var value = $(this).val();
				if(value == 1)
				{
					var qty = $('#mainQty').val();
					if($('#bannerSize').val() == 0)
					{
					
						var bannerSize = $('#customOne').val()*$('#customTwo').val();
					
					} else {
					
						var bannerSize = $('#bannerSize').val();
					
					}
					if (bannerSize < 50) {
    	    var bannerRate = bannerSize*5.66;
    	} 
    	if (bannerSize > 49 && bannerSize < 100) {
    	    var bannerRate = bannerSize*5.15;
    	} 
    	if (bannerSize > 99 && bannerSize < 200) {
    	    var bannerRate = bannerSize*4.63;
    	}
    	if (bannerSize > 199) {
    	    var bannerRate = bannerSize*4.12;
    	}
					var qtyRate = bannerRate*qty;
					if($('#bannerSize').val() == 0)
					{
					
						var bannerSize = $('#customOne').val()*$('#customTwo').val();
					
					} else {
					
						var bannerSize = $('#bannerSize').val();
					
					}
					if(bannerSize < 21)
					{
						$('#uvPrimAmount span').html('9.20');
						$('#uvPrimAmount').fadeIn().show();
						var final = parseFloat($('#total').html())+parseFloat('9.20');
					
						$('#total').html(final.toFixed(2));
						var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
					} else {
						if($('#bannerSize').val() == 0)
					{
					
						var bannerSize = $('#customOne').val()*$('#customTwo').val();
					
					} else {
					
						var bannerSize = $('#bannerSize').val();
					
					}
						if (bannerSize < 50) {
    	    var bannerRate = bannerSize*5.66;
    	} 
    	if (bannerSize > 49 && bannerSize < 100) {
    	    var bannerRate = bannerSize*5.15;
    	} 
    	if (bannerSize > 99 && bannerSize < 200) {
    	    var bannerRate = bannerSize*4.63;
    	}
    	if (bannerSize > 199) {
    	    var bannerRate = bannerSize*4.12;
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
					if($('#bannerSize').val() == 0)
					{
					
						var bannerSize = $('#customOne').val()*$('#customTwo').val();
					
					} else {
					
						var bannerSize = $('#bannerSize').val();
					
					}
					if (bannerSize < 50) {
    	    var bannerRate = bannerSize*5.66;
    	} 
    	if (bannerSize > 49 && bannerSize < 100) {
    	    var bannerRate = bannerSize*5.15;
    	} 
    	if (bannerSize > 99 && bannerSize < 200) {
    	    var bannerRate = bannerSize*4.63;
    	}
    	if (bannerSize > 199) {
    	    var bannerRate = bannerSize*4.12;
    	}
					var qtyRate = bannerRate*qty;
					if($('#bannerSize').val() == 0)
					{
					
						var bannerSize = $('#customOne').val()*$('#customTwo').val();
					
					} else {
					
						var bannerSize = $('#bannerSize').val();
					
					}
					if(bannerSize < 21)
					{
						var final = parseFloat($('#total').html())-parseFloat('9.20');
						$('#total').html(final.toFixed(2));
						var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
					} else {
						if($('#bannerSize').val() == 0)
					{
					
						var bannerSize = $('#customOne').val()*$('#customTwo').val();
					
					} else {
					
						var bannerSize = $('#bannerSize').val();
					
					}
						if (bannerSize < 50) {
    	    var bannerRate = bannerSize*5.66;
    	} 
    	if (bannerSize > 49 && bannerSize < 100) {
    	    var bannerRate = bannerSize*5.15;
    	} 
    	if (bannerSize > 99 && bannerSize < 200) {
    	    var bannerRate = bannerSize*4.63;
    	}
    	if (bannerSize > 199) {
    	    var bannerRate = bannerSize*4.12;
    	}
						var primVal = (qtyRate*30)/100;
						var final = parseFloat($('#total').html())-parseFloat(primVal.toFixed(2));
						$('#total').html(final.toFixed(2));
						var finalTotal = (final*100)/50;
					$('#finalTotal').html(finalTotal.toFixed(2));
					}
				}
			});
			
		});
	</script>

</body>


</html>