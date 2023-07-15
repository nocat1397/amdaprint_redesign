
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
									<li class="pt-2 pb-2"><a href="/my-orders" style="color:#fff;font-weight: 400; font-size:15px;"><i class="far fa-truck" style="color:#bfa1f9"></i> Order Tracking</a></li>
									<li class="pt-2 pb-2">
										<a href="/dealer-registration" style="color:#fff;font-weight: 400; font-size:15px;"><i class="far fa-handshake" style="color:#bfa1f9"></i> Become a Dealer</a>
										
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

						<div class="col-lg-7">
							<div class="p-1 border rounded shadow-sm ml-auto" style="width: 80%;">
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
						<div class="col-lg-3">
							<ul class="header_contact_info main_menu ul_li_right clearfix align-items-center">
								
								
								{{-- <li class="pt-2 pb-2"><a href="#" style="color:#373737;font-weight: 400; font-size:15px;"><i class="fa fa-comments mr-2"></i>Chat Now</a></li> --}}
								<li class="pt-2 pb-2"><a href="#" style="color:#373737;font-weight: 400; font-size:15px;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAACNElEQVR4nO2VMWsUQRTHVwVRVPQDWAWD9ZwnBFSiztgpmE+Qxl1JKSgWFhcs9NRPEJHbeXfYbJlUIpnZwuBHSGUhJGqK2KjZN1s4MnNnMLN7ud3sbYLig2nmDft+83//t+N5FUMAppKrDQH4XoB6ISG9HEX6iLdfIUHpzOJqQwI+kKE+djAAsA3yMeY4c3AAoLTg+FOCarda+nAtAG+6+sRyD8/LLt4WgB3B8Wu+Gvhaa31o5Acp8edpw2/vFejtgj4tQD0RHLeyaqjHI4uzRqDNKgohOX4XoFYFx5cSEra9D2lTglpz2zHUE/SP4mUgcqSO4w5O2lzvx1kXwhgzdzqYU7woRL75cDPupVdMPu6kFwVg4kDeLwzARkAMnwDclN3k3OBM21HhS2Yq2C4Au0GYKYh5ck1wtZQxHShhAUJ9xp0OEaaXygIseiNCAD7KQIQJtTmOoTMRz4sDEH+LNucmfp+NIn1UcvVMcPVJglo3Epu9fiFXCVywXuA44/hgpYwCLafvO3vaX7ZFy93kutOGVbtvflaOD4oBEP/D9PTsjrEZ3Nzt92eTe/dKn3Jm/5uFjvRJRxksBEAbd266vR7I7iqw5lUJRoKHRd2f1wLB1dNKAGUgrAn7EOuuCSsHK6FEbcH+RgjanJtgJFgaKyQrADE1de+4fUlJkNSiFM15pm0R4s/fIMEt858Ylq9dCbbHB+w/xP63g/iyWtWKEPTC3aveuIMVhRj37ctC1HJ771+KX8zi/sLT7GjxAAAAAElFTkSuQmCC" style="height:25px"> +1 (302) 262-5168</a></li>
								<li>
									@if(Auth::check())
									<a href="/my-cart" class="cart_btn action_btn search_btn bg_default_purple">
										<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAACBUlEQVR4nN2WTUscQRCGWw8GPCsohJy8JCBO9eB5YatXDQT8gAUFEcStWgjEQyC5rqCHDQT8ByGLPyLgRVFRBBW8+AM8CeLBD9AF3Q0TFWbGdma2u9lDCgqWoavr2bff/hDif4iNWn1po1avGhUXPxS7lOTm60l/kho+/W4+ZbVloGIaAPC5pvljw993m6Hmum9LDhTgpvL5nebfZs2qNUBBliYNm2eDiAcCrYYBUPKKcBCBn8Lz5oG+awcWgGfTjNhqBEqj5JuIskMlT08KC++TjGgSChhjc54JITq0gyui0qmAr3RGNA2UVI0uK62lEW/FjWgDoIAPIwBeeS6Z2KERcz73oKSH0HyNUZ/7E4tcGlF55ZnY1j5OLwJ3RkRJvyJqAv9MLao4NCICnUYVKI1mKlTA27ZG1Ch5+8nn7qzkq7ZGRJ8XowC0nrm48MKI9omSv5nLJ+1zxCsPZQYYG/jyxilA0vFr/FZoSf6U4zcNACXXRZujI2gahhjz5nvbSoCST2Kn2Ne2AijJP2LreBdspdTLxFXkBktvXxzJRkm7eY8+2txmDQe74MEYIg80jUCXLpQQppEb/tynJC0j8L2xCsAXwjZQ8sErJ93W8xgFdKQHoB1rgLzPE7r1Dd/zCnhK45tGwecRa4Ag0CuPB0r8e+sD7evMFbwfHpWgawTe0z1E/gLTVSsmFLrDnwAAAABJRU5ErkJggg==" style="height:25px">
										<small class="cart_counter" id="cartCount">0</small>
									</a>
									@endif
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="header_bottom justify-content-center" style="background: #443266;">
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
											<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAACBUlEQVR4nN2WTUscQRCGWw8GPCsohJy8JCBO9eB5YatXDQT8gAUFEcStWgjEQyC5rqCHDQT8ByGLPyLgRVFRBBW8+AM8CeLBD9AF3Q0TFWbGdma2u9lDCgqWoavr2bff/hDif4iNWn1po1avGhUXPxS7lOTm60l/kho+/W4+ZbVloGIaAPC5pvljw993m6Hmum9LDhTgpvL5nebfZs2qNUBBliYNm2eDiAcCrYYBUPKKcBCBn8Lz5oG+awcWgGfTjNhqBEqj5JuIskMlT08KC++TjGgSChhjc54JITq0gyui0qmAr3RGNA2UVI0uK62lEW/FjWgDoIAPIwBeeS6Z2KERcz73oKSH0HyNUZ/7E4tcGlF55ZnY1j5OLwJ3RkRJvyJqAv9MLao4NCICnUYVKI1mKlTA27ZG1Ch5+8nn7qzkq7ZGRJ8XowC0nrm48MKI9omSv5nLJ+1zxCsPZQYYG/jyxilA0vFr/FZoSf6U4zcNACXXRZujI2gahhjz5nvbSoCST2Kn2Ne2AijJP2LreBdspdTLxFXkBktvXxzJRkm7eY8+2txmDQe74MEYIg80jUCXLpQQppEb/tynJC0j8L2xCsAXwjZQ8sErJ93W8xgFdKQHoB1rgLzPE7r1Dd/zCnhK45tGwecRa4Ag0CuPB0r8e+sD7evMFbwfHpWgawTe0z1E/gLTVSsmFLrDnwAAAABJRU5ErkJggg==" style="height:20px">
											<small class="cart_counter" id="cartCount">0</small>
										</a>
										@else 
										<a href="/user/login" class="cart_btn action_btn search_btn bg_default_purple">
											<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAACBUlEQVR4nN2WTUscQRCGWw8GPCsohJy8JCBO9eB5YatXDQT8gAUFEcStWgjEQyC5rqCHDQT8ByGLPyLgRVFRBBW8+AM8CeLBD9AF3Q0TFWbGdma2u9lDCgqWoavr2bff/hDif4iNWn1po1avGhUXPxS7lOTm60l/kho+/W4+ZbVloGIaAPC5pvljw993m6Hmum9LDhTgpvL5nebfZs2qNUBBliYNm2eDiAcCrYYBUPKKcBCBn8Lz5oG+awcWgGfTjNhqBEqj5JuIskMlT08KC++TjGgSChhjc54JITq0gyui0qmAr3RGNA2UVI0uK62lEW/FjWgDoIAPIwBeeS6Z2KERcz73oKSH0HyNUZ/7E4tcGlF55ZnY1j5OLwJ3RkRJvyJqAv9MLao4NCICnUYVKI1mKlTA27ZG1Ch5+8nn7qzkq7ZGRJ8XowC0nrm48MKI9omSv5nLJ+1zxCsPZQYYG/jyxilA0vFr/FZoSf6U4zcNACXXRZujI2gahhjz5nvbSoCST2Kn2Ne2AijJP2LreBdspdTLxFXkBktvXxzJRkm7eY8+2txmDQe74MEYIg80jUCXLpQQppEb/tynJC0j8L2xCsAXwjZQ8sErJ93W8xgFdKQHoB1rgLzPE7r1Dd/zCnhK45tGwecRa4Ag0CuPB0r8e+sD7evMFbwfHpWgawTe0z1E/gLTVSsmFLrDnwAAAABJRU5ErkJggg==" style="height:20px">
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

        