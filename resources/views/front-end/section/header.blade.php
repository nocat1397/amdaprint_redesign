
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
			<div class="header_top clearfix pr-5 pl-5" style="background:#443266">
				<div class="maxw-1920 container">
					<div class="row align-items-center">
						<div class="col-lg-5 main_menu">
							<ul class="header_items_list ul_li clearfix">
								<li style="color:#fff;font-weight: 700; font-size:15px;">Get 20% off on your first order.</li>
								<li style="color:#fff;font-weight: 700; font-size:15px;">Use Code : FirstOrder </li>
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
									<li class="pt-2 pb-2"><a href="#" style="color:#fff;font-weight: 400; font-size:15px;"><i class="fa fa-truck" style="color:#bfa1f9"></i> Order Tracking</a></li>
									<li class="pt-2 pb-2">
										<a href="/dealer-registration" style="color:#fff;font-weight: 400; font-size:15px;"><i class="far fa-handshake" style="color:#bfa1f9"></i> Dealer Registration</a>
										
									</li>
									{{-- <li class="has_child pt-2 pb-2">
										<a href="#" style="color:#373737;font-weight: 400; font-size:15px;">Quick Links</a>
										<ul class="submenu">
											<li><a href="/user/login">Company History</a></li>
											<li><a href="">Exclusive Team</a></li>
											<li><a href="/user/register">Latest News</a></li>
											<li><a href="/user/register">Recent Product</a></li>
											<li><a href="/user/register">Win Awards</a></li>
										</ul>
									</li> --}}
									@if(Auth::check())
								<li class="has_child pt-2 pb-2">
									<a href="#" class="text-capitalize" style="color:#fff;font-weight: 400; font-size:15px;"><i class="fa fa-user-circle" style="color:#bfa1f9"></i> {{Auth::user()->name}}</a>
									<ul class="submenu">
										<li><a href="/my-orders">Your Orders</a></li>
										<li><a href="javaascript:void(0)">Whishlist</a></li>
										<li><a href="/logout">Logout</a></li>
									</ul>
								</li>
								@else
								<li class="has_child pt-2 pb-2">
									<a href="#" style="color:#fff;font-weight: 400; font-size:15px;">Account</a>
									<ul class="submenu">
										<li class="p-3"><a href="/user/login" class="addtocart_btn custom_btn bg_default_orange text-dark">Login</a></li>
										<li class="text-center"><strong class="text-dark">Don't Have An Account?</strong></li>
										<li class="p-3"><a href="/user/register" class="addtocart_btn custom_btn bg_default_orange text-dark">Register</a></li>
									</ul>
								</li>
								@endif
									
									<li class="has_child pt-2 pb-2">
										<a href="#" style="color:#fff;font-weight: 400; font-size:15px;"><img src="/img/icon/us.png" height="25" width="25"></a>
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
							<ul class="header_contact_info main_menu ul_li_right clearfix align-items-center">
								
								
								{{-- <li class="pt-2 pb-2"><a href="#" style="color:#373737;font-weight: 400; font-size:15px;"><i class="fa fa-comments mr-2"></i>Chat Now</a></li> --}}
								<li class="pt-2 pb-2"><a href="#" style="color:#373737;font-weight: 400; font-size:15px;"><img src="data:image/png;base64,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" style="height:25px"> +1 (302) 200 0642</a></li>
								<li>
									@if(Auth::check())
									<a href="/my-cart" class="cart_btn action_btn search_btn bg_default_purple">
										<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACfUlEQVR4nO2XzWvUQBjGZ0WP4klQCiK4QhePHgsG53PbasGDH8lClc5s2g1V0KNFF6zgyYt3nVkvelG8mhQKftz0T1DERUEvHkR7USJpLXZjY7K7M00qeeA5DEne9/1N3plJAChVqlSpSK7vvXQDL8zm1nOQl3CjOYVt/pE4Itzo7MWvOf48ccQH6ogTRos/6rq7sM0/bZJcB0AYxY5yGAMgNj+5WWJdAMQRodG3gG3x0DQAdvgDI8VPzczsxjb/1puQj61fjxZmZgDfe7b+HHH4WE9MW6zg0+4e7QDEERdiid4BACoaQlewzd/2xG7w80C3iMOD2IJb1Bdb3OxtI+EDnWINdz92xI+NSdg5cURXfGq7o7HJ+QmnZ0d0xQfEFldiM/QKaBa2+evY+rq8PYKbniTjr9d0mxpfYIY3igpxxBvjW5yurXrW9yZcv9Xt91TdMvutbnNpbjwRoNDFB2tuBt77ZIACFOhm8H8M4G/zFmouzY1HNxS5eDfw6iBNUNEbSLGwSIaSXk8t/A9A/VTeBaOYsWSTmQFwBx/Iu2AUsyUn9mUG+N1Gn9OCVi/WwsOXatrGKMmSdkG/QpI9TQs8Mn1w1brGKLn/n/QNABW7VRQAJNm1vgGwYmeKAgAVSf7+SZJ1n1aLAmD1u4BXFYIKUuxL3gBQseSTN01Q0eW8AZCkjwcHkPR23gBQ0oWBAZCkjbwBkKTp3z5Jwh1cyxugfre+d2CAdru9A0n2NT8AGv0TDyeo2IukBIfmR8PqfE3bGP21A9FHOgDu/LNHDRoqdnVoANShZ/MCOK7IsaEBrGVrJ5LsHlJsZcuKl/R7tIVHh+nQAKVKlQKF1i997Dc1CZfGpAAAAABJRU5ErkJggg==" style="height:25px">
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

								<ul class="mobilemenu_btns_group ul_li_right clearfix align-items-center">
									<li>
										@if(Auth::check())
										<a href="/my-cart" class="cart_btn action_btn search_btn bg_default_purple">
											<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACfUlEQVR4nO2XzWvUQBjGZ0WP4klQCiK4QhePHgsG53PbasGDH8lClc5s2g1V0KNFF6zgyYt3nVkvelG8mhQKftz0T1DERUEvHkR7USJpLXZjY7K7M00qeeA5DEne9/1N3plJAChVqlSpSK7vvXQDL8zm1nOQl3CjOYVt/pE4Itzo7MWvOf48ccQH6ogTRos/6rq7sM0/bZJcB0AYxY5yGAMgNj+5WWJdAMQRodG3gG3x0DQAdvgDI8VPzczsxjb/1puQj61fjxZmZgDfe7b+HHH4WE9MW6zg0+4e7QDEERdiid4BACoaQlewzd/2xG7w80C3iMOD2IJb1Bdb3OxtI+EDnWINdz92xI+NSdg5cURXfGq7o7HJ+QmnZ0d0xQfEFldiM/QKaBa2+evY+rq8PYKbniTjr9d0mxpfYIY3igpxxBvjW5yurXrW9yZcv9Xt91TdMvutbnNpbjwRoNDFB2tuBt77ZIACFOhm8H8M4G/zFmouzY1HNxS5eDfw6iBNUNEbSLGwSIaSXk8t/A9A/VTeBaOYsWSTmQFwBx/Iu2AUsyUn9mUG+N1Gn9OCVi/WwsOXatrGKMmSdkG/QpI9TQs8Mn1w1brGKLn/n/QNABW7VRQAJNm1vgGwYmeKAgAVSf7+SZJ1n1aLAmD1u4BXFYIKUuxL3gBQseSTN01Q0eW8AZCkjwcHkPR23gBQ0oWBAZCkjbwBkKTp3z5Jwh1cyxugfre+d2CAdru9A0n2NT8AGv0TDyeo2IukBIfmR8PqfE3bGP21A9FHOgDu/LNHDRoqdnVoANShZ/MCOK7IsaEBrGVrJ5LsHlJsZcuKl/R7tIVHh+nQAKVKlQKF1i997Dc1CZfGpAAAAABJRU5ErkJggg==" style="height:22px">
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
											@if(sizeof($category->productSubCategories))
											@foreach ($category->subcategories as $subcategory)
											@if($category->productSubCategories->where('subcategory_id',$subcategory->id)->first())
											<li class="has_child">
												<a href="javascript:void(0)">{{ucwords(str_replace('-',' ',$subcategory->name))}}</a>
												<ul class="submenu">
													@foreach ($category->product['name'] as $key=>$product)
													@if($category->productSubCategories->where('product_index','=',$key)->where('subcategory_id','=',$subcategory->id)->first())
													<li><a href="/{{strtolower($category->name)}}/{{str_contains($product,'#') ? str_replace('#','hash-',$product) : $product}}" class="text-capitalize">{{str_replace('-',' ',$product)}}</a></li>
													@endif
													@endforeach
												</ul>
											</li>
											@endif
											@endforeach
											@else
											@foreach ($category->product['name'] as $key=>$product)
											<li><a href="/{{strtolower($category->name)}}/{{str_contains($product,'#') ? str_replace('#','hash-',$product) : $product}}" class="text-capitalize">{{str_replace('-',' ',$product)}}</a></li>
											@endforeach
											@endif
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

        