
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
						<div class="col-lg-5 main_menu">
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

						<div class="col-lg-7 main_menu">
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
									<li class="pt-2 pb-2"><a href="#" style="color:#373737;font-weight: 400; font-size:15px;"><i class="fa fa-truck"></i> Order Tracking</a></li>
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
								
								
								<li class="pt-2 pb-2"><a href="#" style="color:#373737;font-weight: 400; font-size:15px;"><i class="fa fa-comments mr-2"></i>Chat Now</a></li>
								<li class="pt-2 pb-2"><a href="#" style="color:#373737;font-weight: 400; font-size:15px;"><i class="far fa-phone"></i>+1 (302) 200 0642</a></li>
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

			<div class="header_bottom justify-content-center">
				<div class="maxw_1420 container">
					<div class="row align-items-center">

						<div class="col-lg-1">
							<div class="brand_logo d-flex d-md-none d-lg-none">
								<a href="/">
									<img  src="/assets/images/New/logo.png" style="width:100%" srcset="/assets/images/New/logo.png 2x" alt="logo_not_found">
								</a>

								<ul class="mobilemenu_btns_group ul_li_right clearfix">
									<li>
										@if(Auth::check())
										<a href="/my-cart" class="cart_btn action_btn search_btn bg_default_purple">
											<i class="fal fa-shopping-bag"></i>
											<small class="cart_counter" id="cartCount">0</small>
										</a>
										@else 
										<a href="/user/login" class="cart_btn action_btn search_btn bg_default_purple">
											<i class="fal fa-shopping-bag"></i>
											<small class="cart_counter" id="cartCount">0</small>
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
									@if($categories !== null)
									@foreach ($categories as $category)
									<li class="has_child">
										<a href="javascript:void(0)">{{str_replace('-',' ',$category->name)}}</a>
										<ul class="submenu">
											@foreach ($category->product['name'] as $key=>$product)
											<li><a href="/{{strtolower($category->name)}}/{{str_contains($product,'#') ? str_replace('#','hash-',$product) : $product}}" class="text-capitalize">{{str_replace('-',' ',$product)}}</a></li>
											@endforeach
										</ul>
									</li>
									@endforeach
									@endif
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
			{{-- <div id="productList">
			</div> --}}
		</header>
		<!-- header_section - end
		================================================== -->

        