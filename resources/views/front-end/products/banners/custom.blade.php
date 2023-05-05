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
									<div class="row mb-4 bg-lights">
										<div class="col-md-12 bg-lights pt-3">
											<strong>Convey Your Business Message with Custom Vinyl Banners</strong>
										</div>
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
                                                        <option value="0" id="customSize">Custom Size</option>
                                                    </select>
													
                                                </div>

                                            </div>
											<div class="form-row mb-3 customSize">
                                                <div class="col-md-3">
                                                    <label class="my-1 mr-2">Custom Size :</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="number" class="w-100" placeholder="width" id="customOne" min="1">
                                                </div>
												<div class="col-md-4">
												   <input type="number" class="w-100" placeholder="height" id="customTwo" min="1">
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

						<hr id="stop_here">

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
										You’ve only got a few seconds to grab the attention of passersby – and custom banners are a great way to make them count. Lightweight yet durable, our vinyl banner printing is crisp and fade-resistant on your choice of indoor or outdoor fabric. And with reinforced edges and metal grommets available on all banners, you can easily design a budget-friendly banner that’s built for long-term use.
									</p>
									
										<strong>High-Quality Vinyl Banners are Durable and Customizable</strong>
										<p>To meet the advertising objectives, business professionals like you are on the lookout for a quick and easy method to get the message out to the customers. Our banners are an efficient approach to communicate with clients while also promoting your company and products. You can leave a lasting impression on your prospects with our&nbsp;business banners.</p>
										<p>The&nbsp;advertising banners&nbsp;are durable, as they comprise&nbsp;PVC flex materials. Our banners are robust and can endure all types of weather, making them suitable for outdoor use. The premium quality material ensures resistance to everyday wear and tear.</p>
										<p>Full-color printing has a wide color spectrum, resulting in bright images. High-resolution 720 DPI printing produces clear, professional-quality graphics and boosts visibility to attract attention to the full color banners.</p>
										<p>Choose from a variety of existing sizes or modify the dimensions of the vinyl banners. You also have the option to personalize the material. Customize the banners by uploading your own artwork, make a design using the tool with templates, or let our professionals create graphics for you. There are a variety of extras available, including two-sided printing, premium upgrades, hanging accessories, and wind flaps. You can further add the Pantone Matching System (PMS) for color consistency.</p>
										<strong>Portable Business Banners are Eco-Friendly</strong>
										<p>We make these&nbsp;advertising banners using eco-solvent printing to help reduce emissions. The use of biodegradable inks helps your company present an attitude of social responsibility towards the environment.</p>
										<p>Amdaprints banners are simple to set up and place. The full color banners are ideal for advertising at different venues. You can quickly reposition and reuse them multiple times. Easy mobility of the product boosts the ROI.</p>
										<strong>Vinyl Banners are Easy to Care For</strong>
										<p>Our business banners are simple to clean and maintain by gently wiping the banners with a soft, moist cloth, which does not require a cleaning solution. Preserving the banners is easy, saving time and effort.</p>
										<p>Shop for Custom Vinyl Banners for your business online at Amdaprints.</p>
										
								</div>
								<div id="additionalinfo_tab" class="tab-pane fade">
									<ul class="list-unstyled">
										<li><i class="fas fa-caret-right text-danger mr-2"></i>To start creating your vinyl banner, explore our gallery of fully customizable design templates, including industry- and event-specific options, like grand openings, restaurants, graduations and sports.</li>
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Once you’ve found a favorite design, make it yours by adding your custom details and choosing the options that work best for you, whether you’re creating indoor or outdoor vinyl signs.</li>
										<li><i class="fas fa-caret-right text-danger mr-2"></i>Then we’ll take care of the rest, professionally printing and shipping your order. Your vinyl signs will arrive looking great and ready to get noticed.</li>
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
		$('.customSize').hide();
	});
</script>
<script>
	$('#bannerSize').on('change',function(){
		$('[id^=propertiesPer]')[0].selectedIndex = 0;
		$('[id^=propertiesPer_]').val($('[id^=propertiesPer_] option:first').val());
		$('[id^=propertiesPer_]').niceSelect('update');
		$('[id^=property]').fadeOut().hide();
		
		if($(this).val() == 0)
		{
			$('.customSize').fadeIn();
			$('#customOne,#customTwo').on('keyup', function(){

				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				var id = $('input[name="product_id"]').val();
				var key = $('input[name="product_key"]').val();
				var one = $('#customOne').val();
				var two = $('#customTwo').val();
				var bannerSize = one+'x'+two;
				// console.log(bannerSize);
				// return false;
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
		} else {
			$('.customSize').fadeOut();
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
		}
			
	});
	$('#mainQty').on('change keyup',function(){

		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			if($('#bannerSize').val() == 0)
			{

				var one = $('#customOne').val();
				var two = $('#customTwo').val();
				var bannerSize = one+'x'+two;

			} else {

				var bannerSize = $('#bannerSize').val();

			}
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
				if($('#bannerSize').val() == 0)
				{
					var one = $('#customOne').val();
					var two = $('#customTwo').val();
					var bannerSize = one+'x'+two;
				} else {
					var bannerSize = $('#bannerSize').val();
				}
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

				var one = $('#customOne').val();
				var two = $('#customTwo').val();
				var bannerSize = one+'x'+two;

			} else {

				var bannerSize = $('#bannerSize').val();

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