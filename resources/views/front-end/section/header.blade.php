
		<!-- backtotop - start -->
		<div id="thetop"></div>
		<div id="backtotop">
			<a href="#" id="scroll">
				<i class="far fa-arrow-up"></i>
			</a>
		</div>
		<!-- backtotop - end -->

		<!-- preloader - start -->
		<div class="preloader">
			<div class="animation_preloader">
				<div class="spinner"></div>
				<p class="text-center">Loading</p>
			</div>
			<div class="loader">
				<div class="row vh-100">
					<div class="col-3 loader_section section-left">
						<div class="bg"></div>
					</div>
					<div class="col-3 loader_section section-left">
						<div class="bg"></div>
					</div>
					<div class="col-3 loader_section section-right">
						<div class="bg"></div>
					</div>
					<div class="col-3 loader_section section-right">
						<div class="bg"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- preloader - end -->


		<!-- header_section - start
		================================================== -->
		<header class="header_section sticky_header header_default clearfix">
			<div class="header_top clearfix pr-5 pl-5">
				<div class="maxw-1920 container">
					<div class="row align-items-center">
						<div class="col-lg-4 main_menu">
							<ul class="header_items_list ul_li clearfix">
								<li style="color:#373737;font-weight: 700; font-size:15px;">Get 20% off on your first order.</li>
								<li style="color:#373737;font-weight: 700; font-size:15px;">Use Code : FirstOrder </li>
								{{--  <li><i class="far fa-clock"></i> Sun - Monday, 09 am - 04 pm</li>  --}}
							</ul>
							{{--  <ul class="header_contact_info ul_li clearfix">
								<li class="pt-2 pb-2">
									<a href="/dealer-registration" style="color:#373737;font-weight: 400; font-size:15px;"><i class="far fa-handshake"></i> Dealer Registration</a>
									
								</li>
								<li class="pt-2 pb-2"><i class="fa fa-truck"></i> Order Tracking</li>
								<li><i class="far fa-envelope-open"></i> support@amdaprints.com</li>
							</ul>  --}}
								{{-- <li><i class="far fa-phone"></i> +1 (302) 200 0642</li> --}}
						</div>

						<div class="col-lg-8 main_menu">
							<ul class="header_contact_info ul_li_right clearfix">
								{{--  @if(Auth::check())
									<li class="has_child pt-2 pb-2">
										<a href="#" class="text-capitalize text-dark"><i class="fa fa-user"></i> {{Auth::user()->name}}</a>
										<ul class="submenu">
											<li><a href="/my-orders">Your Orders</a></li>
											<li><a href="javaascript:void(0)">Whishlist</a></li>
											<li><a href="/logout">Logout</a></li>
										</ul>
									</li>
									@else
									<li class="has_child pt-2 pb-2">
										<a href="#" style="color:#373737;font-weight: 400; font-size:15px;">Account</a>
										<ul class="submenu">
											<li class="p-3"><a href="/user/login" class="addtocart_btn custom_btn bg_default_orange text-dark">Login</a></li>
											<li class="text-center"><strong class="text-dark">Don't Have An Account?</strong></li>
											<li class="p-3"><a href="/user/register" class="addtocart_btn custom_btn bg_default_orange text-dark">Register</a></li>
										</ul>
									</li>
									@endif  --}}
									<li class="pt-2 pb-2">
										<a href="/dealer-registration" style="color:#373737;font-weight: 400; font-size:15px;"><i class="far fa-handshake"></i> Dealer Registration</a>
										
									</li>
									<li class="has_child pt-2 pb-2">
										<a href="#" style="color:#373737;font-weight: 400; font-size:15px;">Quick Links</a>
										<ul class="submenu">
											<li><a href="/user/login">Company History</a></li>
											<li><a href="">Exclusive Team</a></li>
											<li><a href="/user/register">Latest News</a></li>
											<li><a href="/user/register">Recent Product</a></li>
											<li><a href="/user/register">Win Awards</a></li>
										</ul>
									</li>
									<li class="pt-2 pb-2"><a href="#" style="color:#373737;font-weight: 400; font-size:15px;"><i class="fa fa-comments mr-2"></i>Chat Now</a></li>
									<li class="pt-2 pb-2"><a href="#" style="color:#373737;font-weight: 400; font-size:15px;"><i class="far fa-phone"></i> +1 (302) 200 0642</a></li>
									<li class="has_child pt-2 pb-2">
										<a href="#" style="color:#373737;font-weight: 400; font-size:15px;"><img src="/img/icon/us.png" height="25" width="25"></a>
										<ul class="submenu" style="min-width: auto;width:max-content;padding:10px 10px">
											<li type="button" class="btn-group"><img src="/img/icon/au.png" height="25" width="25"> <small class="text-dark">AU</small></li>
											<li type="button" class="btn-group"><img src="/img/icon/uk.png" height="25" width="25"> <small class="text-dark">UK</small></li>
											<li type="button" class="btn-group"><img src="/img/icon/nz.png" height="25" width="25"> <small class="text-dark">NZ</small></li>
											<li type="button" class="btn-group"><img src="/img/icon/ca.png" height="25" width="25"> <small class="text-dark">CA</small></li>
											<li type="button" class="btn-group"><img src="/img/icon/in.png" height="25" width="25"> <small class="text-dark">IN</small></li>
										</ul>
									</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="header_top clearfix border border-top-1 pr-5 pl-5 overflow-hidden" style="height: 100px;">
				<div class="maxw-1920 container">
					<div class="row align-items-center">
						<div class="col-lg-2">
							<a href="/">
								<img src="/assets/images/New/logo.png" srcset="/assets/images/New/logo.png 2x" alt="logo_not_found" style="width: 275px;max-width:unset">
							</a>
						</div>

						<div class="col-lg-6">
							<div class="p-1 border rounded rounded-pill shadow-sm ml-auto" style="width: 60%;">
								<div class="input-group">
								  <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon1" class="form-control border-0">
								  <div class="input-group-append">
									<button id="button-addon1" type="submit" class="btn btn-link text-danger"><i class="fa fa-search"></i></button>
								  </div>
								</div>  
							  </div>
							{{-- <div class="input-group" style="left:25%">
								<input type="text" class="p-2 search rounded-pill" style="width:60%;border:1px solid lightgray" placeholder="Search for product / category" aria-label="Recipient's username" aria-describedby="basic-addon2">
								<div class="input-group-append">
									<button type="button" class="action_btn search_btn bg_default_purple">
										<i class="fal fa-search"></i>
									</button>
								</div>
							  </div> --}}
							  
						</div>
						<div class="col-lg-4 ">
							<ul class="header_contact_info main_menu ul_li_right clearfix">
								<li class="pt-2 pb-2"><a href="#" style="color:#373737;font-weight: 400; font-size:15px;"><i class="fa fa-truck"></i> Order Tracking</a></li>
								@if(Auth::check())
								<li class="has_child pt-2 pb-2">
									<a href="#" class="text-capitalize text-dark"><i class="fa fa-user-circle"></i> {{Auth::user()->name}}</a>
									<ul class="submenu">
										<li><a href="/my-orders">Your Orders</a></li>
										<li><a href="javaascript:void(0)">Whishlist</a></li>
										<li><a href="/logout">Logout</a></li>
									</ul>
								</li>
								@else
								<li class="has_child pt-2 pb-2">
									<a href="#" style="color:#373737;font-weight: 400; font-size:15px;">Account</a>
									<ul class="submenu">
										<li class="p-3"><a href="/user/login" class="addtocart_btn custom_btn bg_default_orange text-dark">Login</a></li>
										<li class="text-center"><strong class="text-dark">Don't Have An Account?</strong></li>
										<li class="p-3"><a href="/user/register" class="addtocart_btn custom_btn bg_default_orange text-dark">Register</a></li>
									</ul>
								</li>
								@endif
								
								<li>
									@if(Auth::check())
									<a href="/my-cart" class="cart_btn action_btn search_btn bg_default_purple">
										<i class="fa fa-shopping-bag" aria-hidden="true"></i>
										<small class="cart_counter" id="cartCount">0</small>
									</a>
									@endif
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		<div class="container">
			<div class="header_bottom justify-content-center">
				<div class="">
					<div class="row align-items-center">

						<div class="col-lg-1">
							<div class="brand_logo d-flex d-md-none d-lg-none">
								<a href="/">
									<img  src="/assets/images/logo/logo.png" style="width:80%" srcset="/assets/images/logo/logo.png 2x" alt="logo_not_found">
								</a>

								<ul class="mobilemenu_btns_group ul_li_right clearfix">
									<li>
										@if(Auth::check())
										<a href="/my-cart" class="search_btn">
											<i class="fal fa-shopping-cart"></i>
											<small class="cart_counter" id="cartCount">0</small>
										</a>
										@else 
										<a href="/user/login">
											<button class="search_btn">
												<i class="fal fa-shopping-cart text-danger"></i>
												<small class="cart_counter" id="cartCount">0</small>
											</button>
										</a>
										@endif
									</li>
									<li>
										<button type="button" class="mobile_menu_btn"><i class="fal fa-bars"></i></button>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-12">
							<nav class="main_menu clearfix">
								<ul class="ul_li_center clearfix">
									{{--  <li class="active has_child">
										<a href="#">Business cards</a>
										<ul class="submenu">
											<li class="has_child">
												<a href="/business-cards/standard-business-cards">Standard Business cards</a>
												<ul class="submenu">
													<li><a href="/business-cards/standard-business-cards/custom-business-card">Custom Business Card</a></li>
													<li><a href="/business-cards/standard-business-cards/slim-business-card">Slim Business Card</a></li>
													<li><a href="/business-cards/standard-business-cards/square-business-card">Square Business Card</a></li>
												</ul>
											</li>
											<li class="has_child">
												<a href="/business-cards/premium-business-cards">Premium Business cards</a>
												<ul class="submenu">
													<li><a href="/business-cards/premium-business-cards/raised-uv-business-card">Raised UV Business Card</a></li>
													<li><a href="/business-cards/premium-business-cards/raised-foils-business-card">Raised Folis Business Card</a></li>
												</ul>
											</li>
											<li class="has_child">
												<a href="/business-cards/textured-business-cards">Textured Business cards</a>
												<ul class="submenu">
													<li><a href="/business-cards/textured-business-cards/linen-business-card">Linen Business Card</a></li>
													<li><a href="/business-cards/textured-business-cards/cotton-business-card">Cotton Business Card</a></li>
													<li><a href="/business-cards/textured-business-cards/rendezvous-business-card">Rendezvous Business Card</a></li>
												</ul>
											</li>
											<li class="has_child">
												<a href="/business-cards/die-cut-business-cards">Die Cut Business Cards</a>
												<ul class="submenu">
													<li><a href="/business-cards/die-cut-business-cards/custom-shape-business-card">Custom Shape Business Card</a></li>
												</ul>
											</li>
										</ul>
									</li>  --}}
									@if($categories !== null)
									@foreach ($categories as $category)
									<li class="has_child">
										<a href="javascript:void(0)">{{str_replace('-',' ',$category->name)}}</a>
										<ul class="submenu">
											@foreach ($category->product['name'] as $key=>$product)
											<li><a href="/{{strtolower($category->name)}}/{{$product}}" class="text-capitalize">{{str_replace('-',' ',$product)}}</a></li>
											@endforeach
										</ul>
									</li>
									@endforeach
									@endif
									<li class="has_child">
										<a href="javascript:void(0)">Banners</a>
										<ul class="submenu">
											<li><a href="/banners/custom-vinyl-banner">Custom Vinyl Banner</a></li>
											<li><a href="/banners/vinyl-eco-friendly-banner">Vinyl Eco Friendly Banner</a></li>
											<li><a href="/banners/backlit-banner">Backlit Banner</a></li>
											<li><a href="/banners/vinyl-mesh-banner">Vinyl Mesh banner</a></li>
											<li><a href="/banners/vinyl-billboard-banner">Vinyl Billboard Banner</a></li>
											<li><a href="/banners/premium-quality-banner">Premium Quality Banner</a></li>
										</ul>
									</li>
									<li class="has_child">
										<a href="#">Stands & Displays</a>
										<ul class="submenu">
											<li class="has_child"><a href="#">Retractable Banner Stands</a>
												<ul class="submenu">
													<li><a href="/stand-display/rollup-banner-stand">Rollup Banner Stand</a></li>
													<li><a href="/stand-display/deluxe-wide-base-single-sided-banner-stand">Deluxe Wide Base Single Sided Banner Stand</a></li>
													<li><a href="/stand-display/deluxe-wide-base-double-sided-banner-stand">Deluxe Wide Base Double Sided Banner Stand</a></li>
													<li><a href="/stand-display/static-x-banner-stand">Static X Banner Stand</a></li>
													<li><a href="/stand-display/multifunctional-x-banner-adjustable-stand">Multifunctional X Banner Adjustable Stand</a></li>
													<li><a href="/stand-display/adjustable-x-banner-stand">Adjustable X Banner Stand</a></li>
												</ul>
											</li>
											<li class="has_child"><a href="#">Frames</a>
												<ul class="submenu">
													<li><a href="/stand-display/seg-fabric-frame">SEG Fabric Frames</a></li>
													<li><a href="/stand-display/clip-frame">Clip Frame</a></li>
													<li><a href="/stand-display/poster-frame">Poster Frame</a></li>
													<li><a href="/stand-display/aluminum-a-frame">Aluminum A Frame</a></li>
												</ul>
											</li>
											
										</ul>
									</li>  
									{{-- <li class="has_child">
										<a href="#">Table Covers & Displays</a>
										<ul class="submenu">
											<li class="has_child"><a href="#">Retractable Banner Stands</a>
												<ul class="submenu">
													<li><a href="/stand-display/rollup-banner-stand">Rollup Banner Stand</a></li>
													<li><a href="/stand-display/deluxe-wide-base-single-sided-banner-stand">Deluxe Wide Base Single Sided Banner Stand</a></li>
													<li><a href="/stand-display/deluxe-wide-base-double-sided-banner-stand">Deluxe Wide Base Double Sided Banner Stand</a></li>
													<li><a href="/stand-display/static-x-banner-stand">Static X Banner Stand</a></li>
													<li><a href="/stand-display/multifunctional-x-banner-adjustable-stand">Multifunctional X Banner Adjustable Stand</a></li>
													<li><a href="/stand-display/adjustable-x-banner-stand">Adjustable X Banner Stand</a></li>
												</ul>
											</li>
											<li class="has_child"><a href="#">Frames</a>
												<ul class="submenu">
													<li><a href="/stand-display/seg-fabric-frame">SEG Fabric Frames</a></li>
													<li><a href="/stand-display/clip-frame">Clip Frame</a></li>
													<li><a href="/stand-display/poster-frame">Poster Frame</a></li>
													<li><a href="/stand-display/aluminum-a-frame">Aluminum A Frame</a></li>
												</ul>
											</li>
											
										</ul>
									</li>  
									<li class="has_child">
										<a href="javascript:void(0)">Custom Flags</a>
										<ul class="submenu">
											<li><a href="/banners/custom-vinyl-banner">Custom Vinyl Banner</a></li>
											<li><a href="/banners/vinyl-eco-friendly-banner">Vinyl Eco Friendly Banner</a></li>
											<li><a href="/banners/backlit-banner">Backlit Banner</a></li>
											<li><a href="/banners/vinyl-mesh-banner">Vinyl Mesh banner</a></li>
											<li><a href="/banners/vinyl-billboard-banner">Vinyl Billboard Banner</a></li>
											<li><a href="/banners/premium-quality-banner">Premium Quality Banner</a></li>
										</ul>
									</li> --}}
									<li class="has_child">
										<a href="javascript:void(0)">Compliance Signs</a>
										<ul class="submenu">
											<li><a href="/banners/custom-vinyl-banner">Custom Vinyl Banner</a></li>
											<li><a href="/banners/vinyl-eco-friendly-banner">Vinyl Eco Friendly Banner</a></li>
											<li><a href="/banners/backlit-banner">Backlit Banner</a></li>
											<li><a href="/banners/vinyl-mesh-banner">Vinyl Mesh banner</a></li>
											<li><a href="/banners/vinyl-billboard-banner">Vinyl Billboard Banner</a></li>
											<li><a href="/banners/premium-quality-banner">Premium Quality Banner</a></li>
										</ul>
									</li>
									<li class="has_child">
										<a href="#">Signs & Decals</a>
										<ul class="submenu">
											<li class="has_child"><a href="#">Retractable Banner Stands</a>
												<ul class="submenu">
													<li><a href="/stand-display/rollup-banner-stand">Rollup Banner Stand</a></li>
													<li><a href="/stand-display/deluxe-wide-base-single-sided-banner-stand">Deluxe Wide Base Single Sided Banner Stand</a></li>
													<li><a href="/stand-display/deluxe-wide-base-double-sided-banner-stand">Deluxe Wide Base Double Sided Banner Stand</a></li>
													<li><a href="/stand-display/static-x-banner-stand">Static X Banner Stand</a></li>
													<li><a href="/stand-display/multifunctional-x-banner-adjustable-stand">Multifunctional X Banner Adjustable Stand</a></li>
													<li><a href="/stand-display/adjustable-x-banner-stand">Adjustable X Banner Stand</a></li>
												</ul>
											</li>
											<li class="has_child"><a href="#">Frames</a>
												<ul class="submenu">
													<li><a href="/stand-display/seg-fabric-frame">SEG Fabric Frames</a></li>
													<li><a href="/stand-display/clip-frame">Clip Frame</a></li>
													<li><a href="/stand-display/poster-frame">Poster Frame</a></li>
													<li><a href="/stand-display/aluminum-a-frame">Aluminum A Frame</a></li>
												</ul>
											</li>
											
										</ul>
									</li> 
									<li class="has_child">
										<a href="#">Clothing</a>
										<ul class="submenu">
											<li class="has_child"><a href="#">Retractable Banner Stands</a>
												<ul class="submenu">
													<li><a href="/stand-display/rollup-banner-stand">Rollup Banner Stand</a></li>
													<li><a href="/stand-display/deluxe-wide-base-single-sided-banner-stand">Deluxe Wide Base Single Sided Banner Stand</a></li>
													<li><a href="/stand-display/deluxe-wide-base-double-sided-banner-stand">Deluxe Wide Base Double Sided Banner Stand</a></li>
													<li><a href="/stand-display/static-x-banner-stand">Static X Banner Stand</a></li>
													<li><a href="/stand-display/multifunctional-x-banner-adjustable-stand">Multifunctional X Banner Adjustable Stand</a></li>
													<li><a href="/stand-display/adjustable-x-banner-stand">Adjustable X Banner Stand</a></li>
												</ul>
											</li>
											<li class="has_child"><a href="#">Frames</a>
												<ul class="submenu">
													<li><a href="/stand-display/seg-fabric-frame">SEG Fabric Frames</a></li>
													<li><a href="/stand-display/clip-frame">Clip Frame</a></li>
													<li><a href="/stand-display/poster-frame">Poster Frame</a></li>
													<li><a href="/stand-display/aluminum-a-frame">Aluminum A Frame</a></li>
												</ul>
											</li>
											
										</ul>
									</li> 
									<li class="has_child">
										<a href="#">Marketing Materials</a>
										<ul class="submenu">
											<li class="has_child"><a href="#">Retractable Banner Stands</a>
												<ul class="submenu">
													<li><a href="/stand-display/rollup-banner-stand">Rollup Banner Stand</a></li>
													<li><a href="/stand-display/deluxe-wide-base-single-sided-banner-stand">Deluxe Wide Base Single Sided Banner Stand</a></li>
													<li><a href="/stand-display/deluxe-wide-base-double-sided-banner-stand">Deluxe Wide Base Double Sided Banner Stand</a></li>
													<li><a href="/stand-display/static-x-banner-stand">Static X Banner Stand</a></li>
													<li><a href="/stand-display/multifunctional-x-banner-adjustable-stand">Multifunctional X Banner Adjustable Stand</a></li>
													<li><a href="/stand-display/adjustable-x-banner-stand">Adjustable X Banner Stand</a></li>
												</ul>
											</li>
											<li class="has_child"><a href="#">Frames</a>
												<ul class="submenu">
													<li><a href="/stand-display/seg-fabric-frame">SEG Fabric Frames</a></li>
													<li><a href="/stand-display/clip-frame">Clip Frame</a></li>
													<li><a href="/stand-display/poster-frame">Poster Frame</a></li>
													<li><a href="/stand-display/aluminum-a-frame">Aluminum A Frame</a></li>
												</ul>
											</li>
											
										</ul>
									</li> 
									<li class="has_child">
										<a href="javascript:void(0)">Accessories</a>
										<ul class="submenu">
											<li><a href="/banners/custom-vinyl-banner">Custom Vinyl Banner</a></li>
											<li><a href="/banners/vinyl-eco-friendly-banner">Vinyl Eco Friendly Banner</a></li>
											<li><a href="/banners/backlit-banner">Backlit Banner</a></li>
											<li><a href="/banners/vinyl-mesh-banner">Vinyl Mesh banner</a></li>
											<li><a href="/banners/vinyl-billboard-banner">Vinyl Billboard Banner</a></li>
											<li><a href="/banners/premium-quality-banner">Premium Quality Banner</a></li>
										</ul>
									</li>
									
								</ul>
							</nav>
						</div>

						{{-- <div class="col-lg-2">
							<ul class="header_btns_group ul_li_right clearfix">
								<li>
									<button type="button" class="action_btn search_btn bg_default_purple" data-toggle="collapse" data-target="#search_body_collapse" aria-expanded="false" aria-controls="search_body_collapse">
										<i class="fal fa-search"></i>
									</button>
								</li>
								<li>
									<button type="button" class="cart_btn action_btn search_btn bg_default_purple">
										<i class="fal fa-shopping-cart"></i>
										<small class="cart_counter">2</small>
									</button>
								</li>
							</ul>
						</div> --}}

					</div>
				</div>
			</div>
		</div>

			<div id="search_body_collapse" class="search_body_collapse collapse">
				<div class="search_body">
					<div class="container maxw_1420">
						<form action="#">
							<div class="form_item m-0">
								<input type="search" name="search" placeholder="Type here...">
								<button type="submit"><i class="fal fa-search"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</header>
		<!-- header_section - end
		================================================== -->
		<div id="productList">
		</div>

        