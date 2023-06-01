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
										@foreach ($products['specification'][$productKey] as $specs)
										<div class="bg-lights p-3 col-md-6">
											<ul class="list-unstyled mb-0">
												<li><i class="fas fa-caret-right text-danger mr-2"></i>{{$specs}}.</li>											
											</ul>
										</div>
										@endforeach
									</div>
									<div id="details_form">
                                        <form action="" class="productForm">
                                            @csrf
                                            
                                            <input type="hidden" name="product_id" value="{{$products->id}}">
                                            <input type="hidden" name="product_key" value="{{$productKey}}">
                                            <input type="hidden" name="base_price">
											
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Size (Inch)</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="cardSize">
														@foreach ($products['size'][$productKey] as $size)
														<option value="{{$size}}">{{str_replace('-',' ',$size)}}</option>
														@endforeach
													</select>
												</div>
												
											</div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Quantity:</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="mainQty">
														@foreach ($products['qty'][$productKey] as $qty)
														<option value="{{$qty}}">{{$qty}}</option>
														@endforeach
													</select>
												</div>
												
											</div>
											<div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Paper Type</label>
												</div>
												
												<div class="col-md-6">
													<select class="w-100" id="paperType">
														@foreach ($products['paper_type'][$productKey] as $paperType)
														<option value="{{$paperType}}">{{str_replace('-',' ',$paperType)}}</option> 
														@endforeach 
													</select>
												</div>
												
											</div>
											
											<hr class="mt-5 mb-5">
                                            @foreach ($products['property'][$productKey] as $key=>$property)
											<div class="form-row mb-3" id="">
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
											<br>
											<div class="form-row align-items-center">
												<div class="col-md-3">
													<label class="">Pantone (PMS) Color Match (Optional) <i class="fa fa-question-square d-md-none d-lg-none d-sm-block d-block" data-bs-toggle="tooltip" data-bs-placement="bottom" title="We recommend giving PMS to best match your color needs. We use a pantone+solid coated library. If selected PMS is not printable, near match print color will be considered."></i></label>
												</div>
												<div class="col-md-6">
													<input class="w-100" type="text" id="pentone">
												</div>
												<div class="col-md-3 d-md-block d-lg-block d-sm-none d-none">
													<i class="fa fa-question-square" data-bs-toggle="tooltip" data-bs-placement="bottom" title="We recommend giving PMS to best match your color needs. We use a pantone+solid coated library. If selected PMS is not printable, near match print color will be considered."></i>
												</div>
											</div>
											<br>
											<div class="form-row align-items-center">
                                                <div class="col-md-3">
                                                    <label class="">Specific Instructions (optional)</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <textarea class="w-100" type="text" id="instruction"></textarea>
                                                </div>
                                            </div>
											{{-- <div class="form-row mb-3" id="">
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
											</div> --}}
											
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
		$('[id^=property]').hide();
	});
</script>
<script>

	function addCart(loginStatus)
	{
		var loginStatus = loginStatus;
		// alert(loginStatus);
		if (loginStatus > 0) {
			var category = '<?php echo str_replace("-"," ",ucwords($category)) ?>';
			var route = $('input[name="route"]:checked').val();
			var name = '<?php echo $product ?>';
			var total = $('#finalTotal').html();
			var size = $('#cardSize').find(":selected").text();
			var qty = $('#mainQty').val();
			var instruction = $('#instruction').val();
			var pentone = $('#pentone').val();
			var paperType = $('#paperType').find(":selected").text();
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
				data: {category:category,name:name,amount:total,size:size,qty:qty,img:img,papertype:paperType,
					propertyNames:propertyNames,propertyValues:propertyValues,route:route,pentone:pentone,instruction:instruction},
					
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

		$('[id^=propertiesPer]')[0].selectedIndex = 0;
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
			var cardSize = $('#cardSize').val();
			var paperType = $('#paperType').val();
			var qty = $('#mainQty').val();

            $.ajax({
              type: "POST",
              url: "/custom-card-price",
              data: {id:id,key:key,size:cardSize,paper:paperType,qty:qty},
            
              success:function(response) {
                console.log(response);  
				$('#total').html(response.total.toFixed(2));
				$('#finalTotal').html(response.final.toFixed(2));  
				$('input[name="base_price"]').val(response.final.toFixed(2));
              },
              error: function(error){
                console.log(error)
              }
        	});
	});
	$('#mainQty').on('change',function(){

		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			var id = $('input[name="product_id"]').val();
			var key = $('input[name="product_key"]').val();
			var cardSize = $('#cardSize').val();
			var paperType = $('#paperType').val();
			var qty = $('#mainQty').val();

            $.ajax({
              type: "POST",
              url: "/custom-card-price",
              data: {id:id,key:key,size:cardSize,paper:paperType,qty:qty},
            
              success:function(response) {
                console.log(response);  
				// $('#total').html(response.total.toFixed(2));
				// $('#finalTotal').html(response.final.toFixed(2)); 
				$('input[name="base_price"]').val(response.final.toFixed(2));  
				propertyPricing(id,key);
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
			var id = $('input[name="product_id"]').val();
			var key = $('input[name="product_key"]').val();
			var cardSize = $('#cardSize').val();
			var paperType = $('#paperType').val();
			var qty = $('#mainQty').val();

            $.ajax({
              type: "POST",
              url: "/custom-card-price",
              data: {id:id,key:key,size:cardSize,paper:paperType,qty:qty},
            
              success:function(response) {
                console.log(response);  
				$('#total').html(response.total.toFixed(2));
				$('#finalTotal').html(response.final.toFixed(2));   
				$('input[name="base_price"]').val(response.final.toFixed(2));
              },
              error: function(error){
                console.log(error)
              }
        	});
	});

			// Add paper type
			$('#paperType').change(function(){
				
				var value = $(this).val();
					
				$.ajaxSetup({
           		    headers: {
           		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           		    }
           		});

				   	var id = $('input[name="product_id"]').val();
					var key = $('input[name="product_key"]').val();
					var cardSize = $('#cardSize').val();
					var paperType = $('#paperType').val();
					var qty = $('#mainQty').val();

            		$.ajax({
            		  type: "POST",
            		  url: "/custom-card-price",
            		  data: {id:id,key:key,size:cardSize,paper:paperType,qty:qty},
					
            		  success:function(response) {
            		    console.log(response);  
						// $('#total').html(response.total.toFixed(2));
						// $('#finalTotal').html(response.final.toFixed(2));
						$('input[name="base_price"]').val(response.final.toFixed(2)); 
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
					var cardSize = $('#cardSize').val();
					var paperType = $('#paperType').val();
					var qty = $('#mainQty').val();
					var basePrice = $('input[name="base_price"]').val();
					var total = $('#finalTotal').html();
					// console.log(percentage);
					// return false;
           			$.ajax({
           			  type: "POST",
           			  url: "/custom-card-properties",
           			  data: {id:id,product_key:product_key,property_key:property_key,percentageKey:percentageKey,size:cardSize,paper:paperType,qty:qty,basePrice:basePrice,total:total},
					
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

</body>
</html>