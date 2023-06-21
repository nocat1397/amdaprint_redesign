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
			    /* z-index: 1000; */
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
									<div class="tab-content" id="nav-tabContent">
										<div id="image_1" class="tab-pane active">
											<img src="/assets/images/samplekit1.jpg" alt="image_not_found">
										</div>
										<div id="image_2" class="tab-pane fade">
											<img src="/assets/images/samplekit2.jpg" alt="image_not_found">
										</div>
										<div id="image_3" class="tab-pane fade">
											<img src="/assets/images/samplekit3.jpg" alt="image_not_found">
										</div>
										<div id="image_4" class="tab-pane fade">
											<img src="/assets/images/samplekit4.jpg" alt="image_not_found">
										</div>
									</div>
									<div style="width: -webkit-fill-available;overflow-x:hidden;" class="parent">
										<ul class="nav ul_li_block clearfix float-left d-inline-flex child" role="tablist" id="nav-tab" style="width:max-content;cursor:pointer;pointer-events:auto;justify-content: center;min-width: -webkit-fill-available;">
											<li>
												<a class="active nav-item" data-toggle="tab" href="#image_1" data-toggle="tab" id="#image_1_img">
													<img src="/assets/images/samplekit1.jpg" alt="image_not_found" style="height:auto;width:150px;object-fit:fill">
												</a>
											</li>
											<li>
												<a data-toggle="tab" href="#image_2" class="nav-item" data-toggle="tab" id="#image_1_img">
													<img src="/assets/images/samplekit2.jpg" alt="image_not_found" style="height:auto;width:150px;object-fit:fill">
												</a>
											</li>
											<li>
												<a data-toggle="tab" href="#image_3" class="nav-item" data-toggle="tab" id="#image_1_img">
													<img src="/assets/images/samplekit3.jpg" alt="image_not_found" style="height:auto;width:150px;object-fit:fill">
												</a>
											</li>
											<li>
												<a data-toggle="tab" href="#image_4" class="nav-item" data-toggle="tab" id="#image_1_img">
													<img src="/assets/images/samplekit4.jpg" alt="image_not_found" style="height:auto;width:150px;object-fit:fill">
												</a>
											</li>
											{{-- <li>
												<a class="nav-item {{$key < 1 ? 'active' : ''}}" data-toggle="tab" id="#image_{{$key}}_img" href="#image_{{$key}}" role="tab" aria-controls="image_{{$key}}" aria-selected="true">
													<img src="/products/{{$image->product_id}}/{{$image->product_index}}/{{$image->name}}" alt="image_not_found" style="height:auto;width:150px;object-fit:fill">
												</a>
											</li> --}}
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
							{{-- <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
								<div class="details_image clearfix">
									<div class="tab-content">
										<div id="image_1" class="tab-pane active">
											<img src="/assets/images/samplekit1.jpg" alt="image_not_found">
										</div>
										<div id="image_2" class="tab-pane fade">
											<img src="/assets/images/samplekit2.jpg" alt="image_not_found">
										</div>
										<div id="image_3" class="tab-pane fade">
											<img src="/assets/images/samplekit3.jpg" alt="image_not_found">
										</div>
										<div id="image_4" class="tab-pane fade">
											<img src="/assets/images/samplekit4.jpg" alt="image_not_found">
										</div>
									</div>

									<ul class="nav ul_li_block clearfix float-left owl-carousel productImg_slider" role="tablist">
										<li>
											<a class="active" data-toggle="tab" href="#image_1">
												<img src="/assets/images/samplekit1.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_2">
												<img src="/assets/images/samplekit2.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_3">
												<img src="/assets/images/samplekit3.jpg" alt="image_not_found">
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#image_4">
												<img src="/assets/images/samplekit4.jpg" alt="image_not_found">
											</a>
										</li>
									</ul>
								</div>
							</div> --}}

							<div class="col-lg-5 col-md-6 col-sm-10 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
								<div class="details_content">
									<h2 class="item_title mb_15 text-capitalize">{{$product}}</h2>
									
									{{-- <span class="price_text mb_30"><strong>₹89.00</strong> <del>₹100.00</del></span> --}}
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
													<label class="my-1 mr-2">Quantity</label>
												</div>
												
												<div class="col-md-6">
													<input type="text" class="form-control" readonly value="1" disabled>
												</div>
												
											</div>
                                            <div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Sample Type</label>
												</div>
												
												<div class="col-md-6">
													<input type="text" class="form-control" readonly value="All" disabled>
												</div>
												
											</div>
                                            <div class="form-row mb-3" id="">
												<div class="col-md-3">
													<label class="my-1 mr-2">Specific Instructions (optional)</label>
												</div>
												
												<div class="col-md-6">
													<textarea type="text" class="form-control" placeholder="Type Anything...." id="instruction"></textarea>
												</div>
											</div>
                                        </form>
                                    </div>
								</div>
							</div>
							<div class="col-md-2 col-lg-3">
								<div class="card shadow text-center border boder-0" id="priceCard">
									<div class="card-body">
										<h5 class="price_text mb_30"><strong class="text-danger">$<span id="finalTotal">0.00</span></strong></h5>
									</div>
									<div class="card-footer">
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
										Sorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur xcepteur sint occaecat cupidatat non proident, sunt.
									</p>
									<p class="mb-0">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudinInteger in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, 
									</p>
								</div>
								<div id="additionalinfo_tab" class="tab-pane fade">
									<p class="mb_30">
										Sorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur xcepteur sint occaecat cupidatat non proident, sunt.
									</p>
									<p class="mb-0">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cdolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudinInteger in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, 
									</p>
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
{{-- 
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
						</div> --}}

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

	function addCart(loginStatus)
	{
		var loginStatus = loginStatus;
		// alert(loginStatus);
		if (loginStatus > 0) {
			var category = 'Sample-Kit';
			var route = 3;
			var name = 'Sample-Kit';
			var total = '0.00';
			var qty = '1';
			var sampleType = 'all';
			var instruction = $('#instruction').val();
			var img = $('#image_1').find('img').attr('src');
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			
            $.ajax({
				type: "POST",
				url: "/cart-add",
				data: {category:category,name:name,amount:total,qty:qty,img:img,sampleType:sampleType,
					route:route,instruction:instruction},
					
					success:function(response) {
						console.log(response);
						// return false;
						location.replace('/sample/'+response.id);
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
</body>
</html>