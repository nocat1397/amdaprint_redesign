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
											<img src="/assets/images/details/shop/StandsDisplay/RetractableBannerStands/multifunctional/1.jpg" alt="image_not_found">
										</div>
										<div id="image_2" class="tab-pane fade">
											<img src="/assets/images/details/shop/StandsDisplay/RetractableBannerStands/multifunctional/2.jpg" alt="image_not_found">
										</div>
										<div id="image_3" class="tab-pane fade">
											<img src="/assets/images/details/shop/StandsDisplay/RetractableBannerStands/multifunctional/3.jpg" alt="image_not_found">
										</div>
									</div>

									<ul class="nav ul_li_block clearfix float-left owl-carousel productImg_slider" role="tablist">
										<li>
											<a class="active" data-toggle="tab" href="#image_1">
												<img src="/assets/images/details/shop/StandsDisplay/RetractableBannerStands/multifunctional/1.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_2">
												<img src="/assets/images/details/shop/StandsDisplay/RetractableBannerStands/multifunctional/2.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_3">
												<img src="/assets/images/details/shop/StandsDisplay/RetractableBannerStands/multifunctional/3.jpg" alt="image_not_found">
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
												<li><i class="fas fa-caret-right text-danger mr-2"></i>There are durable carbon composite frames and PVC flex banners on these stands.</li>
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Design and customize banner graphics for your business.</li>											
												<li><i class="fas fa-caret-right text-danger mr-2"></i>It is easy to maintain and clead stands and banners.</li>											
											</ul>
										</div>
										<div class="bg-lights p-3 col-md-6">
											<ul class="list-unstyled mb-0">
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Environmentally friendly printing reduces your carbon footprint.</li>
												<li><i class="fas fa-caret-right text-danger mr-2"></i>High-quality, full-color printing achieves clarity and visibility.</li>											
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
                                                        <option selected value="12">2 x 6 Feet</option>
                                                        <option value="16">2 x 8 Feet</option>
                                                        <option value="15">2.5 x 6 Feet</option>
                                                        <option value="22">4 x 5.5 Feet</option>
                                                        <option value="26">4 x 6.5 Feet</option>
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
										The banner stands apart from being portable, they are so easily assembled and turned into a stand and they can also be easily dismantled. The range of Multifunctional Adjustable X Banner Stands that we offer our customers is huge. They can choose from the wide variety of options that we give. The print on the banners that we give to our customers if they buy from us are mostly colors that are eco friendly and also they are printed using solvent technique.
									</p>
									
										<strong><strong>Make Your Business Stand Out with X Banner Stands</strong></strong>
										<strong>Multifunctional Adjustable X Banner Stands are Durable, High Quality, and Customizable</strong>
										<p>To keep up with the times, you must promote different products and discounts. Choosing the right type of signage allows for quick changes and easy adaptability. Our advertising banner stands take up little floor space and are also simple to set up. Managers can leave the stands up and simply change out the banners as needed.</p>
										<p>Carbon composite fiber construction makes these marketing banner stands sturdy and durable, while a tripod design keeps them balanced. The banners comprise PVC flex material that's easy to work with and adjust. Suitable for indoor and outdoor displays, they resist corrosion and impact.</p>
										<p>High-resolution, 720 DPI printing makes the graphics and text of our advertising banner stands clearly visible from across the room or the convention hall. The process also offers a wide range of possible colors. Details stand out to prospective customers, elevating your brand and company profile.</p>
										<p>The promotional banner stands come in a selection of sizes, so you can pick the one that correctly fits the available space. Other options include the ability to order stands or banners individually. Add specific instructions and develop customized text and graphic designs.</p>
										<strong>Advertising Banner Stands are Eco-Friendly and Easy to Clean</strong>
										<p>We use an eco-solvent printing process that uses sustainable methods and materials. This reduces environmental impact and gives you environmentally friendly marketing banner stands. Promote both your business and environmental and social responsibility.</p>
										<p>Simple to maintain, the promotional banner stands require little time and effort to clean. Simply wipe down the frames and the banners with a soft, damp cloth as needed to remove dust and other particles. There's also no need for an additional cleaning solution, helping you conserve resources.</p>
										<strong>Multifunctional Adjustable X Banner Stands are Easily Portable</strong>
										<p>A lightweight design makes these advertising banner stands conveniently portable, so it's easy to take them to and from trade shows or in and out of storage. Move them to new spots for display and maximize return on investment. There's also an included carrying bag to hold the folded-down frames.</p>
										<p>Shop online for X Frame Banner Stands for your business online at Amdaprints.</p>  
										
								</div>
								<div id="additionalinfo_tab" class="tab-pane fade">
									<ul class="list-unstyled">
										<li><i class="fas fa-caret-right text-danger mr-2"></i>The reason being our customers will display these banner stands with the advertisements and seeing the uniqueness of these stands, other people will also get attracted. </li>										
										<li><i class="fas fa-caret-right text-danger mr-2"></i>The best part of the Multifunctional Adjustable X Banner Stands can be adjusted to any size depending on the size of the banner that has to be pinned on the stands. So the stands are flexible to the heights and can be easily adjusted. This one time investment is no harm as they can be used any time and at any place. Since the height can be adjusted, they become more useful.</li>										
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Multifunctional Adjustable X Banner Stands are mostly used in conferences, in the events, boardrooms, etc. These stands are being widely purchased because of its multifunctional nature and also the cost. </li>										
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
              data: {category:category,name:name,amount:total,size:size,qty:qty,img:img,banner:addBanner,
				stand:addStand,lamination:lamination},
            
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
              url: "/multi-x-banner-stand-size",
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
              url: "/multi-x-banner-stand-qty",
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
              url: "/multi-x-banner-stand-size",
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
           			  url: "/multi-x-banner-stand-add",
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
           			  url: "/multi-x-banner-stand-add",
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
           			  url: "/multi-x-banner-stand-banner",
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
           			  url: "/multi-x-banner-stand-banner",
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
           			  url: "/multi-x-banner-stand-lamination",
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
           			  url: "/multi-x-banner-stand-lamination",
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