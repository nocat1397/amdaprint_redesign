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
											<img src="/assets/images/details/shop/StandsDisplay/Frames/seg/1.jpg" alt="image_not_found">
										</div>
										<div id="image_2" class="tab-pane fade">
											<img src="/assets/images/details/shop/StandsDisplay/Frames/seg/2.jpg" alt="image_not_found">
										</div>
										<div id="image_3" class="tab-pane fade">
											<img src="/assets/images/details/shop/StandsDisplay/Frames/seg/3.jpg" alt="image_not_found">
										</div>
									</div>

									<ul class="nav ul_li_block clearfix float-left owl-carousel productImg_slider" role="tablist">
										<li>
											<a class="active" data-toggle="tab" href="#image_1">
												<img src="/assets/images/details/shop/StandsDisplay/Frames/seg/1.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_2">
												<img src="/assets/images/details/shop/StandsDisplay/Frames/seg/2.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_3">
												<img src="/assets/images/details/shop/StandsDisplay/Frames/seg/3.jpg" alt="image_not_found">
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
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Frames are lightweight and easy to install.</li>
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Made of high resolution print and durable materials.</li>											
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Custom graphic designing to promote your brand.</li>											
											</ul>
										</div>
										<div class="bg-lights p-3 col-md-6">
											<ul class="list-unstyled mb-0">
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Available in four different sizes.</li>
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Comes with corner connectors, allen wrench and silver extrusions.</li>											
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
                                                        <option selected value="6">2 x 3 Feet</option>
                                                        <option value="8">2 x 4 Feet</option>
                                                        <option value="12">3 x 4 Feet</option>
                                                        <option value="16">4 x 4 Feet</option>
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
													<label class="my-1 mr-2">Add Frame</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="frame">
														<option selected value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select>
                                                </div>
												<div class="col-md-3">
													<label id="frameAmount" class="text-danger font-weight-bold">$<span></span></label>
											   </div>
                                            </div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Color</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="color">
														<option selected value="0">Silver</option>
                                                        <option value="1">Black</option>
                                                        <option value="1">Textured</option>
                                                    </select>
                                                </div>
												<div class="col-md-3">
													<label id="colorAmount" class="text-danger font-weight-bold">$<span></span></label>
											   </div>
                                            </div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Banner</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="banner">
														<option selected value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select>
                                                </div>
												<div class="col-md-3">
													<label id="bannerAmount" class="text-danger font-weight-bold">$<span></span></label>
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
										SEG stands for Silicone Edge Graphics, a high-resolution graphic printed onto a tension fabric and finished with a thin, silicone gasket sewn around the edge of the fabric. The stitched silicone edge of the fabric is then tucked into the channel of a frame in order to display graphics fast and easy. SEG (Silicone Edge Graphics) are high-resolution graphics printed via dye sublimation, UV, Latex or Solvent, onto fabric, and then finished with a thin silicone strip sewn directly to the graphics' edge. This construction is designed to be inserted into a custom aluminum extruded frame.
									</p>
									
										<strong>Promote Your Business Conveniently With Silicon Edged Graphics on Custom Frames </strong>
										<p>Want quick promotional displays that can be changed instantly at events? Our SEG fabric frames are the perfect choice. We at Amdaprints offer lightweight displays that are portable and can be easily mounted on walls. With easy installation and replacement, our tension fabric frames ensure convenience while promoting your business. You can use them at trade shows, events, retail stores, networking conferences, and any other event you would like. </p>
										<p>Our beautiful tension fabric frames are bound to an anodized metal frame. The metal frame comes in black and silver colors, and has the option to add a custom graphic. Depending on your requirement, you can personalize the graphic using our online designing tools or readymade templates. </p>
										<p>We will print your unique branded designs boosting your return of investment. The custom-printed graphic selected will come with a thin silicone strip attached around the edges. This silicone strip assists in holding the graphic in place when inserted in a metal frame, creating an upscale look. </p>
										<p>We offer four different sizes in SEG fabric frames. All of these sizes are precisely cut and have easy visibility from a distance. Our customization options coupled with simplified utility will help you effectively market your business.</p>
										<strong>High-Quality SEG Fabric Frames that are Easy to Set-Up</strong>
										<p>We make our fabric frames using high quality materials and printing. They are composed of 230 GSM polyester fabric and 6063 grade aluminium alloy. These materials are engineered to withstand all outdoor elements and last for years. Our printing does not fade or bleed with time either. We use a full color 1440 DPI sublimation printing technique that guarantees impactful visibility.</p>
										<p>Our fabric frames order package comes with corner connectors, allen wrench and silver extrusions for easy set up. You can also maintain and wash our fabric frames by following our simple care instructions.</p>
										<strong>Bulk Quantity Discount on Fabric Frames</strong>
										<p>If you are placing an order for two or more fabric frames, then you will be eligible for a special bulk discount. We have made an overview table for you, mentioning our varying discount slabs.  Check it out and get your fabric frames at an affordable bulk price now.</p>
										
								</div>
								<div id="additionalinfo_tab" class="tab-pane fade">
									<ul class="list-unstyled">
										<li><i class="fas fa-caret-right text-danger mr-2"></i>These are highly durable, the use of dye sublimation printing process gives it a vibrant and finished look, making the product wrinkle free and washable.</li>										
										<li><i class="fas fa-caret-right text-danger mr-2"></i>It just takes minutes to assemble and disassemble. Even a person without knowledge or experience can install it. SEG Fabric Frames are cost effective, and can also be shipped to various locations, without much effort.</li>										
										<li><i class="fas fa-caret-right text-danger mr-2"></i>It is also easy to remove and store, compared to the old signage displays. You can keep it aside for future use; rather than buying a new fabric graphic.</li>										
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Our custom Fabric frame is a versatile and a high impact display that can grab the attention of customers and keep them engaged. We have a lot of options; so, ensure, to choose the right option. Our Fabric Frame is available in four different sizes, for a perfect display, you can contact us and we will provide you with assistance in selecting a display of your choice.</li>										
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
		// $('#colorAmount').hide();
		$('#bannerAmount').hide();
		$('#frameAmount').hide();
	});
</script>
<script>
	function addCart(loginStatus)
	{
		var loginStatus = loginStatus;
		// alert(loginStatus);
		if (loginStatus > 0) {
		var category = 'Frames';
		var name = '<?php echo $product ?>';
		var total = $('#total').html();
		var size = $('#bannerSize').find(":selected").text();
		var qty = $('#mainQty').val();
		var frame = $('#frame').find(":selected").text();
		var color = $('#color').find(":selected").text();
		var banner = $('#banner').find(":selected").text();
		var img = $('#image_1').find('img').attr('src');
		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
              type: "POST",
              url: "/cart-add",
              data: {category:category,name:name,amount:total,size:size,qty:qty,img:img,banner:banner,frame:frame,color:color},
            
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

		$('#color, #banner, #frame').val('0').niceSelect('update');
		$('#bannerAmount, #frameAmount').fadeOut().hide();
		$('#mainQty').val(1);
		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			var bannerSize = $(this).val();
            
            $.ajax({
              type: "POST",
              url: "/seg-fabric-frame-size",
              data: {size:bannerSize},
            
              success:function(response) {
                console.log(response);  
				$('#colorAmount span').html(response.color);
				$('#total').html(response.total.toFixed(2));
				$('#finalTotal').html(response.final.toFixed(2));   
              },
              error: function(error){
                console.log(error)
              }
        });
	});
	$('#mainQty').on('change',function(){
		
		$('#color, #banner, #frame').val('0').niceSelect('update');
		$('#bannerAmount, #frameAmount').fadeOut().hide();
		
		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			var bannerSize = $('#bannerSize').val();
            var quantity = $(this).val();
            $.ajax({
              type: "POST",
              url: "/seg-fabric-frame-qty",
              data: {size:bannerSize,qty:quantity},
            
              success:function(response) {
                console.log(response);  
				$('#colorAmount span').html(response.color);
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
              url: "/seg-fabric-frame-size",
              data: {size:bannerSize},
            
              success:function(response) {
                console.log(response); 
				$('#colorAmount span').html(response.color); 
				$('#total').html(response.total.toFixed(2));
				$('#finalTotal').html(response.final.toFixed(2));   
              },
              error: function(error){
                console.log(error)
              }
        });

			// Add frame
			$('#frame').change(function(){
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
					var frame = $(this).val();
					var total = $('#total').html();
           			$.ajax({
           			  type: "POST",
           			  url: "/seg-fabric-frame-frame",
           			  data: {size:bannerSize,qty:quantity,frame:frame,total:total},
					
           			  success:function(response) {
           			    console.log(response);  
						   	$('#frameAmount span').html(response.frame.toFixed(2));
							$('#frameAmount').fadeIn().show();
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
				    var frame = $(this).val();
           			$.ajax({
           			  type: "POST",
           			  url: "/seg-fabric-frame-frame",
           			  data: {size:bannerSize,qty:quantity,frame:frame,total:total},
					
           			  success:function(response) {
           			    console.log(response);  
							$('#frameAmount').fadeOut().hide();
						   	$('#frameAmount span').html('');
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
			$('#banner').change(function(){
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
           			  url: "/seg-fabric-frame-banner",
           			  data: {size:bannerSize,qty:quantity,banner:banner,total:total},
					
           			  success:function(response) {
           			    console.log(response);  
						   	$('#bannerAmount span').html(response.banner.toFixed(2));
							$('#bannerAmount').fadeIn().show();
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
           			  url: "/seg-fabric-frame-banner",
           			  data: {size:bannerSize,qty:quantity,banner:banner,total:total},
					
           			  success:function(response) {
           			    console.log(response);  
							$('#bannerAmount').fadeOut().hide();
						   	$('#bannerAmount span').html('');
							$('#total').html(response.total.toFixed(2));
							$('#finalTotal').html(response.final.toFixed(2));   
           			  },
           			  error: function(error){
           			    console.log(error)
           			  }
           			});
				}
			});

			// Add color
			$('#color').change(function(){
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
					var color = $(this).val();
					var total = $('#total').html();
           			$.ajax({
           			  type: "POST",
           			  url: "/seg-fabric-frame-color",
           			  data: {size:bannerSize,qty:quantity,color:color,total:total},
					
           			  success:function(response) {
           			    console.log(response);  
						   	$('#colorAmount span').html(response.color.toFixed(2));
							$('#colorAmount').fadeIn().show();
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
				    var color = $(this).val();
           			$.ajax({
           			  type: "POST",
           			  url: "/seg-fabric-frame-color",
           			  data: {size:bannerSize,qty:quantity,color:color,total:total},
					
           			  success:function(response) {
           			    console.log(response);  
						   $('#colorAmount span').html(response.color);
							$('#colorAmount').fadeIn().show();
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