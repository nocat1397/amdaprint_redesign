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
											<img src="/assets/images/details/shop/bCards/standard/square/square1.jpg" alt="image_not_found">
										</div>
										<div id="image_2" class="tab-pane fade">
											<img src="/assets/images/details/shop/bCards/standard/square/square2.jpg" alt="image_not_found">
										</div>
										<div id="image_3" class="tab-pane fade">
											<img src="/assets/images/details/shop/bCards/standard/square/square3.jpg" alt="image_not_found">
										</div>
									</div>

									<ul class="nav ul_li_block clearfix float-left owl-carousel productImg_slider" role="tablist">
										<li>
											<a class="active" data-toggle="tab" href="#image_1">
												<img src="/assets/images/details/shop/bCards/standard/square/square1.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_2">
												<img src="/assets/images/details/shop/bCards/standard/square/square2.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_3">
												<img src="/assets/images/details/shop/bCards/standard/square/square3.jpg" alt="image_not_found">
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
                                            
                                            
											<div class="row mb-4">
												<div class="bg-lights p-3 col-md-6">
													<ul class="list-unstyled mb-0">
														<li><i class="fas fa-caret-right text-danger mr-2"></i>A graphic, text, logo, or image can be used to customize the product.</li>
														<li><i class="fas fa-caret-right text-danger mr-2"></i>Paper finishes include gloss, matte, and uncoated.</li>											
													</ul>
												</div>
												<div class="bg-lights p-3 col-md-6">
													<ul class="list-unstyled mb-0">
														<li><i class="fas fa-caret-right text-danger mr-2"></i>Various sizes are available.</li>
														<li><i class="fas fa-caret-right text-danger mr-2"></i>Printing is available on both the front and the back.</li>											
													</ul>
												</div>
											</div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Size</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="cardSize">
														<option selected value="4">2" X 2" (Mini Square)</option>
														<option value="5">2.5" X 2.5" (Square)</option>  
														<option value="6">3" X 3" (Jumbo square)</option>  
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
														<option  value="2">16 pt Card Stock</option>  
														<option  value="3">17 pt Card Stock</option>  
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
										Create a business card with a square shape for a stunning dynamic look that is both artful and professional. Square business cards measure 2 x 2 inches | 2.5 x 2.5 inches. Using Ningbo star art paper of 350gsm to have that stiff, and strong finish to increase its durability.
									</p>
									<strong>Square Business Cards Come in Different Paper Types</strong>
									<p class="mb_30">In business, you need to make a great first impression. One way to do this is with these customizable square business cards. They’re made from premium quality paper and have a unique shape. Each one serves as a reminder to your clients that you mean business.</p>
									<p class="mb_30">You can choose the standard 14 pt Cardstock Gloss paper for a better sheen, vivid colors, and printing business cards, postcards, hangtags, and pocket folders. If you’re looking for a non-glossy finish that’s easier to write on, we also give you the option of 14 pt Cardstock Matte paper for printing.</p>
									<p class="mb_30">If you’re looking for a thicker card with a premium feel, you may choose the 16 pt Cardstock Matte paper or 17 pt Cardstock Uncoated paper. All four types of papers are sourced sustainably to reduce your carbon footprint and meet your environment-friendly brand goals.</p>
									<p class="mb_30">At Amdaprints, our square business cards come in three standard sizes - 2'' x 2'', 2.5'' x 2.5'', and 3'' x 3''. You can select any of them depending upon your requirements.</p>
									<strong>Personalize your Business Cards With Name, Text, & Logo</strong>
									<p class="mb_30">Our custom business cards, postcards, and hang tags can be ordered in different paper qualities to meet your budget and style requirements. You can personalize your business cards with your name, text, logos, and creative graphic to match your needs with us.

										What's more, you can select from a wide range of templates uploaded by our talented designers and edit them as per your needs. Furthermore, you can also hire one of our designers at a nominal charge or upload your own artwork altogether.</p>
									<strong>Custom Business Cards Available in Different Pack Sizes</strong>
									<p class="mb_30">At Amdaprints, our square business cards come in different pack sizes to cater to all your requirements. They come in pack sizes of 50, 100, 250, 500, 1000, and 2000.</p>
								</div>
								<div id="additionalinfo_tab" class="tab-pane fade">
									<ul class="list-unstyled">
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Our square business cards (2.5" x 2.5") have a look and feel that sets them apart from standard shapes.</li>
										<li><i class="fas fa-caret-right text-danger mr-2"></i>They’ve got a great layout for showcasing your logo or product shot, and they help give your company an interesting, creative vibe.</li>
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Plus, the compact size makes them a great option for product tags, coupons, product instructions and more.</li>											
										<li><i class="fas fa-caret-right text-danger mr-2"></i>You can get square cards with most of our paper stocks or even with rounded corners.</li>											
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
              data: {category:category,name:name,amount:total,size:size,qty:qty,img:img,printside:printSide,
				papertype:paperType,rounded:rounded,finishtype:finishtype,route:route},
            
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
              url: "/square-card-size",
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
              url: "/square-card-qty",
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
              url: "/square-card-size",
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
				
				$('#printSide, #rounded').val('0').niceSelect('update');
				$('#printsideAmount,#roundedAmount').fadeOut().hide();
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
           		  url: "/square-card-paper",
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
           			  url: "/square-card-printside",
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
           			  url: "/square-card-printside",
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
           			  url: "/square-card-finishtype",
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
           			  url: "/square-card-finishtype",
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
           			  url: "/square-card-rounded",
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
           			  url: "/square-card-rounded",
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