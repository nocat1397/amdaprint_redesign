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
											<img src="/assets/images/details/shop/bCards/premium/raisedUv/raiseuv1.jpg" alt="image_not_found">
										</div>
										<div id="image_2" class="tab-pane fade">
											<img src="/assets/images/details/shop/bCards/premium/raisedUv/raiseuv2.jpg" alt="image_not_found">
										</div>
										<div id="image_3" class="tab-pane fade">
											<img src="/assets/images/details/shop/bCards/premium/raisedUv/raiseuv3.jpg" alt="image_not_found">
										</div>
										
									</div>

									<ul class="nav ul_li_block clearfix float-left owl-carousel productImg_slider" role="tablist">
										<li>
											<a class="active" data-toggle="tab" href="#image_1">
												<img src="/assets/images/details/shop/bCards/premium/raisedUv/raiseuv1.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_2">
												<img src="/assets/images/details/shop/bCards/premium/raisedUv/raiseuv2.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_3">
												<img src="/assets/images/details/shop/bCards/premium/raisedUv/raiseuv3.jpg" alt="image_not_found">
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
									{{-- <span class="price_text mb_30"><strong>₹89.00</strong> <del>₹100.00</del></span> --}}
									<div id="details_form">
                                        <form action="" class="productForm">
                                            @csrf
                                            
                                            <hr class="mt-5 mb-5">
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Size</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="cardSize" disabled>
														<option selected value="7">2" X 3.5" (U.S Standard)</option>
														{{-- <option  value="7.17">2.125" X 3.375" (Euro)</option>  
														<option  value="6.13">1.75" X 3.5" (Slim)</option>  
														<option  value="4">2" X 2" (Mini Square)</option>  
														<option  value="5">2.5" X 2.5" (Square)</option>  
														<option  value="6">3" X 3" (Jumbo square)</option>   --}}
													</select>
												</div>
											</div>
                                            <div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Paper Type</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="paperType" disabled>
														<option selected value="1">16 pt Cardstock Matte</option>
														{{-- <option value="2">17 pt cardstock Matte</option>   --}}
													</select>
												</div>
											</div>
                                            <div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Quantity:</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="mainQty">
														<option selected value="100">100</option>
														<option  value="250">250</option>
														<option  value="500">500</option>
														<option  value="1000">1000</option>
														<option  value="2000">2000</option>
                                                    </select>
                                                </div>
                                            </div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Printed Side</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="printSide">
														<option selected value="0">Single Side</option>
														<option value="1">Both Side</option>
													</select>
												</div>
                                                <div class="col-md-3">
													<label id="printsideAmount" class="text-danger font-weight-bold">$<span></span></label>
											   </div>
											</div>
                                            <div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Finish Type</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="finishType">
														<option selected value="0">None</option>
														<option value="1">Velvet</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
													<label id="finishtypeAmount" class="text-danger font-weight-bold">$<span></span></label>
											   </div>
                                            </div>
											
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Raised Spot UV Side</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="uv">
														<option selected value="0">Single Side</option>
														<option value="1">Both Side</option>
													</select>
												</div>
												<div class="col-md-3">
													<label id="uvAmount" class="text-danger font-weight-bold">$<span></span></label>
											   </div>
											</div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Rounderd Corners</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="rounded">
														<option selected value="0">No</option>
														<option value="1">Yes</option>
													</select>
												</div>
                                                <div class="col-md-3">
													<label id="roundedAmount" class="text-danger font-weight-bold">$<span></span></label>
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
										A Raised UV business card is when partial high gloss raised UV is applied over specific graphic elements on a design. The result strikes a significant contrast, shine, and thickness between the elements that have the Raised UV and the rest of the design. Raised UV can be applied to any color within your design.
									</p>
									<strong>Raise your brand up with raised spot UV business cards.</strong>
									
									<p>Looking for a way to make your business card not just stand out, but stand up? Give someone your custom raised spot UV business cards and they'll see and truly feel the difference. You'll make an impression on every finger, and in every mind they touch.</p>
									<p>Raised spot UV business card printing involves a special spot UV process where a layer of UV ink is applied to your cards on a specified area of your design. This layer of UV ink is about 50 microns higher than the surrounding surface, giving your cards an interesting, memorable texture wherever the raised spot UV is applied.</p>
									<p>Use raised ink on your cards so customers can literally feel your designs and your brand, just like embossed business cards. These cards are popular for businesses of all sizes looking for a way to stand out from the competition. Raised ink cards are also perfect for appointment cards as well.</p>
						
									<p>We print raised spot UV business cards in the <strong>standard 2" x 3.5" size</strong> and on <strong>durable 16 pt. velvet soft touch cardstock</strong> that elevates the premium texture.&nbsp;</p>
					
									<p>You can also print with raised UV ink on one or both sides, allowing for intriguing design possibilities. A 5-day turnaround and a low minimum of 100 cards is available.</p>
									<p>Elevate your business card customization. Try our raised spot UV business card printing.</p>            
								</div>
								<div id="additionalinfo_tab" class="tab-pane fade">
									<ul class="list-unstyled">
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Make a great first impression and get your visiting cards noticed with multicolor digital printed premium visiting cards.</li>
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Finished artwork should use the full bleed dimensions for best results.</li>
											
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
		$('#finishtypeAmount').hide();
		$('#printsideAmount').hide();
		$('#roundedAmount').hide();
		$('#uvAmount').hide();
	});
</script>
<script>
	function addCart(loginStatus)
	{
		var loginStatus = loginStatus;
		// alert(loginStatus);
		if (loginStatus > 0) {
		var category = 'Business Cards';
		var route = $('input[name="route"]:checked').val();
		var name = '<?php echo $product ?>';
		var total = $('#finalTotal').html();
		var size = $('#cardSize').find(":selected").text();
		var qty = $('#mainQty').val();
		var printSide = $('#printSide').find(":selected").text();
		var paperType = $('#paperType').find(":selected").text();
		var rounded = $('#rounded').find(":selected").text();
		var UVside = $('#uv').find(":selected").text();
		var finishtype = $('#finishType').find(":selected").text();
		var img = $('#image_1').find('img').attr('src');
		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
              type: "POST",
              url: "/cart-add",
              data: {category:category,name:name,amount:total,size:size,qty:qty,img:img,printside:printSide,
				papertype:paperType,rounded:rounded,finishtype:finishtype,UVside:UVside,route:route},
            
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
	$('#cardSize').on('change',function(){

		$('#printSide, #rounded, #uv').val('0').niceSelect('update');
		$('#printsideAmount,#roundedAmount,#uvAmount').fadeOut().hide();
		$('#finishType, #paperType').val(1).niceSelect('update');
		$('#mainQty').val(100).niceSelect('update');
		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			var cardSize = $(this).val();
			var paperType = $('#paperType').val();
            
            $.ajax({
              type: "POST",
              url: "/uv-card-size",
              data: {size:cardSize,paper:paperType},
            
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
		$('#printSide, #rounded, #uv').val('0').niceSelect('update');
		$('#printsideAmount,#roundedAmount,#uvAmount').fadeOut().hide();
		$('#finishType').val(1).niceSelect('update');
		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			var cardSize = $('#cardSize').val();
			var paperType = $('#paperType').val();
            var quantity = $(this).val();
            $.ajax({
              type: "POST",
              url: "/uv-card-qty",
              data: {size:cardSize,qty:quantity,paper:paperType},
            
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
			var cardSize = $('#cardSize').val();
			console.log(cardSize);
            
            $.ajax({
              type: "POST",
              url: "/uv-card-size",
              data: {size:cardSize},
            
              success:function(response) {
                console.log(response);  
				$('#total').html(response.total.toFixed(2));
				$('#finalTotal').html(response.final.toFixed(2));   
              },
              error: function(error){
                console.log(error)
              }
        });

			// Add paper type
			$('#paperType').change(function(){
				
				$('#printSide, #rounded, #uv').val('0').niceSelect('update');
				$('#printsideAmount,#roundedAmount,#uvAmount').fadeOut().hide();
				$('#finishType').val(1).niceSelect('update');
				$('#mainQty').val(100).niceSelect('update');
				var value = $(this).val();
					
				$.ajaxSetup({
           		    headers: {
           		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           		    }
           		});

				var quantity = $('#mainQty').val();
				var cardSize = $('#cardSize').val();
				var paper = $(this).val();

           		$.ajax({
           		  type: "POST",
           		  url: "/uv-card-paper",
           		  data: {size:cardSize,qty:quantity,paper:paper},
				
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

			// Print Side
			$('#printSide').change(function(){
				var value = $(this).val();
				if(value == 1)
				{
					
					$.ajaxSetup({
           			    headers: {
           			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           			    }
           			});
					var quantity = $('#mainQty').val();
					var cardSize = $('#cardSize').val();
					var paper = $('#paperType').val();
					var printSide = $(this).val();
					var total = $('#finalTotal').html();
           			$.ajax({
           			  type: "POST",
           			  url: "/uv-card-printside",
           			  data: {size:cardSize,qty:quantity,paper:paper,total:total,printside:printSide},
					
           			  success:function(response) {
           			    console.log(response);  
						   	$('#printsideAmount span').html(response.printsideRate.toFixed(2));
							$('#printsideAmount').fadeIn().show();
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
					var cardSize = $('#cardSize').val();
					var paper = $('#paperType').val();
					var printSide = $(this).val();
					var total = $('#finalTotal').html();
           			$.ajax({
					  type: "POST",
           			  url: "/uv-card-printside",
           			  data: {size:cardSize,qty:quantity,paper:paper,total:total,printside:printSide},
					
           			  success:function(response) {
           			    console.log(response);  
						   $('#printsideAmount span').html(response.printsideRate.toFixed(2));
							$('#printsideAmount').fadeOut().hide();
							$('#total').html(response.total.toFixed(2));
							$('#finalTotal').html(response.final.toFixed(2));   
           			  },
           			  error: function(error){
           			    console.log(error)
           			  }
           			});
				}
			});

			// UV Spot Side
			$('#uv').change(function(){
				var value = $(this).val();
				if(value == 1)
				{
					
					$.ajaxSetup({
           			    headers: {
           			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           			    }
           			});
					var quantity = $('#mainQty').val();
					var cardSize = $('#cardSize').val();
					var paper = $('#paperType').val();
					var uv = $(this).val();
					var total = $('#finalTotal').html();
           			$.ajax({
           			  type: "POST",
           			  url: "/uv-card-side",
           			  data: {size:cardSize,qty:quantity,paper:paper,total:total,uv:uv},
					
           			  success:function(response) {
           			    console.log(response);  
						   	$('#uvAmount span').html(response.uvRate.toFixed(2));
							$('#uvAmount').fadeIn().show();
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
					var cardSize = $('#cardSize').val();
					var paper = $('#paperType').val();
					var uv = $(this).val();
					var total = $('#finalTotal').html();
           			$.ajax({
					  type: "POST",
           			  url: "/uv-card-side",
           			  data: {size:cardSize,qty:quantity,paper:paper,total:total,uv:uv},
					
           			  success:function(response) {
           			    console.log(response);  
						   $('#uvAmount span').html(response.uvRate.toFixed(2));
							$('#uvAmount').fadeOut().hide();
							$('#total').html(response.total.toFixed(2));
							$('#finalTotal').html(response.final.toFixed(2));   
           			  },
           			  error: function(error){
           			    console.log(error)
           			  }
           			});
				}
			});

			// Rounded
			$('#rounded').change(function(){
				var value = $(this).val();
				if(value == 1)
				{
					
					$.ajaxSetup({
           			    headers: {
           			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           			    }
           			});
					var quantity = $('#mainQty').val();
					var cardSize = $('#cardSize').val();
					var paper = $('#paperType').val();
					var rounded = $(this).val();
					var total = $('#finalTotal').html();
           			$.ajax({
           			  type: "POST",
           			  url: "/uv-card-rounded",
           			  data: {size:cardSize,qty:quantity,paper:paper,total:total,rounded:rounded},
					
           			  success:function(response) {
           			    console.log(response);  
						   	$('#roundedAmount span').html(response.roundedRate.toFixed(2));
							$('#roundedAmount').fadeIn().show();
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
					var cardSize = $('#cardSize').val();
					var paper = $('#paperType').val();
					var rounded = $(this).val();
					var total = $('#finalTotal').html();
           			$.ajax({
					  type: "POST",
           			  url: "/uv-card-rounded",
           			  data: {size:cardSize,qty:quantity,paper:paper,total:total,rounded:rounded},
					
           			  success:function(response) {
           			    console.log(response);  
						   $('#roundedAmount span').html(response.roundedRate.toFixed(2));
							$('#roundedAmount').fadeOut().hide();
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