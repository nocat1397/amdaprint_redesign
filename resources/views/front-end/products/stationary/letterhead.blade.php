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
											<img src="/assets/images/details/shop/letterhead/1.jpg" alt="image_not_found">
										</div>
										<div id="image_2" class="tab-pane fade">
											<img src="/assets/images/details/shop/letterhead/2.jpg" alt="image_not_found">
										</div>
										<div id="image_3" class="tab-pane fade">
											<img src="/assets/images/details/shop/letterhead/3.jpg" alt="image_not_found">
										</div>
										<div id="image_4" class="tab-pane fade">
											<img src="/assets/images/details/shop/letterhead/4.jpg" alt="image_not_found">
										</div>
									</div>

									<ul class="nav ul_li_block clearfix float-left owl-carousel productImg_slider" role="tablist">
										<li>
											<a class="active" data-toggle="tab" href="#image_1">
												<img src="/assets/images/details/shop/letterhead/1.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_2">
												<img src="/assets/images/details/shop/letterhead/2.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_3">
												<img src="/assets/images/details/shop/letterhead/3.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_4">
												<img src="/assets/images/details/shop/letterhead/4.jpg" alt="image_not_found">
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
										<div class="col-md-12 bg-lights pt-3">
											<strong>Business Letterheads for Official Correspondence and Brand Promotion</strong>
										</div>
										<div class="bg-lights p-3 col-md-6">
											<ul class="list-unstyled mb-0">
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Letterheads are available in a variety of sizes.</li>
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Printing of high quality imparts a professional appearance.</li>											
											</ul>
										</div>
										<div class="bg-lights p-3 col-md-6">
											<ul class="list-unstyled mb-0">
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Depending on your business needs, they can be customized.</li>											
												<li><i class="fas fa-caret-right text-danger mr-2"></i>Letterheads can be used for a variety of corporate documents.</li>											
											</ul>
										</div>
									</div>
									{{-- <span class="price_text mb_30"><strong>₹89.00</strong> <del>₹100.00</del></span> --}}
									<div id="details_form">
                                        <form action="" class="productForm">
                                            @csrf
                                            
                                            <hr class="mt-5 mb-5">
											<div class="form-row mb-3">
												<div class="col-md-3">
													<label class="my-1 mr-2">Size</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="letterheadSize">
														<option selected value="46.75">5.5 X 8.5 Inch</option>
														<option value="93.5">8.5  X 11 Inch</option>  
														<option value="96.68">A4 (8.27  X 11.69 inch)</option>  
													</select> 
												</div>
												
											</div>
											<div class="form-row mb-3">
												<div class="col-md-3">
													<label class="my-1 mr-2">Paper Type</label>
												</div>
												
												<div class="col-md-6">
													<input type="text" value="70 LBS Navigator Paper" disabled class="w-100" id="paperType">
												</div>
												
											</div>
                                            <div class="form-row mb-3">
												<div class="col-md-3">
													<label class="my-1 mr-2">Printing Side</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="printSide">
														<option selected value="0">Single Side</option>
														<option value="1">Back Side</option>  
													</select>
												</div>
												<div class="col-md-3">
													<label id="printsideAmount" class="text-danger font-weight-bold">$<span></span></label>
											   </div>
											</div>
                                          
                                            <div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Quantity:</label>
                                                </div>
												
                                                <div class="col-md-6">
													<select class="w-100" id="mainQty">
														<option selected value="250">250</option>
														<option value="500">500</option>
														<option value="1000">1,000</option>
														<option value="2000">2,000</option>
														<option value="5000">5,000</option>
														<option value="10000">10,000</option>
														<option value="20000">20,000</option>
														<option value="30000">30,000</option>
														<option value="40000">40,000</option>
														<option value="50000">50,000</option>
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
										A letterhead is the heading at the top of a sheet of letter paper. That heading usually consists of a name and an address, and a logo or corporate design, and sometimes a background pattern. The term "letterhead" is often used to refer to the whole sheet imprinted with such a heading. Many companies and individuals prefer to create a letterhead template in a word processor or other software application. That generally includes the same information as pre-printed stationery but at lower cost. Letterhead can then be printed on stationery or plain paper, as needed, on a local output device or sent electronically.
									</p>
									
										<strong>Business Letterheads are Durable, Customizable, and Eco-Friendly</strong>
										<p>Composing letters or exchanging official documents between companies is a practice you could use to market your brand. Utilizing letterhead allows you to influence positive first impressions from your recipients. Business letterheads&nbsp;feature a simple layout, logo or artwork, and primary company details to lend credibility and facilitate official correspondence. Communication on a letterhead reinforces a strong professional image and offers easy access to essential contact information.</p>
										<p>Made from 70 lbs. uncoated paper, our&nbsp;business letterheads&nbsp;are flexible and durable to withstand writing and printing applications without wearing or tearing easily. The product is tactile and can hold up favorably in storage to serve your business for a long time.&nbsp;</p>
										<p>We offer 3 letterhead sizes for customization purposes, and you can select between 50 and 5000 pack sizes. You may upload your artwork, design online, or send in specific instructions for our designers to modify your&nbsp;company letterheads.</p>
										<p>The paper for these&nbsp;custom printed letterheads&nbsp;comes from sustainable resources and is recyclable, which may help you lower your carbon footprint. Employing environmentally friendly stationery for your business helps build a sustainable brand and promotes a socially responsible image in the community.</p>
										<strong>Company Letterheads Offer Excellent Writability and Printability</strong>
										<p>Writing on&nbsp;professional letterheads&nbsp;using pens and markers offers reliable legibility. You can quickly jot down corrections or add new information besides the official message on the letterhead body. These letterheads are ready to use.</p>
										<p>This uncoated paper offers excellent printability and a premium-quality text and graphics appearance for the&nbsp;company letterheads.&nbsp;Enjoy smudge-free and fade-resistant prints for all your corporate correspondence letters and official documents.&nbsp;</p>
										<strong>Custom Printed Letterheads are Easy to Order</strong>
										<p>We offer simple and convenient shipping options to facilitate easy procurement of the&nbsp;business letterheads,&nbsp;depending on your budget and urgency. We also do doorstep delivery for convenience.</p>
										<p>Shop for Letterheads for your business online at Amdaprints.</p>
										
								</div>
								<div id="additionalinfo_tab" class="tab-pane fade">
									<ul class="list-unstyled">
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Best choice for Letterhead, Envelopes and marketing materials that have sections for forms, Uncoated for excellent writability and printability, Paper from sustainable sources & Although modern technology makes letterheads very easy to imitate, they continue to be used as evidence of authenticity.</li>										
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
		$('#printsideAmount').hide();
	});
</script>
<script>
	function addCart(loginStatus)
	{
		var loginStatus = loginStatus;
		// alert(loginStatus);
		if (loginStatus > 0) {
		var category = 'Office Stationary';
		var route = $('input[name="route"]:checked').val();
		var name = '<?php echo $product ?>';
		var total = $('#finalTotal').html();
		var size = $('#letterheadSize').find(":selected").text();
		var qty = $('#mainQty').val();
		var printSide = $('#printSide').find(":selected").text();
		var paperType = $('#paperType').val();
		var img = $('#image_1').find('img').attr('src');
		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
              type: "POST",
              url: "/cart-add",
              data: {category:category,name:name,amount:total,size:size,qty:qty,img:img,printside:printSide,papertype:paperType,route:route},
            
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
	$('#letterheadSize').on('change',function(){

		$('#printSide').val('0').niceSelect('update');
		$('#printsideAmount').fadeOut().hide();
		$('#mainQty').val(250).niceSelect('update');
		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			var Size = $(this).val();
            
            $.ajax({
              type: "POST",
              url: "/letterhead-size",
              data: {size:Size},
            
              success:function(response) {
                // console.log(response);  
				$('#total').html(response.total.toFixed(2));
				$('#finalTotal').html(response.final.toFixed(2));   
              },
              error: function(error){
                console.log(error)
              }
        });
	});
	$('#mainQty').on('change',function(){
		$('#printSide').val('0').niceSelect('update');
		$('#printsideAmount').fadeOut().hide();
		
			$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			var Size = $('#letterheadSize').val();
            var quantity = $(this).val();

            $.ajax({
              type: "POST",
              url: "/letterhead-qty",
              data: {size:Size,qty:quantity},
            
              success:function(response) {
                // console.log(response);  
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
			var Size = $('#letterheadSize').val();
            
            $.ajax({
              type: "POST",
              url: "/letterhead-size",
              data: {size:Size},
            
              success:function(response) {
                // console.log(response);  
				$('#total').html(response.total.toFixed(2));
				$('#finalTotal').html(response.final.toFixed(2));   
              },
              error: function(error){
                console.log(error)
              }
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
					var Size = $('#letterheadSize').val();
					var printSide = $(this).val();
					var total = $('#finalTotal').html();
           			$.ajax({
           			  type: "POST",
           			  url: "/letterhead-printside",
           			  data: {size:Size,qty:quantity,total:total,printside:printSide},
					
           			  success:function(response) {
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
					var Size = $('#letterheadSize').val();
					var printSide = $(this).val();
					var total = $('#finalTotal').html();
           			$.ajax({
					  type: "POST",
           			  url: "/letterhead-printside",
           			  data: {size:Size,qty:quantity,total:total,printside:printSide},
					
           			  success:function(response) {
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
			
		});
	</script>
</body>
</html>