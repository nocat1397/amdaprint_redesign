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
											<img src="/assets/images/details/shop/StandsDisplay/RetractableBannerStands/static/1.jpg" alt="image_not_found">
										</div>
										<div id="image_2" class="tab-pane fade">
											<img src="/assets/images/details/shop/StandsDisplay/RetractableBannerStands/static/2.jpg" alt="image_not_found">
										</div>
										<div id="image_3" class="tab-pane fade">
											<img src="/assets/images/details/shop/StandsDisplay/RetractableBannerStands/static/3.jpg" alt="image_not_found">
										</div>
									</div>

									<ul class="nav ul_li_block clearfix float-left owl-carousel productImg_slider" role="tablist">
										<li>
											<a class="active" data-toggle="tab" href="#image_1">
												<img src="/assets/images/details/shop/StandsDisplay/RetractableBannerStands/static/1.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_2">
												<img src="/assets/images/details/shop/StandsDisplay/RetractableBannerStands/static/2.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_3">
												<img src="/assets/images/details/shop/StandsDisplay/RetractableBannerStands/static/3.jpg" alt="image_not_found">
											</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-lg-5 col-md-6 col-sm-10 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
								<div class="details_content">
									<h2 class="item_title mb_15 text-capitalize">{{$product}}</h2>
									<ul class="rating_star ul_li mb_30 clearfix">
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
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
                                                        <option selected value="10">2 x 5 Feet</option>
                                                        <option value="15">2.5 x 6 Feet</option>
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
										X banner stands are used to display large format graphics in a trade show or retail presentation. These exhibition stands have an adjusting design you can manipulate to display a range of different-sized prints.
									</p>
								
								</div>
								<div id="additionalinfo_tab" class="tab-pane fade">
									<ul class="list-unstyled">
										<li><i class="fas fa-caret-right text-danger mr-2"></i>X banner stands are used to display large format graphics in a trade show or retail presentation. These exhibition stands have an adjusting design you can manipulate to display a range of different-sized prints.</li>										
										<li><i class="fas fa-caret-right text-danger mr-2"></i>X banner stands use their X-like design to pull a banner taut, creating tension and ultimately displaying your graphics beautifully. Simply push the button to unlock the legs and pull them into the desired layout. Once in place, the button will lock to securely hold a standing position.</li>										
										<li><i class="fas fa-caret-right text-danger mr-2"></i>The X banner stands are equipped with hooks to securely attach graphics with grommets. The event display holders easily fold down into a smaller, more manageable size, making them extremely easy to carry during travel. Included is a carrying bag to keep them protected in between events. </li>										
										<li><i class="fas fa-caret-right text-danger mr-2"></i>The portable exhibition fixtures are affordable trade show tools you can use to create stunning presentations.</li>										
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
              url: "/static-x-banner-stand-size",
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
              url: "/static-x-banner-stand-qty",
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
              url: "/static-x-banner-stand-size",
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
           			  url: "/static-x-banner-stand-add",
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
           			  url: "/static-x-banner-stand-add",
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
           			  url: "/static-x-banner-stand-banner",
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
           			  url: "/static-x-banner-stand-banner",
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
           			  url: "/static-x-banner-stand-lamination",
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
           			  url: "/static-x-banner-stand-lamination",
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