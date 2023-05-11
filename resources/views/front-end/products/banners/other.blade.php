<!DOCTYPE html>
<html lang="en">
    
    <head>
        @include('front-end.section.styles')
		<style>
			#priceCard {
				top: 0%;
			    z-index: 1000;
			    width: 300px;
			    right: 0%;
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
									<div class="tab-content" id="nav-tabContent">
										@if($images !== null && sizeof($images))
										@foreach ($images as $key=>$image)
										@if($image->product_id == $products['id'] && $image->product_index == $productKey)
										<div id="image_{{$key}}" class="tab-pane fade {{$key < 1 ? 'show active' : ''}}" role="tabpanel" aria-labelledby="image_{{$key}}_img">
											<img src="/products/{{$image->product_id}}/{{$image->product_index}}/{{$image->name}}" alt="image_not_found">
										</div>
										@endif 
										@endforeach
										@else
										<div id="image_1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="image_1_img">
											<img src="/noImg.jpg" alt="image_not_found">
										</div>
										@endif
									</div>
									<div style="width: -webkit-fill-available;overflow-x:hidden;" class="parent">
										<ul class="nav ul_li_block clearfix float-left d-inline-flex child" role="tablist" id="nav-tab" style="width:max-content;cursor:pointer;pointer-events:auto;justify-content: center;min-width: -webkit-fill-available;">
											@if($images !== null && sizeof($images))
											@foreach ($images as $key=>$image)
											@if($image->product_id == $products['id'] && $image->product_index == $productKey)
											<li>
												<a class="nav-item {{$key < 1 ? 'active' : ''}}" data-toggle="tab" id="#image_{{$key}}_img" href="#image_{{$key}}" role="tab" aria-controls="image_{{$key}}" aria-selected="true">
													<img src="/products/{{$image->product_id}}/{{$image->product_index}}/{{$image->name}}" alt="image_not_found" style="height:-webkit-fill-available;width:150px;object-fit:fill">
												</a>
											</li>
											@endif 
											@endforeach
											@endif
										</ul>
									</div>
									<div class="text-center">
										<div class="text-inline">
											<strong>Share :</strong>
											<strong class="ml-3 mr-3"><i class="fab fa-facebook-f"></i></strong>
											<strong><i class="fab fa-whatsapp"></i></strong>
										</div>
									</div>
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
										@foreach ($products['specification'][$productKey] as $specs)
										<div class="bg-lights p-3 col-md-6">
											<ul class="list-unstyled mb-0">
												<li><i class="fas fa-caret-right text-danger mr-2"></i>{{$specs}}.</li>											
											</ul>
										</div>
										@endforeach
									</div>
									{{-- <span class="price_text mb_30"><strong>₹89.00</strong> <del>₹100.00</del></span> --}}
									<div id="details_form">
                                        <form action="" class="productForm">
                                            @csrf
											<input type="hidden" name="product_id" value="{{$products->id}}">
                                            <input type="hidden" name="product_key" value="{{$productKey}}">
											<input type="hidden" name="base_price">
                                            <div class="form-row mb-3">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2">Size (Feet)</label>
                                                </div>

                                                <div class="col-md-6 form-inline">
                                                    <select class="mr-2 w-100" id="bannerSize">
                                                        @foreach ($products['size'][$productKey] as $size)
														<option value="{{$size}}">{{str_replace('-',' ',$size)}}</option>
														@endforeach
                                                    </select>
													
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2">Quantitiy</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input class="input_number w-100" type="number" value="1" id="mainQty" min="1">
                                                </div>
                                            </div>
                                            <hr class="mt-5 mb-5">
											@foreach ($products['property'][$productKey] as $key=>$property)
                                            <div class="form-row mb-3">
                                                <div class="col-md-3">
                                                    <input type="hidden" name="property_key[]" value="{{$key}}">
													<input type="hidden" name="property_names[]" value="{{str_replace('-',' ',$property)}}">
													<label class="my-1 mr-2 text-capitalize">{{str_replace('-',' ',$property)}}</label>
                                                </div>

                                                <div class="col-md-6">
													<select class="w-100" id="propertiesPer_{{$key}}" name="percentages[]" onchange="propertyPricing({{$products->id}},{{$productKey}})">
														@if (isset($products['property_data'][$productKey][$key]))
														@foreach ($products['property_data'][$productKey][$key] as $dataKey=>$data)
														<option value="{{$dataKey}}">{{$data}}</option>
														@endforeach
														@else 
														<option>No Data</option>
														@endif
													</select>
                                                </div>
                                               <div class="col-md-3">
												<label id="property_{{$key}}" class="text-danger font-weight-bold">$<span></span></label>
											   </div>
                                            </div>
											@endforeach

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
		$('[id^=property]').hide();
	});
</script>
<script>
	$('#bannerSize').on('change',function(){
		$('[id^=propertiesPer_]')[0].selectedIndex = 0;
		$('[id^=propertiesPer_]').val($('[id^=propertiesPer_] option:first').val());
		$('[id^=propertiesPer_]').niceSelect('update');
		
		$('[id^=property]').fadeOut().hide();
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			var id = $('input[name="product_id"]').val();
			var key = $('input[name="product_key"]').val();
			var bannerSize = $('#bannerSize').val();
			var qty = $('#mainQty').val();
            
            $.ajax({
              type: "POST",
              url: "/custom-banner-price",
              data: {id:id,key:key,size:bannerSize,qty:qty},
            
              success:function(response) {
                console.log(response);  
				// return false;
				$('#total').html(response.total.toFixed(2));
				$('#finalTotal').html(response.final.toFixed(2));   
				$('input[name="base_price"]').val(response.baseRate);
              },
              error: function(error){
                console.log(error)
              }
            });
			
	});
	$('#mainQty').on('change keyup',function(){
		
		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			var bannerSize = $('#bannerSize').val();
            var id = $('input[name="product_id"]').val();
			var key = $('input[name="product_key"]').val();
			var qty = $(this).val();
            
            $.ajax({
              type: "POST",
              url: "/custom-banner-price",
              data: {id:id,key:key,size:bannerSize,qty:qty},
            
              success:function(response) {
                console.log(response);  
				// return false;
				// $('#total').html(response.total.toFixed(2));
				// $('#finalTotal').html(response.final.toFixed(2));   
				$('input[name="base_price"]').val(response.baseRate);
				propertyPricing(id,key);
              },
              error: function(error){
                console.log(error)
              }
            });
	});
	// Property percentage Check
	function propertyPricing($id,$key){
				
				$.ajaxSetup({
					   headers: {
						   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					   }
				   });
				var id = $('input[name="product_id"]').val();
				var product_key = $('input[name="product_key"]').val();
				var property_key = $('input[name="property_key[]"]').map(function(){return $(this).val();}).get();
				var percentageKey = $('select[name="percentages[]"]').map(function(){return $(this).find(":selected").val();}).get();
				var bannerSize = $('#bannerSize').val();
				var qty = $('#mainQty').val();
				var basePrice = $('input[name="base_price"]').val();
				var total = $('#total').html();
				   $.ajax({
					 type: "POST",
					 url: "/custom-banner-properties",
					 data: {id:id,product_key:product_key,property_key:property_key,percentageKey:percentageKey,size:bannerSize,qty:qty,basePrice:basePrice,total:total},
				
					 success:function(response) {
					   console.log(response);  
					   $('#total').html(response.total.toFixed(2));
					   $('#finalTotal').html(response.final.toFixed(2));   
					   $.each(response.percentageRates, function(key, value) {
						if (value > 0) {	
							$('#property_'+key+' span').html(value.toFixed(2));
							$('#property_'+key).fadeIn().show();
						} else {
							$('#property_'+key+' span').html(value.toFixed(2));
							$('#property_'+key).fadeOut().hide();
						}
					   })
					 },
					 error: function(error){
					   console.log(error)
					 }
				   });

		};
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
		var category = '<?php echo str_replace("-"," ",ucwords($category)) ?>';
		var route = $('input[name="route"]:checked').val();
		var name = '<?php echo $product ?>';
		var total = $('#total').html();
		var size = bannerSize;
		var qty = $('#mainQty').val();
		var propertyNames = $('input[name="property_names[]"]').map(function(){return $(this).val();}).get();
		var propertyValues = $('select[name="percentages[]"]').map(function(){return $(this).find(":selected").text();}).get();
		var img = $('#image_1').find('img').attr('src');

			$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
              	type: "POST",
              	url: "/cart-add",
              	data: {category:category,name:name,amount:total,size:size,qty:qty,img:img,propertyNames:propertyNames,propertyValues:propertyValues,route:route},
				
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
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		var id = $('input[name="product_id"]').val();
		var key = $('input[name="product_key"]').val();
		var bannerSize = $('#bannerSize').val();
		var qty = $('#mainQty').val();
		
		$.ajax({
		  type: "POST",
		  url: "/custom-banner-price",
		  data: {id:id,key:key,size:bannerSize,qty:qty},
		
		  success:function(response) {
			console.log(response);  
			// return false;
			$('#total').html(response.total.toFixed(2));
			$('#finalTotal').html(response.final.toFixed(2));   
			$('input[name="base_price"]').val(response.baseRate);
		  },
		  error: function(error){
			console.log(error)
		  }
		});
	});
</script>


</body>


</html>