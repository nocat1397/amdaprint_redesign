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
											<img src="/assets/images/details/shop/bCards/standard/custom/custom1.jpg" alt="image_not_found">
										</div>
										<div id="image_2" class="tab-pane fade">
											<img src="/assets/images/details/shop/bCards/standard/custom/custom2.jpg" alt="image_not_found">
										</div>
										<div id="image_3" class="tab-pane fade">
											<img src="/assets/images/details/shop/bCards/standard/custom/custom3.jpg" alt="image_not_found">
										</div>
										<div id="image_4" class="tab-pane fade">
											<img src="/assets/images/details/shop/bCards/standard/custom/custom4.jpg" alt="image_not_found">
										</div>
										
									</div>

									<ul class="nav ul_li_block clearfix float-left owl-carousel productImg_slider" role="tablist">
										<li>
											<a class="active" data-toggle="tab" href="#image_1">
												<img src="/assets/images/details/shop/bCards/standard/custom/custom1.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_2">
												<img src="/assets/images/details/shop/bCards/standard/custom/custom2.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_3">
												<img src="/assets/images/details/shop/bCards/standard/custom/custom3.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_4">
												<img src="/assets/images/details/shop/bCards/standard/custom/custom4.jpg" alt="image_not_found">
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
									<div id="details_form">
                                        <form action="" class="productForm">
                                            @csrf
                                            
                                            
											<div class="row mb-4">
												
												<div class="bg-lights p-3 col-md-6">
													<ul class="list-unstyled mb-0">
														<li><i class="fas fa-caret-right text-danger mr-2"></i>The paper can be finished in gloss, matte, or uncoated.</li>
														<li><i class="fas fa-caret-right text-danger mr-2"></i>Graphics, text, logos, and images can be added to personalize.</li>											
													</ul>
												</div>
												<div class="bg-lights p-3 col-md-6">
													<ul class="list-unstyled mb-0">
														<li><i class="fas fa-caret-right text-danger mr-2"></i>Printing is available both on the front and on the back.</li>
														<li><i class="fas fa-caret-right text-danger mr-2"></i>Packs are available in a variety of sizes.</li>											
													</ul>
												</div>
											</div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Size</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="cardSize">
														<option selected value="7">2" X 3.5" (U.S Standard)</option>
														<option value="7.17">2.125" X 3.375" (Euro)</option>  
													</select>
												</div>
												
											</div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Paper Type</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="paperType">
														<option selected value="1">14 Pt Card Stock</option>
														<option value="2">16 pt Card Stock</option>  
														<option value="3">17 pt Card Stock</option>  
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
														<option value="250">250</option>
														<option value="500">500</option>
														<option value="1000">1000</option>
														<option value="2000">2000</option>
														<option value="4000">4000</option>
														<option value="5000">5000</option>
														<option value="7000">7000</option>
														<option value="10000">10000</option>
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
														<option value="1">Gloss</option>
														<option value="1">Matt</option>
														<option value="1">Full Gloss UV</option>
														<option value="1">Velvet</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
													<label id="finishtypeAmount" class="text-danger font-weight-bold">$<span></span></label>
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
										Custom business cards means sourcing your own graphics, positioning your own text, choosing your own colors, cardstock, and finishes, and making every single decision about how your final card should look & Your business card design is an essential part of your branding and should act as a visual extension of your brand design.
									</p>
									<strong>Standard Business Cards Come in Different Paper Types</strong>
									<p class="mb_30">A unique business card will help your brand stand out in an increasingly virtual world while creating a lasting impression. We give you the option of printing standard business cards in different paper types and finish to create custom cards that match your brand’s unique style.</p>
									<p class="mb_30">You can choose the standard 14 pt Cardstock Gloss paper for a better sheen, vivid colors, and printing business cards, postcards, hangtags, and pocket folders. If you’re looking for a non-glossy finish that’s easier to write on, we also give you the option of 14 pt Cardstock Matte paper for printing.</p>
									<p class="mb_30">If you’re looking for a thicker card with a premium feel, you may choose the 16 pt Cardstock Matte paper or 17 pt Cardstock Uncoated paper. All four types of papers are sourced sustainably to reduce your carbon footprint and meet your environment-friendly brand goals.</p>
									<p class="mb_30">At Amdaprints, our standard business cards come in both, horizontal and vertical orientations. You can select either of them depending on your requirements.</p>
									<strong>Personalize your Business Cards With Name, Text, & Logo</strong>
									<p class="mb_30">Our custom business cards, postcards, and hang tags can be ordered in different paper qualities to meet your budget and style requirements. You can personalize your cards with your name, text, logos, and creative graphic to match your needs with us.</p>
									<p class="mb_30">What's more, you can select from a wide range of templates uploaded by our talented designers and edit them as per your needs. Furthermore, you can also hire one of our designers at a nominal charge or upload your own artwork altogether.</p>
									<strong>Standard Business Cards Available in Different Pack Sizes</strong>
									<p class="mb_30">At Amdaprints, our business cards come in different pack sizes to cater to all your requirements. They come in pack sizes of 50, 100, 200, 250, 300, 400, 500, 1000, 1500, 2000, 2500, 5000, and 10000.</p>
									{{--  <p class="mb-0">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudinInteger in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, 
									</p>  --}}
								</div>
								<div id="additionalinfo_tab" class="tab-pane fade">
							
									<ul class="list-unstyled">
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Your business is one of a kind – your business cards should be, too.</li>
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Whether you’re making first impressions, rewarding regulars with a loyalty card or giving satisfied clients your contact info for next time, we’re here to help you look and feel ready to impress.</li>
										<li><i class="fas fa-caret-right text-danger mr-2"></i>And with our user-friendly upload and design tools, we make business card printing easy.</li>											
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
		// $('#packAmount').hide();
		$('#printsideAmount').hide();
		$('#roundedAmount').hide();
		$('#finishtypeAmount').hide();
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
				data: {category:category,name:name,amount:total,size:size,qty:qty,img:img,printside:printSide,papertype:paperType,
					rounded:rounded,finishtype:finishtype,route:route},
					
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

		$('#printSide, #rounded').val('0').niceSelect('update');
		$('#printsideAmount,#roundedAmount').fadeOut().hide();
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
              url: "/custom-card-size",
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
		$('#printSide, #rounded').val('0').niceSelect('update');
		$('#printsideAmount,#roundedAmount').fadeOut().hide();
		$('#finishType').val(0).niceSelect('update');
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
              url: "/custom-card-qty",
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
            
            $.ajax({
              type: "POST",
              url: "/custom-card-size",
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
	});

			// Add paper type
			$('#paperType').change(function(){
				
				$('#printSide, #rounded').val('0').niceSelect('update');
				$('#printsideAmount,#roundedAmount').fadeOut().hide();
				$('#finishType').val(0).niceSelect('update');
				$('#printSide, #rounded').val('0').niceSelect('update');
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
           		  url: "/custom-card-paper",
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
           			  url: "/custom-card-printside",
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
           			  url: "/custom-card-printside",
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
			// Finish Type
			$('#finishType').change(function(){
				var value = $(this).val();
				if(value > 0)
				{
					
					$.ajaxSetup({
           			    headers: {
           			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           			    }
           			});
					var quantity = $('#mainQty').val();
					var cardSize = $('#cardSize').val();
					var paper = $('#paperType').val();
					var printSide = $('#printSide').val();
					var finishType = $(this).val();
					var total = $('#finalTotal').html();
           			$.ajax({
           			  type: "POST",
           			  url: "/custom-card-finishtype",
           			  data: {size:cardSize,qty:quantity,paper:paper,total:total,printside:printSide,finishtype:finishType},
					
           			  success:function(response) {
           			    console.log(response);  
						   	$('#finishtypeAmount span').html(response.finishtypeRate.toFixed(2));
							$('#finishtypeAmount').fadeIn().show();
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
					var printSide = $('#printSide').val();
					var finishType = $(this).val();
					var total = $('#finalTotal').html();
           			$.ajax({
					  type: "POST",
           			  url: "/custom-card-finishtype",
           			  data: {size:cardSize,qty:quantity,paper:paper,total:total,printside:printSide,finishtype:finishType},
					
           			  success:function(response) {
           			    console.log(response);  
						   $('#finishtypeAmount span').html(response.finishtypeRate.toFixed(2));
							$('#finishtypeAmount').fadeOut().hide();
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
           			  url: "/custom-card-rounded",
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
           			  url: "/custom-card-rounded",
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
	</script>

</body>
</html>