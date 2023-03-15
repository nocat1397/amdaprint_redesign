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
											<img src="/assets/images/details/shop/StandsDisplay/RetractableBannerStands/adjustable/1.jpg" alt="image_not_found">
										</div>
										<div id="image_2" class="tab-pane fade">
											<img src="/assets/images/details/shop/StandsDisplay/RetractableBannerStands/adjustable/2.jpg" alt="image_not_found">
										</div>
										<div id="image_3" class="tab-pane fade">
											<img src="/assets/images/details/shop/StandsDisplay/RetractableBannerStands/adjustable/3.jpg" alt="image_not_found">
										</div>
									</div>

									<ul class="nav ul_li_block clearfix float-left owl-carousel productImg_slider" role="tablist">
										<li>
											<a class="active" data-toggle="tab" href="#image_1">
												<img src="/assets/images/details/shop/StandsDisplay/RetractableBannerStands/adjustable/1.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_2">
												<img src="/assets/images/details/shop/StandsDisplay/RetractableBannerStands/adjustable/2.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_3">
												<img src="/assets/images/details/shop/StandsDisplay/RetractableBannerStands/adjustable/3.jpg" alt="image_not_found">
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
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Adjustable X Banner Stands with locking design.</li>
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Built-in hooks for quick graphic set up on a single side.</li>											
											</ul>
										</div>
										<div class="bg-lights p-3 col-md-6">
											<ul class="list-unstyled mb-0">
												<li><i class="fas fa-caret-right text-danger mr-2"></i>X-shaped frame banner stands with an adjusting gear mechanism.</li>
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Comes with a free carry bag for travel and storage.</li>											
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
                                                        <option selected value="12.5">2.5 x 5 Feet</option>
                                                        <option value="15">2.5 x 6 Feet</option>
                                                        <option value="16.25">2.5 x 6.5 Feet</option>
                                                        <option value="13.5">3 x 4.5 Feet</option>
                                                        <option value="18">3 x 6 Feet</option>
                                                        <option value="19.25">3.5 x 5.5 Feet</option>
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
													<label class="my-1 mr-2">Add Stand</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="stand">
														<option selected value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select>
                                                </div>
												<div class="col-md-3">
													<label id="standAmount" class="text-danger font-weight-bold">$<span></span></label>
											   </div>
                                            </div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Add Banner</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="bannerAdd">
														<option selected value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select>
                                                </div>
												<div class="col-md-3">
													<label id="bannerAddAmount" class="text-danger font-weight-bold">$<span></span></label>
											   </div>
                                            </div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Lamination</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="lamination">
														<option selected value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select>
                                                </div>
												<div class="col-md-3">
													<label id="laminationAmount" class="text-danger font-weight-bold">$<span></span></label>
											   </div>
                                            </div>
                                        </form>
                                    </div>
								</div>
							</div>
                            <div class="col-md-2 col-lg-2">
								<div class="card shadow text-center border boder-0" id="priceCard">
									<div class="card-body">
										<span class="price_text mb_30"><strong class="text-danger">$<span id="total"></span></strong> <del>$<span id="finalTotal"></span> </del></span>
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
										All these places are generally filled with banners so that their potential clients read and come to them for business. These banners are supported by some ropes or stands which help to make them stand erect in the trade show or event they are put up in. However, all these have become old techniques and consume a lot of time just to set the banner right. Now we bring to you Adjustable X Banner Stands. This stand is adjustable and very handy to use.
									</p>
								
										<strong>Custom <strong>Adjustable X Banner Stands</strong> for Banners of All Styles</strong>
										<p>Do you want to get the word out about a new product that you are launching? Or has your menu undergone a drastic change? Are you hosting a yard sale? Or are you letting everyone know that you are open for business? Then our <strong>adjustable X banner stands</strong> may just be <em>the </em>medium to achieve these goals! Use them to display any kind of banner.</p>
										<p>Typically, the <strong>X banner stands</strong> can display large format graphics and reach a height of nearly 12 feet. Needless to say, it amplifies your reach and visibility - even in a place that is drowning with banners, displays, and signage.&nbsp;</p>
										<p>And you can enjoy all these benefits without breaking into a sweat. The <strong>X frame banner stands</strong> are easy to set up. Once up, you can adjust the height and the width by manipulating the poles that form the X-shaped frame.&nbsp;</p>
										<p>When not in use, disengage the locks, fold the <strong>stand</strong>&nbsp;and collapse it. You will be surprised at how compact they can get. Once you have taken it apart, zip it in the complimentary bag to store it or carry it around with you.</p>
										<strong>Use&nbsp;Hassle-Free&nbsp;<strong>X Frame Banner Stands</strong> to Make Your Brand Stand Out Anywhere</strong>
										<p>Set the <strong>X banner stands</strong> up at the location of your choice, be it at meetings, conventions, trade shows, or outdoor events, festivals, or malls. They are suitable for indoor and outdoor applications and will manage to capture attention everywhere due to their size and high-quality graphics. Wherever you may be, you can make your mark with our&nbsp;<strong>banner stands</strong>.</p>
										<p>These single-sided stands are easy to install.&nbsp;Use the telescopic mechanism to adjust the height and <span style="text-decoration: line-through;">the</span> width, then lock it in place with the mechanical latching clasps. Use the metal grommets to attach the graphics to the hooks at the corners of the X-shaped frame, and you are all set.</p>
										<strong><strong>Adjustable X Banner Stands </strong>That Stand By You&nbsp;Forever</strong>
										<p>When we say that our <strong>X frame banner stands</strong> will “stand by you,” we mean it in terms of performance and durability. For starters, they have anti-slip pads for the perfect and stabilized floor placement that ensures that your announcement always stands tall.</p>
										<p>At the same time, the frame is composed of sturdy and lightweight materials like aluminum, graphite, steel, and carbon composite fiber that promise long-lasting results. Shop for adjustable X banner stands at Amdaprints. Enjoy Free Super Saver Shipping on all orders over $99.</p>
										
								</div>
								<div id="additionalinfo_tab" class="tab-pane fade">
									<ul class="list-unstyled">
										<li><i class="fas fa-caret-right text-danger mr-2"></i>These metal stands are very strong and do not fall down easily even if there is wind as they are made of a metal body. They are placed on the ground and then pinned. Since these stands are lighter than the rest, they are easy to move.</li>										
										<li><i class="fas fa-caret-right text-danger mr-2"></i>These stands can be adjusted based on the height of the banners. These can be placed in such a way that it directs the people to a specific point where the event is taking place and at the same time carries the advertisements of the company.</li>										
										<li><i class="fas fa-caret-right text-danger mr-2"></i>You might think that the stands can carry only a single banner. But the customers here are provided with the Adjustable X Stands that are single sided as well as double sided. This feature of the product enables our customers to pin their banners on both sides of the stand. So if these stands are kept in the middle of halls, then people who walk by can look at the advertisements with ease.</li>										
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
		$('#bannerAddAmount').hide();
		$('#laminationAmount').hide();
		$('#standAmount').hide();
	});
</script>
<script>
	function addCart(loginStatus)
	{
		var loginStatus = loginStatus;
		// alert(loginStatus);
		if (loginStatus > 0) {
		var category = 'Stands';
		var name = '<?php echo $product ?>';
		var total = $('#total').html();
		var size = $('#bannerSize').find(":selected").text();
		var qty = $('#mainQty').val();
		var addBanner = $('#bannerAdd').find(":selected").text();
		var addStand = $('#stand').find(":selected").text();
		var lamination = $('#lamination').find(":selected").text();
		var img = $('#image_1').find('img').attr('src');
		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
              type: "POST",
              url: "/cart-add",
              data: {name:name,amount:total,size:size,qty:qty,img:img,banner:addBanner,stand:addStand,lamination:lamination},
            
              success:function(response) {
				location.replace('/uploadfile/'+response.id);
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
	$('#bannerSize').on('change',function(){

		$('#lamination, #bannerAdd, #stand').val('0').niceSelect('update');
		$('#laminationAmount, #bannerAddAmount, #standAmount').fadeOut().hide();
		$('#mainQty').val(1);
		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			var bannerSize = $(this).val();
            
            $.ajax({
              type: "POST",
              url: "/adjust-x-banner-stand-size",
              data: {size:bannerSize},
            
              success:function(response) {
                console.log(response);  
				$('#total').html(response.total.toFixed(2));
				$('#finalTotal').html(response.final.toFixed(2));   
              },
              error: function(error){
                console.log(error)
              }
        });
	});
	$('#mainQty').on('change',function(){
		
		$('#lamination, #bannerAdd, #stand').val('0').niceSelect('update');
		$('#laminationAmount, #bannerAddAmount, #standAmount').fadeOut().hide();
		
		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			var bannerSize = $('#bannerSize').val();
            var quantity = $(this).val();
            $.ajax({
              type: "POST",
              url: "/adjust-x-banner-stand-qty",
              data: {size:bannerSize,qty:quantity},
            
              success:function(response) {
                console.log(response);  
				$('#total').html(response.total.toFixed(2));
				$('#finalTotal').html(response.final.toFixed(2));   
              },
              error: function(error){
                console.log(error)
              }
        });
	});
</script>

	<script>
		$(document).ready(function(){
			$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			var bannerSize = $('#bannerSize').val();
            
            $.ajax({
              type: "POST",
              url: "/adjust-x-banner-stand-size",
              data: {size:bannerSize},
            
              success:function(response) {
                console.log(response);  
				$('#total').html(response.total.toFixed(2));
				$('#finalTotal').html(response.final.toFixed(2));   
              },
              error: function(error){
                console.log(error)
              }
        });

			// Add Stand
			$('#stand').change(function(){
				var value = $(this).val();
				if(value == 1)
				{
					
					$.ajaxSetup({
           			    headers: {
           			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           			    }
           			});
					var quantity = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
					var stand = $(this).val();
					var total = $('#total').html();
           			$.ajax({
           			  type: "POST",
           			  url: "/adjust-x-banner-stand-add",
           			  data: {size:bannerSize,qty:quantity,stand:stand,total:total},
					
           			  success:function(response) {
           			    console.log(response);  
						   	$('#standAmount span').html(response.stand.toFixed(2));
							$('#standAmount').fadeIn().show();
							$('#total').html(response.total.toFixed(2));
							$('#finalTotal').html(response.final.toFixed(2));   
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
					var quantity = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
					var total = $('#total').html();
				    var stand = $(this).val();
           			$.ajax({
           			  type: "POST",
           			  url: "/adjust-x-banner-stand-add",
           			  data: {size:bannerSize,qty:quantity,stand:stand,total:total},
					
           			  success:function(response) {
           			    console.log(response);  
							$('#standAmount').fadeOut().hide();
						   	$('#standAmount span').html('');
							$('#total').html(response.total.toFixed(2));
							$('#finalTotal').html(response.final.toFixed(2));   
           			  },
           			  error: function(error){
           			    console.log(error)
           			  }
           			});
				}
			});

			// Add Banner
			$('#bannerAdd').change(function(){
				var value = $(this).val();
				if(value == 1)
				{
					
					$.ajaxSetup({
           			    headers: {
           			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           			    }
           			});
					var quantity = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
					var banner = $(this).val();
					var total = $('#total').html();
           			$.ajax({
           			  type: "POST",
           			  url: "/adjust-x-banner-stand-banner",
           			  data: {size:bannerSize,qty:quantity,banner:banner,total:total},
					
           			  success:function(response) {
           			    console.log(response);  
						   	$('#bannerAddAmount span').html(response.banner.toFixed(2));
							$('#bannerAddAmount').fadeIn().show();
							$('#total').html(response.total.toFixed(2));
							$('#finalTotal').html(response.final.toFixed(2));   
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
					var quantity = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
					var total = $('#total').html();
				    var banner = $(this).val();
           			$.ajax({
           			  type: "POST",
           			  url: "/adjust-x-banner-stand-banner",
           			  data: {size:bannerSize,qty:quantity,banner:banner,total:total},
					
           			  success:function(response) {
           			    console.log(response);  
							$('#bannerAddAmount').fadeOut().hide();
						   	$('#bannerAddAmount span').html('');
							$('#total').html(response.total.toFixed(2));
							$('#finalTotal').html(response.final.toFixed(2));   
           			  },
           			  error: function(error){
           			    console.log(error)
           			  }
           			});
				}
			});

			// Add Lamination
			$('#lamination').change(function(){
				var value = $(this).val();
				if(value == 1)
				{
					
					$.ajaxSetup({
           			    headers: {
           			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           			    }
           			});
					var quantity = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
					var lamination = $(this).val();
					var total = $('#total').html();
           			$.ajax({
           			  type: "POST",
           			  url: "/adjust-x-banner-stand-lamination",
           			  data: {size:bannerSize,qty:quantity,lamination:lamination,total:total},
					
           			  success:function(response) {
           			    console.log(response);  
						   	$('#laminationAmount span').html(response.lamination.toFixed(2));
							$('#laminationAmount').fadeIn().show();
							$('#total').html(response.total.toFixed(2));
							$('#finalTotal').html(response.final.toFixed(2));   
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
					var quantity = $('#mainQty').val();
					var bannerSize = $('#bannerSize').val();
					var total = $('#total').html();
				    var lamination = $(this).val();
           			$.ajax({
           			  type: "POST",
           			  url: "/adjust-x-banner-stand-lamination",
           			  data: {size:bannerSize,qty:quantity,lamination:lamination,total:total},
					
           			  success:function(response) {
           			    console.log(response);  
							$('#laminationAmount').fadeOut().hide();
						   	$('#laminationAmount span').html('');
							$('#total').html(response.total.toFixed(2));
							$('#finalTotal').html(response.final.toFixed(2));   
           			  },
           			  error: function(error){
           			    console.log(error)
           			  }
           			});
				}
			});
			
		});
	</script>

</body>


</html>